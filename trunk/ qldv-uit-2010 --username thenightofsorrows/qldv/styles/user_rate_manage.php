<?php
function user_rate_manage_form($danhsachdoanvien){
$thongtin="";
$var="";
for ($i=0;$i<count($danhsachdoanvien);$i++)
{	
	$thongtin.="<tr class=\"user_rate_manage_form_table_content_highlight\" onClick=\"javascript:getcontent($i);\">
						<td width=\"32px\">".$danhsachdoanvien[$i]['stt']."</td>
						<td width=\"75px\">".$danhsachdoanvien[$i]['id_doanvien']."</td>
						<td width=\"180px\">".$danhsachdoanvien[$i]['hoten']."</td>
						<td width=\"34px\">".($danhsachdoanvien[$i]['phai']==0?"Nam":"N&#7919;")."</td>
						<td width=\"90px\">".$danhsachdoanvien[$i]['ngaysinh']."</td>
					</tr>";
	$var.="Array(\"".$danhsachdoanvien[$i]['hoten']."\",\"".$danhsachdoanvien[$i]['danhgia']."\",\"".$danhsachdoanvien[$i]['diem']."\",\"".$danhsachdoanvien[$i]['loai']."\")".($i<count($danhsachdoanvien)-1?",":"");
};
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
		<table class="user_rate_manage_form_text">
        <tbody>
		<tr height="24px">
			<td width="442px">
				Chi &#273;o&#224;n: <input type="text" /> <input name="" type="submit" value="T&#236;m" style="width:70px"/>
			</td>
			<td>
			</td>
		</tr>
		<tr height="24px">
			<td width="442px">
				Danh s&#225;ch &#273;o&#224;n vi&#234;n:
			</td>
			<td>
            	&nbsp;&nbsp;Chi ti&#7871;t:	
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
							<td width="75px"><b>ID &#272;o&#224;n</b></td>
							<td width="180px"><b>H&#7885; t&#234;n</b></td>
							<td width="35px"><b>Ph&#225;i</b></td>
							<td width="90px"><b>Ng&#224;y sinh</b></td>
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
						<input name="hoten" id="hoten" type="text" style="width:252px;" class="user_rate_manage_form_textbox"/>
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
                    	<input id="loai" name="loai" type="text" class="user_rate_manage_form_textbox"/>
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