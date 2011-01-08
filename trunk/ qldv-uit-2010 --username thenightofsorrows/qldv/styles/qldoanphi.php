<?php
function user_manage_form($danhsachdoanvien,$error=""){
global $db,$user;
$thongtin="";
$var="";
$id="";
if($error!="") $error="<font color=\"red\">$error</font><br />";

for ($i=0;$i<count($danhsachdoanvien);$i++)
{	
	$id_dv = $danhsachdoanvien[$i]['id_doanvien'];
	$thongtin.="<tr class=\"user_manage_form_table_content_highlight\" onClick=\"javascript:getcontent($i);\">
						<td width=\"30px\">".($i+1)."</td>
						<td width=\"171px\">".$danhsachdoanvien[$i]['hoten']."</td>
						<td width=\"30px\">".($danhsachdoanvien[$i]['gioitinh']==0?"Nam":"N&#7919;")."</td>
						<td width=\"83px\">".$danhsachdoanvien[$i]['ngaysinh']."</td>
						<td width=\"87px\"><input class =\"user_manage_form_textbox\" name=\"sotien[]\" ></td>
						<td width=\"83px\"><input class=\"user_manage_form_textbox\" name=\"ngaydong[]\"></td>
						<!-- <td width=\"25px\"><input id=\"xoa_doanvien[]\" name=\"xoa_doanvien[]\" type=\"checkbox\" value=\"checked\" /></td> -->
						<td width=\"25px\"><input id=\"dsdoanvien[{$danhsachdoanvien[$i]['id_doanvien']}]\" name=\"dsdoanvien[]\" type=\"checkbox\" value=\"$id_dv\" /></td>
					</tr>";
	$var.="Array(\"".$danhsachdoanvien[$i]['hoten']."\",\"".$danhsachdoanvien[$i]['id_doanvien']."\",\"".$danhsachdoanvien[$i]['chucvu']."\")".($i<count($danhsachdoanvien)-1?",":"");
};

if(check_auth("qldoanvien",2)){
	$buttons_0="<input id =\"update_dp\" name =\"update_dp\"type =\"submit\" value =\"C&#7853;p nh&#7853;t\" style=\"margin-top:7px;width:100px\"/>";
	$option_cosodoan=make_select_cosodoan();
	$option_cosodoan="\n<tr><td>Chi &#272;o&#224;n: $option_cosodoan </select> <input id=\"search\" name=\"search\" type=\"submit\" value=\"T&#236;m\" style=\"margin-top:7px;width:70px\"/></td></tr>";
}
else{
	$option_cosodoan="";
	$buttons_0="";
}
$dschucvu='<select id="chucvu" name="chucvu" type="text" class="user_manage_form_textbox">';
$db->query("SELECT `id`,`name` FROM `auth`");
while($dschucvu_tmp=$db->fetch_array()){
	$dschucvu.="<option value=\"{$dschucvu_tmp['id']}\">{$dschucvu_tmp['name']}</option>\n";
}
$dschucvu.="</select>";
return
<<<EOF
<script>
function getcontent(i){	
	var danhsach=Array($var);
	document.getElementById("hoten").value=danhsach[i][0];
	document.getElementById("id_doanvien").value=danhsach[i][1];	
	document.getElementById("chucvu").value=danhsach[i][2];	
	document.getElementById("url").setAttribute('href','index.php?type=user_info&id_doanvien='+danhsach[i][1]);
	document.getElementById("avatar").setAttribute('src','images/ava_'+danhsach[i][1]+'.png');
}
function resetimage()
{
	document.getElementById("avatar").setAttribute('src','images/avatar.png');	
}
</script>
<div class="user_manage_form">
    <!---Form header--->
    <div class="user_manage_form_header">
    <div class="lefthead"></div>
	<div class="midhead">
        <div class="form_header_text">
           <b>Qu&#7843;n l&#253; &#272;o&#224;n vi&#234;n</b>    
        </div>
    </div>
	<div class="righthead"></div>
    </div>
    <!---Form body--->
    <div class="user_manage_form_body">
    <div class="left"></div>
	<div class="mid">
		<table class="user_manage_form_text">
        <tbody>        
		<tr>
		<form method="POST">{$error}
        {$option_cosodoan}
        </form>
        </tr>
        <form method="POST">
		<tr height="24px">
			<td width="521px">
				Danh s&#225;ch &#273;o&#224;n vi&#234;n:
			</td>
			<td width="193px">
				&nbsp;&nbsp;Chi ti&#7871;t:
			</td>
		</tr>
		<tr valign="top">
			<td width="521px">
				<table class="user_manage_form_table">
				<tr>
					<td>
						<table class = "user_manage_form_table_header" cellspacing="0" border="1">
						<tr>
							<td width="30px"><b>STT</b></td>
							<td width="170px"><b>H&#7885; t&#234;n</b></td>
							<td width="30px"><b>Ph&#225;i</b></td>
							<td width="85px"><b>Ng&#224;y sinh</b></td>
							<td width="85px"><b>S&#7889; Ti&#7873;n</b></td>
							<td width="85px"><b>Ng&#224;y &#272;&#243;ng</b></td>
							<td width="24px">&nbsp;</td>
							<td width="16px">&nbsp;</td>
						</tr>
						</table>
					</td>
				</tr> 
				<tr>
					<td>
					<div class="user_manage_form_table_scroll">
						<table class="user_manage_form_table_content">
{$thongtin}
						</table>	
					</div>
					</td>
				</tr>
				</table>
			</td>
			<td width="193px">
				<table  class="user_manage_form_right_content">
                <tr>
                    <td colspan="2" align="center">
                        <input id= "avatar" name="avatar" type="image" class="user_manage_form_avatar" src="images/avatar.png" onerror="javascript:resetimage();"/>
                    </td>
                </tr>
				<tr>
                    <td colspan="2">
                        <input id="hoten" name="hoten" type="text" style="width:179px;text-align:center" class="user_manage_form_textbox" />
                    </td>
                </tr>
                <tr>
                	<td>
                    	ID &#272;o&#224;n:
                    </td>
                    <td align="right">
                    	<input id="id_doanvien" name="id_doanvien" type="text" class="user_manage_form_textbox"/>  
                    </td>
                </tr>
                <tr>   
                	<td>               
                    	Ch&#7913;c v&#7909;:
					</td>
                    <td align="right">
                    {$dschucvu}
                    </td>
                </tr> 
                <tr>   
                	<td>   
                    </td>
                    <td align="right">
                    	<a id="url" href="index.php?type=user_info&id_doanvien=">Th&#244;ng tin chi ti&#7871;t</a>
                    </td>
                </tr>
                <tr>
                	<td>   
                    </td>
                </tr>
				</table>
			</td>
		</tr>
        <tr>
			<td align="right" width="521px">
{$buttons_0}
			</td>
        </tbody>
        </table>
        	</form>
    </div>
	<div class="right"></div>       
	</div>
    <div class="user_manage_form_footer">
		<div class="leftfoot"></div>
		<div class="midfoot"></div>
		<div class="rightfoot"></div>
	</div>
</div>
EOF;
}
?>