<?php

function user_manage_form($danhsachdoanvien){
$thongtin="";
$var="";
for ($i=0;$i<count($danhsachdoanvien);$i++)
{	
	$thongtin.="<tr class=\"user_manage_form_table_content_highlight\" onClick=\"javascript:getcontent($i);\">
						<td width=\"32px\">".$danhsachdoanvien[$i]['stt']."</td>
						<td width=\"70px\">".$danhsachdoanvien[$i]['id_doanvien']."</td>
						<td width=\"170px\">".$danhsachdoanvien[$i]['hoten']."</td>
						<td width=\"29px\">".($danhsachdoanvien[$i]['phai']==0?"Nam":"N&#7919;")."</td>
						<td width=\"85px\">".$danhsachdoanvien[$i]['ngaysinh']."</td>
						<td width=\"85px\">".$danhsachdoanvien[$i]['doan_phi']."</td>
						<td width=\"25px\"><input id=\"checked\" name=\"checked\" type=\"checkbox\" value=\"checked\" /></td>
					</tr>";
	$var.="Array(\"".$danhsachdoanvien[$i]['hoten']."\",\"".$danhsachdoanvien[$i]['id_doanvien']."\",\"".$danhsachdoanvien[$i]['chucvu']."\")".($i<count($danhsachdoanvien)-1?",":"");
};
return
<<<EOF
<script>
function getcontent(i){	
	var danhsach=Array($var);
	document.getElementById("hoten").value=danhsach[i][0];
	document.getElementById("id_doanvien").value=danhsach[i][1];
	document.getElementById("chucvu").value=danhsach[i][2];	
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
		<tr height="24px">
			<td width="521px">
				Chi &#273;o&#224;n: <input type="text" /> <input id="tim" name="tim" type="submit" value="T&#236;m" class="user_manage_form_submit"/>
			</td>
			<td width="193px">
			</td>
		</tr>
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
							<td width="70px"><b>ID &#272;o&#224;n</b></td>
							<td width="170px"><b>H&#7885; t&#234;n</b></td>
							<td width="30px"><b>Ph&#225;i</b></td>
							<td width="85px"><b>Ng&#224;y sinh</b></td>
							<td width="85px"><b>H&#7841;n ph&#237;</b></td>
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
                        <input name="" type="image" class="user_manage_form_avatar" src="../images/avatar.png" />
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
                    	<input id="chucvu" name="chucvu" type="text" class="user_manage_form_textbox" />
                    </td>
                </tr> 
                <tr>   
                	<td>                   
                    	
                    </td>
                    <td align="right">
                    	<a href="index.php?type=user_info">Th&#244;ng tin chi ti&#7871;t</a>
                    </td>
                </tr>
                  
				</table>
			</td>
		</tr>
		<tr>
			<td align="right" width="521px">
				<input name="" type="submit" value="X&#243;a" class="user_manage_form_submit"/>
				
			</td>
			<td align="right" width="193px">
            	<input name="" type="submit" value="Th&#234;m" class="user_manage_form_submit"/>
			</td>
		</tr>
        </tbody>
        </table> 
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