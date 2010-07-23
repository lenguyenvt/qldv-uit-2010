<?php
require_once("./styles/user_info.php");

// to do list: (give to SQL statement) more conditions to some column chidoan, ngaydong

function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST, $user,$db;
	$page_header="Th&#244;ng tin c&#225; nh&#226;n";
	
	$this_year = date("Y");
	
	if (!isset($_POST["id_doanvien"])) $id = $user["id"];
	else $id = $_POST["id_doanvien"];
	
	// just a very complicated sql statement, but it save us a lot of queries, we need only one query for select all information
	// in this sql, our purpose is  retrieving youth union member's information
	$sql = "SELECT  `thongtindoanvien`.`hoten`, 
					`thongtindoanvien`.`gioitinh`, 
					`thongtindoanvien`.`ngaysinh`, 
					`thongtindoanvien`.`dantoc`, 
					`thongtindoanvien`.`tongiao`, 
					`thongtindoanvien`.`cmnd`, 
					`cosodoan`.`ten` as `tencosodoan`, 
					`thongtindoanvien`.`ngayvaodoan`, 
					`danhmucchucvu`.`ten` as `chucvu`, 
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
	
				WHERE `thongtindoanvien`.`id_doanvien`='{$id}' 
				AND   `qhchidoan`.`id_doanvien`='{$id}' 
				AND   `cosodoan`.`id_cosodoan` =  `qhchidoan`.`id_cosodoan` 
				AND   `thongtindoanvien`.`id_doanvien` = `chucvu`.`id_doanvien`
				AND   `danhmucchucvu`.`id_chucvu` = `chucvu`.`id_chucvu`
				AND   `thongtindoanvien`.`id_doanvien` = `doanphi`.`id_doanvien`  
				AND   `thongtindoanvien`.`id_doanvien` = `xeploaidoanvien`.`id_doanvien` 
				AND   `thongtindoanvien`.`id_doanvien` = `doanvien`.`id_doanvien`
				AND   `xeploaidoanvien`.`year_end`=$this_year
							
				LIMIT 0,1";


	// excute the query
	$query = $db->query($sql);
	$canhan_data = mysql_fetch_array($query);
	var_dump($canhan_data);	
	
	// generate our youth union member's infomation form	
	$phone_history = explode("|", $canhan_data["dienthoaididong"]);
	
	$canhan= thongtincanhan($canhan_data["hoten"], $canhan_data["gioitinh"], 
							$canhan_data["ngaysinh"], $canhan_data["dantoc"], 
							$canhan_data["tongiao"],$canhan_data["cmnd"]);
							
	$chidoan=thongtinchidoan($canhan_data["tencosodoan"], $canhan_data["ngayvaodoan"], 
							 $canhan_data["chucvu"], $canhan_data["ngaydong"], 
							 $canhan_data["loai"]);
							 
	$lienlac=thongtinlienlac($canhan_data["email"], $canhan_data["noithuongtru"], 
							$canhan_data["noitamtru"], $canhan_data["dienthoainharieng"], 
							$phone_history[0]);
	
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