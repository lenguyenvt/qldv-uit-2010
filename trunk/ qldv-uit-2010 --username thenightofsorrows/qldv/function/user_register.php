<?php
require_once("./styles/user_register.php");
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST;
	$page_header="&#272;&#259;ng k&#237; th&#224;nh vi&#234;n";
	$danhsachdoanvien=array("KHMT","KTMT","HTTT","CNPM");
	
	return user_main_form(user_register_form($danhsachdoanvien));
}
?>