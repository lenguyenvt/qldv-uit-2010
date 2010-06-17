<?php
require_once("./styles/account.php");
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST;
	$page_header="Qu&#7843;n l&#253; ch&#7913;c v&#7909;";
	
	$danhsachtaikhoan=array();
	$danhsachtaikhoan[0]=array("id_chucvu"=>"01","ten"=>"Admin","qlchucvu"=>"9","qlthongtin"=>"9","qldoanvien"=>"9","qlhoatdong"=>"9","qlxeploai"=>"9","qldoanphi"=>"9");
	$danhsachtaikhoan[1]=array("id_chucvu"=>"02","ten"=>"B&#237; th&#432;","qlchucvu"=>"3","qlthongtin"=>"3","qldoanvien"=>"3","qlhoatdong"=>"3","qlxeploai"=>"3","qldoanphi"=>"3");
	$danhsachtaikhoan[2]=array("id_chucvu"=>"03","ten"=>"&#272;o&#224;n vi&#234;n","qlchucvu"=>"0","qlthongtin"=>"1","qldoanvien"=>"1","qlhoatdong"=>"0","qlxeploai"=>"0","qldoanphi"=>"0");
	
	return user_main_form(account_form($danhsachtaikhoan));
}
?>