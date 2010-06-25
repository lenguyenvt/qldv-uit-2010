<?php
require_once("config.php");
require_once("function.php");
require_once("style.php");

if(isset($_GET['type'])) $t=post_in($_GET['type']); else $t="login";
if(isset($_GET['type'])) $_t=post_in($_GET['type']); else $_t="";
if(isset($_GET['page'])) $p=post_in($_GET['page']); else $p="1";
$page_header="";
$page_description="";
$refresh="";

$user=check_user_logged_in();

//print_r($user);

if(!is_logged_in()){
	switch($t){
		default:
			$t="login";
			break;
		case "lostpwd":
			$t="lostpwd";
			break;
	}
}
else switch($t){
	default:
		$t="user_info";
		break;
/*	case "index":
		$t="user_info";
		break;
	case "login":  
		$t="login";
		break;
	case "lostpwd":  
		$t="lostpwd";
		break;
*/
	case "changepwd":  
		$t="changepwd";
		break;
	case "logout":  
		$t="logout";
		break;
	case "user_info":
		$t="user_info";
		break;
	case "user_manage":
		$t="user_manage";
		break;
	case "activity":
		$t="activity";
		break;
	case "account":
		$t="account";
		break;
	case "user_rate_manage":
		$t="user_rate_manage";
		break;
	case "phone_history":
		$t="phone_history";
		break;
	case "rate_history":
		$t="rate_history";
		break;
	case "group_manage":
		$t="group_manage";
		break;
	case "user_register":
		$t="user_register";
		break;
	case "change_group":
		$t="change_group";
		break;
	case "change_group_info":
		$t="change_group_info";
		break;
	case "activity_info":
		$t="activity_info";
		break;
}
if($t!=$_t){
	header("Location: index.php?type=$t");
	exit();
}
require_once("function/$t.php");
$content=page_content();
echo page_header($page_header,$page_description,$refresh);

echo $content;

echo page_footer();
?>