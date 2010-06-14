<?php
require_once("./styles/rate_history.php");
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST;
	$page_header="B&#7843;ng &#273;&#225;nh gi&#225; x&#7871;p lo&#7841;i h&#224;ng n&#259;m";
	$danhsachxeploai=array();
	$danhsachxeploai[0]=array("nam"=>"2001","loai"=>"cui","danhgia"=>"sieu cui bap");
	$danhsachxeploai[1]=array("nam"=>"2002","loai"=>"yeu","danhgia"=>"sieu cui ngo");
	$danhsachxeploai[2]=array("nam"=>"2003","loai"=>"kem","danhgia"=>"sieu cui bap ngo");
	return user_main_form(rate_history_form($danhsachxeploai));
}
?>