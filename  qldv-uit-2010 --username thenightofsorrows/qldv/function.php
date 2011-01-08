<?php
function post_in($str) {
	$str = str_replace ( "'", "&#39;", $str );
	$str = str_replace ( '"', "&#34;", $str );
	$str = mysslashes ( $str );
	$str = mutate ( $str );
	return $str;
}

function mysslashes($text) {
	$text = str_replace ( "\\\"", "\"", $text );
	$text = str_replace ( "\\\\", "\\", $text );
	$text = str_replace ( "\\'", "'", $text );
	$text = str_replace ( "\t", "", $text );
	return $text;
}

function mutate($text) {
	$text = htmlspecialchars ( mysslashes ( $text ) );
	return $text;
}

function dtime() {
	return date ( "Y-m-d H:i:s" );
}

function ddtime() {
	return date ( "Y-m-d" );
}

function is_valid_date($value) {
	if (strlen ( $value ) >= 6) {
		$regx = explode ( "-", $value );
		if (@checkdate ( $regx [1], $regx [2], $regx [0] ))
			return 1;
	}
	return 0;
}

function check_auth($action, $required_auth) {
	global $user;
	$action = strtolower ( $action );
	if (is_logged_in ()) {
		if ($required_auth == 1) {
			if ($user [$action] == 1 || $user [$action] == 3 || $user [$action] == 5 || $user [$action] == 7)
				return 1;
		} else if ($required_auth == 2) {
			if ($user [$action] == 2 || $user [$action] == 3 || $user [$action] == 6 || $user [$action] == 7)
				return 1;
		} else if ($required_auth == 4) {
			if ($user [$action] == 4 || $user [$action] == 5 || $user [$action] == 6 || $user [$action] == 7)
				return 1;
		}
		return 0;
	} else
		return 0;
}

function check_cungcosodoan($id1, $id2) {
	global $db;
	$sql = "SELECT `qhchidoan`.`id_cosodoan` FROM `qhchidoan`,`doanvien` WHERE `doanvien`.`id_doanvien`='$id1' AND `qhchidoan`.`qh_chidoan`=`doanvien`.`qh_chidoan` ORDER BY `qh_chidoan` DESC LIMIT 0,1";
	$result1 = mysql_fetch_array ( $db->query ( $sql ) );
	
	$sql = "SELECT `qhchidoan`.`id_cosodoan` FROM `qhchidoan`,`doanvien` WHERE `doanvien`.`id_doanvien`='$id2' AND `qhchidoan`.`qh_chidoan`=`doanvien`.`qh_chidoan` ORDER BY `qh_chidoan` DESC LIMIT 0,1";
	$db->query ( $sql );
	$result2 = mysql_fetch_array ( $db->query ( $sql ) );
	
	if ($result2 ['id_cosodoan'] == $result1 ['id_cosodoan'])
		return 1;
	else
		return 0;
}

function check_cosodoancaptren($id1, $id2) {
	$id1_cosodoan=get_cosodoan_hientai($id1);
	return get_cosodoan($id2,"",1,$id1_cosodoan);
}

function get_cosodoan($user, $SQL_COMPATIBLE = "", $ARRAY_OUT = "", $CHECK_WITH = "") {
	global $db;
	if(is_array($user) && isset($user['id_cosodoan'])) $id_parent = $user['id_cosodoan']; else $id_parent = get_cosodoan_hientai($user);
	if ($SQL_COMPATIBLE == "")
		$output = $id_parent;
	else
		$output = "{$SQL_COMPATIBLE}='{$id_parent}'";
	$sql = "SELECT `id_cosodoan`,`parent` FROM `cosodoan` WHERE `id_cosodoan`='{$id_parent}'";
	$result3 = mysql_fetch_array ( $db->query ( $sql ) );
	while ( $result3 ['parent'] != 0 ) {
		$id_parent = $result3 ['parent'];
		$sql = "SELECT `id_cosodoan`,`parent` FROM `cosodoan` WHERE `id_cosodoan`='{$id_parent}'";
		$result3 = mysql_fetch_array ( $db->query ( $sql ) );
		if ($SQL_COMPATIBLE == "")
			$output = $id_parent . "," . $output;
		else
			$output = "$output OR {$SQL_COMPATIBLE}='{$id_parent}'";
	}
	if ($ARRAY_OUT == 1)
		$output = explode ( ",", $output );
	if ($CHECK_WITH != "") {
		for($i = 0; $i < sizeof ( $output ); $i ++) {
			if ($output [$i] == $CHECK_WITH)
				return 1;
		}
		return 0;
	}
	return $output;
}

function get_cosodoan_hientai($user) {
	global $db;
	$sql = "
		SELECT `qhchidoan`.`id_cosodoan`
		
		FROM `qhchidoan`,
			 `doanvien`
		
		WHERE `doanvien`.`qh_chidoan` = `qhchidoan`.`qh_chidoan`		
		AND	  `doanvien`.`id_doanvien` = '$user'
	";
	
	$query = $db->query ( $sql );
	$output = mysql_fetch_array ( $query );
	
	return $output ['id_cosodoan'];
}

