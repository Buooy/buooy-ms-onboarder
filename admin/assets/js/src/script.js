class BMSGSW_script{
	
	constructor(){
		
		var _this = this;
		var $ = jQuery.noConflict();
		this.remodal = $('[data-remodal-id=modal]').remodal({
			closeOnAnyClick			: 	false,
			closeOnOutsideClick 	: 	false,
			closeOnEscape			: 	false,
		});
		this.slick = $('.slick');
		
		$(document).ready(function(){
			
			// initializes the modal
			_this.remodal.open();
			_this.slick.slick();
			
			_this.init_info();
			
			// initializes the actions
			_this.init_actions();
			
			// Initializes the events
			_this.init_events();
			
		});
		
	}
	
	// init_info
	init_info(){
		
		var $ = jQuery.noConflict();
		if( BMSO.gmt >= 0 ){
			BMSO.gmt = '+'+BMSO.gmt;
		}
		$('.remodal #timezone_string').val('UTC'+BMSO.gmt);
		
		$('.remodal input[name="date_format"][value="'+BMSO.date_format+'"]').prop('checked', true);
		$('.remodal input[name="time_format"][value="'+BMSO.time_format+'"]').prop('checked', true);
		$('.remodal input[name="permalink_structure"][value="'+BMSO.permalink_structure+'"]').prop('checked', true);
		
	}
	
	// Initializes the actions
	init_actions(){
		
		var _this = this;
		var $ = jQuery.noConflict();
		
		$('[data-remodal-action=cancel]').click(function(){
			// Update the "onboarding-completed" option
			_this.onboarding_completed();
		});
		$('[data-remodal-action=next]').click(function(){
			if( $(this).data('action') == 'update' ){ return; }
			_this.slick.slick('slickNext');
		});
		$('[data-remodal-action=back]').click(function(){
			_this.slick.slick('slickPrev');
		});
		$('.remodal').on('click', '[data-remodal-action=next][data-action=update]', function(){
			// Updates the information
			_this.update_info();
		});
		$('.remodal').on('click', '[data-remodal-action=next][data-action=close]', function(){
			// Update the "onboarding-completed" option
			_this.onboarding_completed();
			// Close the remodal
			_this.remodal.close();
		});
		
	}
	
	// Initializes events
	init_events(){
		
		var _this = this;
		var $ = jQuery.noConflict();
		
		// Before Change
		this.slick.on('beforeChange', function(event, slick, currentSlide, nextSlide){
			if( nextSlide == 0 ){
				$('[data-remodal-action=back]').addClass('hidden');
			}
			else{
				$('[data-remodal-action=back]').removeClass('hidden');
			}
		});
		
		// After Change
		this.slick.on('afterChange', function(event, slick, currentSlide, nextSlide){
			
			if( currentSlide == 3 ){
				$('[data-remodal-action=next]').attr('data-action','update');
			}else{
				$('[data-remodal-action=next]').removeAttr('data-action');
			}
			
			if( currentSlide == (slick.slideCount-1) ){
				console.log('asdad');
				$('[data-remodal-action=next]').attr('data-action','close');
			}
			
		});
		
	}
	
	// Updates the information
	update_info(){
		
		var $ = jQuery.noConflict();
		var _this = this;
		
		$('[data-remodal-action=back]').addClass('hidden');
		$('[data-remodal-action=next]').attr('disabled', true);
		$('[data-remodal-action=next] .loading-img').removeClass('hidden');
		$('[data-remodal-action=next] .loading-text').addClass('hidden');
		
		// Submits the information to the server
		var data = {
			action 	: 'BMSO_update_info',
			nonce 	: BMSO.nonce,
			admin_email : $('.remodal [name=admin_email]').val(),
			blogname : $('.remodal [name=blogname]').val(),
			blogdescription : $('.remodal [name=blogdescription]').val(),
			timezone_string : $('.remodal [name=timezone_string]').val(),
			date_format	: $('.remodal [name=date_format]:checked').val(),
			time_format	: $('.remodal [name=time_format]:checked').val(),
			permalink_structure	: $('.remodal [name=permalink_structure]:checked').val(),
		}
		$.post( ajaxurl, data, function(response){
			
			if( !response.success ){
				
				$('#remodal-msg').html('<p class="error">'+response.data.msg+'</p>');
				
			}else{
				_this.slick.slick('slickNext');
				$('#remodal-msg').html('');
				
			}
			
			$('[data-remodal-action=next]').attr('disabled', false);
			$('[data-remodal-action=next] .loading-img').addClass('hidden');
			$('[data-remodal-action=next] .loading-text').removeClass('hidden');
			$('[data-remodal-action=back]').removeClass('hidden');
			
		}, 'json');
		
	}
	
	// Update the "onboarding-completed" option
	onboarding_completed(){
		var $ = jQuery.noConflict();
		var data = {
			action 	: 'BMSO_onboarding_completed',
			nonce 	: BMSO.nonce
		}
		$.post( ajaxurl, data, function(response){ //console.log(response); } );
	}
	
}
new BMSGSW_script;