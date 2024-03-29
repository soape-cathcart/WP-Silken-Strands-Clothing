
jQuery('document').ready(function () {


  // Set Section height based on square slider images

  // var vWidth = jQuery(window).width();
  // var iWidth = vWidth / 2;
  // var section = jQuery('.hero-section')

  // section.css('height', iWidth)



  // Show hero elements

  setTimeout(function() {
    jQuery('.home-title').addClass('showing');
  }, 500);

  setTimeout(function() {
    jQuery('.hero-section .tagline').addClass('showing');
  }, 1000);

  setTimeout(function() {
    jQuery('.hero-section .tagline2').addClass('showing');
  }, 1000);

  setTimeout(function() {
    jQuery('.hero-section .cta').addClass('showing');
  }, 1400);

  setTimeout(function() {
    jQuery('.hero-section .social').addClass('showing');
  }, 1800);


   // Sliders
   jQuery('.hero-section .slider').slick({
      arrows: false,
      autoplay: true,
      dots: false,
      infinite: true,
      autoplaySpeed: 1500,
      speed: 2000,
      fade: true,
      cssEase: 'ease-in-out',
      pauseOnHover: false
   });
 
    jQuery('.clothing-section .slider').slick({
      arrows: false,
      autoplay: true,
      dots: false,
      infinite: true,
      autoplaySpeed: 4000,
      speed: 300,
      cssEase: 'ease-in-out',
      pauseOnHover: false,
      responsive: [
        {
          breakpoint: 905,
          settings: {
            slidesToShow: 2
          }
        }
      ]
   });

   // Shuffle function
  //  function shuffle(array) {
  //   let currentIndex = array.length,  randomIndex;
  //   while (currentIndex != 0) {
  //     randomIndex = Math.floor(Math.random() * currentIndex);
  //     currentIndex--;
  //     [array[currentIndex], array[randomIndex]] = [
  //       array[randomIndex], array[currentIndex]];
  //   }
  //   return array;
  // }
 
//  Preview Section

// Now using plugin

  //  const settings = {
  //     "async": true,
  //     "crossDomain": true,
  //     "url": "https://app.ecwid.com/api/v3/11704047/products?enabled=true&token=public_e3zBkEmPUJQfruPyHm3e7bw5kgHLwRUx",
  //     "method": "GET",
  //     "headers": {
  //       "Accept": "application/json"
  //     }
  //   };
    
    // jQuery.ajax(settings).done(function (response) {
    //    var previews = jQuery('.preview-list')
    //    var items = response.items

      //  console.log(items)

      // Some kind of hover card flip effect to show the reverse shots
       //  FIX URLS - ADD /store.html BEFORE '#!'
      //  var urls = items.map(function(e) {
      //       return e.url;
      //  })
      //  var imgs = items.map(function(e) {
      //    return e.thumbnailUrl;
      //  })
      //  var reverseImgs = items.map(function(e) {
      //    return e.media.images[1].imageOriginalUrl;
      //  })
      //  var allImgs = imgs.concat(reverseImgs);
      //  shuffle(imgs)
      //  shuffle(imgs)
      //  shuffle(reverseImgs)
      //  shuffle(reverseImgs)


        //  for (var i=0; i<allImgs.length; i++) {
        //   previews.append(`<img src="${imgs[i]}" width="80%" />`);
        //   previews.append(`<img src="${reverseImgs[i]}" width="80%" />`);
        // }

      //  previews.slick({
      //    autoplay: true,
      //    arrows: false,
      //    infinite: true,
      //    slidesToShow: 10,
      //    slidesToScroll: 1,
      //    dots: false,
      //    pauseOnHover: false,
      //    cssEase: 'linear',
      //    autoplaySpeed: .001,
      //    speed: 5000,
      //    responsive: [
      //     {
      //       breakpoint: 1670,
      //       settings: {
      //         slidesToShow: 9
      //       }
      //     },
      //     {
      //       breakpoint: 1550,
      //       settings: {
      //         slidesToShow: 8
      //       }
      //     },
      //     {
      //       breakpoint: 1350,
      //       settings: {
      //         slidesToShow: 7
      //       }
      //     },
      //     {
      //       breakpoint: 1200,
      //       settings: {
      //         slidesToShow: 6
      //       }
      //     },
      //     {
      //       breakpoint: 1050,
      //       settings: {
      //         slidesToShow: 5
      //       }
      //     },
      //     {
      //       breakpoint: 875,
      //       settings: {
      //         slidesToShow: 4
      //       }
      //     },
      //     {
      //       breakpoint: 700,
      //       settings: {
      //         slidesToShow: 3
      //       }
      //     },
      //     {
      //       breakpoint: 525,
      //       settings: {
      //         slidesToShow: 2
      //       }
      //     }
      //   ]
      //  });

      // });







      //  WAYPOINTS

      


  jQuery('.clothing-section').waypoint(function(direction) {
    if (direction === 'down') {
      jQuery('.clothing-section .left').addClass('showing');
    } else {
      jQuery('.clothing-section .left').removeClass('showing');
    }
  }, {
    offset: '70%'
  }) 


  jQuery('.clothing-copy-box').waypoint(function (direction) {
    setTimeout(function(){
      if (direction === 'down') {
        jQuery('.clothing-copy-box').addClass('showing');
      } else {
        jQuery('.clothing-copy-box').removeClass('showing');
      }
    }, 500);
    
  }, {offset: '70%'})


  jQuery('.clothing-section .right').waypoint(function(direction){
    if (direction === 'down') {
      jQuery('.clothing-section .right').addClass('showing');
    } else {
      jQuery('.clothing-section .right').removeClass('showing');
    }
  }, {offset: '70%'})


  jQuery('.shaune').waypoint(function(direction){
      if (direction === 'down') {
        jQuery('.shaune').addClass('showing');
      } else {
        jQuery('.shaune').removeClass('showing');
      }

      setTimeout(function(){
        if (direction === 'down') {
          jQuery('.shaune img').addClass('showing');
        } else {
          jQuery('.shaune img').removeClass('showing');
        }
      }, 500)
  }, {offset: '70%'})


  jQuery('.about-section .right').waypoint(function(direction){
      if (direction === 'down') {
        jQuery('.about-section .right').addClass('showing');
      } else {
        jQuery('.about-section .right').removeClass('showing');
      }

      setTimeout(function(){
        if (direction === 'down') {
          jQuery('.about-copy-box').addClass('showing');
        } else {
          jQuery('.about-copy-box').removeClass('showing');
        }
      }, 500)
  }, {offset: '70%'})

  jQuery('.care-section .care-copy-box').waypoint(function(direction){
    if (direction === 'down') {
      jQuery('.care-section .care-copy-box').addClass('showing');
    } else {
      jQuery('.care-section .care-copy-box').removeClass('showing');
    }
  }, {offset: '70%'})



}); // . /ready




// _ _ _ _    RESIZE FUNCTIONS _ _ _ _ 


jQuery(window).resize(function(){

  var vWidth = jQuery(window).width();
  var iWidth = vWidth / 2;
  var homeSlider = jQuery('.hero-section, .section-2')

  // Home Page Slider Dimensions
  // homeSlider.css('height', iWidth)
  


});

