
	jQuery( document ).ready(function($) {
		
		
		//trigger a new "Favorites"
		$( ".heart-action" ).click(function() {
				
								
				
				var data = $(this).attr("data-affiliate-id");
  				performAjaxCall(data, $(this));
				
  			
  			
		
		}); // end on click function 
	}); //end document ready
	
	
	
	



	

function performAjaxCall(id, affObject) {
    $.ajax({
        url: actionsPathFromViewHelperSetInTheView,
        data:{
            "tx_affiliatemanager_pi3[uid]":id
        },
        success:function (data) {
				//alert(data);
 
        		
				if(data==true){
        			$('#saved_item_count').html(parseInt($('#saved_item_count').html(), 10)+1);
        			$(affObject).attr('src','fileadmin/plannedpooch/version2/images/heard-icon.png');
				} else {
        			$('#saved_item_count').html(parseInt($('#saved_item_count').html(), 10)-1);
        			$(affObject).attr('src','fileadmin/plannedpooch/version2/images/white-border-heart.png');
				}	
        		


				//if the relation does exist
				
				


        }
    });
}
