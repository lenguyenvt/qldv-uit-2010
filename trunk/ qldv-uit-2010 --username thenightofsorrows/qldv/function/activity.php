<?php
require_once("./styles/activity.php");

function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST,$user,$db,$refresh;
	if(check_auth("qlphongtrao",1)){
		$page_header="Qu&#7843;n l&#253; phong tr&#224;o";
		$additional="";
		if(isset($_GET['from']) && is_valid_date($_GET['from'])){
			$_GET['from']=post_in($_GET['from']);
			$additional=" AND `phongtraodoan`.`start`>='{$_GET['from']}'";
		}else $_GET['from']="2010-01-01";
		if(isset($_GET['to']) && is_valid_date($_GET['to'])){
			$_GET['to']=post_in($_GET['to']);
			$additional.=" AND `phongtraodoan`.`end`<='{$_GET['to']}'";
		}else $_GET['to']="2010-01-01";		
		$sql="SELECT `phongtraodoan`.`id_phongtraodoan`,`phongtraodoan`.`ten`,`phongtraodoan`.`diengiai`,`phongtraodoan`.`start`,`phongtraodoan`.`end`,`phongtraodoan`.`id_cosodoan` FROM `phongtraodoan` WHERE (".get_cosodoan($user['id_doanvien'],"`phongtraodoan`.`id_cosodoan`")." OR ".get_cosodoan_capduoi($user['id_doanvien'],"`phongtraodoan`.`id_cosodoan`").") $additional ORDER BY `phongtraodoan`.`id_phongtraodoan` DESC LIMIT 0,50";
		
		$db->query($sql);
		if($db->num_rows>0){
			$i=0;
			while($tmp = mysql_fetch_array($db->query_result)){
				$danhsachphongtrao[$i++]=$tmp;
			}
		}
		else $danhsachphongtrao=array();
		$error="";
		if(isset($_POST['to_post'])){
			if(isset($_POST['id_phongtraodoan'])) $_id_phongtraodoan=post_in($_POST['id_phongtraodoan']); else $_id_phongtraodoan="";
			if(isset($_POST['ten'])) $_ten=post_in($_POST['ten']); else $_ten="";
			if(isset($_POST['start'])) $_start=post_in($_POST['start']); else $_start="";
			if(isset($_POST['end'])) $_end=post_in($_POST['end']); else $_end="";
			if(isset($_POST['diengiai'])) $_diengiai=post_in($_POST['diengiai']); else $_diengiai="";
			if(isset($_POST['id_cosodoan'])) $_id_cosodoan=post_in($_POST['id_cosodoan']); else $_id_cosodoan="";

			if(isset($_POST['insert'])){
				if(check_auth("qlphongtrao",2))
					if($_ten!="" && is_valid_date($_start) && is_valid_date($_end) && $_diengiai!=""){
						if(strtotime($_end)<strtotime($_start)) $error=page_error("Ng&#224;y k&#7871;t th&#250;c ph&#7843;i l&#7899;n h&#417;n ng&#224;y b&#7855;t &#273;&#7847;u!");
						else{
							if(get_cosodoan_capduoi($user['id_doanvien'],"",1,$_id_cosodoan)){
								$sql="INSERT INTO `phongtraodoan` (`id_phongtraodoan` ,
									`ten` ,
									`diengiai` ,
									`id_cosodoan` ,
									`start` ,
									`end` )
									VALUES (NULL , '{$_ten}', '{$_diengiai}', '{$_id_cosodoan}', '{$_start}', '{$_end}');";
								$db->query($sql);
							$error=page_error("&#272;&#227; th&#234;m th&#224;nh c&#244;ng! B&#7841;n vui l&#242;ng ch&#7901; v&#224;i gi&#226;y &#273;&#7875; phong tr&#224;o <b>{$_ten}</b> xu&#7845;t hi&#7879;n trong danh s&#225;ch phong tr&#224;o!");
							$refresh="?type=activity";
							}else $error=page_error("B&#7841;n kh&#244;ng c&#243; quy&#7873;n ph&#225;t &#273;&#7897;ng phong tr&#224;o &#7903; c&#7845;p &#273;o&#224;n n&#224;y!");
						}
					}else $error=page_error("B&#7841;n nh&#7853;p thi&#7871;u/sai th&#244;ng tin. L&#432;u &#253; l&#224; ng&#224;y th&#225;ng ph&#7843;i &#7903; d&#7841;ng yyyy/mm/dd.");
				else $error=page_error("B&#7841;n kh&#244;ng c&#243; quy&#7873;n s&#7917; d&#7909;ng ch&#7913;c n&#259;ng n&#224;y!");
			}else if(isset($_POST['update'])){
				if(check_auth("qlphongtrao",2))
					if($_ten!="" && is_valid_date($_start) && is_valid_date($_end) && $_diengiai!=""){
						if(strtotime($_end)<strtotime($_start)) $error=page_error("Ng&#224;y k&#7871;t th&#250;c ph&#7843;i l&#7899;n h&#417;n ng&#224;y b&#7855;t &#273;&#7847;u!");
						else{
								$sql="SELECT `id_phongtraodoan`,`id_cosodoan` FROM `phongtraodoan` WHERE `id_phongtraodoan`={$_id_phongtraodoan}";
								$db->query($sql);
								$_id_phongtraodoan_exist=0;
								if($db->num_rows==1){
									$_id_cosodoan_tmp=mysql_fetch_array($db->query_result);
									$_id_phongtraodoan_exist=1;
								}
								else $_id_cosodoan_tmp['id_cosodoan']=$_id_cosodoan;
							if($_id_phongtraodoan_exist==1){
echo get_cosodoan_capduoi($user['id_doanvien']);
								if((get_cosodoan_capduoi($user['id_doanvien'],"",1,$_id_cosodoan) && get_cosodoan_capduoi($user['id_doanvien'],"",1,$_id_cosodoan_tmp['id_cosodoan']))||$_id_cosodoan==$user['id_cosodoan']){
									$sql="UPDATE `phongtraodoan` SET `diengiai` = '{$_diengiai}',
										`id_cosodoan` = '{$_id_cosodoan}',
										`start` = '{$_start}',
										`end` = '{$_end}',
										`ten`= '{$_ten}' WHERE `id_phongtraodoan`='{$_id_phongtraodoan}' LIMIT 1 ;";
									$db->query($sql);
								$error=page_error("&#272;&#227; c&#7853;p nh&#7853;t th&#224;nh c&#244;ng! B&#7841;n vui l&#242;ng ch&#7901; v&#224;i gi&#226;y &#273;&#7875; phong tr&#224;o <b>{$_ten}</b> thay &#273;&#7893;i trong danh s&#225;ch phong tr&#224;o!");
								$refresh="?type=activity";
								}else $error=page_error("B&#7841;n kh&#244;ng c&#243; quy&#7873;n ph&#225;t &#273;&#7897;ng phong tr&#224;o &#7903; c&#7845;p &#273;o&#224;n n&#224;y!");
							}else $error=page_error("Kh&#244;ng t&#236;m th&#7845;y phong tr&#224;o n&#224;y!");
						}
					}else $error=page_error("B&#7841;n nh&#7853;p thi&#7871;u/sai th&#244;ng tin. L&#432;u &#253; l&#224; ng&#224;y th&#225;ng ph&#7843;i &#7903; d&#7841;ng yyyy/mm/dd.");
				else $error=page_error("B&#7841;n kh&#244;ng c&#243; quy&#7873;n s&#7917; d&#7909;ng ch&#7913;c n&#259;ng n&#224;y!");
			}else if(isset($_POST['attend'])){
				if($_id_phongtraodoan>0 && $_id_phongtraodoan!=""){
					$sql="SELECT `phongtraodoan`.`id_phongtraodoan`,`phongtraodoan`.`ten`,`phongtraodoan`.`start`,`phongtraodoan`.`end`,`phongtraodoan`.`id_cosodoan` FROM `phongtraodoan` WHERE (".get_cosodoan($user['id_doanvien'],"`phongtraodoan`.`id_cosodoan`")." OR ".get_cosodoan_capduoi($user['id_doanvien'],"`phongtraodoan`.`id_cosodoan`").") AND `phongtraodoan`.`id_phongtraodoan`='{$_id_phongtraodoan}' AND `phongtraodoan`.`end`>'".ddtime()."' ORDER BY `phongtraodoan`.`id_phongtraodoan` DESC LIMIT 0,30";
					$db->query($sql);
					if($db->num_rows==1){
						$sql="SELECT `id` FROM `thamgiaphongtrao` WHERE `id_doanvien`='{$user['id_doanvien']}' AND `id_phongtraodoan`='{$_id_phongtraodoan}'";
						$db->query($sql);
						if($db->num_rows!=0) $error=page_error("B&#7841;n &#273;&#227; &#273;&#259;ng k&#253; tham gia phong tr&#224;o n&#224;y r&#7891;i!"); 
						else{
							$sql="INSERT INTO `thamgiaphongtrao` (`id` ,
								`id_doanvien` ,
								`id_phongtraodoan` ,
								`danhgia` )
								VALUES (NULL , '{$user['id_doanvien']}', '{$_id_phongtraodoan}', '');";
							$db->query($sql);
							$error=page_error("Tham gia phong tr&#224;o th&#224;nh c&#244;ng!");
						}
					}else $error=page_error("B&#7841;n kh&#244;ng th&#7875; tham gia phong tr&#224;o n&#224;y!");
				}
				else $error=page_error("B&#7841;n kh&#244;ng th&#7875; tham gia phong tr&#224;o n&#224;y!");
			}else if(isset($_POST['delete'])){
				if(check_auth("qlphongtrao",4) && isset($_POST['xoa_phong_trao']) && sizeof($_POST['xoa_phong_trao'])){
					$not_del=0;
					for($i=0;$i<sizeof($_POST['xoa_phong_trao']);$i++){
						$todel=post_in($_POST['xoa_phong_trao'][$i]);
						$sql="SELECT `phongtraodoan`.`id_phongtraodoan`,`phongtraodoan`.`ten` FROM `phongtraodoan` WHERE (".get_cosodoan_capduoi($user['id_doanvien'],"`phongtraodoan`.`id_cosodoan`").") AND `phongtraodoan`.`id_phongtraodoan`='$todel'";
						$db->query($sql);
						if($db->num_rows!=1){
							$not_del=1;
							break;
						}
					}
					if($not_del==1) $error=page_error("Phong tr&#224;o b&#7841;n ch&#7885;n kh&#244;ng th&#7875; x&#243;a &#273;&#432;&#7907;c!");
					else{
						$todel=post_in(implode(",",$_POST['xoa_phong_trao']));
						$sql="DELETE FROM `phongtraodoan` WHERE `id_phongtraodoan` IN ($todel)";
						$db->query($sql);
						$sql="DELETE FROM `thamgiaphongtrao` WHERE `id_phongtraodoan` IN ($todel)";
						$db->query($sql);
						$error=page_error("&#272;&#227; x&#243;a th&#224;nh c&#244;ng!");
						$refresh="?type=activity";
					}
				}else $error=page_error("B&#7841;n kh&#244;ng c&#243; quy&#7873;n x&#243;a phong tr&#224;o!");
			}
		}
		return user_main_form(activity_form($danhsachphongtrao,$error));
	}else{
		return page_error("B&#7841;n kh&#244;ng c&#243; quy&#7873;n v&#224;o m&#7909;c n&#224;y!");
	}
}
?>