<?php
function post_in($str){
	$str=str_replace("'","&#39;",$str);
	$str=str_replace('"',"&#34;",$str);
	$str=mysslashes($str);
	$str=mutate($str);
	return $str;
}
function mysslashes($text) {
        $text = str_replace("\\\"","\"",$text);
        $text = str_replace("\\\\","\\",$text);
        $text = str_replace("\\'","'",$text);
        $text = str_replace("\t","",$text);
        return $text;
}
function mutate($text) {
        $text = htmlspecialchars(mysslashes($text));
        return $text;
}
function dtime(){
	return date("Y-m-d H:i:s");
}
function ddtime(){
	return date("Y-m-d");
}
function check_auth($action,$required_auth){
	//$action= view,add,edit,remove
	global $user;
	$action=strtolower($action);
	if(is_logged_in()){
		if($required_auth==1){
			if($user[$action]==1||$user[$action]==3||$user[$action]==5||$user[$action]==7) return 1;
		}else if($required_auth==2){
			if($user[$action]==2||$user[$action]==3||$user[$action]==6||$user[$action]==7) return 1;
		}else if($required_auth==4){
			if($user[$action]==4||$user[$action]==5||$user[$action]==6||$user[$action]==7) return 1;
		}
		return 0;
	}else return 0;
/*	if(is_logged_in()){
		$query=$db->query("SElECT `{$action}` FROM `auth` WHERE `id`='{$user['auth']}'");
		if($row_data=mysql_fetch_array($query)){
			if($row_data[$action]<$required_auth) return 0;
			return 1;
		}else return 0;
	}else return 0;
*/
}
function check_cungcosodoan($id1,$id2){
	global $db;
	$sql="SELECT `id_cosodoan` FROM `qhchidoan` WHERE `id_doanvien`='$id1' ORDER BY `qh_chidoan` DESC LIMIT 0,1";
	$result1=mysql_fetch_array($db->query($sql));
	
	$sql="SELECT `id_cosodoan` FROM `qhchidoan` WHERE `id_doanvien`='$id2' ORDER BY `qh_chidoan` DESC LIMIT 0,1";
	$db->query($sql);
	$result2=mysql_fetch_array($db->query($sql));

	if($result2['id_cosodoan']==$result1['id_cosodoan']) return 1;
	else return 0;
}
function check_cosodoancaptren($id1,$id2){
	global $db;
	$sql="SELECT `id_cosodoan` FROM `qhchidoan` WHERE `id_doanvien`='$id1' ORDER BY `qh_chidoan` DESC LIMIT 0,1";
	$result1=mysql_fetch_array($db->query($sql));
	
	$sql="SELECT `id_cosodoan` FROM `qhchidoan` WHERE `id_doanvien`='$id2' ORDER BY `qh_chidoan` DESC LIMIT 0,1";
	$db->query($sql);
	$result2=mysql_fetch_array($db->query($sql));

	$id_parent=$result2['id_cosodoan'];
	$id_parent_tocheck=$result1['id_cosodoan'];
	if($id_parent==0) return 0;
	$sql="SELECT `id_cosodoan`,`cap`,`parent` FROM `cosodoan` WHERE `id_cosodoan`='{$id_parent}'";
	$result3=mysql_fetch_array($db->query($sql));
	while($result3['parent']!=0 && $result3['id_cosodoan']!=$id_parent_tocheck){
		$id_parent=$result3['parent'];
		$sql="SELECT `id_cosodoan`,`cap`,`parent` FROM `cosodoan` WHERE `id_cosodoan`='{$id_parent}'";
		$result3=mysql_fetch_array($db->query($sql));
	}

	if($result3['id_cosodoan']==$id_parent_tocheck) return 1;
	else return 0;
}
function get_cosodoan($user,$SQL_COMPATIBLE=""){
	global $db;
	$sql="SELECT `id_cosodoan` FROM `qhchidoan` WHERE `id_doanvien`='$user' ORDER BY `qh_chidoan` DESC LIMIT 0,1";
	$result1=mysql_fetch_array($db->query($sql));
	$id_parent=$result1['id_cosodoan'];

	if($SQL_COMPATIBLE=="") $output=$id_parent; else $output="{$SQL_COMPATIBLE}='{$id_parent}'";
	$sql="SELECT `id_cosodoan`,`cap`,`parent` FROM `cosodoan` WHERE `id_cosodoan`='{$id_parent}'";
	$result3=mysql_fetch_array($db->query($sql));
	while($result3['parent']!=0){
		$id_parent=$result3['parent'];
		$sql="SELECT `id_cosodoan`,`cap`,`parent` FROM `cosodoan` WHERE `id_cosodoan`='{$id_parent}'";
		$result3=mysql_fetch_array($db->query($sql));
		if($SQL_COMPATIBLE=="") $output=$id_parent.",".$output;
		else $output="$output OR {$SQL_COMPATIBLE}='{$id_parent}'";
	}
	return $output;
}
function check_user_logged_in(){
	global $session,$ip,$db;
	$query=$db->query("SELECT `doanvien`.`username`,`doanvien`.`auth`,`doanvien`.`id_doanvien`,`auth`.* FROM `doanvien`,`auth` WHERE `doanvien`.`sid`='{$session}' AND `doanvien`.`ip`='{$ip}' AND `doanvien`.`auth`=`auth`.`id`");
	if(mysql_num_rows($query)==1){
		return mysql_fetch_array($query); //tra ve gia tri field cua query
	}else{
		$user['username']="GUEST";
		$user['auth']=0;
		$user['id_doanvien']=0;
		return $user;
	}
}
function is_logged_in(){
	global $user;
	if($user['auth']==0) return 0; //kiem tra dang nhap nhanh
	return 1;
}
function log_out(){
	global $session,$db;
	$db->query("UPDATE `doanvien` SET `sid`='' WHERE `sid`='{$session}'"); //xoa session id trong csdl, luu lai IP
	return 1;
}
function check_log_in($username,$password){
	global $db,$session,$ip;

	$username=post_in($username);
	$password=encode($password);

	$query=$db->query("SELECT `username`,`auth` FROM `doanvien` WHERE `username`='{$username}' AND `password`='{$password}'");
	if(mysql_num_rows($query)==1){
		$db->query("UPDATE `doanvien` SET `ip`='{$ip}', `sid`='{$session}' WHERE LCASE(`username`)=LCASE('{$username}') AND `password`='{$password}'");
		return 1; //tra ve 1 neu dang nhap thanh cong
	}else{
		return 0; //tra ve 0 neu ko thanh cong
	}
}
function encode($str){
	return md5(md5($str)); //ma hoa md5 2 lan
}
?>