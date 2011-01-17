<?php
function take_permission($in){
	$per[1]="";
	$per[2]="";
	$per[4]="";
	if($in==1||$in==3||$in==5||$in==7) $per[1]="checked";
	if($in==2||$in==3||$in==6||$in==7) $per[2]="checked";
	if($in==4||$in==5||$in==6||$in==7) $per[4]="checked";

	return $per;
}
function account_form($danhsachchucvu,$data=""){
global $_GET;
$thongtin="";
for ($i=0;$i<count($danhsachchucvu);$i++)
{
	if(isset($data['id']) && $data['id']==$danhsachchucvu[$i]['id'])
	$thongtin.="<tr class=\"account_form_table_content_highlighted\">
						<td width=\"10%\">".$danhsachchucvu[$i]['id']."</td>
						<td width=\"80%\">".$danhsachchucvu[$i]['name']."</td>
						<td width=\"10%\">".$danhsachchucvu[$i]['level']."</td>
					</tr>";
	else
	$thongtin.="<tr class=\"account_form_table_content_highlight\" onClick=\"location.href='?type=account&edit={$danhsachchucvu[$i]['id']}'\">
						<td width=\"10%\">".$danhsachchucvu[$i]['id']."</td>
						<td width=\"80%\">".$danhsachchucvu[$i]['name']."</td>
						<td width=\"10%\">".$danhsachchucvu[$i]['level']."</td>
					</tr>";
};
$select_level="";
for($i=0;$i<10;$i++)
	if(isset($data['level']) && $data['level']==$i)
		$select_level.="<option value=\"$i\" selected>$i</option>";
	else
		$select_level.="<option value=\"$i\">$i</option>";
$select_level="<select name=\"level\" id=\"level\">$select_level</select>";

if(isset($data['qlphongtrao'])) $qlphongtrao=take_permission($data['qlphongtrao']); else $qlphongtrao=take_permission(0);
if(isset($data['qlcosodoan'])) $qlcosodoan=take_permission($data['qlcosodoan']); else $qlcosodoan=take_permission(0);
if(isset($data['qlhannopphi'])) $qlhannopphi=take_permission($data['qlhannopphi']); else $qlhannopphi=take_permission(0);
if(isset($data['qlxeploai'])) $qlxeploai=take_permission($data['qlxeploai']); else $qlxeploai=take_permission(0);
if(isset($data['qlthongtin'])) $qlthongtin=take_permission($data['qlthongtin']); else $qlthongtin=take_permission(0);
if(isset($data['thongtincanhan'])) $thongtincanhan=take_permission($data['thongtincanhan']); else $thongtincanhan=take_permission(0);
if(isset($data['qlchucvu'])) $qlchucvu=take_permission($data['qlchucvu']); else $qlchucvu=take_permission(0);
if(isset($data['qldoanvien'])) $qldoanvien=take_permission($data['qldoanvien']); else $qldoanvien=take_permission(0);
if(isset($data['name'])) $name=$data['name']; else $name="";
if(isset($data['id'])) $id=$data['id']; else $id="";

return
<<<EOF
<div class="account_form">
    <!---Form header--->
    <div class="account_form_header">
        <div class="lefthead"></div>
        <div class="midhead">
            <div class="form_header_text">
               <b>Qu&#7843;n l&#253; ch&#7913;c v&#7909;</b>    
            </div>
        </div>
        <div class="righthead"></div>
    </div>
    <!---Form body--->
    <div class="account_form_body">
    <div class="left"></div>
	<div class="mid">
		<table class="account_form_text" width="100%">
        <tbody>		
		<tr height="24px">
			<td width="467px">
				Danh s&#225;ch ch&#7913;c v&#7909;:
			</td>			
		</tr>
		<tr valign="top">
			<td width="467px">
			<table class="account_form_table" width="100%">
			<tr>
				<td>
					<table class = "account_form_table_header" cellspacing="0" width="100%" border="1">
					<tr>	
                   					<td width="10%">ID</td>					
						<td width="80%">Ph&#226;n quy&#7873;n</td>
				                        <td width="10%">Level</td>
						<td>&nbsp;</td>
					</tr>                    
					</table>
				</td>
			</tr> 
			<tr>
				<td>
				<div class="account_form_table_scroll">
					<table class="account_form_table_content" width="100%">
{$thongtin}
					</table>	
				</div>
				</td>	
			</tr>
	<tr>
	<td align="left">
		<form method="POST">
		<table border="0" width="100%"><tr><td width="50%">
		<table border="0" width="100%">
			<tr>
				<td width="20%">Ph&#226;n quy&#7873;n:</td>
				<td><input type="text" name="name" id="name" style="width:200px" value="{$name}"></td>
				<input type="hidden" name="id" value="{$id}">
			</tr>
			<tr>
				<td>Level:</td>
				<td>{$select_level}</td>
			</tr>
			<tr>
				<td>Phong tr&#224;o:</td>
				<td><input type="checkbox" name="qlphongtrao[1]" value="1" {$qlphongtrao[1]}> Xem v&#224; tham gia phong tr&#224;o
				<br /><input type="checkbox" name="qlphongtrao[2]" value="2" {$qlphongtrao[2]}> Th&#234;m, s&#7917;a v&#224; xem th&#7889;ng k&#234; v&#224; &#273;&#225;nh gi&#225;
				<br /><input type="checkbox" name="qlphongtrao[4]" value="4" {$qlphongtrao[4]}> X&#243;a phong tr&#224;o
				</td>
			</tr>

			<tr>
				<td>C&#417; s&#7903; &#273;o&#224;n:</td>
				<td><input type="checkbox" name="qlcosodoan[1]" value="1" {$qlcosodoan[1]}> Xem danh s&#225;ch c&#417; s&#7903; &#273;o&#224;n
				<br /><input type="checkbox" name="qlcosodoan[2]" value="2" {$qlcosodoan[2]}> Th&#234;m, s&#7917;a c&#417; s&#7903; &#273;o&#224;n
				<br /><input type="checkbox" name="qlcosodoan[4]" value="4" {$qlcosodoan[4]}> X&#243;a c&#417; s&#7903; &#273;o&#224;n v&#224; th&#234;m c&#417; s&#7903; &#273;o&#224;n c&#243; d&#7845;u
				</td>
			</tr>

			<tr>
				<td>H&#7841;n ph&#237;:</td>
				<td><input type="checkbox" name="qlhannopphi[1]" value="1" {$qlhannopphi[1]}> Qu&#7843;n l&#253; &#273;o&#224;n ph&#237;
				</td>
			</tr>

			<tr>
				<td>&#272;&#225;nh gi&#225; x&#7871;p lo&#7841;i:</td>
				<td><input type="checkbox" name="qlxeploai[1]" value="1" {$qlxeploai[1]}> &#272;&#225;nh gi&#225; x&#7871;p lo&#7841;i &#273;o&#224;n vi&#234;n
				</td>
			</tr>
		</table></td><td>
		<table border="0" width="100%">
			<tr>
				<td width=20%>Tin t&#7913;c:</td>
				<td><input type="checkbox" name="qlthongtin[1]" value="1"  {$qlthongtin[1]}> &#272;&#259;ng tin t&#7913;c
				<br /><input type="checkbox" name="qlthongtin[4]" value="4" {$qlthongtin[4]}> X&#243;a tin t&#7913;c
				</td>
			</tr>

			<tr>
				<td>Th&#244;ng tin c&#225; nh&#226;n:</td>
				<td><input type="checkbox" name="thongtincanhan[1]" value="1" {$thongtincanhan[1]}> S&#7917;a th&#244;ng tin b&#7843;n th&#226;n
				<br /><input type="checkbox" name="thongtincanhan[2]" value="2" {$thongtincanhan[2]}> S&#7917;a th&#244;ng tin &#273;o&#224;n vi&#234;n kh&#225;c
				<br /><input type="checkbox" name="thongtincanhan[4]" value="4" {$thongtincanhan[4]}> S&#7917;a m&#7853;t kh&#7849;u &#273;o&#224;n vi&#234;n kh&#225;c
				</td>
			</tr>

			<tr>
				<td>Ch&#7913;c v&#7909;:</td>
				<td><input type="checkbox" name="qlchucvu[1]" value="1" {$qlchucvu[1]}> Ph&#226;n quy&#7873;n ch&#7913;c v&#7909; cho &#273;o&#224;n vi&#234;n kh&#225;c
				<br /><input type="checkbox" name="qlchucvu[4]" value="4" {$qlchucvu[4]}> Qu&#7843;n l&#253; ch&#7913;c v&#7909;
				</td>
			</tr>

			<tr>
				<td>&#272;o&#224;n vi&#234;n:</td>
				<td><input type="checkbox" name="qldoanvien[1]" value="1" {$qldoanvien[1]}> Xem danh s&#225;ch &#273;o&#224;n vi&#234;n
				<br /><input type="checkbox" name="qldoanvien[2]" value="2" {$qldoanvien[2]}> Th&#234;m &#273;o&#224;n vi&#234;n
				<br /><input type="checkbox" name="qldoanvien[4]" value="4" {$qldoanvien[4]}> X&#243;a &#273;o&#224;n vi&#234;n
				</td>
			</tr>
		</table>
		</td></tr></table>
	</td>
	</tr>
	<tr>
	<td align="right">
		<input id="delete" name="delete" type="submit" value="X&#243;a"/>
		<input id="add" name="add" type="submit" value="Th&#234;m"/>
		<input id="modify" name="modify" type="submit" value="S&#7917;a"/>
	</td>
	</tr>
	</form>
			</table>
			</td>
		</tr>		
        </tbody>
        </table>   
    </div>
	<div class="right"></div>  
	</div>
    <div class="account_form_footer">
		<div class="leftfoot"></div>
		<div class="midfoot"></div>
		<div class="rightfoot"></div>
	</div>
</div>
EOF;
}
?>