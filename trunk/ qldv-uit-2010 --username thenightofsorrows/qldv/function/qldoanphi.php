<?php

require_once("./styles/qldoanphi.php");
require_once("./function.php");

function page_content(){
	global $page_header,$_GET,$_POST,$db,$refresh,$user;
	$page_header="Qu&#7843;n l&#253; &#272;o&#224;n ph&#237;";
	if(isset($_POST['id_cosodoan'])) $id_cosodoan = post_in($_POST['id_cosodoan']); else $id_cosodoan=$user['id_cosodoan'];
	if(isset($_POST['dsdoanvien'])) $dsdoanvien = $_POST['dsdoanvien']; else $dsdoanvien="";
	if(isset($_POST['ngaydong'])) $ngaydong = $_POST['ngaydong']; else $ngaydong="";
	if(isset($_POST['sotien'])) $sotien = $_POST['sotien']; else $sotien="";
	
	if(isset($_POST['update_dp']) && isset($_POST['dsdoanvien']) && (sizeof($_POST['dsdoanvien'] > 0)))
	{
		for($i=0; i<sizeof($dsdoanvien); $i++)
		{
				$id_dv = $dsdoanvien[$i];
				$ngaydong = $ngaydong[$i];
				$sotien = $sotien[$i];
				$temp = (int)$sotien;
				$temp = $temp/1000;
				$sql1 = "SELECT `doanphi`.`hanphi` FORM `doanphi` WHERE `doanphi`.`id_doanvien` = '$id_dv'";
				$db->query($sql1);
				// thao tac cap nhat ngay o day. temp la so thang cong them
				// hanphi=null thi lay thang hien tai de cong. ket qua cong duoc gan cho bien temp
				$sql2 = "	UPDATE `doanphi` 
							SET `doanphi`.`sotien` = '$sotien' , `doanphi`.`ngaydong` = '$ngaydong' , `doanphi`.`hanphi` = '$temp'
							WHERE `doanphi`.`id_doanvien` = '$id_dv'";
				$db->query($sql2);
		}
	
	}
	if(check_auth("qldoanvien",1)){
	$sql ="SELECT 	DISTINCT `thongtindoanvien`.`id_doanvien`,
						`thongtindoanvien`.`hoten`,
						`thongtindoanvien`.`gioitinh`,
						`thongtindoanvien`.`ngaysinh`,
						`doanvien`.`doan_phi`,
						`auth`.`id` as `chucvu`
						
				FROM 	`thongtindoanvien`,
						`qhchidoan`,
						`auth`,
						`cosodoan`,
						`doanvien` 
						
				WHERE 	`qhchidoan`.`id_cosodoan` = '$id_cosodoan'
				AND 	`doanvien`.`qh_chidoan`= `qhchidoan`.`qh_chidoan`
				AND 	`auth`.`id` = `doanvien`.`auth`
				AND 	`qhchidoan`.`id_cosodoan`=`cosodoan`.`id_cosodoan` 
				AND		`thongtindoanvien`.`id_doanvien`=`doanvien`.`id_doanvien`
				ORDER BY `thongtindoanvien`.`id_doanvien`";
			$db->query($sql);
			if($db->num_rows>0){
				$i=0;
				while($doanvien=$db->fetch_array()){
					$danhsachdoanvien[$i++]=$doanvien;
				}
			}
	}
return user_main_form(user_manage_form($danhsachdoanvien));	
}
?>