<?php
function activity_info_form($danhsachchidoan){
$thongtin="";
for ($i=0;$i<count($danhsachchidoan);$i++)
{	
	$thongtin.="<option value =\"$i\">".$danhsachchidoan[$i]."</option>";
}
return
<<<EOF
<div class="activity_info_form">
    <!---Form header--->
    <div class="activity_info_form_header">
	<div class="lefthead"></div>
	<div class="midhead">
        <div class="form_header_text">
            <b>Th&#7889;ng k&#234; phong tr&#224;o</b>        
        </div>
	</div>
	<div class="righthead"></div>
    </div>
    <!---Form body--->
    <div class="activity_info_form_body">
	<div class="left"></div>
	<div class="mid">
		<table class="activity_info_form_text">
		<tbody>
			<tr>
			<td width="130px">T&#234;n phong tr&#224;o:</td>
			<td><input name="id_doanvien" type="text" class="activity_info_form_textbox"></td>
            </tr>
			<tr>
			<td width="130px">Chi &#273;o&#224;n ph&#225;t &#273;&#7897;ng:</td>
			<td><input type="text" class="activity_info_form_textbox"></td>
            </tr>
			<tr>
			<td width="130px">S&#7889; ng&#432;&#7901;i tham gia:</td>
			<td><input type="text" class="activity_info_form_textbox"></td>
            </tr>	
			<tr>
			<td width="130px" valign="top">&#272;&#225;nh gi&#225;:</td>
			<td><textarea class="activity_info_form_textarea"></textarea></td>
            </tr>			
			<tr>
			<td align="right" colspan="2"><input type="submit" value = "L&#432;u" class="activity_info_button"></input></td>
			</tr>
        </tbody>
        </table>
	</div>
	<div class="right"></div>
	</div>
	<div class="activity_info_form_footer">
		<div class="leftfoot"></div>
		<div class="midfoot"></div>
		<div class="rightfoot"></div>
	</div>
</div>
EOF;
}
?>