<?php
function thongtinphongtrao($danhsachphongtrao) {
	global $db,$user,$_POST;
	$thongtin = "";
	for($i = 0; $i < count ($danhsachphongtrao ); $i++) {
		$thongtin .= "<tr class=\"user_info_group_movement_table_content_highlight\" >
					<td width=\"160px\">" . $danhsachphongtrao [$i] ['phongtrao'] . "</td>
					<td width=\"65px\">" . $danhsachphongtrao [$i] ['ngay'] . "</td>
					<td width=\"65px\">" . $danhsachphongtrao [$i] ['danhgia'] . "</td>
				</tr>";
	};
return 
<<<EOF
<table class="user_rate_manage_movement_table">
	<tr>
		<td>
			<table class = "user_info_group_movement_table_header" cellspacing="0" width="100%" border="1">
			<tr>
				<td width="160px">Phong tr&#224;o</td>
				<td width="65px">Ng&#224;y</td>
				<td>&#272;&#225;nh gi&#225;</td>
				<td width="16px">&nbsp;</td>
			</tr>
			</table>
		</td>
	</tr> 
	<tr>
		<td>
		<div class="user_info_group_movement_table_scroll">
			<table class="user_info_group_movement_table_content">
{$thongtin}
			</table>
		</div>
		</td>
	</tr>
</table>
EOF;
}

function user_rate_manage_form($danhsachdoanvien,$thongtinphongtrao){
global $db,$user,$_POST;
$thongtin="";
$var="";
for ($i=0;$i<count($danhsachdoanvien);$i++)
{	
	$thongtin.="<tr class=\"user_rate_manage_form_table_content_highlight\" onClick=\"javascript:getcontent($i);\">
						<td width=\"32px\">".$danhsachdoanvien[$i]['stt']."</td>
						<td width=\"180px\">".$danhsachdoanvien[$i]['hoten']."</td>
						<td width=\"145px\">".$danhsachdoanvien[$i]['chidoan']."</td>
					</tr>";
	$var.="Array(\"".$danhsachdoanvien[$i]['hoten']."\",\"".$danhsachdoanvien[$i]['danhgia']."\",\"".$danhsachdoanvien[$i]['diem']."\",\"".$danhsachdoanvien[$i]['loai']."\")".($i<count($danhsachdoanvien)-1?",":"");
};

if(check_auth("qlxeploai",2)){
	$sql="SELECT `id_cosodoan`,`ten` FROM `cosodoan` WHERE ".get_cosodoan_capduoi($user['id_doanvien'],"`id_cosodoan`");
	$db->query($sql);
	$option_cosodoan="<select name=\"id_cosodoan\" id=\"id_cosodoan\" style=\"width:120px;font-size:9pt\">";
	while($tmp=mysql_fetch_array($db->query_result)){
		$option_cosodoan.="\n<option value=\"{$tmp['id_cosodoan']}\">{$tmp['ten']}</option>";
	}
	$option_cosodoan="\n<tr><td>Chi &#272;o&#224;n: $option_cosodoan </select> <input id=\"search\" name=\"search\" type=\"submit\" value=\"T&#236;m\" style=\"margin-top:7px;width:70px\"/></td></tr>";
	}
	return
<<<EOF
<script>
function getcontent(i){	
	var danhsach=Array($var);
	document.getElementById("hoten").value=danhsach[i][0];
	document.getElementById("danhgia").value=danhsach[i][1];
	document.getElementById("diem").value=danhsach[i][2];	
	document.getElementById("loai").value=danhsach[i][3];	
}
</script>
<div class="user_rate_manage_form">
    <!---Form header--->
    <div class="user_rate_manage_form_header">
    <div class="lefthead"></div>
	<div class="midhead">
        <div class="form_header_text">
           <b>&#272;&#225;nh gi&#225; x&#7871;p lo&#7841;i &#272;o&#224;n vi&#234;n</b>    
        </div>
    </div>
	<div class="righthead"></div>
    </div>
    <!---Form body--->
    <div class="user_rate_manage_form_body">
    <div class="left"></div>
	<div class="mid">
      <form method = "POST">
		<table class="user_rate_manage_form_text">
        <tbody>

		<tr>
        {$option_cosodoan}
		</tr>
		<tr height="24px">
			<td width="442px">
				Danh s&#225;ch &#273;o&#224;n vi&#234;n:
			</td>
            <td>
             Chi ti&#7871;t:	
            </td>
		</tr>
		<tr valign="top">
			<td width="422px">
				<table class="user_rate_manage_form_table">
				<tr>
					<td>
						<table class = "user_rate_manage_form_table_header" cellspacing="0" border="1">
						<tr>
							<td width="30px"><b>STT</b></td>
							<td width="180px"><b>H&#7885; t&#234;n</b></td>
							<td width="165px"><b>Chi &#272;o&#224;n</b></td>
							<td width="16px">&nbsp;</td>
						</tr>
						</table>
					</td>
				</tr> 
				<tr>
					<td>
					<div class="user_rate_manage_form_table_scroll">
						<table class="user_rate_manage_form_table_content">
{$thongtin}
						</table>	
					</div>
					</td>
				</tr>
				</table>
			</td>
			<td>  
            	<table class="user_rate_manage_form_right_content">
                <tr>
                	<td colspan="2">
						<input name="hoten" id="hoten" type="text" style="width:330px;" class="user_rate_manage_form_textbox"/>
                    </td>
                </tr>   
                <tr>                    
                    <td colspan="2">
{$thongtinphongtrao}
                    </td>
                </tr> 
                <tr>
                	<td colspan="2">
                    	&#272;&#225;nh gi&#225;:
                    </td>
                </tr>                
                <tr>                    
                    <td colspan="2">
                    	<textarea class="user_rate_manage_form_textarea_content" id="danhgia" name="danhgia"></textarea>
                    </td>
                </tr>
                <tr>                    
                    <td>
                    	&#272;i&#7875;m:
                    </td>
                    <td align="right">
                    	<input id="diem" name="diem" type="text" class="user_rate_manage_form_textbox"/>
                    </td>
                </tr>
                <tr>                    
                    <td>
                    	X&#7871;p lo&#7841;i:
                    </td>
                    <td align="right">
                    	<select id="loai" name="loai" class="user_rate_manage_form_textbox">
			<option value="1">T&#7889;t</option>
			<option value="2">Kh&#225;</option>
			<option value="3">Trung b&#236;nh</option>
			<option value="4">Y&#7871;u</option>
		</select>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                    </td>
                    <td align="right">
                        <input name="" type="submit" value="C&#7853;p nh&#7853;t" style="width:80px;height:25px;"/>
                    </td>
                </tr>
                </table>
			</td>
		</tr>
        </tbody>
        </table> 
      </form> 
    </div>
	<div class="right"></div>        
	</div>
    <div class="user_rate_manage_form_footer">
		<div class="leftfoot"></div>
		<div class="midfoot"></div>
		<div class="rightfoot"></div>
	</div>
</div>
EOF;
}
?>