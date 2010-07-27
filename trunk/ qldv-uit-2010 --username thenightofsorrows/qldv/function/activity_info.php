<?php
require_once("./styles/activity_info.php");
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST,$db,$id_phongtraodoan;
	$page_header="Th&#7889;ng k&#234; phong tr&#224;o";
	if(isset($_GET['id_phongtraodoan']) && $_GET['id_phongtraodoan']!="") $id_phongtraodoan=post_in($_GET['id_phongtraodoan']); else return "L&#7895;i x&#7917; l&#253;!";
	if(isset($_GET['is_print'])) $is_print=1; else $is_print=0;
	if(!check_auth("qlphongtrao",2) && get_cosodoan_capduoi($user,"","",$id_phongtraodoan)) return "B&#7841;n kh&#244;ng c&#243; quy&#7873;n xem th&#244;ng k&#234; phong tr&#224;o n&#224;y.";
	if(isset($_POST['update_danhgia']) && isset($_POST['danhgia_phongtrao'])){
		foreach($_POST['danhgia_phongtrao'] as $a => $b){
			$a=post_in($a);
			$b=post_in($b);
			$sql="UPDATE `thamgiaphongtrao` SET `danhgia` = '$b' WHERE `thamgiaphongtrao`.`id` ='$a' LIMIT 1";
			$db->query($sql);
		}
	}
	$sql="SELECT `thamgiaphongtrao`.`id`,`thongtindoanvien`.`hoten`,`cosodoan`.`ten` as `chidoan`,`thamgiaphongtrao`.`danhgia` FROM `thongtindoanvien`,`doanvien`,`cosodoan`,`qhchidoan`,`thamgiaphongtrao` WHERE `thongtindoanvien`.`id_doanvien`=`doanvien`.`id_doanvien` AND `doanvien`.`qh_chidoan`=`qhchidoan`.`qh_chidoan` AND `qhchidoan`.`id_cosodoan`=`cosodoan`.`id_cosodoan` AND `thamgiaphongtrao`.`id_doanvien`=`doanvien`.`id_doanvien` AND `thamgiaphongtrao`.`id_phongtraodoan`='$id_phongtraodoan'";
	$db->query($sql);
	$sluong=$db->num_rows;
	$i=0;
	while($tmp=mysql_fetch_array($db->query_result))
		$thongtindoanvien[$i++]=$tmp;
	$sql="SELECT `ten`,`start`,`end` FROM `phongtraodoan` WHERE `id_phongtraodoan`='$id_phongtraodoan'";
	$db->query($sql);
	$thongtinphongtrao=mysql_fetch_array($db->query_result);
	$thongtinphongtrao['slthamgia']=$sluong;
	return activity_info_form($thongtinphongtrao,$thongtindoanvien,$is_print);
}
?>