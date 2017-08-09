<div class="wrap">
<h2>Pigi Pay Per Write | Details</h2>
<h3><?php bloginfo('name')?> Banner Details:</h3>
<p>Your banner must have the followings property:</p>
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
		<td>#<?php echo get_option('url_color'); ?>"</td>
        </tr>  
      
        <tr valign="top">
        <th scope="row"><?php _e('Advertising Type', 'wpc_aiofp'); ?></th>
<td><?php echo get_option('ads_type'); ?></td>
     </tr>
        <tr valign="top">
        <th scope="row">Size:</th>
        <td><?php echo get_option('ads_size'); ?></td>
	 </tr>  
	 </table>
	 <p>Made using Pigi Pay Per Write from <a href="http://www.wpcode.net" target="_bank"><b>Wpcode.net | Wordpress Tutorial | Wordpress Hostings</b></a></p>
</div>