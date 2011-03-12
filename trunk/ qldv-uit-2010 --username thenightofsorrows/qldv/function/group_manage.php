<?php
require_once ("./styles/group_manage.php");
function page_content() {
	global $s, $t, $p, $page_header, $_GET, $_POST, $db, $user;
	$error="";
	$page_header = "Qu&#7843;n l&#253; c&#417; s&#7903; &#272;o&#224;n";
	if (check_auth ( "qlcosodoan", 1 )) {
		if (isset ( $_POST ['to_post'] ))
			if (check_auth ( "qlcosodoan", 2 )) {
				if (isset ( $_POST ['ten'] ))
					$_ten = post_in ( $_POST ['ten'] );
				else
					$_ten = "";
				if (isset($_POST ['id_cosodoan']))
					$_id_cosodoan = post_in ( $_POST ['id_cosodoan'] );
				else
					$_id_cosodoan = "";
				if (isset($_POST ['co_dau']))
					$_co_dau = post_in ( $_POST ['co_dau'] );
				else
					$_co_dau = "";
				if (isset ( $_POST ['parent'] ))
					$_parent = post_in ( $_POST ['parent'] );
				else
					$_parent = "";
				if (isset ( $_POST ['sua'] )) {
					if (get_cosodoan_capduoi ( $user ['id_doanvien'], "", 1, $_id_cosodoan )) {
						$sql = "UPDATE `cosodoan` SET `ten`='$_ten' WHERE `id_cosodoan`='$_id_cosodoan'";
						$db->query($sql);
						if(check_auth("qlcosodoan",4) && get_cosodoan_capduoi($user['id_doanvien'],"",1,$_parent) && $_parent!=$_id_cosodoan){
							$sql = "UPDATE `cosodoan` SET `co_dau`='$_co_dau',`parent`='$_parent' WHERE `id_cosodoan`='$_id_cosodoan'";
							$db->query($sql);
						}
						$error="C&#7853;p nh&#7853;t th&#244;ng tin c&#417; s&#7903; &#273;o&#224;n th&#224;nh c&#244;ng!";
					}
				}else if (isset ( $_POST ['them'] )) {
					if(get_cosodoan_capduoi ( $user ['id_doanvien'], "", 1, $_parent )){
						if(!check_auth("qlcosodoan",4)) $_co_dau="";
						$sql="INSERT INTO `cosodoan` (
								`id_cosodoan` ,
								`ten` ,
								`parent` ,
								`co_dau` 
								)
								VALUES (
								NULL , '$_ten', '$_parent', '$_co_dau'
								);";
						$db->query($sql);
						$error="Th&#234;m c&#417; s&#7903; &#273;o&#224;n th&#224;nh c&#244;ng!";
					}else $error="B&#7841;n kh&#244;ng c&#243; quy&#7873;n th&#7921;c hi&#7879;n thao t&#225;c n&#224;y!";
				}else if (isset ( $_POST ['xoa'] ) && isset($_POST['select_cosodoan'])) {
					if(check_auth("qlcosodoan",4)){
						$is_error=0;
						for($i=0;$i<sizeof($_POST['select_cosodoan']);$i++){
							$_POST['select_cosodoan'][$i]=post_in($_POST['select_cosodoan'][$i]);
							$sql="SELECT `id_cosodoan` FROM `cosodoan` WHERE `parent`='{$_POST['select_cosodoan'][$i]}'";
							$db->query($sql);
							if($db->num_rows>0){
								$is_error=1;
								break;
							}
							$sql="SELECT `doanvien`.`id_doanvien` FROM `doanvien`,`qhchidoan` WHERE `doanvien`.`qh_chidoan`=`qhchidoan`.`qh_chidoan` AND `qhchidoan`.`id_cosodoan`='{$_POST['select_cosodoan'][$i]}'";
							$db->query($sql);
							if($db->num_rows>0){
								$is_error=1;
								break;
							}
						}
						if($is_error==1) $error="C&#417; s&#7903; &#273;o&#224;n kh&#244;ng tr&#7889;ng, kh&#244;ng x&#243;a &#273;&#432;&#7907;c";
						else{
							for($i=0;$i<sizeof($_POST['select_cosodoan']);$i++){
								echo $_POST['select_cosodoan'][$i];
								$sql="DELETE FROM `cosodoan` WHERE `cosodoan`.`id_cosodoan` = '{$_POST['select_cosodoan'][$i]}' LIMIT 1";
								$db->query($sql);
							}
							$error="X&#243;a th&#224;nh c&#244;ng!";
						}
					}else $error="B&#7841;n kh&#244;ng c&#243; quy&#7873;n th&#7921;c hi&#7879;n thao t&#225;c n&#224;y!";
				}
			}
		$sql = "SELECT `id_cosodoan`,`ten`,`parent`,`co_dau` FROM `cosodoan` WHERE " . get_cosodoan_capduoi($user['id_doanvien'], "`id_cosodoan`" );
		$db->query ($sql);
		$i = 0;
		$danhsachcosodoan = array ();
		while ( $tmp = mysql_fetch_array ( $db->query_result ) ) {
			$danhsachcosodoan [$i++] = $tmp;
		}
		return user_main_form(group_manage_form($danhsachcosodoan,$error!=""?page_error($error):""));
	} else
		return user_main_form(page_error("B&#7841;n kh&#244;ng c&#243; quy&#7873;n truy c&#7853;p trang n&#224;y!"));
}
?>