
// Remove Menu for Specific User Role Start ========================================
add_action( 'admin_init', 'remove_menus' , 100 );
add_action( 'admin_menu', 'remove_menus' , 100 );
function remove_menus(){
$roles = wp_get_current_user()->roles;
 
if( !in_array('shop_manager',$roles)){
return;
}
	remove_menu_page( 'edit.php' ); //Posts
	remove_menu_page( 'upload.php' ); //Media
	remove_menu_page( 'edit-comments.php' ); //Comments
	remove_menu_page( 'themes.php' ); //Appearance
	remove_menu_page( 'plugins.php' ); //Plugins
	remove_menu_page( 'users.php' ); //Users
	remove_menu_page( 'tools.php' ); //Tools
	remove_menu_page( 'options-general.php' ); //Settings
	remove_menu_page( 'edit.php?post_type=page' ); //Pages
	remove_menu_page( 'wpcf7' );
	remove_menu_page( 'edit.php?post_type=ziss' ); //Ziss
	remove_menu_page( 'edit.php?post_type=cislen_mapper' ); //cislen_mapper
	remove_menu_page( 'vc-welcome'); // WPBakery
	remove_menu_page( 'cislen_menu'); // cislen_menu
	remove_menu_page( 'woocommerce-marketing'); // jetpack
	remove_menu_page( 'jetpack'); // jetpack

	remove_submenu_page( 'woocommerce', 'wc-addons' ); //Add-ons submenu
	remove_submenu_page( 'woocommerce', 'wc-facebook' ); //Add-ons submenu
	remove_submenu_page( 'woocommerce', 'wc-settings' ); //wc-settings submenu
	remove_submenu_page( 'woocommerce', 'wc-status' ); //wc-status submenu
	remove_submenu_page( 'woocommerce', 'wc_taxonomy_discounts_webdados' ); //wc_taxonomy_discounts_webdados submenu
}
// Remove Menu for Specific User Role End ========================================

