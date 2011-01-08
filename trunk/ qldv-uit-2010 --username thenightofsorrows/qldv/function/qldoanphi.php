<?php

require_once("./styles/qldoanphi.php");
require_once("./function.php");

function page_content(){
	global $page_header,$_GET,$_POST,$db,$refresh,$user;
	$page_header="Qu&#7843;n l&#253; &#272;o&#224;n ph&#237;";
	if(!check_auth("qldoanvien",1)) return page_error("B&#7841;n kh&#244;ng c&#243; quy&#7873;n truy c&#7853;p trang n&#224;y!");
	if(isset($_POST['id_cosodoan'])) $id_cosodoan = post_in($_POST['id_cosodoan']); else $id_cosodoan=$user['id_cosodoan'];
	if(isset($_POST['dsdoanvien'])) $dsdoanvien = $_POST['dsdoanvien']; else $dsdoanvien="";
	if(isset($_POST['ngaydong'])) $ngaydong = $_POST['ngaydong']; else $ngaydong="";
	if(isset($_POST['sotien'])) $sotien = $_POST['sotien']; else $sotien="";
	
	$info="";
	if(isset($_POST['update_dp']) && isset($_POST['dsdoanvien']) && (sizeof($_POST['dsdoanvien'] > 0)))
	{
		for($i=0; $i<sizeof($dsdoanvien); $i++)
		{
				$id_dv = post_in($dsdoanvien[$i]);
				$id_cosodoan = get_cosodoan_hientai($id_dv);
				$_ngaydong = post_in($ngaydong[$i]);
				$_sotien = post_in($sotien[$i]);
				$temp = (int)$_sotien;
				$temp = $temp/1000;
				$sql1 = "SELECT `doanphi`.`hanphi` FROM `doanphi` WHERE `doanphi`.`id_doanvien` = '$id_dv' AND `doanphi`.`id_cosodoan`= '$id_cosodoan'";
				$db->query($sql1);
				if($db->num_rows!=0)
				while($rows = $db->fetch_array())
				{
					$hanphi = $rows["hanphi"];
				}else $hanphi=$_ngaydong;
				$year = (int)substr($hanphi,0,4);
				$month = (int)substr($hanphi,5,2);
				$day = (int)substr($hanphi,8,2);
				$month = $month +$temp;
				while($month >12)
				{
					$temp1 = $month-12;
					$month = $temp1;
					$year +=1;
				}
				$new_hanphi = $year.'-'.$month.'-'.$day;
				$new_hanphi = strtotime($new_hanphi);
				$new_hanphi = date('Y-m-d',$new_hanphi);
				$sql2 = "INSERT INTO `doanphi`(
								`id_doanphi` ,
								`id_doanvien` ,
								`ngaydong` ,
								`sotien` ,
								`id_cosodoan`,
								`hanphi`
								)
								VALUES (
								NULL , '$id_dv', '$_ngaydong', '$_sotien', '$id_cosodoan', '$new_hanphi'
								)";
				$db->query($sql2);
		}
		$info="&#272;&#227; c&#7853;p nh&#7853;t &#273;o&#224;n ph&#237;.";
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
				ORDER BY `thongtindoanvien`.`id_doanvien` ASC";
			$db->query($sql);
			if($db->num_rows>0){
				$i=0;
				while($doanvien=$db->fetch_array()){
					$danhsachdoanvien[$i++]=$doanvien;
				}
			}
	}
return user_main_form(user_manage_form($danhsachdoanvien,$info));	
}
?>