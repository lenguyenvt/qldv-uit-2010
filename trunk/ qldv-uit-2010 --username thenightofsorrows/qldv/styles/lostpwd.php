<?php
function lostpwd_form($lostpwd_email){
return
<<<EOF
<form method="post" action="">
	<div class="lostpwd_form">	
		<!---Form header--->
		<div id="lostpwd_form_header" class="lostpwd_form_header">
			<div class="lefthead"></div>
			<div class="midhead">
			<div class="form_header_text">
				<b>Kh&#244;i ph&#7909;c m&#7853;t kh&#7849;u</b>
			</div>
			</div>
			<div class="righthead"></div>
		</div>       
		<!---Form body--->
		<div id="lostpwd_form_body" class="lostpwd_form_body">  
			<div class="left"></div>
			<div class="mid">       
				<table class="form_body_table">
				<tbody style="width:340px">
					<tr>
						<td class="lostpwd_table_left_align">Email:</td>
						<td class="lostpwd_table_left_align"><input name="lostpwd_email" type="text" class="lostpwd_form_textbox" value="{$lostpwd_email}"></td>
					</tr>
					<tr>
						<td></td>
						<td align="right"><input type="submit" value="G&#7917;i m&#7853;t kh&#7849;u"></td>
					</tr>
				</tbody>
				</table>  
			</div>
			<div class="right"></div>          
		</div>
		<div id="lostpwd_form_footer" class="lostpwd_form_footer">
			<div class="leftfoot"></div>
			<div class="midfoot"></div>
			<div class="rightfoot"></div>
		</div>
	</div>
</form>
<div class="clear"></div>	
EOF;
}
?>