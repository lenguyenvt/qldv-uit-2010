<?php
require_once("./styles/group_manage.php");
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST;
	$page_header="Qu&#7843;n l&#253; c&#417; s&#7903; &#272;o&#224;n";
	$danhsachcosodoan=array();
	return user_main_form(group_manage_form($danhsachcosodoan));
}
?>