<?php
require_once("./styles/login.php");

function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST,$refresh;
	$page_header="&#272;&#259;ng nh&#7853;p";
	if(isset($_POST['is_log_in'])){
		$err="";
		$_login_name=post_in($_POST['login_name']);
		$_login_pwd=post_in($_POST['login_pwd']);
		if($_login_name=="" || $_login_pwd=="") $err="B&#7841;n ph&#7843;i nh&#7853;p username/password!";
		else{
			if(check_log_in($_login_name,$_login_pwd)==1){
				$refresh="?type=index";
				return login_successful();
			}else
				$err="Kh&#244;ng &#273;&#250;ng username/password, b&#7841;n vui l&#242;ng th&#7917; l&#7841;i!";
		}
		return login_form($_login_name,$err);
	}
	else return login_form();
}
?>