<?php
require_once("./styles/lostpwd.php");
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST;
	$page_header="Kh&#244;i ph&#7909;c m&#7853;t kh&#7849;u";
	return lostpwd_form("");
}
?>