<?php
function login_form($login_name="",$err=""){
return <<<EOF
<form action="" method="post">
	<div class="login_form">	
		<!---Form header--->
		<div id="login_form_header" class="login_form_header">
			<div class="lefthead"></div>
			<div class="midhead">
				<div class="form_header_text">
					<b>&#272;&#259;ng nh&#7853;p</b>        
				</div>
			</div>
			<div class="righthead">
			</div>
		</div>	
		<!---Form body--->
		<div id="login_form_body" class="login_form_body">
		<div class="left"></div>
		<div class="mid">
			<span class="error">$err</span>
			<table class="form_body_table">
			<tbody style="width:340px">
				<tr>
					<td class="login_table_left_align">T&#234;n truy c&#7853;p:</td>
					<td class="login_table_right_align"><input id = "login_name" name="login_name" type="text" class="login_textbox" value="{$login_name}"></td>
				</tr>
				<tr>
					<td>M&#7853;t kh&#7849;u:</td>
					<td align="right"><input name="login_pwd" type="password" class="login_textbox"></td>
				</tr>
				<tr>
					<td></td>
					<input type="hidden" name="is_log_in" value="1">
					<td align="right"><input name="submit" type="submit" value="&#272;&#259;ng nh&#7853;p" /></td>
				</tr>
				<!---Link Lost Password--->
				<tr>
					<td></td>
					<td align="right"><font size="-1">Qu&#234;n m&#7853;t kh&#7849;u? Nh&#7845;n v&#224;o <a href="./?type=lostpwd">&#273;&#226;y</a></font></td>
				</tr>		
			</tbody>	
			</table>
		</div>
		<div class="right"></div>
		</div>
		<div id="login_form_footer" class="login_form_footer">
			<div class="leftfoot"></div>
			<div class="midfoot"></div>
			<div class="rightfoot"></div>
		</div>
	</div>
</form>
<div class="clear"></div>
EOF;
}
function login_successful(){
return page_error("&#272;&#259;ng nh&#7853;p th&#224;nh c&#244;ng! <a href=\"./\">[&#273;&#226;y]</a> &#273;&#7875; tr&#7903; l&#7841;i trang ch&#7911;.");
}
?>