<?php $img_dir = plugins_url('assets/img/', __DIR__); ?>
<div data-remodal-id="modal" aria-labelledby="modalTitle" aria-describedby="modalDesc">
	
	<div class="slick" data-slick='{ 
		"swipe"					:	false,
		"draggable"				:	false,
		"slidesToShow"			: 	1, 
		"slidesToScroll"		: 	1,
		"dots" 					: 	false,
		"infinite"				: 	false
	}'>
		
		<?php //if( !empty(get_editable_roles()) ): ?>
		<!-- <div><?php include_once( __DIR__.'/view-slide-5-site-users.php' ); ?></div>  -->
		<?php //endif; ?>
	
		<div><?php include_once( __DIR__.'/view-slide-1-getting-started.php' ); ?></div>
		
		<div><?php include_once( __DIR__.'/view-slide-2-site-info.php' ); ?></div>
		
		<div><?php include_once( __DIR__.'/view-slide-3-site-datetime.php' ); ?></div>
		
		<div><?php include_once( __DIR__.'/view-slide-4-site-permalink.php' ); ?></div>
		
		<div><?php include_once( __DIR__.'/view-slide-999-finished.php' ); ?></div>
		
	</div>
	
	<div id="remodal-msg"></div>
	
	<div id="remodal-actions">
		<div id="remodal-actions-left">
			<button data-remodal-action="cancel" class="remodal-cancel"><?php _e( 'Skip', BMSO_TEXT_DOMAIN ); ?></button>
		</div>
		<div id="remodal-actions-right">
			
			<button data-remodal-action="back" class="remodal-cancel remodal-back hidden"><?php _e( 'Back', BMSO_TEXT_DOMAIN ); ?></button>
			
			<button data-remodal-action="next" class="remodal-confirm">
				<span class="loading-text"><?php _e( 'Next', BMSO_TEXT_DOMAIN ); ?> </span>
				<img class="hidden loading-img" src="<?php echo $img_dir.'loading.svg'; ?>">
			</button>
			
		</div>
	</div>
	
</div>