function cosodoan_get_cosodoan_capduoi($id_cosodoan, $SQL_COMPATIBLE = "", $ARRAY_OUT = "", $CHECK_WITH = ""){
	
}

function get_cosodoan_capduoi($user, $SQL_COMPATIBLE = "", $ARRAY_OUT = "", $CHECK_WITH = "") {
	global $db;
	/*
	$sql="SELECT `id_cosodoan` FROM `qhchidoan` WHERE `id_doanvien`='$user' ORDER BY `qh_chidoan` DESC LIMIT 0,1";
	$result1=mysql_fetch_array($db->query($sql));
	*/
	if(is_array($user) && isset($user['id_cosodoan'])) $id_parent = $user['id_cosodoan']; else $id_parent = get_cosodoan_hientai($user);
	
	if ($SQL_COMPATIBLE == "")
		$output = $id_parent;
	else
		$output = "{$SQL_COMPATIBLE}='{$id_parent}'";
	$i = 0;
	$ar [$i ++] = $id_parent;
	for($j = 0; $j < $i; $j ++) {
		$sql = "SELECT `id_cosodoan` FROM `cosodoan` WHERE `parent`='{$ar[$j]}'";
		$db->query ( $sql );
		while ( $result2 = mysql_fetch_array ( $db->query_result ) ) {
			$id_parent = $result2 ['id_cosodoan'];
			$ar [$i++] = $id_parent;
			//$mytmp=get_cosodoan_capduoi($user
			if ($SQL_COMPATIBLE == "")
				$output = $id_parent . "," . $output;
			else
				$output = "$output OR {$SQL_COMPATIBLE}='{$id_parent}'";
		}
	}
	if ($ARRAY_OUT == 1)
		$output = explode ( ",", $output );
	if ($CHECK_WITH != "") {
		for($i = 0; $i < sizeof ( $output ); $i ++) {
			if ($output [$i] == $CHECK_WITH)
				return 1;
		}
		return 0;
	}
	return $output;
}

function check_user_logged_in() {
	global $session, $ip, $db;
	$query = $db->query ( "SELECT `doanvien`.`username`,`doanvien`.`auth`,`doanvien`.`id_doanvien`,`qhchidoan`.`id_cosodoan`,`auth`.* FROM `doanvien`,`auth`,`qhchidoan` WHERE `doanvien`.`sid`='{$session}' AND `doanvien`.`ip`='{$ip}' AND `doanvien`.`auth`=`auth`.`id` AND `qhchidoan`.`qh_chidoan`=`doanvien`.`qh_chidoan`" );
	if (mysql_num_rows ( $query ) == 1) {
		return mysql_fetch_array ( $query ); //tra ve gia tri field cua query
	} else {
		$user ['username'] = "GUEST";
		$user ['auth'] = 0;
		$user ['id_doanvien'] = 0;
		return $user;
	}
}

function is_logged_in() {
	global $user;
	if ($user ['auth'] == 0)
		return 0; //kiem tra dang nhap nhanh
	return 1;
}

function log_out() {
	global $session, $db;
	$db->query ( "UPDATE `doanvien` SET `sid`='' WHERE `sid`='{$session}'" ); //xoa session id trong csdl, luu lai IP
	return 1;
}

function check_log_in($username, $password) {
	global $db, $session, $ip;
	
	$username = post_in ( $username );
	$password = encode ( $password );
	
	$query = $db->query ( "SELECT `username`,`auth` FROM `doanvien` WHERE `username`='{$username}' AND `password`='{$password}'" );
	if (mysql_num_rows ( $query ) == 1) {
		$db->query ( "UPDATE `doanvien` SET `ip`='{$ip}', `sid`='{$session}' WHERE LCASE(`username`)=LCASE('{$username}') AND `password`='{$password}'" );
		return 1; //tra ve 1 neu dang nhap thanh cong
	} else {
		return 0; //tra ve 0 neu ko thanh cong
	}
}

