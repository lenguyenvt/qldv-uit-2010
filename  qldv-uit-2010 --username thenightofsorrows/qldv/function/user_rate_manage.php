<?php
require_once("./styles/user_rate_manage.php");
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST, $user, $db;
	$page_header="&#272;&#225;nh gi&#225; x&#7871;p lo&#7841;i &#273;o&#224;n vi&#234;n";
	$danhsachdoanvien=array();	
	// may be it have problem with the condition, just check out later
	$sql = "
	       SELECT  `thongtindoanvien`.`id_doanvien`,
	               `thongtindoanvien`.`hoten`,
	               `thongtindoanvien`.`gioitinh`,
	               `thongtindoanvien`.`ngaysinh`,
	               `xeploaidoanvien`.`loai`,
	               `xeploaidoanvien`.`diem`,
	               `xeploaidoanvien`.`Note`
	       WHERE   `qhchidoan`.`id_doanvien` = {$user['id']}	      
	       AND     `thongtindoanvien`.`id_doanvien` = `qhchidoan`.`id_doanvien`
	       AND     `xeploaidoanvien`.`id_doanvien` = `qhchidoan`.`id_doanvien`	   
	 ";
	echo $sql;
	$query = $db->query($sql);
	$dsdoanvien = mysql_fetch_array($sql);
	while(($doanvien = mysql_fetch_row($dsdoanvien))!= null)
	{
	   $danhsachdoanvien[]=array($doanvien[0], $doanvien[1], $doanvien[2], $doanvien[3], $doanvien[4], $doanvien[5], $doanvien[6]);
	}
	
	return user_main_form(user_rate_manage_form($danhsachdoanvien));
}
?>