<?php
function news_body($news_list="",$err=""){
if(check_auth("qlthongtin",1)){
	$_edit=1;
	$_new="";
}else{
	$_edit=0;
	$_new="";
}
$tintuc_body="";
for($i=0;$i<sizeof($news_list);$i++){
	$tintuc_body.='<li><a href="?type=tintuc&id='.$news_list[$i]['id'].'">'.$news_list[$i]['tieude'].'</a> &#273;&#259;ng b&#7903;i <b>'.$news_list[$i]['username'].'</b> v&#224;o l&#250;c '.$news_list[$i]['time'].'</li>';
	if(isset($news_list[$i]['noidung'])){
		if($_edit==1) $tintuc_body.="<br /><a href='?type=tintuc&del=".$news_list[$i]['id']."'>[X&#243;a tin]</a>";
		$tintuc_body.="<br />".upbcode($news_list[$i]['noidung']);
		break;
	}
}
if($_edit==1){
	$tintuc_post='<b>&#272;&#259;ng tin t&#7913;c m&#7899;i</b><table width=100% border=0><tr><td width=10%></td><td width=70%></td></tr>
				<tr><td valign=top><form method="POST">Ti&#234;u &#273;&#7873;:</td><td><input type="text" name="tieude" value="" size=40 maxlength=50></td></tr>
				<tr><td valign=top>N&#7897;i dung:</td>
				<td><textarea class="textarea" name="noidung" rows="20" cols="60"></textarea></td></tr>
				<tr><td></td><td><input type="submit" value="&#272;&#259;ng tin"></form></td></tr>
			</table>';
}else $tintuc_post="";
return
<<<EOF
<div class="activity_form">
{$err}<br />
{$tintuc_body}<br /><br /><hr><br />
{$tintuc_post}
</div>
EOF;
}
?>