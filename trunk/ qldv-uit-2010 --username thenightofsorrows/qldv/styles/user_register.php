<?php
function user_register_form($info=""){
	global $db,$user;
	$option_cosodoan="C&#417; s&#7903; &#273;o&#224;n: ".make_select_cosodoan();
return
<<<EOF
<div class="user_manage_form">
    <!---Form header--->
    <div class="user_manage_form_header">
	<div class="lefthead"></div>
	<div class="midhead">
        <div class="form_header_text">
            <b>Th&#234;m &#273;o&#224;n vi&#234;n</b>
        </div>
	</div>
	<div class="righthead"></div>
    </div>
    <!---Form body--->
    <div class="user_manage_form_body">
	<div class="left"></div>
	<div class="mid">
		<form enctype="multipart/form-data" method="POST">
		<font color="red">{$info}</font>
		<br /><b>T&#7853;p tin upload ph&#7843;i &#273;&#250;ng theo <a href="sample.txt">[m&#7851;u n&#224;y]</a>.</b><br />
		{$option_cosodoan}
		<br />
		<input type="hidden" name="MAX_FILE_SIZE" value="500000" />
		L&#7921;a ch&#7885;n t&#7853;p tin &#273;&#7875; upload: <input name="uploadedfile" type="file" />
		<input type="submit" name="is_upload" value="Upload v&#224; nh&#7853;p" />
		</form>
		<hr />
		<form enctype="multipart/form-data" method="POST">
		<br /><b>Th&#234;m m&#7897;t &#273;o&#224;n vi&#234;n</b><br />
		{$option_cosodoan}
		<br />
		<table border="0"><tr><td>Username:</td><td><input type="text" name="username"></td></tr>
		<tr><td>Password:</td><td><input type="password" name="pw"></td></tr>
		<tr><td>Email:</td><td><input type="text" name="email"></td></tr>
		<tr><td>H&#7885; t&#234;n:</td><td><input type="text" name="name"></td></tr>
		<tr><td>Ng&#224;y th&#225;ng n&#259;m sinh:</td><td><input type="text" name="birthday"></td></tr>
		</table>
		<input type="submit" name="is_single" value="T&#7841;o &#273;o&#224;n vi&#234;n" />
		</form>
	</div>
	<div class="right"></div>
	</div>
	<div class="user_manage_form_footer">
		<div class="leftfoot"></div>
		<div class="midfoot"></div>
		<div class="rightfoot"></div>
	</div>
</div>
EOF;
}
?>