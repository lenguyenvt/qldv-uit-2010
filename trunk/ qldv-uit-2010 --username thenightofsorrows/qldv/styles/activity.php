<?php
function activity_form($danhsachhoatdong){
$thongtin="";
$var="";
for ($i=0;$i<count($danhsachhoatdong);$i++)
{	
	$thongtin.="<tr class=\"activity_form_table_content_highlight\" onClick=\"javascript:getcontent($i);\">
					<td width=\"30px\">".$danhsachhoatdong[$i]['stt']."</td>
					<td width=\"200px\">".$danhsachhoatdong[$i]['ten']."</td>
					<td width=\"100px\">".$danhsachhoatdong[$i]['start']."</td>
					<td width=\"100px\">".$danhsachhoatdong[$i]['end']."</td>
					<td width=\"25px\"><input name=\"checked\" type=\"checkbox\" value=\"checked\" /></td>
				</tr>";
	$var.="Array(\"".$danhsachhoatdong[$i]['ten']."\",\"".$danhsachhoatdong[$i]['id_phongtrao']."\",\"".$danhsachhoatdong[$i]['diengiai']."\",\"".$danhsachhoatdong[$i]['start']."\",\"".$danhsachhoatdong[$i]['end']."\")".($i<count($danhsachhoatdong)-1?",":"");
};
return
<<<EOF
<script>
function getcontent(i){	
	var danhsach=Array($var);
	document.getElementById("ten").value=danhsach[i][0];
	document.getElementById("id_phongtrao").value=danhsach[i][1];
	document.getElementById("diengiai").value=danhsach[i][2];
	document.getElementById("start").value=danhsach[i][3];
	document.getElementById("end").value=danhsach[i][4];	
}
</script>
<div class="activity_form">
    <!---Form header--->
    <div class="activity_form_header">
    <div class="lefthead"></div>
	<div class="midhead">
        <div class="form_header_text">
           <b>Qu&#7843;n l&#253; ho&#7841;t &#273;&#7897;ng</b>    
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
		<tr height="24px">
			<td width="477px">
				Danh s&#225;ch ho&#7841;t &#273;&#7897;ng:
			</td>
			<td width="213px">
				&nbsp;&nbsp;Chi ti&#7871;t ho&#7841;t &#273;&#7897;ng:
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
						<td width="200px">Ho&#7841;t &#273;&#7897;ng</td>
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
                    <input id="delete" name="delete" type="submit" value="X&#243;a" style="margin-top:7px;width:70px"/>
                </td>
            </tr>
			</table>
			</td>
			<td>
            	<table class="activity_form_right_content">
                <tr>
                    <td colspan="2" >
                        <input id="ten" name="ten" type="text"  class="activity_form_textbox" style="width:215px;text-align:center"/><br />
                    </td>
                </tr>
                <tr>
                	<td>
                    	M&#227; s&#7889;: 
                    </td>
                    <td align="right">
                    	<input id="id_phongtrao" name="id_phongtrao" type="text" class="activity_form_textbox" /><br />  
                    </td>
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
                    	<input id= "end" name="end" type="text" class="activity_form_textbox"/><br />
                    </td>
                </tr>
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
                    	<input id="insert" name="insert"  type="submit" value="Th&#234;m" style="margin-top:7px;width:70px"/>
                        <input id="update" name="update"  type="submit" value="C&#7853;p nh&#7853;t" style="margin-top:7px;width:70px"/>
                        <input id="attend" name="attend"   type="submit" value="Tham gia" style="margin-top:7px;width:70px"/>
                	</td>
                    <td>                        
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
    <div class="activity_form_footer">
		<div class="leftfoot"></div>
		<div class="midfoot"></div>
		<div class="rightfoot"></div>
	</div>
</div>
EOF;
}
?>