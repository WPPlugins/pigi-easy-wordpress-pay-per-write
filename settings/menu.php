<?php
// create custom plugin settings menu
add_action('admin_menu', 'pppw_create_menu');

function pppw_create_menu() {

	//create new top-level menu
	add_menu_page('Pigi PPW', 'Pigi PPW', '8', __FILE__, 'pppw_settings_page', WP_PLUGIN_URL .'/pigi-easy-wordpress-pay-per-write/images/dollar.jpg', '3');
    add_submenu_page(__FILE__, 'Pigi Pay Per Write | Banner Settings', 'Banner Settings', 8, __FILE__, 'pppw_settings_page');
    add_submenu_page(__FILE__, 'Pigi Pay Per Write | Details', 'Details', 0,  WP_PLUGIN_DIR .'/pigi-easy-wordpress-pay-per-write/doc/details.php' );
    //call register settings function
	add_action( 'admin_init', 'register_pppwsettings' );
}

function wpc_colorpicker_ppw() { ?>
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/plugins/pigi-easy-wordpress-pay-per-write/settings/colorpicker/jscolor.js"></script>
<?php 
}

add_action ('admin_head', 'wpc_colorpicker_ppw');

function wpc_ppw_user_twitter( $contactmethods ) {
	// Add Google Profiles
	$contactmethods['twitter'] = 'Your Twitter Username';
	return $contactmethods;

}
add_filter( 'user_contactmethods', 'wpc_ppw_user_twitter', 10, 1);

function wpc_ppw_user_google($contactmethods) {
	$contactmethods['google_plus'] = 'Your Google Plus Profile url';
	return $contactmethods;
}
add_filter( 'user_contactmethods', 'wpc_ppw_user_google', 11, 1);

function wpc_ppw_user_facebook( $contactmethods ) {
	// Add Google Profiles
	$contactmethods['facebook'] = 'Your Facebook profile url';
	return $contactmethods;

}
add_filter( 'user_contactmethods', 'wpc_ppw_user_facebook', 12, 1);

function wpc_ppw_user_pinterest($contactmethods) {
	$contactmethods['pinterest'] = 'Your Pinterest Profile url';
	return $contactmethods;
}
add_filter( 'user_contactmethods', 'wpc_ppw_user_pinterest', 13, 1);


function register_pppwsettings() {
	//register our settings
	register_setting( 'pppw-settings-group', 'border_color' );
	register_setting( 'pppw-settings-group', 'title_color' );
	register_setting( 'pppw-settings-group', 'background_color' );
	register_setting( 'pppw-settings-group', 'text_color' );
	register_setting( 'pppw-settings-group', 'url_color' );
	register_setting( 'pppw-settings-group', 'width' );
	register_setting( 'pppw-settings-group', 'height' );
	register_setting( 'pppw-settings-group', 'ads_type' ); 
	register_setting( 'pppw-settings-group', 'ads_size' );
}

