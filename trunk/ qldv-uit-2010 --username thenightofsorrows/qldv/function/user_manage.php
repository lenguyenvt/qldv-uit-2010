<?php

require_once("./styles/user_manage.php");
require_once("./function.php");

function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST,$db,$refresh,$user;
	$page_header="Qu&#7843;n l&#253; &#273;o&#224;n vi&#234;n";
	if(check_auth("qldoanvien",1)){
		$capduoi = get_cosodoan_capduoi($user["id"]);
		$dscapduoi = explode(',',$capduoi);

		$id_cosodoan = $dscapduoi[0];
		$danhsachdoanvien = array();

		$id_cosodoan = $dscapduoi[0];
		if(isset($_POST['id_cosodoan'])) $id_cosodoan = post_in($_POST['id_cosodoan']); else $id_cosodoan=$user['id_cosodoan'];
		if(isset($_POST['dsdoanvien'])) $dsdoanvien = $_POST['dsdoanvien']; else $dsdoanvien="";
		if(isset($_POST['delete']) && isset($_POST['dsdoanvien']) && (sizeof($_POST['dsdoanvien'] > 0)) && check_auth("qldoanvien", 4))
		{
			for($i=0;$i<sizeof($dsdoanvien);$i++)
			{
				$id_dv = $dsdoanvien[$i];
				$id_dv = post_in($id_dv);
				if (check_cosodoancaptren($user['id_doanvien'],$id_dv) && check_auth_level($id_dv)<=check_auth_level($user['id_cosodoan']))
				{
						$sql1 = 
						"
						DELETE 
						FROM `doanphi`						
						WHERE `doanphi`.`id_doanvien` = '$id_dv'
						";
						
						$sql2 = 
						"
						DELETE
						FROM `doanvien`
						WHERE `doanvien`.`id_doanvien` = '$id_dv'
						";
						
						$sql3 =
						"
						DELETE 
						FROM `qhchidoan`
						WHERE `qhchidoan`.`id_doanvien` = '$id_dv'
						";
						
						$sql4 = 
						"
						DELETE 
						FROM `thamgiaphongtrao`
						WHERE `thamgiaphongtrao`.`id_doanvien` = '$id_dv'
						";						
											
						$db->query($sql1);
						$db->query($sql2);
						$db->query($sql3);
						$db->query($sql4);
				}
			}
		}
		
		if (isset($_POST['change_group']) && isset($_POST['dsdoanvien']) && (sizeof($_POST['dsdoanvien'] > 0)) && check_auth("qldoanvien", 4))
		{
			$ddtime=ddtime();
			for($i=0;$i<sizeof($dsdoanvien);$i++)
			{
				$id_dv = $dsdoanvien[$i];
				$id_dv = post_in($id_dv);
				$id_cosodoan_dv=get_cosodoan_hientai($id_dv);
				if($id_cosodoan_dv!=$id_cosodoan)
				if(check_cosodoancaptren($user['id_doanvien'],$id_dv) && check_auth_level($id_dv)<=check_auth_level($user['id_cosodoan'])){
					$sql="UPDATE `qhchidoan`,`doanvien` 
					SET `qhchidoan`.`end`='$ddtime' 
					WHERE `qhchidoan`.`qh_chidoan`=`doanvien`.`qh_chidoan` AND `doanvien`.`id_doanvien`='$id_dv'";
					$db->query($sql);
					$db->query("INSERT INTO `qhchidoan` (
								`qh_chidoan` ,
								`id_doanvien` ,
								`id_cosodoan` ,
								`start` ,
								`end` 
								)
								VALUES (
								NULL , '$id_dv', '$id_cosodoan', '$ddtime', '0000-00-00'
								);");
					$db->query("SELECT `qh_chidoan` FROM `qhchidoan` WHERE `id_doanvien`='$id_dv' ORDER BY `qh_chidoan` DESC  LIMIT 0,1");
					$qhchidoan_tmp=$db->fetch_array();
					$db->query("UPDATE `doanvien` SET `qh_chidoan`='{$qhchidoan_tmp['qh_chidoan']}',`auth`=2 WHERE `id_doanvien`='$id_dv'");
				}
			}
		}
		if(!get_cosodoan_capduoi($user['id_doanvien'],"",1,$id_cosodoan)) return user_main_form(page_error("B&#7841;n kh&#244;ng c&#243; quy&#7873;n truy c&#7853;p trang n&#224;y!"));
		$sql ="SELECT 	`thongtindoanvien`.`id_doanvien`,
						`thongtindoanvien`.`hoten`,
						`thongtindoanvien`.`gioitinh`,
						`thongtindoanvien`.`ngaysinh`,
						`auth`.`id` as `chucvu`,
						`doanvien`.`doan_phi`
						
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
					$danhsachdoanvien[$i]=$doanvien;
					$danhsachdoanvien[$i]['hanphi']="";
					if($doanvien['doan_phi']!=0){
						$xtmp=mysql_query("SELECT `hanphi` FROM `doanphi` WHERE `id_doanvien`='{$doanvien['id_doanvien']}' ORDER BY `id_doanphi` DESC LIMIT 0,1");
						if(mysql_num_rows($xtmp)==1){
							$xtmp=mysql_fetch_array($xtmp);
							$danhsachdoanvien[$i]['hanphi']=$xtmp['hanphi'];
						}
					}
					
					$i++;
				}
			}

		return user_main_form(user_manage_form($danhsachdoanvien));
	}else
		return user_main_form(page_error("B&#7841;n kh&#244;ng c&#243; quy&#7873;n truy c&#7853;p trang n&#224;y!"));
}
?>