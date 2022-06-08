
jQuery('document').ready(function () {
   var jQuerytoggle = jQuery('.nav-toggle');
   var jQueryburger = jQuery('.svg-burger');
   var jQueryclose = jQuery('.svg-close');
   var jQuerymobileNav = jQuery('.mobile-nav');

   var showMenu = false;

   jQuerytoggle.on('click', function(){
      if (showMenu === false) {
         jQueryburger.addClass('hidden');
         jQueryclose.addClass('show');
         jQuerymobileNav.addClass('open-menu');
         showMenu = true;
      } else if (showMenu === true) {
         jQueryburger.removeClass('hidden');
         jQueryclose.removeClass('show');
         jQuerymobileNav.removeClass('open-menu');
         showMenu = false;
      }
   });




   



 });

 jQuery(window).resize(function(){

   


 });

