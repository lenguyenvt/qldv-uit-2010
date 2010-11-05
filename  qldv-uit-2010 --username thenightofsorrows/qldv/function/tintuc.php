<?php
require_once("./styles/tintuc.php");
function page_content(){
	global $s,$t,$p,$page_header,$db,$user,$_GET,$_POST;
	$page_header="Th&#244;ng tin tin t&#7913;c";
	if(isset($_GET['del']) && check_auth("qlthongtin",2)){
		$del=post_in($_GET['del']);
		$sql="DELETE FROM `tintuc` WHERE `id`=$del AND (".get_cosodoan($user['id_doanvien'],"`id_cosodoan`").")";
		$db->query($sql);
	}
	$err="";
	if(isset($_POST['tieude']) && check_auth("qlthongtin",1)){
		$tieude=post_in($_POST['tieude']);
		$noidung=post_in($_POST['noidung']);
		$sql="INSERT INTO `qldv`.`tintuc` (
		`id` ,
		`time` ,
		`id_doanvien` ,
		`id_cosodoan` ,
		`tieude` ,
		`noidung` 
		)
		VALUES (
		NULL , '".dtime()."', '{$user['id_doanvien']}', '{$user['id_cosodoan']}', '$tieude', '$noidung'
		);";
		$db->query($sql);
		$err="<b>Tin t&#7913;c &#273;&#227; &#273;&#432;&#7907;c &#273;&#259;ng t&#7843;i th&#224;nh c&#244;ng!</b>";
	}
	if(!isset($_GET['id'])){
		$sql="SELECT `tintuc`.`tieude`,`tintuc`.`id`,`tintuc`.`time`,`doanvien`.`username` from `tintuc`,`doanvien` WHERE `tintuc`.`id_doanvien`=`doanvien`.`id_doanvien` AND (".get_cosodoan($user['id_doanvien'],"`tintuc`.`id_cosodoan`").") ORDER BY `tintuc`.`time` DESC LIMIT 0,20";
		$db->query($sql);
		while($data=$db->fetch_array()){
			$news_list[]=$data;
		}
	}else{
		$news_list="";
		$sql="SELECT `tintuc`.`tieude`,`tintuc`.`id`,`tintuc`.`time`,`doanvien`.`username`,`tintuc`.`noidung` from `tintuc`,`doanvien` WHERE `tintuc`.`id_doanvien`=`doanvien`.`id_doanvien` AND (".get_cosodoan($user['id_doanvien'],"`tintuc`.`id_cosodoan`").") AND `tintuc`.`id`=".post_in($_GET['id']);
		$db->query($sql);
		while($data=$db->fetch_array()){
			$news_list[]=$data;
		}
	}
	return user_main_form(news_body($news_list),$err);
}
?>