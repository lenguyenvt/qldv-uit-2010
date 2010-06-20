<?php
function account_form($danhsachchucvu){
$thongtin="";
for ($i=0;$i<count($danhsachchucvu);$i++)
{	
	$thongtin.="<tr class=\"account_form_table_content_highlight\">
						<td width=\"31px\">".$danhsachchucvu[$i]['id_chucvu']."</td>
						<td width=\"164px\">".$danhsachchucvu[$i]['ten']."</td>
						<td width=\"80px\">".$danhsachchucvu[$i]['qlchucvu']."</td>
						<td width=\"80px\">".$danhsachchucvu[$i]['qlthongtin']."</td>
						<td width=\"80px\">".$danhsachchucvu[$i]['qldoanvien']."</td>
						<td width=\"80px\">".$danhsachchucvu[$i]['qlhoatdong']."</td>
						<td width=\"80px\">".$danhsachchucvu[$i]['qlxeploai']."</td>
						<td width=\"80px\">".$danhsachchucvu[$i]['qldoanphi']."</td>
					</tr>";
};

	
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
		<table class="account_form_text">
        <tbody>		
		<tr height="24px">
			<td width="467px">
				Danh s&#225;ch ch&#7913;c v&#7909;:
			</td>			
		</tr>
		<tr valign="top">
			<td width="467px">
			<table class="account_form_table">
			<tr>
				<td>
					<table class = "account_form_table_header" cellspacing="0" width="100%" border="1">
					<tr>	
                   		<td width="30px">ID</td>					
						<td width="164px">C&#7845;p &#273;&#7897;</td>
                        <td width="80px">QL<br />ch&#7913;c v&#7909;</td>
                        <td width="80px">QL<br />th&#244;ng tin</td>
						<td width="80px">QL<br />&#272;o&#224;n vi&#234;n</td>
						<td width="80px">QL<br />Phong tr&#224;o</td>
                        <td width="80px">X&#7871;p lo&#7841;i<br />&#273;o&#224;n vi&#234;n</td>
                        <td width="80px">H&#7841;n n&#7897;p<br />ph&#237; &#272;o&#224;n</td>
						<td>&nbsp;</td>
					</tr>                    
					</table>
				</td>
			</tr> 
			<tr>
				<td>
				<div class="account_form_table_scroll">
					<table class="account_form_table_content">
{$thongtin}
					</table>	
				</div>
				</td>	
			</tr>
	<tr>
	<td align="right">
		<input id="delete" name="delete" type="submit" value="X&#243;a"/>
		<input id="add" name="add" type="submit" value="Th&#234;m"/>
		<input id="modify" name="modify" type="submit" value="S&#7917;a"/>
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
    <div class="account_form_footer">
		<div class="leftfoot"></div>
		<div class="midfoot"></div>
		<div class="rightfoot"></div>
	</div>
</div>
EOF;
}
?>