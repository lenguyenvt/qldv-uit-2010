<?php
function phone_history_form($danhsachsdt){
$thongtin="";
for ($i=0;$i<sizeof($danhsachsdt);$i++)
{	
	$j=$i+1;
	$thongtin.="<tr class=\"phone_history_form_table_content_highlight\">
						<td width=\"41px\">$j</td>
						<td width=\"164px\">".$danhsachsdt[$i]."</td>
						<td width=\"25px\"><input id=\"dsdt[]\" name=\"dsdt[]\" type=\"checkbox\" value=\"$danhsachsdt[$i]\" /></td>
				</tr>";
};

	
return
<<<EOF
<form input method = "POST">
<div class="phone_history_form">
    <!---Form header--->
    <div class="phone_history_form_header">
        <div class="lefthead"></div>
        <div class="midhead">
            <div class="form_header_text">
               <b>Danh s&#225;ch s&#7889; &#273;i&#7879;n tho&#7841;i</b>    
            </div>
        </div>
        <div class="righthead"></div>
    </div>
    <!---Form body--->
    <div class="phone_history_form_body">
    <div class="left"></div>
	<div class="mid">
		<table class="phone_history_form_text">
        <tbody>		
		<tr height="24px">
			<td width="267px">
				Danh s&#225;ch s&#7889; &#273;i&#7879;n tho&#7841;i:
			</td>			
		</tr>
		<tr valign="top">
			<td width="267px">
			<table class="phone_history_form_table">
			<tr>
				<td>
					<table class = "phone_history_form_table_header" cellspacing="0" width="100%" border="1">
					<tr>	
                   		<td width="40px">STT</td>					
						<td width="164px">S&#7889;</td>
                        <td width="25px">&nbsp;</td>
						<td>&nbsp;</td>
					</tr>                    
					</table>
				</td>
			</tr> 
			<tr>
				<td>
				<div class="phone_history_form_table_scroll">
					<table class="phone_history_form_table_content">
{$thongtin}
					</table>	
				</div>
				</td>	
			</tr>
            <tr>
            	
                <td align="right">
                    <input id="delete" name="delete" type="submit" value="X&#243;a" style="margin-top:7px"/>
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
    <div class="phone_history_form_footer">
		<div class="leftfoot"></div>
		<div class="midfoot"></div>
		<div class="rightfoot"></div>
	</div>
</div>
</form>
EOF;
}
?>