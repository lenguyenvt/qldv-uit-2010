<?php
require_once("./styles/user_info.php");

// to do list: (give to SQL statement) more conditions to some column chidoan, ngaydong, loai
 
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST, $user,$db;
	$page_header="Th&#244;ng tin c&#225; nh&#226;n";
	
	// just a very complicated sql statement, but it save us a lot of queries, we need only one query for select all information
	// in this sql, our purpose is  retrieving youth union member's information
	$sql = "SELECT  `thongtindoanvien`.`hoten`, 
					`thongtindoanvien`.`gioitinh`, 
					`thongtindoanvien`.`ngaysinh`, 
					`thongtindoanvien`.`dantoc`, 
					`thongtindoanvien`.`tongiao`, 
					`thongtindoanvien`.`cmnd`, 
					`cosodoan`.`ten`, 
					`thongtindoanvien`.`ngayvaodoan`, 
					`danhmucchucvu`.`ten`, 
					`doanphi`.`ngaydong`, 
					`xeploaidoanvien`.`loai`, 
					`doanvien`.`email`, 
					`thongtindoanvien`.`noithuongtru`, 
					`thongtindoanvien`.`noitamtru`, 
					`thongtindoanvien`.`dienthoainharieng`, 
					`thongtindoanvien`.`dienthoaididong`
						
				FROM `thongtindoanvien`, 
					 `cosodoan`, `qhchidoan`, 
					 `danhmucchucvu`, 
					 `chucvu`, 
					 `doanphi`, 
					 `xeploaidoanvien`, 
					 `doanvien`
	
				WHERE `thongtindoanvien`.`id_doanvien`='{$user['id']}' 
				AND   `qhchidoan`.`id_doanvien`='{$user['id']}' 
				AND   `cosodoan`.`id_cosodoan` =  `qhchidoan`.`id_cosodoan` 
				AND   `thongtindoanvien`.`id_doanvien` = `chucvu`.`id_doanvien`
				AND   `danhmucchucvu`.`id_chucvu` = `chucvu`.`id_chucvu`
				AND   `thongtindoanvien`.`id_doanvien` = `doanphi`.`id_doanvien`  
				AND   `thongtindoanvien`.`id_doanvien` = `xeploaidoanvien`.`id_doanvien` 
				AND   `thongtindoanvien`.`id_doanvien` = `doanvien`.`id_doanvien`
							
				LIMIT 0,1";

	// for test only
	echo $sql;
	
	// excute the query
	$query = $db->query($sql);
	$canhan_data = mysql_fetch_array($query);
		
	// generate our youth union member's infomation form
	$phone_history = explode("|", $canhan_data[15]);
	$canhan= thongtincanhan($canhan_data[0], $canhan_data[1], $canhan_data[2], $canhan_data[3], $canhan_data[4],$canhan_data[5]);
	$chidoan=thongtinchidoan($canhan_data[6], $canhan_data[7], $canhan_data[8], $canhan_data[9], $canhan_data[10]);
	$lienlac=thongtinlienlac($canhan_data[11], $canhan_data[12], $canhan_data[13], $canhan_data[14], $phone_history[0]);
	
	// next, we select all activity that username had been taken part in...
	$sql = "SELECT  		 `phongtraodoan`.`ten`,
					         `phongtraodoan`.`start`,
					         `thamgiaphongtrao`.`danhgia`	
					
			FROM	         `phongtraodoan`,
					         `thamgiaphongtrao`
					
			WHERE	       	`thamgiaphongtrao`.`id_doanvien` = '{$user['id']}'
			AND		      	`thamgiaphongtrao`.`id_phongtraodoan` = `phongtraodoan`.`id_phongtraodoan`";
	
	// for testing only
	echo $sql;
	
	// get information about activities which username took part in
	$query = $db->query($sql);
	$danhsachphongtrao = array();
	while (($pt=mysql_fetch_row($query))!=null) 
	{
		$danhsachphongtrao[]=$pt;
	}
	
	// generating activity form
	$phongtrao=thongtinphongtrao($danhsachphongtrao);
	
	// then return html document
	return user_main_form(user_info_form($canhan,$lienlac,$chidoan,$phongtrao));
}
?>