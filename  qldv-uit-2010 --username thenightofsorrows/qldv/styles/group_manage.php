<?php
function group_manage_form($danhsachcosodoan,$error=""){
global $db,$user;
$thongtin="";
$var="";

$sql="SELECT `id_cosodoan`,`ten` FROM `cosodoan` WHERE ".get_cosodoan($user['id_doanvien'],"`id_cosodoan`")." OR ".get_cosodoan_capduoi($user['id_doanvien'],"`id_cosodoan`");
$db->query($sql);
$select_cosodoan="";
while($tmp=mysql_fetch_array($db->query_result)){
	$select_cosodoan.="<option value=\"{$tmp['id_cosodoan']}\">{$tmp['ten']}</option>";
}
for ($i=0;$i<count($danhsachcosodoan);$i++)
{	
	$thongtin.="<tr class=\"group_manage_form_table_content_highlight\" onClick=\"javascript:getcontent($i);\">
						<td width=\"31px\">".($i+1)."</td>
						<td width=\"380px\">".$danhsachcosodoan[$i]['ten']."</td>
						<td width=\"25px\"><input id=\"select_cosodoan[]\" name=\"select_cosodoan[]\" type=\"checkbox\" value=\"".$danhsachcosodoan[$i]['id_cosodoan']."\" /></td>
					</tr>";
	$var.="Array(\"".$danhsachcosodoan[$i]['ten']."\",\"".$danhsachcosodoan[$i]['id_cosodoan']."\",\"".$danhsachcosodoan[$i]['parent']."\",\"".($danhsachcosodoan[$i]['co_dau']==1?"checked":"")."\")".($i<count($danhsachcosodoan)-1?",":"");
};
return
<<<EOF
<script>
function getcontent(i){	
	var danhsach=Array($var);
	document.getElementById("ten").value=danhsach[i][0];
	document.getElementById("id_cosodoan").value=danhsach[i][1];
//	document.getElementById("cap").value=danhsach[i][2];
	document.getElementById("parent").value=danhsach[i][2];
	document.getElementById("co_dau").checked=danhsach[i][3];
//	document.getElementById("thongke_doanvien").value=danhsach[i][5];
//	document.getElementById("nhanxet").value=danhsach[i][6];
//	document.getElementById("loai").value=danhsach[i][7];
}
</script>
<div class="group_manage_form">
    <!---Form header--->
    <div class="group_manage_form_header">
    <div class="lefthead"></div>
	<div class="midhead">
        <div class="form_header_text">
           <b>Qu&#7843;n l&#253; c&#417; s&#7903; &#272;o&#224;n</b>    
        </div>
    </div>
	<div class="righthead"></div>
    </div>
    <!---Form body--->
    <div class="group_manage_form_body">
    <div class="left"></div>
	<div class="mid">
		<table class="group_manage_form_text">
        <tbody>
		<tr height="24px">
			<td width="442px">{$error}
				Danh s&#225;ch c&#417; s&#7903; &#272;o&#224;n:
			</td>
			<td>
            	&nbsp;&nbsp;Chi ti&#7871;t:	
			</td>	
		</tr>
		<tr valign="top">
			<td width="442px">
				<form method="POST">
				<table class="group_manage_form_table">
				<tr>
					<td>
						<table class = "group_manage_form_table_header" cellspacing="0" border="1">
						<tr>
							<td width="30px"><b>STT</b></td>
							<td width="380px"><b>T&#234;n</b></td>
							<td width="95px"><b>L&#7921;a ch&#7885;n</b></td>
							<td width="16px">&nbsp;</td>
						</tr>
						</table>
					</td>
				</tr> 
				<tr>
					<td>
					<div class="group_manage_form_table_scroll">
						<table class="group_manage_form_table_content">
{$thongtin}
						</table>	
					</div>
					</td>
				</tr>                
				</table>                
			</td>
			<td>
            	<table class="group_manage_form_right_content">
                <tr>
                    <td colspan="2">
				<input name="ten" id="ten" type="text" style="width:252px;" class="group_manage_form_textbox" />
				<input id="id_cosodoan" name="id_cosodoan" type="hidden" />
                    </td>
                </tr>
                <tr>                    
                    <td>
                    	C&#7845;p tr&#234;n:
                    </td>
                    <td align="right">
                    	<select id="parent" name="parent" style="width:180px;font-size:8pt">{$select_cosodoan}</select>
                    </td>
                </tr>
                <tr>                    
                    <td>
                    	C&#243; d&#7845;u &#273;&#7887;:
                    </td>
                    <td align="center">
                    	<input id="co_dau" name="co_dau" type="checkbox" value="1" />
                    </td>
                </tr>
                </table>
			</td>
		</tr>
		<tr>
        	<td align="right">
            <input id="xoa" name="xoa" value="X&#243;a" type="submit" style="margin-top:7px"/>
            </td>
            <td align="right">
            	<table width="260px">
                <tr>
               	<td  align="left">
		    <input type="hidden" name="to_post" id="to_post">
                    <input id="them" name="them" value="Th&#234;m" type="submit" style="margin-top:7px"/>
                    </td>
                    <td align="right">
                    <input id="sua" name="sua" value="C&#7853;p nh&#7853;t" type="submit" style="margin-top:7px"/>
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
    <div class="group_manage_form_footer">
		<div class="leftfoot"></div>
		<div class="midfoot"></div>
		<div class="rightfoot"></div>
	</div>
</div>
EOF;
}
?>