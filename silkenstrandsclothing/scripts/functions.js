
jQuery(document).ready(function(){
   jQuery('.nav-toggle').click(function(){
      if (jQuery('.nav-links').hasClass('showing')) {
         jQuery('.svg-burger').css('display', 'block');
         jQuery('.svg-close').css('display', 'none');
         jQuery('.nav-links').removeClass('showing');
      } else {
         jQuery('.svg-burger').css('display', 'none');
         jQuery('.svg-close').css('display', 'block');
         jQuery('.nav-links').addClass('showing');
      }
   });
});

// On Resize

//  jQuery(window).resize(function(){

   


//  });

