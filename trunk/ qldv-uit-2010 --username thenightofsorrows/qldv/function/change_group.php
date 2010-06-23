<?php
require_once("./styles/change_group.php");
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST;
	$page_header="Chuy&#7875;n sinh ho&#7841;t &#273;o&#224;n";
	$danhsachdoanvien=array("KHMT","KTMT","HTTT","CNPM");
	
	return user_main_form(change_group_form($danhsachdoanvien));
}
?>