<?php
function thongtincanhan($hoten,$gioitinh,$ngaysinh,$dantoc,$tongiao,$cmnd){
if($gioitinh==0){
	$nam="checked=\"checked\"";
	$nu="";
}else{
	$nam="";
	$nu="checked=\"checked\"";
}
return
<<<EOF
	<fieldset class="user_info_group_personal">
                    <legend>C&#225; nh&#226;n</legend>
                        <table class="user_info_group_personal_table">                        	
                        <tr>
                            <td class="user_info_group_personal_table_left">H&#7885; t&#234;n:</td>
                            <td class="user_info_group_personal_table_right"><input class="user_info_group_personal_textbox" id="hoten" name="hoten" value="{$hoten}" type="text" /></td>
                        </tr>
                        <tr>
                            <td class="user_info_group_personal_table_left">Gi&#7899;i t&#237;nh:</td>
                            <td class="user_info_group_personal_table_right" style="text-align:center">
                                <label><input type="radio" name="gioitinh" id="gioitinh" value="0" {$nam}/>Nam</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <label><input type="radio" name="gioitinh" id="gioitinh" value="1" {$nu}/>N&#7919;</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="user_info_group_personal_table_left">Ng&#224;y sinh:</td>
                            <td class="user_info_group_personal_table_right"><input class="user_info_group_personal_textbox" id="ngaysinh" name="ngaysinh" value="{$ngaysinh}" type="text" /></td>
                        </tr>
                        <tr>
                            <td class="user_info_group_personal_table_left">D&#226;n t&#7897;c:</td>
                            <td class="user_info_group_personal_table_right"><input class="user_info_group_personal_textbox" id="dantoc" name="dantoc" value="{$dantoc}" type="text" /></td>
                        </tr>
                        <tr>
                            <td class="user_info_group_personal_table_left">T&#244;n gi&#225;o:</td>
                            <td class="user_info_group_personal_table_right"><input class="user_info_group_personal_textbox" id="tongiao" name="tongiao" value="{$tongiao}" type="text" /></td>
                        </tr>
                        <tr>
                            <td class="user_info_group_personal_table_left">CMND:</td>
                            <td class="user_info_group_personal_table_right"><input class="user_info_group_personal_textbox" id="cmnd" name="cmnd" value="{$cmnd}" type="text" /></td>
                        </tr>
                        </table>
                    </fieldset>
EOF;
}
function thongtinlienlac($email,$truong,$dcgiadinh,$dchientru,$dienthoainr,$dienthoaidd){
return
<<<EOF
	<fieldset class="user_info_group_contact">
                    <legend>Li&#234;n l&#7841;c</legend>
                    <table class="user_info_group_contact_table">
						<tr>
                            <td class="user_info_group_contact_table_left">Email:</td>
                            <td class="user_info_group_contact_table_right"><input class="user_info_group_contact_textbox" id="email" name="email" value="{$email}" type="text" /></td>
                        </tr>
                    	<tr>
                            <td class="user_info_group_contact_table_left">Tr&#432;&#7901;ng:</td>
                            <td class="user_info_group_contact_table_right"><input class="user_info_group_contact_textbox" id="truong" name="truong" value="{$truong}" type="text" /></td>
                        </tr>                        	
                        <tr>
                            <td class="user_info_group_contact_table_left">&#272;C gia &#273;&#236;nh:</td>
                            <td class="user_info_group_contact_table_right"><input class="user_info_group_contact_textbox" id="dcgiadinh" name="dcgiadinh" value="{$dcgiadinh}" type="text" /></td>
                        </tr>
                        <tr>
                            <td class="user_info_group_contact_table_left">&#272;C hi&#7879;n tr&#250;:</td>
                            <td class="user_info_group_contact_table_right"><input class="user_info_group_contact_textbox" id="dchientru" name="dchientru" value="{$dchientru}" type="text" /></td>
                        </tr>
                        <tr>
                            <td class="user_info_group_contact_table_left">&#272;i&#7879;n tho&#7841;i (NR):</td>
                            <td class="user_info_group_contact_table_right"><input class="user_info_group_contact_textbox" id="dienthoainr" name="dienthoainr" value="{$dienthoainr}" type="text" /></td>
                        </tr>
                        <tr>
                            <td class="user_info_group_contact_table_left">&#272;i&#7879;n tho&#7841;i (D&#272;):</td>
                            <td class="user_info_group_contact_table_right"><input class="user_info_group_contact_textbox" id="dienthoaidd" name="dienthoaidd" value="{$dienthoaidd}" type="text" /></td>
                        </tr>
                        <tr>
                            <td class="user_info_group_contact_table_left">&nbsp;</td>
                            <td class="user_info_group_contact_table_right"><a href="?type=phone_history">Tra c&#7913;u c&#225;c s&#7889; &#272;T &#273;&#227; d&#249;ng</a></td>
                        </tr>
                    </table>
                    </fieldset> 
EOF;
}

