$( document ).ready(function() {


	$('.menu-toggle').click(function(){
		$(this).toggleClass('active');
		$(this).toggleClass('inactive');
		$('.nav').toggleClass('active');
		$('.nav').toggleClass('inactive');
	});

  $('.subnav-btn').click(function(){
    $(this).parents('.subnav').toggleClass('active');
    $(this).parents('.subnav').toggleClass('inactive');
  });


	/*$('.hero').slick({
        arrows: false,
        autoplay: true,
        dots: true,
        infinite: true,
        slidesToShow: 1,
  		slidesToScroll: 1,
  		cssEase: "ease",
  		autoplaySpeed: 3000,
  		pauseOnFocus: false,
  		responsive: [
		    {
		      breakpoint: 900,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
    });*/

  $('.case-studies').slick({
      arrows: true,
      autoplay: false,
      dots: true,
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      cssEase: "ease",
      autoplaySpeed: 3000,
      pauseOnFocus: false,
      responsive: [
        {
          breakpoint: 900,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });

    var counter = 0;

    var nextSlide = function(counter) {
      $('.testimonials .testimonial-slide').removeClass('show').addClass('hide');
      $('.testimonials .testimonial-slide').eq(counter).removeClass('hide').addClass('show');
    }

    $('.fa-arrow-circle-right').click(function(){
      if(counter == ($('.testimonials .testimonial-slide').length-1)) {
        counter = 0;
      } else {
        counter++;
      }

      nextSlide(counter);
    });

    $('.fa-arrow-circle-left').click(function(){
      counter > 0 ? counter-- : counter = $('.testimonials .testimonial-slide').length-1;
      nextSlide(counter);
    });

    
    $(window).bind('scroll',function(e){
        var scrolled = $(window).scrollTop();

        //console.log(scrolled);

        if (scrolled < 500) {
          $('.customer-relations img').removeClass('activate').addClass('deactivate');
        }
        if (scrolled > 500) {
          $('.customer-relations img').addClass('activate').removeClass('deactivate');
        }
        if (scrolled < 1000) {
          $('.powerup').removeClass('activate');
        }
        if (scrolled > 1000) {
          $('.powerup').addClass('activate');
        }
        if (scrolled < 1500) {
          $('.build').removeClass('activate');
        }
        if (scrolled > 1500) {
          $('.build').addClass('activate');
        }
        if (scrolled < 2200) {
          $('.insight').removeClass('activate');
        }
        if (scrolled > 2200) {
           $('.insight').addClass('activate'); 
        }
        if (scrolled < 2800) {
          $('.adoption').removeClass('activate');
        }
        if (scrolled > 2800) {
          $('.adoption').addClass('activate');
        }
    });

    $('.case-studies .slick-slide').click(function(e){
      var index = $(e.target).data('index');
      //console.log(index);

      $('.case-studies .slick-slide img').removeClass('active');
      $(e.target).addClass('active');
      $('.case-study').hide();
      $('.case-study').eq(index).show(800);
    });

    $('.filter').change(function(){
       
       var targetClass = ('.' + $(this).val());

       $('.news-item').hide();

       var boxArray = [];

       $('.filter:checkbox:checked').each(function(){
          boxArray.push("." + $(this).val());
       });

       var classes = boxArray.toString();
       var string = classes.replace(",", " ");
       console.log(string);

       $(classes).show(200);

       boxArray == '' ? $('.news-item').show() : '';

    });

    $('.filter-btn').click(function(e){
      e.preventDefault();
      $('.filter-zone').show(500);
    });

    $('.close-btn').click(function(e){
      e.preventDefault();
      $('.filter-zone').hide(500);
    });

});