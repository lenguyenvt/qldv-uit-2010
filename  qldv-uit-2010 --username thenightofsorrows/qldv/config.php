<?php
require_once("includes/db.php");

if(isset($_SERVER['HTTP_REFERER']) && strstr($_SERVER['HTTP_REFERER'],".swf"))
{
	exit("wow");
	die("Dummy");
}
session_start();
define("DB_HOST", "127.0.0.1");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "qldv");
define("DB_PREFIX", "");

$sub_server="/qldv/images";
$base_url="/qldv";

$db = new db();
$db->connect();
$session=session_id();
$ip=$_SERVER['REMOTE_ADDR'];

function _img($txt){
	global $base_url;
	return $base_url."/img.php?s=$txt";
}
?>