function thongtinchidoan($chidoan,$ngayvaodoan,$chucvu,$hannopphi,$loai){
return
<<<EOF
<fieldset class="user_info_group_member">
                    <legend>Th&#244;ng tin &#272;o&#224;n vi&#234;n</legend>
                        <table class="user_info_group_member_table">                        	
                        <tr>
                            <td class="user_info_group_member_table_left">Chi &#272;o&#224;n:</td>
                            <td class="user_info_group_member_table_right"><input class="user_info_group_member_textbox" name="chidoan" id="chidoan" value="{$chidoan}" type="text" /></td>
                        </tr>                           
                        <tr>
                            <td class="user_info_group_personal_table_left">Ng&#224;y v&#224;o &#272;o&#224;n:</td>
                            <td class="user_info_group_personal_table_right"><input class="user_info_group_personal_textbox" name="ngayvaodoan" id="ngayvaodoan" value="{$ngayvaodoan}" type="text" /></td>
                        </tr>
						<tr>
                            <td class="user_info_group_personal_table_left">Ch&#7913;c v&#7909;:</td>
                            <td class="user_info_group_personal_table_right"><input class="user_info_group_personal_textbox" name="chucvu" id="chucvu" value="{$chucvu}" type="text" /></td>
                        </tr>
                        <tr>
                            <td class="user_info_group_personal_table_left">H&#7841;n n&#7897;p ph&#237;:</td>
                            <td class="user_info_group_personal_table_right"><input class="user_info_group_personal_textbox" name="hannopphi" id="hannopphi" value="{$hannopphi}" type="text" /></td>
                        </tr>
						<tr>
                            <td class="user_info_group_personal_table_left">X&#7871;p lo&#7841;i:</td>
                            <td class="user_info_group_personal_table_right"><input class="user_info_group_personal_textbox" name="loai" id="loai" value="{$loai}" type="text" /></td>
                        </tr>
						<tr>
                            <td class="user_info_group_personal_table_left"></td>
                            <td class="user_info_group_personal_table_right"><a href="index.php?type=rate_history">Xem b&#7843;ng x&#7871;p lo&#7841;i c&#225;c n&#259;m</a></td>
                        </tr>
                        </table>
</fieldset>
EOF;
}

function thongtinphongtrao($danhsachphongtrao){
$thongtin="";
for ($i=0;$i<count($danhsachphongtrao);$i++)
{	
	$thongtin.="<tr class=\"user_info_group_movement_table_content_highlight\">
					<td width=\"160px\">".$danhsachphongtrao[$i][0]."</td>
					<td width=\"70px\">".$danhsachphongtrao[$i][1]."</td>
					<td width=\"65px\">".$danhsachphongtrao[$i][2]."</td>
				</tr>";
};
return
<<<EOF
<fieldset class="user_info_group_movement">
                    <legend>Th&#244;ng tin phong tr&#224;o
                    </legend>					
                    <table class="user_info_group_movement_table">
                        <tr>
							<td>
								<table class = "user_info_group_movement_table_header" cellspacing="0" width="100%" border="1">
								<tr>
									<td width="160px">Phong tr&#224;o</td>
									<td width="75px">Ng&#224;y</td>
									<td width="65px">&#272;&#225;nh gi&#225;</td>
									<td width="16px">&nbsp;</td>
								</tr>
								</table>
							</td>
                        </tr> 
                       	<tr>
							<td>
							<div class="user_info_group_movement_table_scroll">
								<table class="user_info_group_movement_table_content">
{$thongtin}
								</table>	
							</div>
							</td>	
                        </tr>
                    </table>
                    <div class="user_info_group_movement_text">
                        <a href="index.php?type=activity">&#272;&#259;ng k&#237; tham gia phong tr&#224;o</a>
                    </div>
                    </fieldset> 
EOF;
}

function user_info_form($thongtincanhan,$thongtinlienlac,$thongtinchidoan,$thongtinphongtrao){
return
<<<EOF
<div class="user_info_form">
    <!---Form header--->
    <div class="user_info_form_header">
	<div class="lefthead"></div>
	<div class="midhead">
        <div class="form_header_text">
            <b>Th&#244;ng tin c&#225; nh&#226;n</b>        
        </div>
	</div>
	<div class="righthead"></div>
    </div>
    <!---Form body--->
    <div class="user_info_form_body">
	<div class="left"></div>
	<div class="mid">
      <table class="user_info_form_text">
        <tbody>
            <tr>
                <td>                       
{$thongtincanhan}
                <td>
                <td>                        
{$thongtinlienlac}                 
                </td>
            </tr>
            <tr>
                <td>                       
{$thongtinchidoan}
                <td>
                <td>                        
{$thongtinphongtrao}             
                </td>
            </tr>
        </tbody>
        </table>
        <div class="user_info_button"><input type="submit" value="S&#7917;a" class="user_info_form_submit" /></div>
	</div>
	<div class="right"></div>
	</div>
	<div class="user_info_form_footer">
		<div class="leftfoot"></div>
		<div class="midfoot"></div>
		<div class="rightfoot"></div>
	</div>
</div>
EOF;
}
?>