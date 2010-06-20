<?php
require_once("./styles/rate_history.php");
function page_content(){
	global $s, $t, $p, $page_header, $_GET, $_POST, $user, $db;
	$page_header="B&#7843;ng &#273;&#225;nh gi&#225; x&#7871;p lo&#7841;i h&#224;ng n&#259;m";
	
	// retrieve grade of youth union member by year
	$sql = "SELECT  `xeploaidoanvien`.`loai` ,  
	                `xeploaidoanvien`.`year_start`,
	                `xeploaidoanvien`.`Note` 
	                          
	        FROM `xeploaidoanvien`
	        
	        WHERE `xeploaidoanvien`.`id_doanvien` = {$user['id']}
	";
	
	
	// for testing only
	echo $sql;
	
	// get grade by year, pass it to generate the rate_form
	$query = $db->query($sql);
	$danhsachxeploai = array();
	
	while(($danh_gia_nam=mysql_fetch_row($query))!=null)
	{
	   $danhsachxeploai[]=$danh_gia_nam;
	}
	
	
  // after all, generate html document then return it to user 
	return user_main_form(rate_history_form($danhsachxeploai));
}
?>