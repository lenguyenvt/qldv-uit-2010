<?php

require_once("./styles/user_manage.php");
require_once("./function.php");

function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST,$db,$refresh,$user;
	$page_header="Qu&#7843;n l&#253; &#273;o&#224;n vi&#234;n";
		
	$capduoi = get_cosodoan_capduoi($user["id"]);
	$dscapduoi = explode(',',$capduoi);
	$id_cosodoan = $dscapduoi[0];	
	$dsdoanvien = $_POST['dsdoanvien'];

	if ((isset($_POST['delete'])) && (sizeof($_POST['dsdoanvien'] > 0)))
	{ 	
		
		foreach ($dsdoanvien as $key=>$value)
		{			
			$id_dv = $value;

			if (check_cosodoancaptren($user['id'], $id_dv))
			{
				if (check_auth("qldoanvien", 4))
				{
					$id_dv = post_in($id_dv);
				
					$sql_delete = 
					"
					DELETE * 
					
					FROM `thongtindoanvien`,
						 `chucvu`,
						 `doanphi`,
						 `doanvien`,
						 `qhchidoan`,	
						 `quatrinhcongtac`,
						 `quatrinhoctap`,
						 `hoancanhkinhte`,
						 `thamgiaphongtrao`,
						 `xeploaidoanvien`			
						 
					WHERE `thongtindoanvien`.`id_doanvien` = '$id_dv'
					AND `qhchucvu`.`id_doanvien` = '$id_dv'
					AND `doanphi`.`id_doanvien` = '$id_dv'
					AND `doanvien`.`id_doanvien` = '$id_dv'
					AND `qhchidoan`.`id_doanvien` = '$id_dv'
					AND `quatrinhcongtac`.`id_doanvien` = '$id_dv'
					AND `quatrinhhoctap`.`id_doanvien` = '$id_dv'
					AND `hoancanhkinhte`.`id_doanvien` = '$id_dv'
					AND `thamgiaphongtrao`.`id_doanvien` = '$id_dv'
					AND `xeploaidoanvien`.`id_doanvien` = '$id_dv' 
					";
					
					echo $sql_delete;
					//$query = $db->query($sql_detele);
				}			
					
			}	
			
		}
		
	}
	
	if (isset($_POST['id_cosodoan'])) $id_cosodoan = $_POST['id_cosodoan'];	 
	 	 		
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
					
			WHERE 	`qhchidoan`.`id_cosodoan` = '$id_cosodoan'
			AND 	`doanvien`.`id_doanvien`= `qhchidoan`.`id_doanvien`
			AND 	`doanvien`.`id_doanvien` = `chucvu`.`id_doanvien`
			AND 	`danhmucchucvu`.`id_chucvu` = `chucvu`.`id_chucvu`
			AND 	`qhchidoan`.`id_cosodoan`=`cosodoan`.`id_cosodoan` 
			
			ORDER BY `thongtindoanvien`.`id_doanvien` LIMIT 0,50";	
		
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