<?php
function activity_info_form($thongtinphongtrao,$danhsachdoanvien,$is_print=0){
global $id_phongtraodoan;
$details="";
$button="";
if($is_print==0){
	$button="<table width=\"70%\" align=\"center\"><tr><td width=\"50%\" align=\"left\" border=0><a href=\"?type=activity_info&id_phongtraodoan=$id_phongtraodoan&is_print\">Xem b&#7843;n in</a></td><td width=\"50%\" align=\"right\"><input type=\"submit\" name=\"update_danhgia\" value=\"C&#7853;p nh&#7853;t th&#244;ng tin &#273;&#225;nh gi&#225;\"></tr></table>";
}
for($i=0;$i<sizeof($danhsachdoanvien);$i++){
	$j=$i+1;
	if($is_print==1)
		$details.="		<tr><td>{$j}</td><td>{$danhsachdoanvien[$i]['hoten']}</td><td>{$danhsachdoanvien[$i]['chidoan']}</td><td>{$danhsachdoanvien[$i]['danhgia']}</td></tr>\n";
	else
		$details.="		<tr><td>{$j}</td><td>{$danhsachdoanvien[$i]['hoten']}</td><td>{$danhsachdoanvien[$i]['chidoan']}</td><td><input name=\"danhgia_phongtrao[{$danhsachdoanvien[$i]['id']}]\" type=\"text\" value=\"{$danhsachdoanvien[$i]['danhgia']}\" class=\"danhgia\"></td></tr>\n";
}
return
<<<EOF
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Th&#7889;ng K&#234; Phong Tr&#224;o {$thongtinphongtrao['ten']}</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="">
</head>
<style>
.thongtinphongtrao{
width:50%;
margin-top: 10px;
margin-right: auto;
margin-bottom: 20px;
margin-left: auto;
font-family:tahoma,sans serif;
font-size:13px;
}
*{
font-family:tahoma,sans serif;
font-size:13px;
}
.ten-header{
font-size:24px;
font-weight:bold;
}
.danhsachdoanvien{
width:70%;
margin-top: 10px;
margin-right: auto;
margin-bottom: 20px;
margin-left: auto;
padding-left:0px;
font-family:tahoma,sans serif;
font-size:13px;
}
.danhsachdoanvien tr, .danhsachdoanvien td{
border: 1px solid #660000;
padding-left:10px;
}
.danhgia{
font-family:tahoma,sans serif;
font-size:13px;
width:260px;
}
</style>
<body>
<center>
<span class="ten-header">TH&#7888;NG K&#202; PHONG TR&#192;O</span>
</center>
	<table class="thongtinphongtrao">
		<tr>
			<td width="20%">Phong tr&#224;o:</td>
			<td width="80%"><b>{$thongtinphongtrao['ten']}</b></td>
		</tr>
		<tr>
			<td>S&#7889; l&#432;&#7907;ng tham gia:</td>
			<td><b>{$thongtinphongtrao['slthamgia']}</b></td>
		</tr>
		<tr>
			<td>Ng&#224;y ph&#225;t &#273;&#7897;ng:</td>
			<td><b>{$thongtinphongtrao['start']}</b></td>
		</tr>
		<tr>
			<td>Ng&#224;y k&#7871;t th&#250;c:</td>
			<td><b>{$thongtinphongtrao['end']}</b></td>
		</tr>
	</table>
	<form method="POST">
{$button}
	<table class="danhsachdoanvien" border="1px">
		<tr><td width="7%"><b>STT</b></td><td width="35%"><b>H&#7885; t&#234;n</b></td><td width="25%"><b>Chi &#273;o&#224;n</b></td><td><b>&#272;&#225;nh gi&#225;</b></td></tr>
{$details}
	</table>
{$button}
	</form>
	<table width="70%" align="center"><td align="right">Copyright &copy CSGroup</td></table>
</body>
</html>
EOF;
}
?>