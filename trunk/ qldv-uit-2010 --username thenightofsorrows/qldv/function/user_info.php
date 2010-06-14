<?php
require_once("./styles/user_info.php");
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST, $user,$db;
	$page_header="Th&#244;ng tin c&#225; nh&#226;n";

	$sql = "select `thongtindoanvien`.`hoten`, `thongtindoanvien`.`gioitinh`, `thongtindoanvien`.`ngaysinh`, 
	`thongtindoanvien`.`dantoc`, `thongtindoanvien`.`tongiao`, `thongtindoanvien`.`cmnd`, `cosodoan`.`ten`, `thongtindoanvien`.`ngayvaodoan`, 
	`danhmucchucvu`.`ten`, `doanphi`.`ngaydong`, `xeploaidoanvien`.`loai`, `doanvien`.`email`, `thongtindoanvien`.`noithuongtru`, `thongtindoanvien`.`noitamtru`
	from `thongtindoanvien`, `cosodoan`, `qhchidoan`, `danhmucchucvu`, `chucvu`, `doanphi`, `xeploaidoanvien`, `doanvien`
	where `thongtindoanvien`.`id_doanvien`='{$user['id']}' 
	and `qhchidoan`.`id_doanvien`='{$user['id']}' 
	AND `cosodoan`.`id_cosodoan` =  `qhchidoan`.`id_cosodoan` 
	and `thongtindoanvien`.`id_doanvien` = `chucvu`.`id_doanvien`
	and `danhmucchucvu`.`id_chucvu` = `chucvu`.`id_chucvu`
	and  `thongtindoanvien`.`id_doanvien` = `doanphi`.`id_doanvien`  
	and `thongtindoanvien`.`id_doanvien` = `xeploaidoanvien`.`id_doanvien` 
	and `thongtindoanvien`.`id_doanvien` = `doanvien`.`id_doanvien`
	limit 0,1";

	echo $sql;

	$query = $db->query($sql);
	$canhan_data = mysql_fetch_array($query);
	var_dump($canhan_data);
	$canhan=thongtincanhan($canhan_data[0], $canhan_data[1], $canhan_data[2], $canhan_data[3], $canhan_data[4],$canhan_data[5]);
	$chidoan=thongtinchidoan($canhan_data[6], $canhan_data[7], $canhan_data[8], $canhan_data[9], $canhan_data[10]);
	$lienlac=thongtinlienlac("","","","","","");
	$danhsachphongtrao=array(array("MHX","10/11/2010","D&#7887;m"),array("CS","2/1/2009","D&#7887;m"),array("CS","2/1/2009","D&#7887;m"));
	$phongtrao=thongtinphongtrao($danhsachphongtrao);
	return user_main_form(user_info_form($canhan,$lienlac,$chidoan,$phongtrao));
}
?>