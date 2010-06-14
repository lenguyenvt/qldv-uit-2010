<?php
require_once("./styles/phone_history.php");
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST;
	$page_header="Danh s&#225;ch s&#7889; &#273;i&#7879;n tho&#7841;i";
	$danhsachsdt=array();
	$danhsachsdt[0]=array("sodienthoai"=>"0123456789");
	$danhsachsdt[1]=array("sodienthoai"=>"024323401243");
	$danhsachsdt[2]=array("sodienthoai"=>"023412341235");
	return user_main_form(phone_history_form($danhsachsdt));
}
?>