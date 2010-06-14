<?php
function changepwd_form($error=""){
if($error!="") $error=page_error($error);
return <<<EOF
<form action="" method="post">
	<div class="changepwd_form">	
		<!---Form header--->		
		<div id="changepwd_form_header" class="changepwd_form_header">
			<div class="lefthead"></div>
			<div class="midhead">
			<div class="form_header_text">
				<b>&#272;&#7893;i m&#7853;t kh&#7849;u</b>        
				</div>
			</div>
			<div class="righthead">
			</div>
		</div>	
		<!---Form body--->
		<div id="changepwd_form_body" class="changepwd_form_body">
		<div class="left"></div>
		<div class="mid">
			<table class="form_body_table">
{$error}
			<tbody style="width:340px">
				<tr>
					<td class="changepwd_table_left_align">M&#7853;t kh&#7849;u c&#361;:</td>
					<td class="changepwd_table_right_align"><input name="old_pwd" type="password" class="changepwd_textbox" value=""></td>
				</tr>
				<tr>
					<td class="changepwd_table_left_align">M&#7853;t kh&#7849;u m&#7899;i:</td>
					<td class="changepwd_table_right_align"><input name="new_pwd" type="password" class="changepwd_textbox"></td>
				</tr>
				<tr>
					<td class="changepwd_table_left_align">X&#225;c nh&#7853;n:</td>
					<td class="changepwd_table_right_align"><input name="new_pwd2" type="password" class="changepwd_textbox"></td>
				</tr>	
				<tr>
					<td>&nbsp;</td>
					<input type="hidden" name="to_change_pass" value="1">
					<td align="right"><input name="ok" type="submit" value="&#272;&#7893;i" class="changepwd_submit"></td>
				</tr>
			</tbody>	
			</table>
		</div>
		<div class="right"></div>
		</div>        
		<div id="changepwd_form_footer" class="changepwd_form_footer"> 
			<div class="leftfoot"></div>
			<div class="midfoot"></div>
			<div class="rightfoot"></div>       
		</div>
	</div>
</form>
EOF;
}
?>