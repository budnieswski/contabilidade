Number.prototype.formatMoney = function(c, d, t){
var n = this, 
    c = isNaN(c = Math.abs(c)) ? 2 : c, 
    d = d == undefined ? "," : d, 
    t = t == undefined ? "." : t, 
    s = n < 0 ? "-" : "", 
    i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", 
    j = (j = i.length) > 3 ? j % 3 : 0;
   return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
 };
 jQuery(function($){

  $(".header nav").menumaker({
    title: "Menu",
    format: "multitoggle"
  });

  $(".banner.rslides").responsiveSlides({
    nav: true,
    pager: true
  });

  if( $('#blog').length > 0 )
  {
    $("#blog .sidebar .rslides").responsiveSlides({
      nav: false,
      pager: true
    });
  }

  $(".fancybox").fancybox({
    padding: 0
  });

  $('.scrollup').click(function(){
    $("body, html").animate({ scrollTop: 0 }, 700);
    return false;
  }); 

  // Remove link from 'empty links'
  $(".header nav > ul > li a").each(function(){
    if( $(this).attr('href')=='#' ){
      $(this).removeAttr('href');
      $(this).css('cursor', 'pointer');
    }
  });


  /*
  * Input Masks
  */
  {
    // Phone
    $("input[name*='your-phone']").setMask({mask: "(99) 9999-9999"});
    $("input[name*='your-phone']").keyup(function () {
      var t = $(this),
          n = t.val();
      if ( n[5] == "9" ) {
        t.setMask({mask: "(99) 999999999"});
      } else {
          t.setMask({mask: "(99) 9999-9999"});
      }
    }); // end Phone
  }


  /*
  * Apply Fancybox for images in posts
  */
  $("img[class*='wp-image-']").each(function(){
    var o = $(this), // img
        p = o.parent('a'), // a
        l = p.attr('href'), // Link to match
        r = /(.jpg|.png|.jpeg|.gif)+/igm; // Regex to match

    if (!p.hasClass('fancybox') && r.test(l)) {
      p.addClass('fancybox');
    }
  });

  /*
  * Stick header menu at top (just for mobile)
  */
  {
    // function stickAdjustMenu(){
    //   ww = document.body.clientWidth;
    //   if (ww < 768) {
    //     $(".header nav").stick({'cssStick':{
    //       'margin' : '0',
    //       'background' : '#f7c51e',
    //       'width' : $(".container").width(),
    //     }});
    //   }
    // }
    
    // stickAdjustMenu();

    // $(window).bind('resize orientationchange', stickAdjustMenu() );    
  }


  /*
  * Accordion
  */
  {
    // var allPanels = $('.accordion > dt');
    // if( allPanels.length ) {
    //   var allPanelsContent = $('.accordion > dd').hide();

    //   // allPanels.first().addClass('active');
    //   // allPanelsContent.first().show();

    //   $('.accordion > dt > a').click(function() {
    //       $this   =  $(this);
    //       $parent =  $this.parent();
    //       $target =  $parent.next();

    //       if(!$parent.hasClass('active')) {
    //          allPanels.removeClass('active');
    //          allPanelsContent.slideUp();
    //          $parent.addClass('active');
    //          $target.slideDown();
    //       } else {
    //         $parent.removeClass('active');
    //         $target.slideUp();
    //       }
          
    //     return false;
    //   });  
    // }
  }

});
