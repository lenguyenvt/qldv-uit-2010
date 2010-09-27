<?php
function user_register_form($info=""){
	global $db,$user;
	$sql="SELECT `id_cosodoan`,`ten` FROM `cosodoan` WHERE ".get_cosodoan_capduoi($user['id_doanvien'],"`id_cosodoan`");
	$db->query($sql);
	$option_cosodoan="<select name=\"id_cosodoan\" id=\"id_cosodoan\" style=\"width:220px;font-size:9pt\">";
	while($tmp=$db->fetch_array()){
		$option_cosodoan.="\n<option value=\"{$tmp['id_cosodoan']}\">{$tmp['ten']}</option>";
	}
	$option_cosodoan="Chi &#272;o&#224;n: $option_cosodoan </select>";
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