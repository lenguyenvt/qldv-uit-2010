<?php
require_once ("./styles/user_info.php");

// to do list: (give to SQL statement) more conditions to some column chidoan, ngaydong
// Check input's date format 
// hien thi thong bao update thanh cong hay that bai

function page_content() {
	global $s, $t, $p, $page_header, $_GET, $_POST, $user, $db;
	$page_header = "Th&#244;ng tin c&#225; nh&#226;n";
	
	$this_year = date ( "Y" );

	if (! isset ( $_GET ['id_doanvien'] ))
		$id = $user ["id_doanvien"];
	else
		$id = take_get ( 'id_doanvien' );
	if(!check_auth("thongtincanhan",1)) return "B&#7841;n kh&#244;ng c&#243; quy&#7873;n truy c&#7853;p trang n&#224;y!";
	if (isset($_POST ['sua_doanvien'])) {
		if($id!=$user['id_doanvien']){
			if(!check_cosodoancaptren($user['id_cosodoan'], get_cosodoan_hientai($id))||!check_auth("thongtincanhan",2)) exit();
		}
		if (isset ( $_POST ['hoten'] ))
			$hoten = post_in ( $_POST ['hoten'] );
		else
			$error = "B&#7841;n ch&#432;a nh&#7853;p h&#7885; t&#234;n, vui l&#242;ng th&#7917; l&#7841;i l&#7847;n sau";
		
		if (isset ( $_POST ['gioitinh'] ))
			$gioitinh = post_in ( $_POST ['gioitinh'] );
		else
			$error = "B&#7841;n ch&#432;a nh&#7853;p gi&#7899;i t&#237;nh, vui l&#242;ng th&#7917; l&#7841;i l&#7847;n sau";
		
		if (isset ( $_POST ['ngaysinh'] ))
			$ngaysinh = post_in ( $_POST ['ngaysinh'] );
		else
			$error = "B&#7841;n ch&#432;a nh&#7853;p ng&#224;y sinh, vui l&#242;ng th&#7917; l&#7841;i l&#7847;n sau";
		
		if (isset ( $_POST ['tongiao'] ))
			$tongiao = post_in ( $_POST ['tongiao'] );
		else
			$error = "B&#7841;n ch&#432;a nh&#7853;p t&#244;n gi&#225;o, vui l&#242;ng th&#7917; l&#7841;i l&#7847;n sau";
		
		if (isset ( $_POST ['cmnd'] ))
			$cmnd = post_in ( $_POST ['cmnd'] );
		else
			$cmnd = "";
		
		if (isset ( $_POST ['email'] ))
			$email = post_in ( $_POST ['email'] );
		else
			$email = "B&#7841;n ch&#432;a nh&#7853;p email!";
		
		if (isset ( $_POST ['dcgiadinh'] ))
			$dcgiadinh = post_in ( $_POST ['dcgiadinh'] );
		else
			$dcgiadinh = "";
		
		if (isset ( $_POST ['dchientru'] ))
			$dchientru = post_in ( $_POST ['dchientru'] );
		else
			$dcgiadinh = "";
		
		if (isset ( $_POST ['dienthoainr'] ))
			$dienthoainr = post_in ( $_POST ['dienthoainr'] );
		else
			$dienthoainr = "";
		
		if (isset ( $_POST ['dienthoaidd'] ))
			$dienthoaidd = post_in ( $_POST ['dienthoaidd'] );
		else
			$dienthoaidd = "";
		
		if (isset ( $_POST ['chucvu'] ))
			$chucvu = post_in ( $_POST ['chucvu'] );
		else
			$chucvu = "";

		if (isset ( $_POST ['change_pass'] ) && $_POST ['change_pass'] !="")
			$change_pass = encode ( $_POST ['change_pass'] );
		else
			$change_pass = "";
		
		if (isset ( $_POST ['ngayvaodoan'] ))
			$ngayvaodoan = post_in ( $_POST ['ngayvaodoan'] );
		else
			$ngayvaodoan = "";
		
		if (isset ( $_POST ['dantoc'] ))
			$dantoc = post_in ( $_POST ['dantoc'] );
		else
			$dantoc = "";
		
		$sql_update = "UPDATE `thongtindoanvien` 

		SET `thongtindoanvien`.`hoten` = '$hoten',
			`thongtindoanvien`.`gioitinh` = '$gioitinh',
			`thongtindoanvien`.`ngaysinh` = '$ngaysinh',
			`thongtindoanvien`.`dantoc` = '$dantoc',
			`thongtindoanvien`.`tongiao` = '$tongiao',
			`thongtindoanvien`.`cmnd` = '$cmnd',
			`thongtindoanvien`.`noithuongtru` = '$dcgiadinh',
			`thongtindoanvien`.`noitamtru` = '$dchientru',
			`thongtindoanvien`.`dienthoainharieng` = '$dienthoainr',
			`thongtindoanvien`.`dienthoaididong` = '$dienthoaidd',
			`thongtindoanvien`.`ngayvaodoan` = '$ngayvaodoan'
			
		WHERE `thongtindoanvien`.`id_doanvien` =  '$id';
		";
		$query = $db->query ( $sql_update );
		if($chucvu!="" && check_auth("qlchucvu",1)){
			$db->query("SELECT `id` FROM `auth` WHERE `level`<='{$user['level']}' AND `id`='$chucvu'");
			if($db->num_rows==1){
				$sql="UPDATE `doanvien` SET `auth`='$chucvu' WHERE `id_doanvien`='$id'";
				$db->query($sql);
			}
		}
		if($change_pass!="" && check_auth("thongtincanhan",4)){
			$sql="UPDATE `doanvien` SET `password`='$change_pass',`sid`='' WHERE `id_doanvien`='$id'";
			$db->query($sql);
		}
	}
	
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
	
	$sql4 = "
		SELECT	 `doanphi`.`hanphi`,
				 `doanvien`.`email`,
				`doanvien`.`auth`
		
		FROM 	 `doanvien` LEFT JOIN `doanphi` ON `doanphi`.`id_doanvien`=`doanvien`.`id_doanvien`
		
		WHERE 	 `doanvien`.`id_doanvien` = '{$id}' 
	";
	
	$sql5 = "
		SELECT   `xeploaidoanvien`.`loai`
				
		FROM	 `xeploaidoanvien`
		
		WHERE	 `xeploaidoanvien`.`id_doanvien` = '{$id}'
		AND		 `xeploaidoanvien`.`year_end` <= $this_year		
	";
	
	// excute the query
	$query = $db->query ( $sql1 );
	$canhan_data = mysql_fetch_array ( $query );
	
	$query = $db->query ( $sql2 );
	$cosodoan = mysql_fetch_array ( $query );
	
	$query = $db->query ( $sql4 );
	$doanvien = mysql_fetch_array ( $query );
	
	$query = $db->query ( $sql5 );
	$xeploai = mysql_fetch_array ( $query );
	
	// generate our youth union member's infomation form	
	$phone_history = explode ( "|", $canhan_data ["dienthoaididong"] );
	
	$canhan = thongtincanhan ( $canhan_data ["hoten"], $canhan_data ["gioitinh"], $canhan_data ["ngaysinh"], $canhan_data ["dantoc"], $canhan_data ["tongiao"], $canhan_data ["cmnd"] );
	
	$chidoan = thongtinchidoan ( $cosodoan ["tencosodoan"], $canhan_data ["ngayvaodoan"], $doanvien['auth'], $doanvien ["hanphi"], $xeploai ["loai"] );
	
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
	//echo $sql;
	

	// get information about activities which username took part in
	$query = $db->query ( $sql );
	$danhsachphongtrao = array ();
	while ( ($pt = mysql_fetch_array( $query )) != null ) {
		$danhsachphongtrao [] = $pt;
	}
	
	// generating activity form
	$phongtrao = thongtinphongtrao ( $danhsachphongtrao );
	
	// generating submit button
	$button = submit_button();

	// then return html document
	return user_main_form ( user_info_form ( $canhan, $lienlac, $chidoan, $phongtrao, $button ) );
}
?>