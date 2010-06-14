<?php
require_once("./styles/changepwd.php");
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST,$db,$user,$refresh;
	$page_header="&#272;&#7893;i m&#7853;t kh&#7849;u";
	if(!isset($_POST['to_change_pass'])){
		return changepwd_form();
	}else{
		if(isset($_POST['new_pwd'])) $new_pwd=$_POST['new_pwd']; else $new_pwd="";
		if(isset($_POST['new_pwd2'])) $new_pwd2=$_POST['new_pwd2']; else $new_pwd2="";
		if(isset($_POST['old_pwd'])) $old_pwd=$_POST['old_pwd']; else $old_pwd="";
		if($new_pwd==""||$new_pwd2==""||$old_pwd=="") return changepwd_form("B&#7841;n vui l&#242;ng nh&#7853;p m&#7853;t kh&#7849;u!");
		else{
			$old_pwd=encode($old_pwd);
			if($new_pwd!=$new_pwd2) return changepwd_form("B&#7841;n ch&#432;a x&#225;c nh&#7853;n m&#7853;t kh&#7849;u!");
			$db->query("SELECT `id_doanvien` FROM `doanvien` WHERE `id_doanvien`='{$user['id_doanvien']}' AND `username`='{$user['username']}' AND `password`='$old_pwd'");
			if($db->num_rows!=1) return changepwd_form("M&#7853;t kh&#7849;u kh&#244;ng ch&#237;nh x&#225;c!");
			else{
				$new_pwd=encode($new_pwd);
				$db->query("UPDATE `doanvien` SET `password`='$new_pwd' WHERE `id_doanvien`='{$user['id_doanvien']}' AND `username`='{$user['username']}' AND `password`='$old_pwd'");
				$refresh="?type=index";
				return changepwd_form("C&#7853;p nh&#7853;t m&#7853;t kh&#7849;u th&#224;nh c&#244;ng!");
			}
		}
	}
}
?>