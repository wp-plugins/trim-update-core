<?php
/*
Plugin Name: Trim update core
Plugin URI: http://branu.jp/
Description: Upgrade of a WordPress main part is made undisplayed.
*/


//不要なサイドメニューを削除
function remove_submenu_update_core() {
	remove_submenu_page( 'index.php', 'update-core.php' ); //更新
}
add_action('admin_menu', 'remove_submenu_update_core');

