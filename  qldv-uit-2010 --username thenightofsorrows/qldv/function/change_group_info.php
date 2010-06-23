<?php
require_once("./styles/change_group_info.php");
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST, $db, $user;
	$page_header="Th&#244;ng tin chuy&#7875;n sinh ho&#7841;t &#273;o&#224;n";

	$info=array();
	$info[0]=array("date"=>"20/1/2010","dest"=>"KHMT");
	$info[1]=array("date"=>"20/5/2010","dest"=>"CNPM");
	return user_main_form(change_group_info_form($info));
}
?>