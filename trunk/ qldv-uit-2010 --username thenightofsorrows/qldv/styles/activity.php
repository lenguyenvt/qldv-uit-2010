<?php
function activity_form($danhsachphongtrao,$error=""){
global $db,$user;
$thongtin="";
$var="";
for ($i=0;$i<sizeof($danhsachphongtrao);$i++)
{	
	$thongtin.="<tr class=\"activity_form_table_content_highlight\" onClick=\"javascript:getcontent($i);\">
					<td width=\"30px\">".($i+1)."</td>
					<td width=\"200px\">".$danhsachphongtrao[$i]['ten']."</td>
					<td width=\"100px\">".$danhsachphongtrao[$i]['start']."</td>
					<td width=\"100px\">".$danhsachphongtrao[$i]['end']."</td>
					<td width=\"25px\"><input name=\"checked\" type=\"checkbox\" value=\"checked\" /></td>
				</tr>";
	$var.="Array(\"".$danhsachphongtrao[$i]['ten']."\",\"".$danhsachphongtrao[$i]['id_phongtraodoan']."\",\"".$danhsachphongtrao[$i]['diengiai']."\",\"".$danhsachphongtrao[$i]['start']."\",\"".$danhsachphongtrao[$i]['end']."\",\"".$danhsachphongtrao[$i]['id_cosodoan']."\")".($i<count($danhsachphongtrao)-1?",":"");
};
if(check_auth("qlphongtrao",2)){
	$buttons_1="                    		<input id=\"insert\" name=\"insert\" type=\"submit\" value=\"Th&#234;m\" style=\"margin-top:7px;width:70px\"/>
	                        <input id=\"update\" name=\"update\" type=\"submit\" value=\"C&#7853;p nh&#7853;t\" style=\"margin-top:7px;width:70px\"/>
        	                <input id=\"attend\" name=\"attend\" type=\"submit\" value=\"Tham gia\" style=\"margin-top:7px;width:70px\"/>";
	$buttons_2="<input id=\"delete\" name=\"delete\" type=\"submit\" value=\"X&#243;a\" style=\"margin-top:7px;width:70px\"/>";
	$sql="SELECT `id_cosodoan`,`ten` FROM `cosodoan` WHERE ".get_cosodoan_capduoi($user['id_doanvien'],"`id_cosodoan`")." OR ".get_cosodoan($user['id_doanvien'],"`id_cosodoan`");
	$db->query($sql);
	$option_cosodoan="<select name=\"id_cosodoan\" id=\"id_cosodoan\" style=\"width:140px;font-size:8pt\">";
	while($tmp=mysql_fetch_array($db->query_result)){
		$option_cosodoan.="\n<option value=\"{$tmp['id_cosodoan']}\">{$tmp['ten']}</option>";
	}
	$option_cosodoan="\n<tr><td>C&#417; s&#7903; &#273;o&#224;n</td><td align=\"right\">$option_cosodoan</select></td></tr>";
}else{
	$buttons_1="        	                <input id=\"attend\" name=\"attend\" type=\"submit\" value=\"Tham gia\" style=\"margin-top:7px;width:70px\"/>";
	$buttons_2="";
	$option_cosodoan="";
}
return
<<<EOF
<script>
function getcontent(i){	
	var danhsach=Array($var);
	document.getElementById("ten").value=danhsach[i][0];
	document.getElementById("id_phongtraodoan").value=danhsach[i][1];
	document.getElementById("diengiai").value=danhsach[i][2];
	document.getElementById("start").value=danhsach[i][3];
	document.getElementById("end").value=danhsach[i][4];
	document.getElementById("id_cosodoan").value=danhsach[i][5];
}
</script>
<div class="activity_form">
    <!---Form header--->
    <div class="activity_form_header">
    <div class="lefthead"></div>
	<div class="midhead">
        <div class="form_header_text">
           <b>Qu&#7843;n l&#253; phong tr&#224;o</b>    
        </div>
    </div>
	<div class="righthead"></div>
    </div>
    <!---Form body--->
    <div class="activity_form_body">
    <div class="left"></div>
	<div class="mid">
		<table class="activity_form_text">
        <tbody>
		<tr>
			<td>{$error}
			</td>
		</tr>
		<tr height="24px">
			<td width="477px">
				Danh s&#225;ch phong tr&#224;o:
			</td>
			<td width="213px">
				&nbsp;&nbsp;Chi ti&#7871;t phong tr&#224;o:
			</td>
		</tr>
		<tr valign="top">
			<td width="477px">
			<table class="activity_form_table">
			<tr>
				<td>
					<table class = "activity_form_table_header" cellspacing="0" width="100%" border="1">
					<tr>
						<td width="30px">STT</td>
						<td width="200px">Phong tr&#224;o</td>
						<td width="100px">Ng&#224;y b&#7855;t &#273;&#7847;u</td>
						<td width="100px">Ng&#224;y k&#7871;t th&#250;c</td>
						<td width="25px">&nbsp;</td>
                        <td width="16px">&nbsp;</td>
					</tr>                    
					</table>
				</td>
			</tr> 
			<tr>
				<td>
				<div class="activity_form_table_scroll">
					<table class="activity_form_table_content">
{$thongtin}
					</table>	
				</div>
				</td>	
			</tr>
            <tr>
                <td align="right">
                    {$buttons_2}
                </td>
            </tr>
			</table>
			</td>
			<td>
		<form method="POST">
            	<table class="activity_form_right_content">
                <tr>
                    <td colspan="2">
                        <input id="ten" name="ten" type="text"  class="activity_form_textbox" style="width:215px;text-align:center" /><br />
                    </td>
                </tr>
                <tr>
                    	<input id="id_phongtraodoan" name="id_phongtraodoan" type="hidden" /><br />  
                </tr>
                <tr>
                	<td>
                    	Ng&#224;y b&#7855;t &#273;&#7847;u:
			</td>
                    <td align="right">
                    	<input id="start" name="start" type="text" class="activity_form_textbox" />
                    </td>
                </tr> 
                <tr>   
                    <td>                   
                    	Ng&#224;y k&#7871;t th&#250;c:
                    </td>
                    <td align="right">
                    	<input id= "end" name="end" type="text" class="activity_form_textbox" /><br />
                    </td>
                </tr>
{$option_cosodoan}
                <tr>   
                	<td colspan="2">
                    N&#7897;i dung:
                    </td>
                </tr>
                <tr>
                	<td colspan="2">
                    <textarea class="activity_form_textarea_content" id="diengiai" name="diengiai"></textarea>
                    </td>
                </tr>
                <tr>
			<td colspan="2" align="center">
				<input type="hidden" id="to_post" name="to_post" value="1">
{$buttons_1}
                	</td>
                    <td>                        
                    </td>
                </tr>            
                </table>
		</form>
			</td>
		</tr>		
        </tbody>
        </table> 
    </div>
	<div class="right"></div>           
	</div>
    <div class="activity_form_footer">
		<div class="leftfoot"></div>
		<div class="midfoot"></div>
		<div class="rightfoot"></div>
	</div>
</div>
EOF;
}
?>