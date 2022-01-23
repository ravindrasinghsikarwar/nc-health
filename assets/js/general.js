var $ = jQuery.noConflict();

$(document).ready(function () {
    
    $('.enumenu_ul').responsiveMenu({
        'menuIcon_text': '',
        onMenuopen: function () {}
    });
    
    BodyPadding();
    
    //Counter Js Start
  	if ($('.counter').length > 0) {
		$('.counter').counterUp({
		  delay: 10,
		  time: 2000
		});
	}
    
    // Magnific Popup With Video Autoplay
    $('.video-icon').magnificPopup({
        disableOn: 0,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        closeBtnInside: true,
        closeOnContentClick: true,
        fixedContentPos: true,
        iframe: {
          patterns: {
               youtube: {
                  index: 'youtube.com/', 
                  id: 'v=', 
                  src: 'https://www.youtube.com/embed/%id%?autoplay=1&mute=1' 
              },
               vimeo: {
                  index: 'vimeo.com/',
                  id: '/',
                  src: 'https://player.vimeo.com/video/%id%?autoplay=1&muted=1'
                },
            }
        },
    });
    
    $(".content").hide();
    /*$(".show_hide").on("click", function (e) {
    	e.preventDefault();
        var txt = $(".content").is(':visible') ? 'Show More' : 'Show Less';
        $(".show_hide").text(txt);
        $(".show_hide").toggleClass('active');
        $('.content').slideToggle();
    });
    
    $(".show_hide").on("click", function (e) {
    	e.preventDefault();
        var txt = $(".content").is(':visible') ? 'Show More' : 'Show Less';
        $(".show_hide").text(txt);
        $(".show_hide").toggleClass('active');
        $('.content').slideToggle();
    });*/
    
   
    $(".show_hide").click(function(){
        var txt = $(".content").is(':visible') ? 'Read More' : 'Read Less';
        $(this).text(txt);
        $(this).toggleClass('active');
        $(this).parent(".news-content").find('.content').slideToggle();
    });
    
    $('.who-we-work-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        infinite: true,
        speed: 800,
        autoplay: true,
        autoplaySpeed: 4000,
        responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 767,
          settings: {
                slidesToShow: 3,
                slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
      ]
     });
    
    $(".our-timeline-main ul li:first-child").addClass("active");
    
    $( ".our-timeline-main ul li" ).mouseenter(function() {
        $(".our-timeline-main ul li:first-child").removeClass("active");
    }).mouseleave(function() {
        $(".our-timeline-main ul li:first-child").addClass("active");
    });
    
});

$(window).resize(function(){
    BodyPadding();
});

function BodyPadding(){
    var HeaderHeight = $(".site-header").outerHeight();
    $("body").css("padding-top", HeaderHeight);
}