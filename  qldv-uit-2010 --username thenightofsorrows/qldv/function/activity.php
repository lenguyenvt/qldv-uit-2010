<?php
require_once("./styles/activity.php");
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST;
	$page_header="Qu&#7843;n l&#253; ho&#7841;t &#273;&#7897;ng";
	$danhsachhoatdong=array();
	for ($i=0;$i<30;$i++)
	{
		$danhsachhoatdong[$i]=array("stt"=>"0$i","id_phongtrao"=>"000$i","ten"=>"Mua He $i","diengiai"=>"Phong trao lan thu $i","start"=>"$i/04/2010","end"=>"$i/05/2010");
	};
	return user_main_form(activity_form($danhsachhoatdong));
}
?>