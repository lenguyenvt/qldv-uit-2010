<?php
require_once("./styles/user_register.php");
function page_content(){
	global $s,$t,$p,$page_header,$_GET,$_POST,$db,$user;
	$page_header="Th&#234;m &#273;o&#224;n vi&#234;n";
	if(check_auth("qldoanvien",2)){
		$info="";
		if(isset($_POST['is_single']) && isset($_POST['id_cosodoan']) && $_POST['id_cosodoan']!=""){
			$usr=take_post('username');
			$pw=encode(take_post('pw'));
			$name=take_post('name');
			$id_cosodoan=take_post('id_cosodoan');
			$email=take_post('email');
			$birthday=take_post('birthday');
			if(get_cosodoan_capduoi ( $user ['id_doanvien'], "", 1, $id_cosodoan )){
			if($name=="" || $usr== "" || $pw=="" || $birthday=="" || $email==""){
				$info="B&#7841;n ch&#432;a &#273;i&#7873;n &#273;&#7847;y &#273;&#7911; th&#244;ng tin!";
			}else{
							    	$sql="SELECT `id_doanvien` from `doanvien` WHERE UCASE(`username`)=UCASE('$usr')";
			    	$db->query($sql);
			    	if($db->num_rows>0){
			    		$info.="<br />T&#234;n &#273;&#259;ng nh&#7853;p n&#224;y &#273;&#227; t&#7891;n t&#7841;i!";
			    	}else{
			    		$sql="INSERT INTO `doanvien` (
								`id_doanvien` ,
								`username` ,
								`password` ,
								`doan_phi` ,
								`auth` ,
								`sid` ,
								`ip` ,
								`email` ,
								`qh_chidoan` 
								)
								VALUES (
								NULL , '$usr', '$pw', '0', '2', '', '', '$email', '0'
								);";
						$db->query($sql);
						$sql="SELECT `id_doanvien` FROM `doanvien` WHERE `username`='$usr'";
						$db->query($sql);
						$id_doanvien=$db->fetch_array();
						$id_doanvien=$id_doanvien['id_doanvien'];
						$sql="INSERT INTO `qhchidoan` (
							`qh_chidoan` ,
							`id_doanvien` ,
							`id_cosodoan` ,
							`start` ,
							`end` 
							)
							VALUES (
							NULL , '$id_doanvien', '$id_cosodoan', '".ddtime()."', '".ddtime()."'
							);";
						$db->query($sql);
						$sql="SELECT `qh_chidoan` FROM `qhchidoan` WHERE `id_doanvien`=$id_doanvien AND `id_cosodoan`=$id_cosodoan";
						$db->query($sql);
						$qh_chidoan=$db->fetch_array();
						$qh_chidoan=$qh_chidoan['qh_chidoan'];
						$sql="UPDATE `doanvien` SET `qh_chidoan`=$qh_chidoan WHERE `id_doanvien`=$id_doanvien";
						$db->query($sql);
						$sql="INSERT INTO `thongtindoanvien` (`id_doanvien`, `congvieclaunhat`, `congviec`, `khenthuong`, `kyluat`, `tinhtrangsuckhoe`, `chieucao`, `cannang`, `nhommau`, `cmnd`, `thuongbinhloai`, `hoten`, `tenkhac`, `gioitinh`, `capuyhientai`, `capuykiem`, `chucvu`, `ngaysinh`, `noisinh`, `quequan`, `noitamtru`, `dienthoainharieng`, `dantoc`, `tongiao`, `xuatthangiadinh`, `ngaytuyendung`, `coquan`, `ngayvaocoquancongtac`, `ngayvaodangdubi`, `ngayvaodangchinhthuc`, `ngaynhapngu`, `ngayxuatngu`, `chucvucaonhat`, `trinhdovanhoa`, `trinhdolyluanchinhtri`, `trinhdongoaingu`, `hochamcaonhat`, `congtacchinh`, `ngachcongchuc`, `bacluong`, `hesoluong`, `danhhieu`, `sotruong`, `giadinhlietsi`, `dacdiembanthan`, `quanhenuocngoai`, `noithuongtru`, `dienthoaididong`, `ngayvaodoan`) VALUES ('$id_doanvien', NULL, NULL, NULL, NULL, ' ', '0', '0', '0', '0', NULL, '$name', NULL, '0', NULL, NULL, NULL, '$birthday', ' ', ' ', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' ', ' ', '".ddtime()."');";
						$db->query($sql);
						$info="&#272;&#227; t&#7841;o &#273;o&#224;n vi&#234;n $name.";
				}
			}
			}else{
				$info="B&#7841;n kh&#244;ng c&#243; quy&#7873;n th&#234;m &#273;o&#224;n vi&#234;n &#7903; chi &#273;o&#224;n n&#224;y.";
			}
		}
		else if(isset($_POST['is_upload']) && isset($_POST['id_cosodoan']) && $_POST['id_cosodoan']!=""){
			$target_path = "uploads/";
			$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
			$id_cosodoan=take_post('id_cosodoan');
			if(get_cosodoan_capduoi ( $user ['id_doanvien'], "", 1, $id_cosodoan ))
			if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
			    $info.="&#272;&#227; upload t&#7853;p tin ".  basename( $_FILES['uploadedfile']['name']);
			    $f=fopen($target_path,"r");
			    $data=fread($f,filesize($target_path));
			    $sp=explode("\n",$data);
			    $sc=0;
			    $info.="<br />C&#243; ".sizeof($sp)." th&#244;ng tin &#273;o&#224;n vi&#234;n &#273;&#432;&#7907;c &#273;&#432;a v&#224;o.";
			    if(sizeof($sp)>150) $info.="<br />Qu&#225; nhi&#7873;u m&#7851;u th&#244;ng tin &#273;o&#224;n vi&#234;n! Gi&#7899;i h&#7841;n &#7903; 100 &#273;o&#224;n vi&#234;n &#273;&#432;&#7907;c nh&#7853;p m&#7895;i l&#7847;n!";
			    else
			    for($i=0;$i<sizeof($sp);$i++){
			    	$sp2=explode("	",$sp[$i]);
			    	if(sizeof($sp2)!=5){
			    		$info.="<br />L&#7895;i &#7903; th&#244;ng tin th&#7913; ".($i+1);
			    		break;
			    	}
			    	$name=post_in($sp2[0]);
			    	$email=post_in($sp2[1]);
			    	$birthday=post_in($sp2[2]);
			    	$usr=post_in($sp2[3]);
			    	$pw=encode(post_in($sp2[4]));
			    	$sql="SELECT `id_doanvien` from `doanvien` WHERE UCASE(`username`)=UCASE('$usr')";
			    	$db->query($sql);
			    	if($db->num_rows>0){
			    		$info.="<br />B&#7883; tr&#249;ng t&#234;n &#273;&#259;ng nh&#7853;p &#7903; th&#244;ng tin &#273;o&#224;n vi&#234;n th&#7913; ".($i+1)." (t&#234;n &#273;&#259;ng nh&#7853;p $usr).<br />Ng&#432;ng qu&#225; tr&#236;nh nh&#7853;p.";
			    		break;
			    	}else{
			    		$sql="INSERT INTO `doanvien` (
								`id_doanvien` ,
								`username` ,
								`password` ,
								`doan_phi` ,
								`auth` ,
								`sid` ,
								`ip` ,
								`email` ,
								`qh_chidoan` 
								)
								VALUES (
								NULL , '$usr', '$pw', '0', '2', '', '', '$email', '0'
								);";
						$db->query($sql);
						$sql="SELECT `id_doanvien` FROM `doanvien` WHERE `username`='$usr'";
						$db->query($sql);
						$id_doanvien=$db->fetch_array();
						$id_doanvien=$id_doanvien['id_doanvien'];
						$sql="INSERT INTO `qhchidoan` (
							`qh_chidoan` ,
							`id_doanvien` ,
							`id_cosodoan` ,
							`start` ,
							`end` 
							)
							VALUES (
							NULL , '$id_doanvien', '$id_cosodoan', '".ddtime()."', '".ddtime()."'
							);";
						$db->query($sql);
						$sql="SELECT `qh_chidoan` FROM `qhchidoan` WHERE `id_doanvien`=$id_doanvien AND `id_cosodoan`=$id_cosodoan";
						$db->query($sql);
						$qh_chidoan=$db->fetch_array();
						$qh_chidoan=$qh_chidoan['qh_chidoan'];
						$sql="UPDATE `doanvien` SET `qh_chidoan`=$qh_chidoan WHERE `id_doanvien`=$id_doanvien";
						$db->query($sql);
						$sql="INSERT INTO `thongtindoanvien` (`id_doanvien`, `congvieclaunhat`, `congviec`, `khenthuong`, `kyluat`, `tinhtrangsuckhoe`, `chieucao`, `cannang`, `nhommau`, `cmnd`, `thuongbinhloai`, `hoten`, `tenkhac`, `gioitinh`, `capuyhientai`, `capuykiem`, `chucvu`, `ngaysinh`, `noisinh`, `quequan`, `noitamtru`, `dienthoainharieng`, `dantoc`, `tongiao`, `xuatthangiadinh`, `ngaytuyendung`, `coquan`, `ngayvaocoquancongtac`, `ngayvaodangdubi`, `ngayvaodangchinhthuc`, `ngaynhapngu`, `ngayxuatngu`, `chucvucaonhat`, `trinhdovanhoa`, `trinhdolyluanchinhtri`, `trinhdongoaingu`, `hochamcaonhat`, `congtacchinh`, `ngachcongchuc`, `bacluong`, `hesoluong`, `danhhieu`, `sotruong`, `giadinhlietsi`, `dacdiembanthan`, `quanhenuocngoai`, `noithuongtru`, `dienthoaididong`, `ngayvaodoan`) VALUES ('$id_doanvien', NULL, NULL, NULL, NULL, ' ', '0', '0', '0', '0', NULL, '$name', NULL, '0', NULL, NULL, NULL, '$birthday', ' ', ' ', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' ', ' ', '".ddtime()."');";
						$db->query($sql);
						$sc++;
					}
			    }
			    $info.="<br />Nh&#7853;p th&#224;nh c&#244;ng $sc th&#244;ng tin &#273;o&#224;n vi&#234;n.";
			    unlink($target_path);
			} else{
			    $info.="C&#243; l&#7895;i trong qu&#225; tr&#236;nh upload!";
			}
		}
		return user_main_form(user_register_form($info));
	}else
		return user_main_form(page_error("B&#7841;n kh&#244;ng c&#243; quy&#7873;n truy c&#7853;p trang n&#224;y!"));
}
?>