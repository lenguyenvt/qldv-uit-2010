<?php
require_once("./styles/account.php");
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST,$db,$user;
	$page_header="Qu&#7843;n l&#253; ch&#7913;c v&#7909;";
	if(!check_auth("qlchucvu",4)) return "B&#7841;n kh&#244;ng c&#243; quy&#7873;n truy c&#7853;p ch&#7913;c n&#259;ng n&#224;y!";
	$edit=take_get("edit");
	if($edit!=""){
		if(isset($_POST['modify'])||isset($_POST['add'])||isset($_POST['delete'])){
			$qlphongtrao=make_permission("qlphongtrao");
			$qlcosodoan=make_permission("qlcosodoan");
			$qlhannopphi=make_permission("qlhannopphi");
			$qlxeploai=make_permission("qlxeploai");
			$qlthongtin=make_permission("qlthongtin");
			$thongtincanhan=make_permission("thongtincanhan");
			$qlchucvu=make_permission("qlchucvu");
			$qldoanvien=make_permission("qldoanvien");
			$name=take_post("name");
			$id=take_post("id");
			$level=take_post("level");
			if(isset($_POST['modify'])){
				$sql="UPDATE `auth` SET `level` = '$level',
				`thongtincanhan` = '$thongtincanhan',
				`qlchucvu` = '$qlchucvu',
				`qlthongtin` = '$qlthongtin',
				`qldoanvien` = '$qldoanvien',
				`qlphongtrao` = '$qlphongtrao',
				`qlxeploai` = '$qlxeploai',
				`qlhannopphi` = '$qlhannopphi',
				`qlcosodoan` = '$qlcosodoan',
				`name`='$name',
				`level`='$level' WHERE `id` ='$id'";
				$db->query($sql);
			}else if(isset($_POST['add'])){
				$sql="INSERT INTO `auth` (
				`id` ,
				`name` ,
				`level` ,
				`thongtincanhan` ,
				`qlchucvu` ,
				`qlthongtin` ,
				`qldoanvien` ,
				`qlphongtrao` ,
				`qlxeploai` ,
				`qlhannopphi` ,
				`qlcosodoan`
				)
				VALUES (
				NULL , '$name','$level' ,'$thongtincanhan' ,'$qlchucvu' ,'$qlthongtin' ,'$qldoanvien' ,'$qlphongtrao' ,'$qlxeploai' ,'$qlhannopphi' ,'$qlcosodoan'
				);";
				$db->query($sql);
			}else if(isset($_POST['delete'])){
				if($id<3) return "Kh&#244;ng th&#7875; x&#243;a &#273;&#432;&#7907;c ph&#226;n quy&#7873;n c&#417; s&#7903;!";
				$db->query("SELECT `id_doanvien` FROM `doanvien` WHERE `auth`='$id'");
				if($db->num_rows>0) return "Hi&#7879;n &#273;ang c&#243; &#273;o&#224;n vi&#234;n &#7903; quy&#7873;n n&#224;y, kh&#244;ng th&#7875; x&#243;a!";
				else{
					$db->query("DELETE FROM `auth` WHERE `id`='$id'");
				}
			}
		}
		$sql="SELECT `id`,`name`,`level` FROM `auth`";
		$db->query($sql);
		$i=0;
		while($danhsachtaikhoan[$i++]=$db->fetch_array());
		$db->query("SELECT * FROM `auth` WHERE `id`='$edit'");
		return user_main_form(account_form($danhsachtaikhoan,$db->fetch_array()));
	}
		$sql="SELECT `id`,`name`,`level` FROM `auth`";
		$db->query($sql);
		$i=0;
		while($danhsachtaikhoan[$i++]=$db->fetch_array());
	return user_main_form(account_form($danhsachtaikhoan));
}
function make_permission($in){
global $_POST;
if(isset($_POST[$in])){
	$s=0;
	foreach($_POST[$in] as $k => $v){
		$s+=$v;
	}
	if($s>7) $s=7;
	return $s;
}else
{
	return 0;
}
}
?>