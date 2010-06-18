<?php
require_once("./styles/activity.php");
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST,$user,$db;
	if(check_auth("qlphongtrao",1)){
		$page_header="Qu&#7843;n l&#253; phong tr&#224;o";
		$sql="SELECT `phongtraodoan`.`id_phongtraodoan`,`phongtraodoan`.`ten`,`phongtraodoan`.`diengiai`,`phongtraodoan`.`start`,`phongtraodoan`.`end` FROM `phongtraodoan` WHERE ".get_cosodoan($user['id_doanvien'],"`phongtraodoan`.`id_cosodoan`");
		$db->query($sql);
		if($db->num_rows>0){
			$i=0;
			while($tmp=mysql_fetch_array($db->query_result)){
				$danhsachphongtrao[$i++]=$tmp;
			}
		}
		else $danhsachphongtrao=array();
		/*
		for ($i=0;$i<30;$i++)
		{
				$danhsachphongtrao[$i]=array("id_phongtraodoan"=>"000$i","ten"=>"Mua He $i","diengiai"=>"Phong trao lan thu $i","start"=>"$i/04/2010","end"=>"$i/05/2010");
		};
		*/
		return user_main_form(activity_form($danhsachphongtrao));
	}else{
		return page_error("B&#7841;n kh&#244;ng c&#243; quy&#7873;n v&#224;o m&#7909;c n&#224;y!");
	}
}
?>