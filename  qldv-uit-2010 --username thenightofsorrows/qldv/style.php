<?php
require_once("function.php");
require_once("config.php");
function page_header($title,$des,$refresh=""){
if($refresh!="") $refresh='<meta http-equiv="refresh" content="3; URL='.$refresh.'" />';
return
<<<EOF
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>{$title}</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="$des">
{$refresh}
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="includes/clientscript/jquery.js"></script>
</head>

<body>
<div class="main_content">
	<div class="header">
		<div class="header_top">
			<div class="lefttop"></div>
			<div class="midtop"></div>
			<div class="righttop"></div>
		</div>
		<div class="header_mid">
			<div class="left"></div>
			<div class="mid"></div>
			<div class="right"></div>
		</div>
		<div class="header_bottom">
			<div class="leftfoot"></div>
			<div class="midfoot"></div>
			<div class="rightfoot"></div>
		</div>
	</div>
<div class="clear"></div>
EOF;
}

function left_menu(){
global $user;
$ql="";
if(check_auth("qlphongtrao",1)) $ql.='			<tr>
			<td align="left"><a href="index.php?type=activity">Qu&#7843;n l&#253; phong tr&#224;o</a></td>
			</tr>';
if(check_auth("qldoanvien",1)) $ql.='			<tr>
			<td align="left"><a href="index.php?type=user_manage">Qu&#7843;n l&#253; &#273;o&#224;n vi&#234;n</td>
			</tr>';
if(check_auth("qldoanvien",4)) $ql.='			<tr>
			<td align="left"><a href="index.php?type=user_register">Th&#234;m &#273;o&#224;n vi&#234;n</td>
			</tr>';
if(check_auth("qlchucvu",1)) $ql.='			<tr>
			<td align="left"><a href="index.php?type=account">Qu&#7843;n l&#253; ch&#7913;c v&#7909;</td>
			</tr>';
if(check_auth("qlxeploai",1)) $ql.='			<tr>
			<td align="left"><a href="index.php?type=user_rate_manage">&#272;&#225;nh Gi&#225; &#272;o&#224;n Vi&#234;n</td>
			</tr>';
if(check_auth("qlcosodoan",1)) $ql.='			<tr>
			<td align="left"><a href="index.php?type=group_manage">C&#417; s&#7903; &#272;o&#224;n</td>
			</tr>';
if(check_auth("qlcosodoan",1)) $ql.='			<tr>
			<td align="left"><a href="index.php?type=qldoanphi">Qu&#7843;n L&#253; &#272;o&#224;n Ph&#237;</td>
			</tr>';

return
<<<EOF
{$ql}
EOF;
}
function user_main_form($user_info){
$left_menu=left_menu();
return 
<<<EOF
<div class="user_main_form">
	<!---Form header--->
	<div class="user_main_form_header">
		<div class="lefthead"></div>
		<div class="midhead">
		<div class="form_header_text">
			<b>Trang ch&#237;nh</b>        
		</div>
		</div>
		<div class="righthead"></div>
	</div>
	<!---Form body--->
	<div class="user_main_form_body">
	<div class="left"></div>
	<div class="mid">
		<table class="user_main_form_text">
		<tbody>
			<tr>
			<td class="user_main_form_avatar" align="center"><input type="image" src="images/avatar.png" /></td>
			</tr>
			<tr>
			<td align="center"><a href="index.php?type=user_info">Th&#244;ng tin c&#225; nh&#226;n</a></td>
			</tr>
			<tr>
			<td align="center"><a href="index.php?type=changepwd">&#272;&#7893;i m&#7853;t kh&#7849;u</a></td>
			</tr>
			<tr>
			<td align="center"><a href="index.php?type=logout">Tho&#225;t</a></td>
			</tr>
		</tbody>
		</table>
	</div>
	<div class="right"></div>
	</div>
	<div class="user_main_form_footer">
			<div class="leftfoot"></div>
			<div class="midfoot"></div>
			<div class="rightfoot"></div>
	</div>
	<!---Form header--->
	<div class="user_main_form_header" style="margin-top:20px">
		<div class="lefthead"></div>
		<div class="midhead">
		<div class="form_header_text">
			<b>Trang qu&#7843;n l&#253;</b>        
		</div>
		</div>
		<div class="righthead"></div>
	</div>
	<!---Form body--->
	<div class="user_main_form_body" style="height:135px">
	<div class="left"></div>
	<div class="mid">
		<table class="user_main_form_text" style="margin-left:10px">
		<tbody>
{$left_menu}
		</tbody>
		</table>
	</div>
	<div class="right"></div>
	</div>
	<div class="user_main_form_footer">
		<div class="leftfoot"></div>
		<div class="midfoot"></div>
		<div class="rightfoot"></div>
	</div>
</div>
{$user_info}
EOF;
}

function page_error($txt){
return
<<<EOF

			<div class="error-box"><p>{$txt}</p></div>
EOF;
}
function page_footer(){
return
<<<EOF
<div class="clear"></div>
		<div class="footer">
			<div class="footer_top">
				<div class="lefttop"></div>
				<div class="midtop"></div>
				<div class="righttop"></div>
			</div>
			<div class="footer_mid">
				<div class="left"></div>
				<div class="mid">
					<a href="index.php?type=about">Copyright &copy; CSGroup</a>
				</div>
				<div class="right"></div>
			</div>
			<div class="footer_bottom">
				<div class="leftfoot"></div>
				<div class="midfoot"></div>
				<div class="rightfoot"></div>
			</div>
		</div>
</div>           
</body>
</html>
EOF;
}
function make_select_cosodoan($get_capduoi=1,$class="",$style="width:220px;font-size:9pt",$myname="id_cosodoan"){
	global $db,$user;
	if($get_capduoi==1)
		$sql="SELECT `id_cosodoan`,`ten` FROM `cosodoan` WHERE ".get_cosodoan_capduoi($user['id_doanvien'],"`id_cosodoan`");
	else
		$sql="SELECT `id_cosodoan`,`ten` FROM `cosodoan` WHERE ".get_cosodoan($user['id_doanvien'],"`id_cosodoan`");
	$db->query($sql);
	$option_cosodoan="<select name=\"$myname\" id=\"$myname\" style=\"$style\" class=\"$class\">";
	$id_cosodoan=take_get('id_cosodoan');
	if($id_cosodoan=="") $id_cosodoan=take_post('id_cosodoan');
	while($tmp=$db->fetch_array()){
		if($tmp['id_cosodoan']==$id_cosodoan)
		$option_cosodoan.="\n<option value=\"{$tmp['id_cosodoan']}\" selected>{$tmp['ten']}</option>";
		else
		$option_cosodoan.="\n<option value=\"{$tmp['id_cosodoan']}\">{$tmp['ten']}</option>";
	}
	$option_cosodoan="$option_cosodoan </select>";
return $option_cosodoan;
}
?>