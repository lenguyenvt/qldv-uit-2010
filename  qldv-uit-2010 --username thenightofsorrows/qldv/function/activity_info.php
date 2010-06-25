<?php
require_once("./styles/activity_info.php");
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST;
	$page_header="Th&#7889;ng k&#234; phong tr&#224;o";
	$save_button=1;
	return user_main_form(activity_info_form("Ten phong trao","Chi Doan","100","Tot",$save_button));
}
?>