function encode($str) {
	return md5 ( md5 ( $str ) ); //ma hoa md5 2 lan
}
function upbcode($text) {
        if(substr_count($text,"[") > 0 && substr_count($text,"]") > 0) {
$addon = "064829693";
do {
$text = preg_replace("#\[code\](.*?)\[([a-z])(.*?)\[/code\]#si",'[code]\1['. $addon .'\2\3[/code]',$text);
} while(preg_match("#\[code\](.*?)\[([a-z])(.*?)\[/code\]#siU",$text));
		    $text = preg_replace("#\[size=([1-2]?[0-9])\](.*?)\[/size\]#si", "<font size=\\1>\\2</font>", $text);
		    $text = preg_replace("#\[font=(\#[0-9a-f]{6}|[a-z]+)\](.*?)\[/font\]#si","<font face=\\1>\\2</font>",$text);
                $text = preg_replace("#\[color=(\#[0-9a-f]{6}|[a-z]+)\](.*?)\[/color\]#si",'<font color="\1">\2</font>',$text);
                $text = preg_replace("#\[u\](.*?)\[/u\]#si",'<u>\1</u>',$text);
                $text = preg_replace("#\[s\](.*?)\[/s\]#si",'<s>\1</s>',$text);
                $text = preg_replace("#\[i\](.*?)\[/i\]#si",'<i>\1</i>',$text);
                $text = preg_replace("#\[b\](.*?)\[/b\]#si",'<b>\1</b>',$text);
                $text = preg_replace("#\[center\](.*?)\[/center\]#si",'<center>\1</center>',$text);
                $text = preg_replace("#\[marquee\](.*?)\[/marquee\]#si",'<marquee>\1</marquee>',$text);
                $text = preg_replace("#\[url\]([a-z]+?://)([^\[]*)\[/url\]#si",'<a href="\1\2" target="_blank">\1\2</a>',$text);
                $text = preg_replace("#\[url\]([^\[]*)\[/url\]#si",'<a href="http://\1" target="_blank">\1</a>',$text);
                $text = preg_replace("#\[url=([a-z]+?://)([^\]]*)\](.*?)\[/url\]#si",'<a href="\1\2" target="_blank">\3</a>',$text);
                $text = preg_replace("#\[url=([^\]]*)\](.*?)\[/url\]#si",'<a href="http://\1" target="_blank">\2</a>',$text);
                $text = preg_replace("#\[email\]([^\[]+@[^\[]+)\[/email\]#si",'<a href="mailto:\1">\1</a>',$text);
                $text = preg_replace('=\[img\](http:[^\[]*|[^\[:]*)\[/img\]=si','<img src="$1" border="0">',$text);
		    $text = preg_replace("=\[rm\]([^\[]*)\[/rm\]=si", '<object name="rpcontrol" width=300 height=300 CLASSID="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA"><param name="controls" value="ImageWindow,StatusBar,ControlPanel"><param name="autostart" value="false"><param name="src" value="$1"></object>',$text);
		    $text = preg_replace('=\[flash\]([^\[]*)\[/flash\]=si','<object classid="clsid: D27CDB6E-AE6D-11cf-96B8-444553540000" width="300" height="300"><param name=movie value="$1"><param name=play value=true><param name=loop value=true><param name=quality value=high><param name=backgroundcolor value=transparent><embed src="$1" width="300" height="300" play=true loop=true quality=high backgroundcolor=transparent></embed></object>',$text);
		    $text = preg_replace('=\[wm\]([^\[]*)\[/wm\]=si','
<center><object classid="clsid:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="Player" width="340" height="320">
  <param name="URL" value="\1" border="0" alt="T&#7853;p tin nh&#7841;c - B&#7841;n &#273;ang &#7903; website Châu Thành">
  <param name="showpositioncontrols" value="true">
  <param name="ShowAudioControls" value="true">
  <param name="ShowStatusBar" value="true">
  <param name="ShowTracker" value="true">
  <param name="enableContextMenu" value="false">
  <param name="showpositioncontrols" value="true">
  <param name="ShowDisplay" value="false">
  <param name="EnableTracker" value="true">
  <param name="rate" value="1">
  <param name="balance" value="0">
  <param name="currentPosition" value="1">
  <param name="defaultFrame" value>
  <param name="playCount" value="1000">
  <param name="autoStart" value="true">
  <param name="currentMarker" value="0">
  <param name="invokeURLs" value="-1">
  <param name="baseURL" value>
  <param name="volume" value="100">
  <param name="mute" value="0">
  <param name="uiMode" value="full">
  <param name="stretchToFit" value="0">
  <param name="windowlessVideo" value="0">
  <param name="enabled" value="-1">
  <param name="enableContextMenu" value="-1">
  <param name="fullScreen" value="0">
  <param name="SAMIStyle" value>
  <param name="SAMILang" value>
  <param name="SAMIFilename" value>
  <param name="captioningID" value>
  <param name="enableErrorDialogs" value="0">
  <param name="_cx" value="7938">
  <param name="_cy" value="6482">
</object>
<br><a href="\1">[Nh&#7845;n vào &#273;ây n&#7871;u không xem &#273;&#432;&#7907;c]</a></center>',$text);
                
                do {
                        $text = preg_replace("#\[quote\](.*?)\[/quote\]#si",'<div class="small"><b>Tr&#237;ch d&#7851;n:</b></div><div class="quote">\1</div>',$text);
                } while(preg_match("#\[quote\](.*?)\[/quote\]#si",$text));
do{
                        $text = preg_replace("#\[code\](.*?)\[". $addon ."(.*?)\[/code\]#si",'[code]\1[\2\3[/code]',$text);
} while(preg_match("#\\[code\](.*?)\[". $addon ."(.*?)\[/code\]#siU",$text));
		    do {
                        $text = preg_replace("#\[code\](.*?)\[/code\]#si",'<div class="small"><b>Code:</b></div><div class="code">\1</div>',$text);
                } while(preg_match("#\[code\](.*?)\[/code\]#si",$text));
        }
        return $text;
}
function take_post($var){
	global $_POST;
	if(isset($_POST[$var])) return post_in($_POST[$var]);
	return "";
}
function take_get($var){
	global $_GET;
	if(isset($_GET[$var])) return post_in($_GET[$var]);
	return "";
}
?>