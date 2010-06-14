<?php
function rate_history_form($danhsachxeploai){
$thongtin="";
$var="";
for ($i=0;$i<count($danhsachxeploai);$i++)
{
	$thongtin.="<tr class=\"rate_history_form_table_content_highlight\" onClick=\"javascript:getcontent($i);\">
						<td width=\"108px\">".$danhsachxeploai[$i]['nam']."</td>
						<td width=\"124px\">".$danhsachxeploai[$i]['loai']."</td>
				</tr>";
	$var.="\"".$danhsachxeploai[$i]['danhgia']."\"".($i<count($danhsachxeploai)-1?",":"");
};	
return
<<<EOF
<script>
function getcontent(i){	
	var danhsach=Array($var);
	document.getElementById("danhgia").value=danhsach[i];	
}
</script>
<div class="rate_history_form">
    <!---Form header--->
    <div class="rate_history_form_header">
        <div class="lefthead"></div>
        <div class="midhead">
            <div class="form_header_text">
               <b>B&#7843;ng &#273;&#225;nh gi&#225; x&#7871;p lo&#7841;i h&#224;ng n&#259;m</b>    
            </div>
        </div>
        <div class="righthead"></div>
    </div>
    <!---Form body--->
    <div class="rate_history_form_body">
    <div class="left"></div>
	<div class="mid">
		<table class="rate_history_form_text">
        <tbody>		
		<tr height="24px">
			<td width="267px">
				B&#7843;ng &#273;&#225;nh gi&#225; x&#7871;p lo&#7841;i h&#224;ng n&#259;m:
			</td>			
		</tr>
		<tr valign="top">
			<td width="267px">
			<table class="rate_history_form_table">
			<tr>
				<td>
					<table class = "rate_history_form_table_header" cellspacing="0" width="100%" border="1">
					<tr>	
                   		<td width="107px">N&#259;m</td>					
						<td width="124px">X&#7871;p lo&#7841;i</td>
						<td>&nbsp;</td>
					</tr>                    
					</table>
				</td>
			</tr> 
			<tr>
				<td>
				<div class="rate_history_form_table_scroll">
					<table class="rate_history_form_table_content">
{$thongtin}
					</table>	
				</div>
				</td>	
			</tr>
            <tr>
                <td class="rate_history_form_table_bottom_content">
					&#272;&#225;nh gi&#225;:<br/ >
                    <textarea class="rate_history_form_textarea_content" id="danhgia" name="danhgia" style="width:230px;"></textarea>
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
    <div class="rate_history_form_footer">
		<div class="leftfoot"></div>
		<div class="midfoot"></div>
		<div class="rightfoot"></div>
	</div>
</div>
EOF;
}
?>