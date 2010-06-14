<?php
function group_manage_form($danhsachdoanvien){
$thongtin="";
$var="";
for ($i=0;$i<count($danhsachdoanvien);$i++)
{	
	$thongtin.="<tr class=\"group_manage_form_table_content_highlight\" onClick=\"javascript:getcontent($i);\">
						<td width=\"31px\">".$danhsachdoanvien[$i]['stt']."</td>
						<td width=\"80px\">".$danhsachdoanvien[$i]['id_cosodoan']."</td>
						<td width=\"180px\">".$danhsachdoanvien[$i]['ten']."</td>
						<td width=\"95px\">".$danhsachdoanvien[$i]['cap']."</td>					
						<td width=\"25px\"><input id=\"checked\" name=\"checked\" type=\"checkbox\" value=\"checked\" /></td>
					</tr>";
	$var.="Array(\"".$danhsachdoanvien[$i]['ten']."\",\"".$danhsachdoanvien[$i]['id_cosodoan']."\",\"".$danhsachdoanvien[$i]['cap']."\",\"".$danhsachdoanvien[$i]['parent']."\",\"".($danhsachdoanvien[$i]['co_dau']==1?"checked":"")."\",\"".$danhsachdoanvien[$i]['thongke_doanvien']."\",\"".$danhsachdoanvien[$i]['nhanxet']."\",\"".$danhsachdoanvien[$i]['loai']."\")".($i<count($danhsachdoanvien)-1?",":"");
};
return
<<<EOF
<script>
function getcontent(i){	
	var danhsach=Array($var);
	document.getElementById("ten").value=danhsach[i][0];
	document.getElementById("id_cosodoan").value=danhsach[i][1];
	document.getElementById("cap").value=danhsach[i][2];	
	document.getElementById("parent").value=danhsach[i][3];	
	document.getElementById("co_dau").checked=danhsach[i][4];	
	document.getElementById("thongke_doanvien").value=danhsach[i][5];
	document.getElementById("nhanxet").value=danhsach[i][6];
	document.getElementById("loai").value=danhsach[i][7];
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
			<td width="442px">
				T&#236;m theo t&#234;n: <input type="text" /> <input id="tim" name="tim" type="submit" value="T&#236;m" class="group_manage_form_submit"/>
			</td>
			<td>
			</td>
		</tr>
		<tr height="24px">
			<td width="442px">
				Danh s&#225;ch c&#417; s&#7903; &#272;o&#224;n::
			</td>
			<td>
            	&nbsp;&nbsp;Chi ti&#7871;t:	
			</td>	
		</tr>
		<tr valign="top">
			<td width="442px">
				<table class="group_manage_form_table">
				<tr>
					<td>
						<table class = "group_manage_form_table_header" cellspacing="0" border="1">
						<tr>
							<td width="30px"><b>STT</b></td>
							<td width="80px"><b>ID</b></td>
							<td width="180px"><b>T&#234;n</b></td>
							<td width="95px"><b>Cấp</b></td>
							<td width="25px">&nbsp;</td>
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
						<input name="ten" id="ten" type="text" style="width:252px;" class="group_manage_form_textbox"/>
                    </td>
                </tr>                    
                <tr>                    
                    <td width="125px">
                    	ID:
                    </td>
                    <td align="right">
                    	<input id="id_cosodoan" name="id_cosodoan" type="text" class="group_manage_form_textbox"/>
                    </td>
                </tr>
                <tr>                    
                    <td>
                    	C&#7845;p c&#417; s&#7903;:
                    </td>
                    <td align="right">
                    	<input id="cap" name="cap" type="text" class="group_manage_form_textbox"/>
                    </td>
                </tr>
                <tr>                    
                    <td>
                    	C&#7845;p tr&#234;n:
                    </td>
                    <td align="right">
                    	<input id="parent" name="parent" type="text" class="group_manage_form_textbox"/>
                    </td>
                </tr>
                <tr>                    
                    <td>
                    	C&#243; d&#7845;u &#273;&#7887;:
                    </td>
                    <td align="center">
                    	<input id="co_dau" name="co_dau" type="checkbox" value="" />
                    </td>
                </tr>
                <tr>                    
                    <td>
                    	S&#7889; &#273;o&#224;n vi&#234;n:
                    </td>
                    <td align="right">
                    	<input id="thongke_doanvien" name="thongke_doanvien" type="text" class="group_manage_form_textbox"/>
                    </td>
                </tr>
                <tr>                    
                    <td colspan="2" align="center">
                    	<b>X&#7871;p lo&#7841;i h&#224;ng n&#259;m:</b>
                </tr>
                <tr>                    
                    <td>
                    	Nh&#7853;n x&#233;t:
                    </td>
                    <td>                    	
                    </td>
                </tr>
                <tr> 
                    <td colspan="2">
                    	<textarea id="nhanxet" name="nhanxet" class="group_manage_form_textarea_content"></textarea>
                    </td>
                </tr>
                <tr>                    
                    <td>
                    	X&#7871;p lo&#7841;i:
                    </td>
                    <td align="right">
                    	<input id="loai" name="loai" type="text" class="group_manage_form_textbox"/>
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