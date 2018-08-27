jQuery(document).ready(function() {

    jQuery('.bottles').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      fade: true,
      autoplayOnHover: true,
      autoplaySpeed: 2000,
      speed: 2500
    });
    console.log('hello');
    if(Modernizr.touchevents) {
        jQuery('#second').find('ul').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplayOnHover: true,
          autoplaySpeed: 5000,
          adaptiveHeight: true

        });

    } else {
      jQuery('#second').find('ul').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplayOnHover: true,
        autoplaySpeed: 5000,
        adaptiveHeight: true
      });
    }
    jQuery('#subscribe').click(function(e) {
      e.preventDefault();
      jQuery('#signup').fadeOut();
    });

    jQuery('.bottles').addClass('unhide');

    jQuery('.sub-menu').find('li').each(function() {
      jQuery(this).find('a').attr('href', jQuery(this).find('a').attr('href') + '#drinks');
    });

    if(window.location.href.indexOf('#drinks') > -1) {
      
      console.log(jQuery('.flex:nth-of-type(2)').offset().top);
      jQuery('html, body').animate({
        scrollTop: (jQuery('.flex:nth-of-type(2)').offset().top - 100)
      },500);
    }
});


jQuery(window).on('load', function() {
  // PRODUCTS PAGE
  var grid = jQuery('.bottle-rack').isotope({
    getSortData: {
      number: '.number parseInt',
      country: '[data-country]'
    },
    sortBy: [ 'country', 'number' ]
  });

  jQuery('.filter-button-group').on( 'click', 'button', function() {
    var filterValue = jQuery(this).attr('data-filter');
    var sortValue = jQuery(this).attr('data-sort-value');
    // make an array of values
    sortValue = sortValue.split(',');
    grid.isotope({ 
      filter: filterValue,
      sortBy: sortValue
    });
  });

  jQuery('.filter-button-group').find('button').click(function() {
    jQuery('button').removeClass('active');
    jQuery(this).addClass('active');
    if(jQuery(this).attr('data-filter') == '.new-zealand') {
      jQuery('.bottle-rack div').css({
        width: '24%'
      });
    } else {
      jQuery('.bottle-rack div').css({
        width: '32%'
      });
    }

    if(jQuery(this).attr('data-filter') == '.america') {
      
    }
    if(jQuery(this).attr('data-filter') == '.australia') {
      
    }
    if(jQuery(this).attr('data-filter') == '.new-zealand') {
      
    }

  });

  //jQuery('#mc-embedded-subscribe').click(function() {
    //Cookies.set('subscribed', 'yes');
  //});

  //if(Cookies.get('subscribed') != 'yes') {
  //  jQuery('#mc_embed_signup_scroll').html("<p>You're subscribed to get updates from Stolen!</p>");
  //}

  jQuery('#menu-item-18').hover(function() {
    jQuery('.sub-menu').fadeIn();
    jQuery('.sub-menu').css({
      display: "inline-flex",
      height: "fit-content",
      zIndex: 1
    });
  });

  jQuery('#nav').hover(function() {

  }, function() {
    jQuery('.sub-menu').fadeOut(200);
  });

  //jQuery('.recipes').slick({
  //  slidesToShow: 3,
  //  slidesToScroll: 1,
  //  autoplay: true,
  //  autoplayOnHover: true,
  //  autoplaySpeed: 5000
  //});

  var options = {
    strings: ["LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT, SED DO EIUSMOD TEMPOR INCIDIDUNT UT LABORE ET DOLORE MAGNA ALIQUA. CONVALLIS A CRAS SEMPER AUCTOR. LACUS LAOREET NON CURABITUR GRAVIDA ARCU AC TORTOR DIGNISSIM CONVALLIS. AT QUIS RISUS SED VULPUTATE ODIO UT."],
    typeSpeed: 10
  }

  var typed = new Typed("#stat", options);

});






