<?php	
	
add_action('admin_menu', 'pppw_create_menu');

function pppw_create_menu() {

	//create new top-level menu
	add_menu_page('Pigi PPW Settings', 'Settings', 'administrator', __FILE__, 'pppw_settings_page',plugins_url('/images/icon.png', __FILE__));

	//call register settings function
	add_action( 'admin_init', 'register_pppwsettings' );
}
	
function register_pppwsettings() {
	//register our settings
	register_setting( 'pppw-settings-group', 'border_color' );
	register_setting( 'pppw-settings-group', 'title_color' );
	register_setting( 'pppw-settings-group', 'background_color' );
	register_setting( 'pppw-settings-group', 'text_color' );
	register_setting( 'pppw-settings-group', 'url_color' );
}

function sws_settings_page() {
?>
<div class="wrap">
<h2>Pigi Pay Per Write | Config Page</h2>

<form method="post" action="options.php">
    <?php settings_fields( 'sws-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Border Color:</th>
        <td><input type="text" name="border_color" value="<?php echo get_option('border_color'); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Title Color:</th>
        <td><input type="text" name="title_color" value="<?php echo get_option('title_color'); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Background Color:</th>
        <td><input type="text" name="background_color" value="<?php echo get_option('background_color'); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Text Color:</th>
        <td><input type="text" name="text_color" value="<?php echo get_option('text_color'); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Url Color:</th>
        <td><input type="text" name="url_color" value="<?php echo get_option('url_color'); ?>" /></td>
        </tr>  
    </table>
    
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>

</form>
</div>
<?php } ?>


</div>
