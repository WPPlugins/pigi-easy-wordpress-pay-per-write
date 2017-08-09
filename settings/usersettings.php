<?php
/* This is The User profile Settings file */

class ppw_user_settings {

function ppw_user_settings() {
    if ( is_admin() ) {
        add_action('show_user_profile', array(&$this,'adsense_user_profile'));
        add_action('edit_user_profile', array(&$this,'adsense_user_profile'));
        add_action('personal_options_update', array(&$this,'action_process_option_update'));
        add_action('edit_user_profile_update', array(&$this,'action_process_option_update'));
    }
}

function adsense_user_profile($user) {
    ?>
    <h3><?php _e('Pigi Pay Per Write | Your Advertising Info') ?></h3>
    <b><?php _e('Adsense Settings:') ?></b><br /><br />
       

    <table class="form-table">
    <tr>
        <th><label for="pub_id"><?php _e('Adsense Code'); ?></label></th>
        <td><textarea name="pub_id" id="pub_id" value="<?php echo esc_attr(get_the_author_meta('pub_id', $user->ID) ); ?>" rows="5" cols="10" /><?php echo esc_attr(get_the_author_meta('pub_id', $user->ID) ); ?></textarea></td>
        <td>Be sure to past <b>all</b> your code otherwise your banner <b>will be not displayed</b></td>
        </tr>
    </table>
    
    
    <b><?php _e('Chitika Settings:') ?></b><br /><br />
       

    <table class="form-table">
    <tr>
        <th><label for="chitika"><?php _e('Chitika Settings'); ?></label></th>
        <td><textarea name="chitika" id="chitika" value="<?php echo esc_attr(get_the_author_meta('chitika', $user->ID) ); ?>" rows="5" cols="10" /><?php echo esc_attr(get_the_author_meta('chitika', $user->ID) ); ?></textarea></td>
        <td>Be sure to past <b>all</b> your code otherwise your banner <b>will be not displayed</b></td>
    </tr>
    </table>
    
      <b><?php _e('Bidvertiser Settings:') ?></b><br /><br />
       

    <table class="form-table">
    <tr>
        <th><label for="bidvertiser"><?php _e('Bidvertiser Settings'); ?></label></th>
        <td><textarea name="bidvertiser" id="bidvertiser" value="<?php echo esc_attr(get_the_author_meta('bidvertiser', $user->ID) ); ?>" rows="5" cols="10" /><?php echo esc_attr(get_the_author_meta('bidvertiser', $user->ID) ); ?></textarea></td>
        <td><!-- Begin BidVertiser Referral code -->
<script language="JavaScript">var bdv_ref_pid=133034;var bdv_ref_type='i';var bdv_ref_option='p';var bdv_ref_eb='0';var bdv_ref_gif_id='ref_110x32_black_pbl';var bdv_ref_width=110;var bdv_ref_height=32;</script>
<script language="JavaScript" src="http://srv.bidvertiser.com/bidvertiser/referral_button.html?pid=133034"></script>
<noscript><a href="http://www.bidvertiser.com/bdv/BidVertiser/bdv_publisher.dbm">make money</a></noscript>
<!-- End BidVertiser Referral code --></td>
    </tr>
    </table>  
    
        <b><?php _e('Heyos Settings:') ?></b><br /><br />
       

    <table class="form-table">
    <tr>
        <th><label for="heyos"><?php _e('Heyos Settings'); ?></label></th>
        <td><textarea name="heyos" id="heyos" value="<?php echo esc_attr(get_the_author_meta('heyos', $user->ID) ); ?>" rows="5" cols="10" /><?php echo esc_attr(get_the_author_meta('heyos', $user->ID) ); ?></textarea></td>
        <td>Here Your <a href="http://admaster.heyos.com/index2.asp?ref=8330" target="_blank" rel="nofollow">Heyos</a> AD TAG. Click Here to register to <a href="http://admaster.heyos.com/index2.asp?ref=8330" target="_blank" rel="nofollow"><b>Heyos</b></a></td>
    </tr>
    </table>
    <?php
}

function action_process_option_update($user_id) {
    update_usermeta($user_id, 'pub_id', ( isset($_POST['pub_id']) ? $_POST['pub_id'] : '' ) );
    update_usermeta($user_id, 'chitika', ( isset($_POST['chitika']) ? $_POST['chitika'] : '' ) );
    update_usermeta($user_id, 'bidvertiser', ( isset($_POST['bidvertiser']) ? $_POST['bidvertiser'] : '' ) );
    update_usermeta($user_id, 'heyos', ( isset($_POST['heyos']) ? $_POST['heyos'] : '' ) );
}

}

/* Initialise outselves */
add_action('plugins_loaded', create_function('','global $ppw_user_settings_instance; $ppw_user_settings_instance = new ppw_user_settings();'));

?>