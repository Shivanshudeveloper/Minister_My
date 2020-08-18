 $(window).scroll(function() {
    var hdrH = $('.slider_area').height();
   if ($(this).scrollTop() > hdrH){
      $('.secondDivTp').addClass("fixedScnd");
   } else {
      $('.secondDivTp').removeClass("fixedScnd");
   }
   
});
 $(document).ready(function(){
  var owl = $('.owl-carousel');
  owl.owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    nav:false,
    items: 1,
  });
  
  // Custom Button
  $('.customNextBtn').click(function() {
    owl.trigger('next.owl.carousel');
  });
  $('.customPreviousBtn').click(function() {
    owl.trigger('prev.owl.carousel');
  });
  
});
$(document).ready(function(){
    $('.recenUpBtn').click(function(){
        $('#aboutUs').hide();
        $('#insights').show();
    });
		var vph= $(window).height();
		$('.leftSideBarDiv').css({'height':vph+'px'});
		$('.rightSideBarDivIn').css({'height':vph+'px'});
    $('.centerSideBarDiv').css({'height':vph+'px'});
	$('.leftSideNav ul li').click(function(){
	$('.hideDetl').hide();
	$('.leftSideNav ul li').removeClass('activeLftMenu');
    var leftTabId = $(this).attr('rel');
   /* alert(leftTabId);*/
    $('#'+leftTabId).show();
    $(this).addClass('activeLftMenu');
    });

    

    $('#socialId ul li').click(function(){
    $('.hideDetlS').hide();
    $('#socialId ul li').removeClass('activeLftMenu');
    var leftSocialId = $(this).attr('rel');
    $('#'+leftSocialId).show();
    $(this).addClass('activeLftMenu');
    });

    $('.newsUpdateLftInTab ul li').click(function(){
    $('.newsUpdateHideDiv').hide();
    $('.newsUpdateLftInTab ul li').removeClass('newsUpdateAct');
    var newsUpdId = $(this).attr('rel');
    $('#'+newsUpdId).show();
    $(this).addClass('newsUpdateAct');
    });

  $('.newsInSightDiv .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:2
        }
    }
});
$('.photoGalleryIn .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
});
$('.sliderCntAreaDiv .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    navigation : false,
    dots: true,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

$('.ftrPoemDivRgtIn .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    navigation : false,
    dots: true,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
   /*$("html, body").delay(2000).animate({
        scrollTop: $('.secondDivTp').offset().top 
    }, 2000);*/

$( ".cross" ).hide();
$( ".menu" ).hide();
$( ".hamburger" ).click(function() {
$( ".menu" ).slideToggle( "slow", function() {
$( ".hamburger" ).hide();
$( ".cross" ).show();
});
});

$( ".cross" ).click(function() {
$( ".menu" ).slideToggle( "slow", function() {
$( ".cross" ).hide();
$( ".hamburger" ).show();
});
});
$('.venobox').venobox({
        numeratio: true,
        border: '20px'
});

$('.poliTabDiv ul li').click(function(){
    $(this).addClass('activeP');
    $('.poliTabDiv ul li').removeClass('activeP');
    var polId = $(this).attr('rel');
    $('.hideMinCnt').hide();
    $(this).addClass('activeP');
    $('#'+polId).show();
});

 $('.minBottomTabDiv ul li').click(function(){
    $('.hideMinDiv').hide();
    $('.minBottomTabDiv ul li').removeClass('activeMinDiv');
    var minDivId = $(this).attr('rel');
    $('#'+minDivId).show();
    $(this).addClass('activeMinDiv');
    });

/*$('.poliTabDiv ul li').click(function(){
    var topPolId = $(this).rel
})*/
});

