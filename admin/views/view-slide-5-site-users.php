<h2 id="modalTitle"><img src="<?php echo $img_dir.'basic_share.svg'; ?>"><?php _e( 'Add New Users', BMSO_TEXT_DOMAIN ); ?></h2>

<div class="form-group">
	<label><?php _e( 'Username', BMSO_TEXT_DOMAIN ); ?></label>
	<input class="form-control" name="new-user-username" type="text">
</div>

<div class="form-group">
	<label><?php _e( 'Email', BMSO_TEXT_DOMAIN ); ?></label>
	<input class="form-control" name="new-user-email" type="email">
</div>

<div class="form-group">
	<label><?php _e( 'User\'s Role', BMSO_TEXT_DOMAIN ); ?></label>
	<select id="new-user-role" class="form-control" name="new-user-role">
		<?php wp_dropdown_roles(); ?>
	</select>
</div>

<div class="form-group text-center"> 
	<button class="remodal-adduser remodal-confirm">
		<span class="loading-text"><?php _e( 'Add User', BMSO_TEXT_DOMAIN ); ?></span>
		<img class="hidden loading-img" src="<?php echo $img_dir.'loading.svg'; ?>">
	</button>
</div>