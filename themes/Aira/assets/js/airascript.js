$(document).ready(function () {

    //------------------------------------------------------------------------------------------ //
    // Navigation
    //------------------------------------------------------------------------------------------ //

    $('.open-main-menu').click(function(event){
		if(!$('.nav__response').hasClass('active')){
            $(".open-main-menu").addClass('active');
            $(".nav__response").addClass('active');
		}
		else{
			$(".open-main-menu").removeClass('active');
            $(".nav__response").removeClass('active');
		}
	});

    $('.drop-box').click(function(event){
        $('.drop-box').not($(this)).removeClass('active');
		if($(this).hasClass('active')){
            $(this).removeClass('active');
		}
		else{
			$(this).addClass('active');
		}
	});
	
	$(document).mouseup(function (e){
		if (!$('.open-main-menu').is(e.target) && !$('.nav__response').is(e.target) && $('.nav__response').has(e.target).length === 0 && $(".open-main-menu").is(":visible")) {
			$(".open-main-menu").removeClass('active');
            $(".nav__response").removeClass('active');
		}
	});
	
	$(window).resize(function(){
		if(!$(".open-main-menu").is(":visible")){
			$(".open-main-menu").removeClass('active');
            $(".nav__response").removeClass('active');
		}
	});

    function chechNavigation() {
        let scrollTop = $(document).scrollTop();

        if (scrollTop > 0) {
            if (!$('nav').hasClass('nav--fixed'))
                $('nav').addClass('nav--fixed');
        } else {
            if ($('nav').hasClass('nav--fixed'))
                $('nav').removeClass('nav--fixed');
        }
    }

    chechNavigation();

    $(window).scroll(function () {
        chechNavigation();
    });

    //------------------------------------------------------------------------------------------ //
    // Features
    //------------------------------------------------------------------------------------------ //

    var features_initial = $('.features__thumbs-item').length / 2;

    if(Math.floor(features_initial) == features_initial)
        features_initial--;
    else
        features_initial = Math.floor(features_initial);


    var features_thumbs = new Swiper(".features__thumbs-swiper", {
        slidesPerView: 5,
        spaceBetween: 20,
        initialSlide: features_initial,
        centeredSlides: true,
        watchSlidesVisibility: true,
        navigation: {
            nextEl: ".swiper-button-next.features__thumbs-next",
            prevEl: ".swiper-button-prev.features__thumbs-prev",
        },
        breakpoints: {
            '0': {
                slidesPerView: 3,
                spaceBetween: 0,
            },
            '640': {
                slidesPerView: 3,
            },
            '1024': {
                slidesPerView: 5,
            },
        }
    });

    var features_slider = new Swiper(".features__slider-swiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        initialSlide: features_initial,
    });

    features_thumbs.on('slideChange', (e) => {
        features_slider.slideTo(e.activeIndex, 500, false);
    });

    features_slider.on('slideChange', (e) => {
        features_thumbs.slideTo(e.activeIndex, 500, false);
    });

    features_thumbs.on('click', (e) => {
        features_slider.slideTo(e.clickedIndex, 500, false);
        features_thumbs.slideTo(e.clickedIndex, 500, false);
    });

    //------------------------------------------------------------------------------------------ //
    // Update
    //------------------------------------------------------------------------------------------ //

    var update_thumbs = new Swiper(".update__thumbs-swiper", {
        slidesPerView: 7,
        spaceBetween: 20,
        watchSlidesVisibility: true,
        navigation: {
            nextEl: ".swiper-button-next.update__thumbs-next",
            prevEl: ".swiper-button-prev.update__thumbs-prev",
        },
        breakpoints: {
            '0': {
                slidesPerView: 3,
                spaceBetween: 0,
            },
            '640': {
                slidesPerView: 3,
            },
            '1024': {
                slidesPerView: 5,
            },
            '1460': {
                slidesPerView: 7,
            },
        }
    });

    var update_slider = new Swiper(".update__slider-swiper", {
        slidesPerView: 1,
        spaceBetween: 0,
    });

    $('.update__thumbs-item').eq(0).addClass('active');

    update_thumbs.on('click', (e) => {
        update_slider.slideTo(e.clickedIndex, 500, false);
        $('.update__thumbs-item').removeClass('active');
        $('.update__thumbs-item').eq(e.clickedIndex).addClass('active');
    });

    //------------------------------------------------------------------------------------------ //
    // News
    //------------------------------------------------------------------------------------------ //

    let server_select = $('select[name=news-server]').nSelect({theme: 'myStyleSelect'});
    let news_select = $('select[name=news-type]').nSelect({theme: 'myStyleSelect'});
    
    let news_slider_settings = {
        slidesPerView: 3,
        watchSlidesVisibility: true,
        navigation: {
            nextEl: ".swiper-button-next.news__thumbs-next",
            prevEl: ".swiper-button-prev.news__thumbs-prev",
        },
        breakpoints: {
            '0': {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            '640': {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            '1024': {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            '1240': {
                slidesPerView: 3,
                spaceBetween: 40,
            },
        }
    };

    var news_slider = new Swiper(".news__slider-swiper", news_slider_settings);

    $(window).on('nChange', () => {
        let server_filter = server_select.val() ?? 'all';
        let type_filter = news_select.val() ?? 'all';
        news_slider.destroy();
        $('.news__slider-item').css('display', 'flex');
        $('.news__slider-item').each(function() {
            let server = $(this).attr('data-server') ?? 'all';
            let type = $(this).attr('data-type');

            if(server_filter !== 'all' && server != server_filter)
                $(this).css('display', 'none');

            if(type_filter !== 'all' && type != type_filter)
                $(this).css('display', 'none');

        });
        news_slider = new Swiper(".news__slider-swiper", news_slider_settings);
    });

    //------------------------------------------------------------------------------------------ //
    // Inner news
    //------------------------------------------------------------------------------------------ //

    $('.news-switch__item').click(function(event){

		$('.news-switch__item').removeClass('active');
        $(this).addClass('active');

        let type_filter = $(this).attr('data-type');

        $('.news-list__item').css('display', 'flex');

        $('.news-list__item').each(function() {
            let type = $(this).attr('data-type');

            if(type_filter !== 'all' && type != type_filter)
                $(this).css('display', 'none');
        });

	});

    //------------------------------------------------------------------------------------------ //
    // Features
    //------------------------------------------------------------------------------------------ //

    var streams_slider = new Swiper(".streams__slider-swiper", {
        slidesPerView: 4,
        watchSlidesVisibility: true,
        navigation: {
            nextEl: ".swiper-button-next.streams__thumbs-next",
            prevEl: ".swiper-button-prev.streams__thumbs-prev",
        },
        breakpoints: {
            '0': {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            '640': {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            '1024': {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            '1240': {
                slidesPerView: 4,
                spaceBetween: 40,
            },
        }
    });
	
	//------------------------------------------------------------------------------------------ //
    // Spoilers
    //------------------------------------------------------------------------------------------ //
	
	$('.spoiler__title').click(function (event) {
        event.preventDefault();
		
		if(!$(this).parent().hasClass('active'))
		{
			$(this).parent().addClass('active');

			$(this).parent().find('.spoiler__content').eq(0).slideDown(200, function() { 
				$(this).css('display', 'block');
			});
		}
		else
		{
			$(this).parent().removeClass('active');

			$(this).parent().find('.spoiler__content').eq(0).slideUp(200, function() { 
				$(this).css('display', 'none');
			});
		}
    });

    //------------------------------------------------------------------------------------------ //
    // Tables
    //------------------------------------------------------------------------------------------ //

    $('.text-area table').each(function(){

        $(this).wrap("<div class='table-bg'></div>");

    });


});