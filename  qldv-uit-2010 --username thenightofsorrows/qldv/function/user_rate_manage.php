<?php
require_once("./styles/user_rate_manage.php");
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST, $user, $db;
	$page_header="&#272;&#225;nh gi&#225; x&#7871;p lo&#7841;i &#273;o&#224;n vi&#234;n";
	$danhsachdoanvien=array();	
	$id_cosodoan="";
	// may be it have problem with the condition, just check out later
	if (isset($_POST['id_cosodoan'])) $id_cosodoan = $_POST['id_cosodoan'];	 
	//echo($id_cosodoan);
	$sql ="SELECT 	`thongtindoanvien`.`hoten`,
					`cosodoan`.`ten`,
					`xeploaidoanvien`.`Note`,
					`xeploaidoanvien`.`diem`,
					`xeploaidoanvien`.`loai`
			FROM 	`thongtindoanvien`,
					`qhchidoan`,
					`xeploaidoanvien`,
					`cosodoan`,
					`doanvien` 
			WHERE 	`qhchidoan`.`id_cosodoan` = '$id_cosodoan'
			AND 	`doanvien`.`qh_chidoan`= `qhchidoan`.`qh_chidoan`
			AND 	`doanvien`.`id_doanvien` = `xeploaidoanvien`.`id_doanvien`
			AND 	`qhchidoan`.`id_cosodoan`=`cosodoan`.`id_cosodoan` 
			
			ORDER BY `thongtindoanvien`.`id_doanvien` LIMIT 0,50";
	 //echo($sql);
	$query = $db->query($sql);
	if($db->num_rows>0){
	$i=0;
	while($doanvien = mysql_fetch_array($db->query_result))
		{
		   $danhsachdoanvien[$i++]= $doanvien;
		}
	}

	if (! isset ( $_GET ['id_doanvien'] ))
		$id = $user ["id"];
	else
		$id = post_in ( $_GET ['id_doanvien'] );
	$sql1 = "SELECT    `phongtraodoan`.`ten`,
					  `phongtraodoan`.`start`,
					  `thamgiaphongtrao`.`danhgia`	
					
			FROM	  `phongtraodoan`,
					  `thamgiaphongtrao`
					
			WHERE	  `thamgiaphongtrao`.`id_doanvien` = '{$id}'
			AND		  `thamgiaphongtrao`.`id_phongtraodoan` = `phongtraodoan`.`id_phongtraodoan`";
	$query1 = $db->query ( $sql1 );
	$danhsachphongtrao = array ();
	while ( $pt = mysql_fetch_array ($query1)) {
		$danhsachphongtrao [] = $pt;
	}
	$phongtrao = thongtinphongtrao ( $danhsachphongtrao );
	return user_main_form(user_rate_manage_form($danhsachdoanvien,$phongtrao));
}
?>