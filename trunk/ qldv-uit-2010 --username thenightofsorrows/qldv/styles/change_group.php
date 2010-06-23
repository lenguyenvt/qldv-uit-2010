<?php
function change_group_form($danhsachchidoan){
$thongtin="";
for ($i=0;$i<count($danhsachchidoan);$i++)
{	
	$thongtin.="<option value =\"$i\">".$danhsachchidoan[$i]."</option>";
}
return
<<<EOF
<div class="change_group_form">
    <!---Form header--->
    <div class="change_group_form_header">
	<div class="lefthead"></div>
	<div class="midhead">
        <div class="form_header_text">
            <b>Chuy&#7875;n sinh ho&#7841;t &#273;o&#224;n</b>        
        </div>
	</div>
	<div class="righthead"></div>
    </div>
    <!---Form body--->
    <div class="change_group_form_body">
	<div class="left"></div>
	<div class="mid">
		<table class="change_group_form_text">
		<tbody>
			<tr>
			<td width="140px">T&#234;n &#273;o&#224;n vi&#234;n:</td>
			<td width="160px"><input name="id_doanvien" type="text" class="change_group_form_textbox"></td>
            </tr>
			<tr>
			<td width="140px">Chi &#273;o&#224;n hi&#7879;n t&#7841;i:</td>
			<td width="160px"><input name="password" type="text" class="change_group_form_textbox"></td>
            </tr>
			<tr>
			<td width="140px">Chi &#273;o&#224;n chuy&#7875;n &#273;&#7871;n:</td>
			<td width="160px">
				<select style="width:162px">
{$thongtin}
				</select>
            </tr>
			<tr>
			<td align="center" colspan="2"><input type="submit" value = "Chuy&#7875;n" class="change_group_button"></input></td>
			</tr>
        </tbody>
        </table>
	</div>
	<div class="right"></div>
	</div>
	<div class="change_group_form_footer">
		<div class="leftfoot"></div>
		<div class="midfoot"></div>
		<div class="rightfoot"></div>
	</div>
</div>
EOF;
}
?>