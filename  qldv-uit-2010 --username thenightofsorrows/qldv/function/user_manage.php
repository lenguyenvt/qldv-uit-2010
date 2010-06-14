<?php
require_once("./styles/user_manage.php");
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST;
	$page_header="Qu&#7843;n l&#253; &#273;o&#224;n vi&#234;n";
	$danhsachdoanvien=array();
	for ($i=0;$i<30;$i++)
	{
		$danhsachdoanvien[$i]=array("stt"=>"0$i","id_doanvien"=>"01230$i","hoten"=>"nguyen van A$i","phai"=>0,"chucvu"=>"Doan vien","ngaysinh"=>"$i/01/1989","doan_phi"=>"$i/01/2010","loai"=>"dom");
	};
	return user_main_form(user_manage_form($danhsachdoanvien));
}
?>