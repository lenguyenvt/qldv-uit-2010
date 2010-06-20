<?php
require_once("./styles/user_manage.php");
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST;
	$page_header="Qu&#7843;n l&#253; &#273;o&#224;n vi&#234;n";
	$danhsachdoanvien=array();
	
	return user_main_form(user_manage_form($danhsachdoanvien));
}
?>