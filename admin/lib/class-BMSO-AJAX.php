<?php
class BMSO_AJAX{

	public function __construct(){
		
		$this->prefix = 'BMSO_';
		add_action( 'wp_ajax_'.$this->prefix.'update_info', array($this,'update_info') );
		add_action( 'wp_ajax_'.$this->prefix.'onboarding_completed', array($this,'onboarding_completed') );
		
	}
	
	public function onboarding_completed(){
		
		$this->verify_nonce();
		update_option( 'onboarding-completed', true, true );
		
	}
	
	public function update_info(){
		
		$this->verify_nonce();
		
		//	====================================================================
		// 	Update all the individual information
		//	====================================================================
		
		//	Admin Email
		if( get_option('admin_email') != $_POST['admin_email'] ){
			if( !filter_var($_POST['admin_email'], FILTER_VALIDATE_EMAIL) || !update_option('admin_email', $_POST['admin_email']) ){
				wp_send_json_error( array(
					'msg' => 'We were unable to update your admin email.'
				) );
			}
		}
		//	Site Title
		if( get_option('blogname') != $_POST['blogname'] ){
			if( !update_option('blogname', $_POST['blogname']) ){
				wp_send_json_error( array(
					'msg' => 'We were unable to update your site title.'
				) );
			}
		}
		//	Site Description
		if( get_option('blogdescription') != $_POST['blogdescription'] ){
			if( !update_option('blogdescription', $_POST['blogdescription']) ){
				wp_send_json_error( array(
					'msg' => 'We were unable to update your site tagline.'
				) );
			}
		}
		//	Timezone
		$new_gmt_offset = str_replace( 'UTC','', $_POST['timezone_string'] );
		if( get_option( 'gmt_offset' ) != $new_gmt_offset ){
			if( !update_option('gmt_offset', $new_gmt_offset) ){
				wp_send_json_error( array(
					'msg' => 'We were unable to update your timezone.'
				) );
			}
		}
		//	date format
		if( get_option( 'date_format' ) != $_POST['date_format'] ){
			if( !update_option('date_format', $_POST['date_format']) ){
				wp_send_json_error( array(
					'msg' => 'We were unable to update your date format.'
				) );
			}
		}
		//	time format
		if( get_option( 'time_format' ) != $_POST['time_format'] ){
			if( !update_option('time_format', $_POST['time_format']) ){
				wp_send_json_error( array(
					'msg' => 'We were unable to update your time format.'
				) );
			}
		}
		//	permalink structure
		if( get_option( 'permalink_structure' ) != $_POST['permalink_structure'] ){
			if( !update_option('permalink_structure', $_POST['permalink_structure']) ){
				wp_send_json_error( array(
					'msg' => 'We were unable to update your permalink structure.'
				) );
			}
		}
		
		wp_send_json_success( array(
			'msg'			=>	'Details have been updated successfully.',
		) );
		
	}
	
	// Verify the nonce
	public function verify_nonce(){
		
		// Verifies the nonce
		if( !wp_verify_nonce( $_POST['nonce'], $this->prefix.'AJAX' ) ){
			wp_send_json_error( array(
				'msg' => 'Please refresh your page.'
			) );
			die();
		}
		return;
		
	}
	
}
$BMSO_AJAX = new BMSO_AJAX;