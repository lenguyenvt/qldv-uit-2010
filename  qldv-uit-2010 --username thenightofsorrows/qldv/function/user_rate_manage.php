<?php
require_once("./styles/user_rate_manage.php");
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST;
	$page_header="&#272;&#225;nh gi&#225; x&#7871;p lo&#7841;i &#273;o&#224;n vi&#234;n";
	$danhsachdoanvien=array();
	for ($i=0;$i<30;$i++)
	{
		$danhsachdoanvien[$i]=array("stt"=>"0$i","id_doanvien"=>"01230$i","hoten"=>"nguyen van A$i","phai"=>0,"ngaysinh"=>"$i/01/1989","loai"=>"dom","diem"=>"10","danhgia"=>"Cui bap $i");
	};
	return user_main_form(user_rate_manage_form($danhsachdoanvien));
}
?>