<?php
require_once("./styles/user_manage.php");

function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST,$db,$refresh,$user;
	$page_header="Qu&#7843;n l&#253; &#273;o&#224;n vi&#234;n";
	
	$error="";
	
	if (!isset($_POST["id"])) $id = get_cosodoan($user["id"])
	else $id = $_POST["id"];
	
	$id = '1';
	$sql ="SELECT 	`thongtindoanvien`.`id_doanvien`,
					`thongtindoanvien`.`hoten`,
					`thongtindoanvien`.`gioitinh`,
					`thongtindoanvien`.`ngaysinh`,
					`doanvien`.`doan_phi`,
					`danhmucchucvu`.`ten`
					
			FROM 	`thongtindoanvien`,
					`qhchidoan`,
					`danhmucchucvu`,
					`chucvu`,
					`cosodoan`,
					`doanvien` 
					
			WHERE 	`qhchidoan`.`id_cosodoan` = '$id'
			AND 	`doanvien`.`id_doanvien`= `qhchidoan`.`id_doanvien`
			AND 	`doanvien`.`id_doanvien` = `chucvu`.`id_doanvien`
			AND 	`danhmucchucvu`.`id_chucvu` = `chucvu`.`id_chucvu`
			AND 	`qhchidoan`.`id_cosodoan`=`cosodoan`.`id_cosodoan` 
			
			ORDER BY `thongtindoanvien`.`id_doanvien` LIMIT 0,50";	
		
		echo $sql;
		
		$db->query($sql);
		if($db->num_rows>0){
			$i=0;
			while($doanvien=mysql_fetch_array($db->query_result)){
				$danhsachdoanvien[$i++]=$doanvien;
			}
		}
		else $danhsachdoanvien=array();
	return user_main_form(user_manage_form($danhsachdoanvien,$error));
}
?>