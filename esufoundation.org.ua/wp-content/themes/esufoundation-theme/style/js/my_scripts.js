if(document.querySelector('.sliderTop')){
    var mainslider = new Swiper(".sliderTop", {
        slidesPerView: 1,
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        lazy: {
            loadPrevNext: true,
            loadOnTransitionStart: true,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        observer: true,
        observeParents: true,
        on: {
            lazyImageReady: function() {
                var swiper = this;
                setTimeout(function() {
                    swiper.updateAutoHeight();
                }, 1);
            }
        }
    });
}
/** **/
if(document.querySelector('.sliderCorusel')){
    var mainslider = new Swiper(".sliderCorusel", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        lazy: {
            loadPrevNext: true,
            loadOnTransitionStart: true,
        },
        observer: true,
        observeParents: true,

        on: {
            lazyImageReady: function() {
                var swiper = this;
                setTimeout(function() {
                    swiper.updateAutoHeight();
                }, 1);
            }
        }
    });
}
/** **/
if(document.querySelector('.sliderIcons')){
    var swiper = new Swiper(".sliderIcons", {
        spaceBetween: 22,
        grid: {
            rows: 2,
        },
        lazy: {
            loadPrevNext: true,
            loadOnTransitionStart: true,
            loadPrevNextAmount: 6,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            480: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 4,
            }
        },
    });
}
/** **/
$(document).ready(function(){
	$("#sticky").sticky({topSpacing:0});
	/** **/
    if($('.buttonMenu').length) {
        $(".buttonMenu").click( function() {
            var el = $(this).closest('html');
            if(el.hasClass("open-menu")) {
                el.removeClass('open-menu');
                $(".buttonMenu").removeClass('active');
                $(".mobileMenu").slideUp();
            } else {
                el.addClass('open-menu');
                $(".buttonMenu").addClass('active');
                $(".mobileMenu").slideDown();
            }
        });
        $(document).mouseup(function (e){
            var div = $(".mobileMenu, .buttonMenu");
            if (!div.is(e.target)
                && div.has(e.target).length === 0) {
                div.closest('html').removeClass('open-menu');
            	$(".buttonMenu").removeClass('active');
            }
        });
    }
    /** **/
    if($('.listReporting').length) {
	    $('.listReporting').on('click', 'li:not(.active)', function() {
	        $(this)
	        .addClass('active').siblings().removeClass('active')
	        .closest('.boxReporting').find('.listReporting_content').removeClass('active').eq($(this).index()).addClass('active');
	    });
	}
	/** **/
    if($('.listQuestions').length) {
        $('.listQuestions_li').first().addClass("open").find('.listQuestions_bottom').slideDown();
        $('.listQuestions_li .listQuestions_top').on('click', function(){
            var element = $(this).parent('.listQuestions_li');
            if (element.hasClass('open')) {
                element.removeClass('open');
                element.find('.listQuestions_li').removeClass('open');
                element.find('.listQuestions_bottom').slideUp(400);
            }
            else {
                element.addClass('open');
                element.children('.listQuestions_bottom').slideDown(400);
                element.siblings('.listQuestions_li').children('.listQuestions_bottom').slideUp(400);
                element.siblings('.listQuestions_li').removeClass('open');
                element.siblings('.listQuestions_li').find('.listQuestions_li').removeClass('open');
                element.siblings('.listQuestions_li').find('.listQuestions_bottom').slideUp(400);
            }
        });
    }
    /** **/


});

