<?php
require_once("./styles/user_rate_manage.php");
function page_content()
{
	global $s,$t,$p,$page_header,$_GET,$_POST, $user, $db;
	$page_header="&#272;&#225;nh gi&#225; x&#7871;p lo&#7841;i &#273;o&#224;n vi&#234;n";
	if (!check_auth ( "qlcosodoan", 2 ) || (isset($_GET['id_cosodoan']) && !get_cosodoan_capduoi($user['id_doanvien'],"",1,post_in($_GET['id_cosodoan'])))) {
		return page_error("B&#7841;n kh&#244;ng c&#243; quy&#7873;n v&#224;o trang n&#224;y!");
	}
	$danhsachdoanvien=array();
	$danhsachphongtrao = array();
	$id_cosodoan=take_get('id_cosodoan');
	$tmp_date=date("m");
	if($tmp_date>7){
		$ystart=date("Y");
		$yend=date("Y")+1;
		$quart=1;
	}else{
		$ystart=date("Y")-1;
		$yend=date("Y");
		$quart=2;
	}
	if(isset($_POST['update_thongtin'])){
		$id_doanvien=take_post('id_doanvien');
		$danhgia=take_post('danhgia');
		$diem=take_post('diem');
		$loai=take_post('loai');
		if(check_cosodoancaptren($user['id_doanvien'],$id_doanvien) && $id_doanvien!=""){
			$db->query("SELECT `id` FROM `xeploaidoanvien` WHERE `id_doanvien`='$id_doanvien' AND `year_start`='$ystart' AND `year_end`='$yend' AND `quarter`='$quart'");
			if($db->num_rows>0) $db->query("UPDATE `xeploaidoanvien` SET `diem`='$diem',`loai`='$loai',`Note`='$danhgia' WHERE `id_doanvien`='$id_doanvien' AND `year_start`='$ystart' AND `year_end`='$yend' AND `quarter`='$quart'");
			else $db->query("INSERT INTO `xeploaidoanvien` (`id`, `id_doanvien`, `diem`, `loai`, `Note`, `year_start`, `year_end`, `quarter`) VALUES (NULL, '$id_doanvien', '$diem', '$loai', '$danhgia', '$ystart', '$yend', '$quart');");
			return "update finish";
		}else return "error";
	}else{
		$sql ="SELECT 	DISTINCT `thongtindoanvien`.`hoten`,
						`cosodoan`.`ten`,
						`thongtindoanvien`.`id_doanvien`
				FROM 	`thongtindoanvien`,
						`qhchidoan`,
						`cosodoan`,
						`doanvien`
				WHERE 	`qhchidoan`.`id_cosodoan` = '$id_cosodoan'
				AND 	`doanvien`.`qh_chidoan`= `qhchidoan`.`qh_chidoan`
				AND 	`qhchidoan`.`id_cosodoan`=`cosodoan`.`id_cosodoan`

				ORDER BY `thongtindoanvien`.`id_doanvien`";
		$query = $db->query($sql);
		if($db->num_rows>0)
		{
			$i=0;
			while($doanvien = mysql_fetch_array($query))
			{
				$id1 = $doanvien['id_doanvien'];
				$sql1 = "SELECT    `phongtraodoan`.`ten`,
								  `phongtraodoan`.`start`,
								  `thamgiaphongtrao`.`danhgia`

						FROM	  `phongtraodoan`,
								  `thamgiaphongtrao`

						WHERE	  `thamgiaphongtrao`.`id_doanvien` = '{$id1}'
						AND		  `thamgiaphongtrao`.`id_phongtraodoan` = `phongtraodoan`.`id_phongtraodoan`";
				$query1 = $db->query ( $sql1 );
				$j=0;
				while ( $pt = mysql_fetch_array ($query1))
				{
					$danhsachphongtrao [$id1][$j++] = $pt;
				}
				$danhsachdoanvien[$i]= $doanvien;
				$sql2="SELECT `diem`,`loai`,`Note` FROM `xeploaidoanvien` WHERE `id_doanvien`='{$doanvien['id_doanvien']}' AND `year_start`='$ystart' AND `year_end`='$yend' AND `quarter`='$quart' ORDER BY `id` DESC LIMIT 0,1";
				$query2=mysql_query($sql2);
				if(mysql_num_rows($query2)==1){
					$data=mysql_fetch_array($query2);
					$danhsachdoanvien[$i]['diem']=$data['diem'];
					$danhsachdoanvien[$i]['loai']=$data['loai'];
					$danhsachdoanvien[$i]['Note']=$data['Note'];
				}else{
					$danhsachdoanvien[$i]['diem']="";
					$danhsachdoanvien[$i]['loai']="";
					$danhsachdoanvien[$i]['Note']="";
				}
				$i++;
			}
		}
		return user_main_form(user_rate_manage_form($danhsachdoanvien,$danhsachphongtrao));
	}
}
?>