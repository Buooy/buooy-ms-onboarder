<?php
include_once( __DIR__.'/lib/class-BMSO-AJAX.php' );
Class BMSO_Admin{
	
	public function __construct(){
		
		// Tracks the onboarding
		if( $_GET['onboarding'] != 'start' && get_option('onboarding-completed') == true ){ return; }
		
		$this->prefix = 'BMSO_';
		
		add_action( 'admin_enqueue_scripts', array($this, 'enqueue_scripts_styles') );
		
		// Views
		add_action( 'admin_footer', array($this,'view_modal') );
		
		// Submenu - To be added in later versions
		/*
		add_action( 'admin_menu', function(){
			add_options_page( 'Buooy Onboarding Settings', 'Buooy Onboarding', 'manage_options', $this->prefix.'settings', array($this, 'view_settings'));
		});
		*/
	}
	
	public function enqueue_scripts_styles(){
		
		// Enqueues the scripts
		wp_enqueue_script( 'slick', plugins_url( 'assets/bower_components/slick.js/slick/slick.min.js',__FILE__ ), array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'remodal', plugins_url( 'assets/bower_components/remodal/dist/remodal.min.js',__FILE__ ), array('jquery'), '1.0.0', true );
		wp_enqueue_script( $this->prefix.'script', plugins_url( 'assets/js/script.min.js',__FILE__ ), array('jquery'), BMSO_VERSION, true );
		
		// Enqueues the nonce
		wp_localize_script( $this->prefix.'script', 'BMSO', array(
			'nonce' => wp_create_nonce( $this->prefix.'AJAX' ),
			'gmt'	=> get_option('gmt_offset'),
			'date_format'	=> get_option('date_format'),
			'time_format'	=> get_option('time_format'),
			'permalink_structure'	=> get_option('permalink_structure'),
		) );
		
		// Enqueues the styles
		wp_enqueue_style( $this->prefix.'script', plugins_url( 'assets/css/style.css',__FILE__ ), array(), BMSO_VERSION );
		
	}
	
	//	Adds the Modal to the footer
	public function view_modal(){
		include_once( __DIR__.'/views/view-modal.php' );
	}
	
	public function view_settings(){
		include_once( __DIR__.'/views/view-settings.php' ); 
	}
	
}
$BMSO_Admin = new BMSO_Admin;