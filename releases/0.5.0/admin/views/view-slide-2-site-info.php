<h2 id="modalTitle"><img src="<?php echo $img_dir.'basic_webpage.svg'; ?>"><?php _e( 'Getting Started', BMSO_TEXT_DOMAIN ); ?></h2>

<div class="form-group">
	<label for="blogname"><?php _e( 'Admin Email', BMSO_TEXT_DOMAIN ); ?></label>
	<input type="text" class="form-control" name="admin_email" id="admin_email" 
			placeholder="<?php _e( 'Enter your new admin email.', BMSO_TEXT_DOMAIN ); ?>" value="<?php bloginfo('admin_email'); ?>">
</div>
<div class="form-group">
	<label for="blogname">Site Name</label>
	<input type="text" class="form-control" name="blogname" id="blogname" 
			placeholder="<?php _e( 'Enter your new site name.', BMSO_TEXT_DOMAIN ); ?>" value="<?php bloginfo('name'); ?>">
</div>
<div class="form-group">
	<label for="blogdescription">Site Tagline</label>
	<textarea class="form-control" name="blogdescription" id="blogdescription" 
		rows="4"
		placeholder="<?php _e( 'Enter your new site description.', BMSO_TEXT_DOMAIN ); ?>"><?php bloginfo('description'); ?></textarea>
</div>