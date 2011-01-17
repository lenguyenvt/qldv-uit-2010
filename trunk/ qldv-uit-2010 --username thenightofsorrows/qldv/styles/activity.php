<?php
function activity_form($danhsachphongtrao,$error=""){
global $db,$user,$_GET;
$thongtin="";
$var="";
if(!isset($_GET['from'])) $_GET['from']="";
if(!isset($_GET['to'])) $_GET['to']="";
for ($i=0;$i<sizeof($danhsachphongtrao);$i++)
{	
	$thongtin.="<tr class=\"activity_form_table_content_highlight\" onClick=\"javascript:getcontent($i);\">
					<td width=\"30px\">".($i+1)."</td>
					<td width=\"200px\">".$danhsachphongtrao[$i]['ten']."</td>
					<td width=\"100px\">".$danhsachphongtrao[$i]['start']."</td>
					<td width=\"100px\">".$danhsachphongtrao[$i]['end']."</td>
					<td width=\"25px\"><input name=\"xoa_phong_trao[]\" type=\"checkbox\" value=\"".$danhsachphongtrao[$i]['id_phongtraodoan']."\" /></td>
				</tr>";
	$var.="Array(\"".$danhsachphongtrao[$i]['ten']."\",\"".$danhsachphongtrao[$i]['id_phongtraodoan']."\",\"".$danhsachphongtrao[$i]['diengiai']."\",\"".$danhsachphongtrao[$i]['start']."\",\"".$danhsachphongtrao[$i]['end']."\",\"".$danhsachphongtrao[$i]['id_cosodoan']."\")".($i<count($danhsachphongtrao)-1?",":"");
};
if(check_auth("qlphongtrao",2)){
	$buttons_1="							<input id=\"insert\" name=\"insert\" type=\"submit\" value=\"Th&#234;m\" style=\"margin-top:7px;width:70px\"/>
							<input id=\"update\" name=\"update\" type=\"submit\" value=\"C&#7853;p nh&#7853;t\" style=\"margin-top:7px;width:70px\"/>
							<input id=\"attend\" name=\"attend\" type=\"submit\" value=\"Tham gia\" style=\"margin-top:7px;width:70px\"/>";
	$buttons_2="<input type=\"hidden\" name=\"to_post\">\n<input id=\"delete\" onClick=\"if(confirm('B&#7841;n mu&#7889;n x&#243;a nh&#7919;ng phong tr&#224;o n&#224;y?')) return true; else return false;\" name=\"delete\" type=\"submit\" value=\"X&#243;a\" style=\"margin-top:3px;width:70px\"/>";
}else{
	$buttons_1="							<input id=\"attend\" name=\"attend\" type=\"submit\" value=\"Tham gia\" style=\"margin-top:7px;width:70px\"/>";
	$buttons_2="";
}
	$option_cosodoan=make_select_cosodoan(1,"","width:120px;font-size:8pt");
	$option_cosodoan="\n<tr><td>C&#417; s&#7903; &#273;o&#224;n</td><td align=\"right\">$option_cosodoan</td></tr>";
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
	document.getElementById("url").setAttribute('href','index.php?type=activity_info&id_phongtraodoan='+danhsach[i][1])
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
			<td>
{$error}
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
			<form method="POST">
                <tr>
                    <td colspan="2">
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
                    <td colspan="2">
                    <div class="activity_form_table_scroll">
                        <table class="activity_form_table_content">
    {$thongtin}
                        </table>	
                    </div>
                    </td>	
                </tr>
                <tr>
                    <td align="right" valign="top">
    {$buttons_2}
                    </td>
                </tr>
            </form>
                <tr>
                    <td align="left">
                        <table width="250px">
                        <form method="GET">
                        <tr>
                            
                            <td>
                                T&#7915; ng&#224;y:
                            </td>
                            <input type="hidden" name="type" value="activity">
                            <td align="right">
                                <input name="from" id="from" type="text" style="width:100px" value="{$_GET['from']}" />
                            </td>
                            <td>
                                <input type="submit" value="Hi&#7875;n th&#7883;" style="width:70px" />
                            </td>
                        </tr>
                        <tr>
                            <td>&#272;&#7871;n ng&#224;y:
                            </td>
                            <td align="right">
                            <input name="to" id="to" type="text" style="width:100px" value="{$_GET['to']}" />
                            </td>
                            <td>
                            </td>
                        </tr>
                        </form>
                        </table>
                    </td>
                </tr>
                </table>
			</td>
			<td>			
            	<table class="activity_form_right_content">
                <form method="POST">
				<tr>
					<td colspan="2">
						<input id="ten" name="ten" type="text"  class="activity_form_textbox" style="width:215px;text-align:center" />
					</td>
				</tr>
				<tr>
                	<td colspan="2">
						<input id="id_phongtraodoan" name="id_phongtraodoan" type="hidden" />
                    </td>
				</tr>
				<tr>
					<td width="100px">
						Ng&#224;y b&#7855;t &#273;&#7847;u:
					</td>
					<td width="85px" align="right">
						<input id="start" name="start" type="text" class="activity_form_textbox" />
					</td>
				</tr> 
				<tr>   
					<td width="100px">			   
						Ng&#224;y k&#7871;t th&#250;c:
					</td>
					<td width="115px" align="right">
						<input id= "end" name="end" type="text" class="activity_form_textbox" />
					</td>
					<script>$("#start,#end,#from,#to").datepick();</script>
				</tr>
{$option_cosodoan}
				<tr>   
					<td width="100px">
					N&#7897;i dung:
					</td>
					<td  width="115px" align="right" >
					<a href="?type=activity_info" id="url" target="_blank">Th&#7889;ng k&#234;</a>
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
				</tr>	
                </form>		
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