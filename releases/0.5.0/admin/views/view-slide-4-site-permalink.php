<h2 id="modalTitle"><img src="<?php echo $img_dir.'basic_link.svg'; ?>"><?php _e( 'Permalink Settings', BMSO_TEXT_DOMAIN ); ?></h2>

<b><?php _e( 'Set how your site\'s URL:', BMSO_TEXT_DOMAIN ); ?></b>
<table class="form-table permalink-structure">
	<tbody><tr>
		<th><label><input name="permalink_structure" type="radio" value=""> <?php _e( 'Default', BMSO_TEXT_DOMAIN ); ?></label></th>
		<td><code>example.com/?p=123</code></td>
	</tr>
	<tr>
		<th><label><input name="permalink_structure" type="radio" value="/%year%/%monthnum%/%day%/%postname%/" checked="checked"> <?php _e( 'Day and name', BMSO_TEXT_DOMAIN ); ?></label></th>
		<td><code>example.com/2015/06/27/sample-post/</code></td>
	</tr>
	<tr>
		<th><label><input name="permalink_structure" type="radio" value="/%year%/%monthnum%/%postname%/"> <?php _e( 'Month and name', BMSO_TEXT_DOMAIN ); ?></label></th>
		<td><code>example.com/2015/06/sample-post/</code></td>
	</tr>
	<tr>
		<th><label><input name="permalink_structure" type="radio" value="/archives/%post_id%"> <?php _e( 'Numeric', BMSO_TEXT_DOMAIN ); ?></label></th>
		<td><code>example.com/archives/123</code></td>
	</tr>
	<tr>
		<th><label><input name="permalink_structure" type="radio" value="/%postname%/"> <?php _e( 'Post name', BMSO_TEXT_DOMAIN ); ?></label></th>
		<td><code>example.com/sample-post/</code></td>
	</tr>
</tbody></table>