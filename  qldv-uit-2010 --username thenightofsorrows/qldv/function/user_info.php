<?php
require_once ("./styles/user_info.php");

// to do list: (give to SQL statement) more conditions to some column chidoan, ngaydong


function page_content() {
	global $s, $t, $p, $page_header, $_GET, $_POST, $user, $db;
	$page_header = "Th&#244;ng tin c&#225; nh&#226;n";
	
	$this_year = date ( "Y" );
	var_dump ( $_GET );
	if (! isset ( $_GET ['id_doanvien'] ))
		$id = $user ["id"];
	else
		$id = post_in ( $_GET ['id_doanvien'] );
	
	echo $id;
	echo "<br/>";
	
	// get member infomation 
	$sql1 = "
		SELECT  `thongtindoanvien`.`hoten`,
				`thongtindoanvien`.`gioitinh`,
				`thongtindoanvien`.`ngaysinh`,
				`thongtindoanvien`.`dantoc`,
				`thongtindoanvien`.`tongiao`,
				`thongtindoanvien`.`cmnd`,
				`thongtindoanvien`.`noithuongtru`,
				`thongtindoanvien`.`noitamtru`,
				`thongtindoanvien`.`dienthoainharieng`,
				`thongtindoanvien`.`dienthoaididong`,
				`thongtindoanvien`.`ngayvaodoan`
		
		FROM	`thongtindoanvien`
		
		WHERE	`thongtindoanvien`.`id_doanvien` = '{$id}'
	";
	
	// get youth union name 
	$sql2 = "
		SELECT   `cosodoan`.`ten` as `tencosodoan`
		
		FROM	 `qhchidoan`,
				 `cosodoan`
		
		WHERE	 `qhchidoan`.`id_doanvien` = '{$id}'
		AND		 `qhchidoan`.`id_cosodoan` = `cosodoan`.`id_cosodoan`
	";
	
	$sql3 = "
		SELECT 	 `danhmucchucvu`.`ten` as `tenchucvu`
		
		FROM	 `danhmucchucvu`, 
				 `chucvu`
				 
		WHERE	 `danhmucchucvu`.`id_chucvu` = `chucvu`.`id_chucvu`
		AND		 `chucvu`.`id_doanvien` = '{$id}'
	";
	
	$sql4 = "
		SELECT	 `doanvien`.`doan_phi`,
				 `doanvien`.`email`
		
		FROM 	 `doanvien`
		
		WHERE 	 `doanvien`.`id_doanvien` = '{$id}' 
	";
	
	$sql5 = "
		SELECT   `xeploaidoanvien`.`loai`
				
		FROM	 `xeploaidoanvien`
		
		WHERE	 `xeploaidoanvien`.`id_doanvien` = '{$id}'
		AND		 `xeploaidoanvien`.`year_end` <= $this_year		
	";
	
	echo $sql1;
	echo "<br/>";
	echo $sql2;
	echo "<br/>";
	echo $sql3;
	echo "<br/>";
	echo $sql4;
	echo "<br/>";
	echo $sql5;
	
	// excute the query
	$query = $db->query ( $sql1 );
	$canhan_data = mysql_fetch_array ( $query );
	
	$query = $db->query ( $sql2 );
	$cosodoan = mysql_fetch_array ( $query );
	
	$query = $db->query ( $sql3 );
	$chucvu = mysql_fetch_array ( $query );
	
	$query = $db->query ( $sql4 );
	$doanvien = mysql_fetch_array ( $query );
	
	$query = $db->query ( $sql5 );
	$xeploai = mysql_fetch_array ( $query );
	
	// generate our youth union member's infomation form	
	$phone_history = explode ( "|", $canhan_data ["dienthoaididong"] );
	
	$canhan = thongtincanhan ( $canhan_data ["hoten"], $canhan_data ["gioitinh"], $canhan_data ["ngaysinh"], $canhan_data ["dantoc"], $canhan_data ["tongiao"], $canhan_data ["cmnd"] );
	
	$chidoan = thongtinchidoan ( $cosodoan ["tencosodoan"], $canhan_data ["ngayvaodoan"], $chucvu ["tenchucvu"], $doanvien ["doan_phi"], $xeploai ["loai"] );
	
	$lienlac = thongtinlienlac ( $doanvien ["email"], $canhan_data ["noithuongtru"], $canhan_data ["noitamtru"], $canhan_data ["dienthoainharieng"], $phone_history [0] );
	
	// next, we select all activity that username had been taken part in...
	$sql = "SELECT    `phongtraodoan`.`ten`,
					  `phongtraodoan`.`start`,
					  `thamgiaphongtrao`.`danhgia`	
					
			FROM	  `phongtraodoan`,
					  `thamgiaphongtrao`
					
			WHERE	  `thamgiaphongtrao`.`id_doanvien` = '{$id}'
			AND		  `thamgiaphongtrao`.`id_phongtraodoan` = `phongtraodoan`.`id_phongtraodoan`";
	
	// for testing only
	// echo $sql;
	

	// get information about activities which username took part in
	$query = $db->query ( $sql );
	$danhsachphongtrao = array ();
	while ( ($pt = mysql_fetch_row ( $query )) != null ) {
		$danhsachphongtrao [] = $pt;
	}
	
	// generating activity form
	$phongtrao = thongtinphongtrao ( $danhsachphongtrao );
	
	// then return html document
	return user_main_form ( user_info_form ( $canhan, $lienlac, $chidoan, $phongtrao ) );
}
?>