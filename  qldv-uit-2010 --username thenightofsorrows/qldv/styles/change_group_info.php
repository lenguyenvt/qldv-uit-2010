<?php
function change_group_info_form($danhsach){
$thongtin="";
for ($i=0;$i<sizeof($danhsach);$i++)
{	
	$j=$i+1;
	$thongtin.="<tr class=\"change_group_info_form_table_content_highlight\">
						<td width=\"100px\">".$danhsach[$i]['date']."</td>
						<td width=\"185px\">".$danhsach[$i]['dest']."</td>
				</tr>";
};

	
return
<<<EOF
<div class="change_group_info_form">
    <!---Form header--->
    <div class="change_group_info_form_header">
        <div class="lefthead"></div>
        <div class="midhead">
            <div class="form_header_text">
               <b>Th&#244;ng tin chuy&#7875;n sinh ho&#7841;t &#273;o&#224;n</b>    
            </div>
        </div>
        <div class="righthead"></div>
    </div>
    <!---Form body--->
    <div class="change_group_info_form_body">
    <div class="left"></div>
	<div class="mid">
		<table class="change_group_info_form_text">
        <tbody>		
		<tr height="24px">
			<td width="267px">
				Th&#244;ng tin chuy&#7875;n sinh ho&#7841;t &#273;o&#224;n:
			</td>			
		</tr>
		<tr valign="top">
			<td width="267px">
			<table class="change_group_info_form_table">
			<tr>
				<td>
					<table class = "change_group_info_form_table_header" cellspacing="0" width="100%" border="1">
					<tr>	
                   		<td width="100px">Th&#7901;i gian</td>					
						<td width="185px">Chi &#273;o&#224;n chuy&#7875;n t&#7899;i</td>
						<td>&nbsp;</td>
					</tr>                    
					</table>
				</td>
			</tr> 
			<tr>
				<td>
				<div class="change_group_info_form_table_scroll">
					<table class="change_group_info_form_table_content">
{$thongtin}
					</table>	
				</div>
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
    <div class="change_group_info_form_footer">
		<div class="leftfoot"></div>
		<div class="midfoot"></div>
		<div class="rightfoot"></div>
	</div>
</div>
EOF;
}
?>