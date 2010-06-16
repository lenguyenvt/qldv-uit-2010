<?php
require_once("./styles/logout.php");
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST;
	$page_header="Tho&#225;t kh&#7887;i h&#7879; th&#7889;ng";
	log_out();
	return logout_form();
}
?>