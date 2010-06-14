<?php
require_once("./styles/group_manage.php");
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST;
	$page_header="Qu&#7843;n l&#253; c&#417; s&#7903; &#272;o&#224;n";
	$danhsachcosodoan=array();
	for ($i=0;$i<5;$i++)
	{
		$danhsachcosodoan[$i]=array("stt"=>"0$i","id_cosodoan"=>"01230$i","ten"=>"KHMT0$i","cap"=>"Chi doan","parent"=>"KHMT","co_dau"=>($i/2==0?0:1),"thongke_doanvien"=>"10$i","nhanxet"=>"Tot","loai"=>"Tot");
	};
	return user_main_form(group_manage_form($danhsachcosodoan));
}
?>