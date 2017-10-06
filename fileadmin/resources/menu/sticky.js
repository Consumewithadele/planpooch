// Create a clone of the menu, right next to original.
jQuery(function($) {

  $(window).scroll(function(){
    var y = $(this).scrollTop();
    
    if (y > 80) {
      $("#header").addClass( "scroll" );
      $("#header").css("border-top", "3px solid #2A641F");
      $("#news-ticker").css("display", "none");
      $("#logo").css("display", "none");
      $("#logo-small").css("display", "block");      
     // $("#header").attr('id', 'sticky');
      
    }
    else {
      $("#header").removeClass( "scroll" );
      $("#header").css("border-top", "none");
      $("#news-ticker").css("display", "block");
      $("#logo").css("top", "-38px");      
      $("#logo").css("display", "block");            
      $("#logo-small").css("display", "none");      
      }
  });
});

