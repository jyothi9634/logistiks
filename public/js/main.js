$(document).ready(function(){
		$('#showhide-btn-1').click(function(){
				$('#showhide-content-1').slideToggle(500);
				return false;
			})
			
			$('#showhide-btn-2').click(function(){
				$('#showhide-content-2').slideToggle(500);
				return false;
			})
			
			$('#showhide-btn-3, #close-btn-3').click(function(){
				$('#showhide-content-3').slideToggle(500);
				
				return false;
			})
	})
	
	//Price slider
	$( function() {
		$( "#slider-range" ).slider({
			range: true,
			min: 0,
			max: 30000,
			values: [ 9000, 17000 ],
			slide: function( event, ui ) {
				$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			}
		});
		$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
			" - $" + $( "#slider-range" ).slider( "values", 1 ) );
	} );
	
//Buyer_Post_Master_5 Show hide
	$(document).ready(function() {
		  $('.nav-toggle').click(function(){
			//get collapse content selector
			var collapse_content_selector = $(this).attr('href');					
					
			//make the collapse content to be shown or hide
			var toggle_switch = $(this);
			$(collapse_content_selector).slideToggle(function(){
			  if($(this).css('display')=='none'){
                                //change the button label to be 'Show'
				toggle_switch.html('+ Details ');
			  }else{
                                //change the button label to be 'Hide'
				toggle_switch.html('- Details ');
			  }
			 
			});
			 return false;
		  });
				
		});	
		

$( function() {
    $( "#tabs" ).tabs();
  } );
  
  
  $( function() {
    $( "#tabs-2" ).tabs();
  } );
  
    $( function() {
    $( "#tabs-3" ).tabs();
  } );
  
  
  
  
/*  $(document).ready(function(){
		$('#showhide-btn-1').click(function(){
				$('#buyer-offers-11').slideToggle(500);
				return false;
			})
  });*/
  
  
$(document).ready(function() {
  $('.my-toggle').click(function(){
	var my_show_hide = $(this).attr('href');					
	var toggle_switch = $(this);
	$(my_show_hide).slideToggle();
	 return false;
  });
		
});	





	$(document).ready(function() {
		  $('.my-toggle_2').click(function(){
			//get collapse content selector
			var my_show_hide_2 = $(this).attr('href');					
					
			//make the collapse content to be shown or hide
			var toggle_switch = $(this);
			$(my_show_hide_2).slideToggle(function(){
			  if($(this).css('display')=='none'){
                                //change the button label to be 'Show'
				toggle_switch.html('View/Reply ');
			  }else{
                                //change the button label to be 'Hide'
				toggle_switch.html('Reply ');
			  }
			 
			});
			 return false;
		  });
				
		});	
		


/*date picker Flexible dates*/

$(document).ready(function(){
$(".from-date-control").click(function(){
		setTimeout(function(){
			$('.clear-date-from, .clear-date-to').hide();
			$('.clear-date-from').show();	
		},10);
	});
	$(".to-date-control").click(function(){
		setTimeout(function(){
			$('.clear-date-from, .clear-date-to').hide();
			$('.clear-date-to').show();	
		},10);
	});
	
	$( "body" ).on( "click", ".clear-date-from", function() {
		$(".from-date-control").val("");
	});
	
	$( "body" ).on( "click", ".clear-date-to", function() {
		$(".to-date-control").val("");
	});
	

// CALENDAR CLEAR CODE ENDS HERE	
	
	
});