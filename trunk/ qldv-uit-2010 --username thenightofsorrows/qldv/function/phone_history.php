<?php
require_once("./styles/phone_history.php");
// done!it's all ok now
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST, $db, $user;
	$page_header="Danh s&#225;ch s&#7889; &#273;i&#7879;n tho&#7841;i";
	
	// sql for get information about phone history
	$sql = "SELECT `thongtindoanvien`.`dienthoaididong`       
	        FROM `thongtindoanvien`	        
	        WHERE `thongtindoanvien`.`id_doanvien` = {$user['id']}
	        LIMIT 0,1";
	
	//for testing only
	$query = $db->query($sql);
	$phone_history_data = mysql_fetch_array($query);
	
	// generate phone history, the phone have been splitted by "|" character 
	$phone_history=explode("|", $phone_history_data['dienthoaididong']);
	print_r($phone_history);
	
	// return html document 
	return user_main_form(phone_history_form($phone_history));
}
?>