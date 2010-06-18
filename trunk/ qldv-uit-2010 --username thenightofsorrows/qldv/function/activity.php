<?php
require_once("./styles/activity.php");
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST,$user,$db;
	if(check_auth("qlphongtrao",1)){
		$page_header="Qu&#7843;n l&#253; phong tr&#224;o";
		$sql="SELECT `phongtraodoan`.`id_phongtraodoan`,`phongtraodoan`.`ten`,`phongtraodoan`.`diengiai`,`phongtraodoan`.`start`,`phongtraodoan`.`end`,`phongtraodoan`.`id_cosodoan` FROM `phongtraodoan` WHERE ".get_cosodoan($user['id_doanvien'],"`phongtraodoan`.`id_cosodoan`")." OR ".get_cosodoan_capduoi($user['id_doanvien'],"`phongtraodoan`.`id_cosodoan`");
		$db->query($sql);
		if($db->num_rows>0){
			$i=0;
			while($tmp=mysql_fetch_array($db->query_result)){
				$danhsachphongtrao[$i++]=$tmp;
			}
		}
		else $danhsachphongtrao=array();
		$error="";
		if(isset($_POST['to_post'])){
			if(isset($_POST['id_phongtraodoan'])) $_id_phongtraodoan=post_in($_POST['id_phongtraodoan']); else $_id_phongtraodoan="";
			if(isset($_POST['start'])) $_start=post_in($_POST['start']); else $_start="";
			if(isset($_POST['end'])) $_end=post_in($_POST['end']); else $_end="";
			if(isset($_POST['diengiai'])) $_diengiai=post_in($_POST['diengiai']); else $_diengiai="";

			if(isset($_POST['insert'])){
			}
		}
		return user_main_form(activity_form($danhsachphongtrao,$error));
	}else{
		return page_error("B&#7841;n kh&#244;ng c&#243; quy&#7873;n v&#224;o m&#7909;c n&#224;y!");
	}
}
?>