<?php
require_once("./styles/phone_history.php");

// done!it's all ok now
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST, $db, $user;
	$page_header="Danh s&#225;ch s&#7889; &#273;i&#7879;n tho&#7841;i";
	
	if (! isset ( $_GET ['id_doanvien'] ))
		$id = $user ["id"];
	else
		$id = post_in ( $_GET ['id_doanvien'] );
	
	if (isset($_POST['delete']))	
	{		
		$str_replace = "";
		
		foreach ($_POST['dsdt'] as $dt)
		{
			$str_replace = $str_replace . $dt . "|";
		}
						
		$sql = "SELECT `thongtindoanvien`.`dienthoaididong`       
	        FROM `thongtindoanvien`	        
	        WHERE `thongtindoanvien`.`id_doanvien` = '$id'
	        LIMIT 0,1";
		
		$query = $db->query($sql);
		$phone_history_data = mysql_fetch_array($query);
		$phone_str = $phone_history_data["dienthoaididong"];
		$phone_str = str_replace($str_replace, "", $phone_str);
		$phone_str = substr($phone_str, 0, -1);			
		
		$sql_update = " 
						UPDATE `thongtindoanvien` 
						
						SET `dienthoaididong` = '$phone_str' 
						
						WHERE `thongtindoanvien`.`id_doanvien` = '$id'
					  ";
		
		//$query = $db->query($sql_update);
		 
	}
	
	// sql for get information about phone history
	$sql = "SELECT `thongtindoanvien`.`dienthoaididong`       
	        FROM `thongtindoanvien`	        
	        WHERE `thongtindoanvien`.`id_doanvien` = '$id'
	        LIMIT 0,1";
	
	$query = $db->query($sql);
	$phone_history_data = mysql_fetch_array($query);
	
	// generate phone history, the phone have been splitted by "|" character 
	$phone_history=explode("|", $phone_history_data['dienthoaididong']);	
	
	// return html document 
	return user_main_form(phone_history_form($phone_history));
}
?>