function pppw_settings_page() {
?>
<div class="wrap">
<h2>Pigi Pay Per Write | Settings Page</h2>


<div>
<br>

<h3>Banner Configuration:</h3>
<p style="float:right;margine-left:10px">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="Z2HB86TG9VGLN">
<input type="hidden" name="lc" value="GB">
<input type="hidden" name="item_name" value="Pigi - Pigi Pay Per Write">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHosted">
<input type="image" src="https://www.paypal.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypal.com/it_IT/i/scr/pixel.gif" width="1" height="1">
</form>
<br /> <br />
</p>

<p><b>Please Specify your preferred Banner Color and Size According with your "<em>Style.css</em>" Template File</b>;</p>
<br /><p><a href="<?php bloginfo('url'); ?>/wp-admin/profile.php"><b>Click here</b></a> when done to set <b>Admin Banner Codes</b></p>

<form method="post" action="options.php">
    <?php settings_fields( 'pppw-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Border Color:</th>
        <td><input class="color" type="text" name="border_color" value="<?php echo get_option('border_color'); ?>" /></td>
        <td>#<?php echo get_option('border_color'); ?></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Title Color:</th>
        <td><input class="color" type="text" name="title_color" value="<?php echo get_option('title_color'); ?>" /></td>
		<td>#<?php echo get_option('title_color'); ?></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Background Color:</th>
        <td><input class="color" type="text" name="background_color" value="<?php echo get_option('background_color'); ?>" /></td>
		<td>#<?php echo get_option('background_color'); ?></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Text Color:</th>
        <td><input class="color" type="text" name="text_color" value="<?php echo get_option('text_color'); ?>" /></td>
		<td>#<?php echo get_option('text_color'); ?></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Url Color:</th>
        <td><input class="color" type="text" name="url_color" value="<?php echo get_option('url_color'); ?>" /></td>
		<td>#<?php echo get_option('url_color'); ?></td>
        </tr>  
      
        <tr valign="top">
        <th scope="row"><?php _e('Advertising Type', 'wpc_aiofp'); ?></th>
        <td>
        <select name="ads_type" id="ads_type">
               <option value="text_image" <?php if (get_option('ads_type') == "text_image") { ?>selected<?php } ?>><?php _e('Text + Images','wpc_aiofp'); ?></option>
               <option value="text" <?php if (get_option('ads_type') == "text") { ?>selected<?php } ?>><?php _e('Text','wpc_aiofp'); ?></option>          
               <option value="image" <?php if (get_option('ads_type') == "image") { ?>selected<?php } ?>><?php _e('Image','wpc_aiofp'); ?></option>
        </select>
     </td>
    
     <td><?php _e('Set the Adsense Type', 'wpc_aiofp'); ?></b> </td>
</tr>

        <tr valign="top">
        <th scope="row"><?php _e('Adsense Size', 'wpc_aiofp'); ?></th>
        <td>
        <select name="ads_size" id="ads_size">
               <!-- Horizontal -->
               <option value="Leaderboard" <?php if (get_option('ads_size') == "Leaderboard") { ?>selected<?php } ?>><?php _e('728 x 90 Leaderboard','wpc_aiofp'); ?></option>
               <option value="Banner" <?php if (get_option('ads_size') == "Banner") { ?>selected<?php } ?>><?php _e('468 x 60 Banner','wpc_aiofp'); ?></option>          
               <option value="Half_Banner" <?php if (get_option('ads_size') == "Half_Banner") { ?>selected<?php } ?>><?php _e('234 x 60 Half Banner','wpc_aiofp'); ?></option>
               <!-- Vertical -->
               <option value="Skyscraper" <?php if (get_option('ads_size') == "Skyscraper") { ?>selected<?php } ?>><?php _e('120 x 600 Skyscraper','wpc_aiofp'); ?></option>
               <option value="Wide_Skyscraper" <?php if (get_option('ads_size') == "Wide_Skyscraper") { ?>selected<?php } ?>><?php _e('160 x 600 Wide Skyscraper','wpc_aiofp'); ?></option>          
               <option value="Vertical_Banner" <?php if (get_option('ads_size') == "Vertical_Banner") { ?>selected<?php } ?>><?php _e('120 x 240 Vertical Banner','wpc_aiofp'); ?></option>
               <!-- Square -->
               <option value="Large_Rectangle" <?php if (get_option('ads_size') == "Large_Rectangle") { ?>selected<?php } ?>><?php _e('336 x 280 "Large Rectangle"','wpc_aiofp'); ?></option>
               <option value="Medium_Rectangle" <?php if (get_option('ads_size') == "Medium_Rectangle") { ?>selected<?php } ?>><?php _e('300 x 250 Medium Rectangle','wpc_aiofp'); ?></option>          
               <option value="Square" <?php if (get_option('ads_size') == "Square") { ?>selected<?php } ?>><?php _e('250 x 250 Square','wpc_aiofp'); ?></option>
               <option value="Small_Rectangle" <?php if (get_option('ads_size') == "Small_Rectangle") { ?>selected<?php } ?>><?php _e('180 x 150 Small Rectangle','wpc_aiofp'); ?></option>
               <option value="Button" <?php if (get_option('ads_size') == "Button") { ?>selected<?php } ?>><?php _e('125 x 125 Button','wpc_aiofp'); ?></option>          
              
        </select>
     </td>
    
     <td><?php _e('Set the Adsense Size', 'wpc_aiofp'); ?></b> </td>
</tr>
   
          
   </table>  
    
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>

</form>

</div>

<?php } ?>
