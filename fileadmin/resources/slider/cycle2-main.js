

jQuery(function($) {
  
  
  // Unwraps all the image elements enclosed by the layout until the .cycletwo div
  
  
  
  $('.cycletwo img').each(function(index) {
    if(!($(this).parent().is('a'))){
      $(this).wrap( '<a href="#"></div>' );
    }
  });
  
  
  
  $('.cycletwo img').each(function(index) {
    if($(this).closest('.cycletwo').length > 0) {
      while($(this).parent().parent('.cycletwo').length === 0) {
        $(this).parent().unwrap();
      }

      
    }
    
  });
  
  
  // Aquire the proper format for the plugin.      
  $('.cycletwo img').each(function(index) {
    
    //title of this image
    var $title;
    
    
    //text of previous element
    var $desc;
    
    
    
    if ($title = $(this).attr('title')){
      $(this).attr('data-cycle-title', $title);
    }
    
    if($desc = $(this).parent().prev('.csc-textpic-caption').text()) {
      $(this).parent().attr('data-cycle-desc', $desc);
      $(this).parent().prev('.csc-textpic-caption').remove();
    }
    else {
      $(this).parent().attr('data-cycle-desc', '<div></div>');
    }
    
    
    
    
    
    
    
  });
  
  if ( $( ".cycletwo" )[0]) {
    
    $('.cycletwo').attr('class', 'my-cycle-slideshow');
    $('.my-cycle-slideshow').attr('data-cycle-fx', 'fade');
    $('.my-cycle-slideshow').attr('data-cycle-timeout', '5000');
    $('.my-cycle-slideshow').attr('data-cycle-caption-plugin', 'caption2');
    $('.my-cycle-slideshow').attr('data-cycle-pause-on-hover', 'true');
    
   // $('.my-cycle-slideshow').attr('data-cycle-swipe', 'true');
    
    $('.my-cycle-slideshow').attr('data-cycle-slides', '> a');
    
    $('.my-cycle-slideshow').attr('data-cycle-overlay-template', '<div class=cycle-title>{{title}}</div><div class=cycle-desc>{{desc}}</div>');
    
    
    $('.my-cycle-slideshow').prepend('<div class="cycle-prev"></div>');
    $('.my-cycle-slideshow').prepend('<div class="cycle-next"></div>');
    $('.my-cycle-slideshow').prepend('<div class="cycle-overlay"></div>');
  }
  
  
  
  $('<link/>', {
    rel: 'stylesheet',
    type: 'text/css',
    href: 'fileadmin/resources/slider/slider2.css'
  }).appendTo('head'); 
  
  
  
  
  // Here's the magic... using the CYCLE2 API...
  $('.my-cycle-slideshow').cycle();
  
  
  
  
  
  
  
  
  
  
  
});


