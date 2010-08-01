<?php
require_once ("./styles/group_manage.php");
function page_content() {
	global $s, $t, $p, $page_header, $_GET, $_POST, $db, $user;
	$page_header = "Qu&#7843;n l&#253; c&#417; s&#7903; &#272;o&#224;n";
	if (check_auth ( "qlcosodoan", 1 )) {
		if (isset ( $_POST ['to_post'] ))
			if (check_auth ( "qlcosodoan", 2 )) {
				if (isset ( $_POST ['ten'] ))
					$_ten = post_in ( $_POST ['ten'] );
				else
					$_ten = "";
				if (isset ( $_POST ['id_cosodoan'] ))
					$_id_cosodoan = post_in ( $_POST ['id_cosodoan'] );
				else
					$_id_cosodoan = "";
				if (isset ( $_POST ['co_dau'] ))
					$_co_dau = post_in ( $_POST ['co_dau'] );
				else
					$_co_dau = "";
				if (isset ( $_POST ['parent'] ))
					$_parent = post_in ( $_POST ['parent'] );
				else
					$_parent = "";
				if (isset ( $_POST ['sua'] )) {
					if (get_cosodoan_capduoi ( $user ['id_doanvien'], "", 1, $_id_cosodoan )) {
						$sql = "INSERT INTO `cosodoan` (`id_cosodoan` ,
						`cap` ,
						`ten` ,
						`parent` ,
						`co_dau` )
						VALUES (NULL , '3', 'abc', '1', '0');";
					}
				}
			}
		$sql = "SELECT `id_cosodoan`,`ten`,`parent`,`co_dau` FROM `cosodoan` WHERE " . get_cosodoan_capduoi($user['id_doanvien'], "`id_cosodoan`" );
		$db->query ($sql);
		$i = 0;
		$danhsachcosodoan = array ();
		while ( $tmp = mysql_fetch_array ( $db->query_result ) ) {
			$danhsachcosodoan [$i++] = $tmp;
		}
		return user_main_form ( group_manage_form ( $danhsachcosodoan ) );
	} else
		return user_main_form(page_error("B&#7841;n kh&#244;ng c&#243; quy&#7873;n truy c&#7853;p trang n&#224;y!"));
}
?>