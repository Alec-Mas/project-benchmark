/**
 * Created by Alec on 7/04/2017.
 */
$(document).ready(function(){

    //pricing tabs//

    $(".tabs-menu a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("active");
        $(this).parent().siblings().removeClass("active");

        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });

    $('#primary-nav-trigger').click(function(){
        $(this).toggleClass('open');

        $('.primary-nav').toggleClass('visible');
        $('.mobile-nav').toggleClass('on');
        $('.main-wrapper').toggleClass('overflow-hidden');
    });

});

$(window).scroll(function() {

    if (!$('body').hasClass('text-page')) {

        if ($(this).scrollTop() > 1) {
            $('header').addClass("sticky");
            $('header .main-logo img').addClass("logo-black-outline");
            $('header .main-logo img.logo-black-outline').attr('src', 'img/foot-logo.png')
        }

        else {
            $('header').removeClass("sticky");
            $('header .main-logo img').removeClass("logo-black-outline");
            $('header .main-logo img').attr('src', 'img/logo.png')
        }
    }

});



$("#scroll-benefits").click(function() {

    $('html, body').animate({
        scrollTop: $("#benefits-section").offset().top
    }, 700);

});

$("#scroll-how-it-helps, .nav-features").click(function() {

    $('html, body').animate({
        scrollTop: $("#how-it-helps-section").offset().top
    }, 700);

});

$("#scroll-integrations").click(function() {

    $('html, body').animate({
        scrollTop: $("#integrations-section").offset().top
    }, 700);

});

$("#scroll-pricing, .nav-pricing").click(function() {

    $('html, body').animate({
        scrollTop: $("#pricing-section").offset().top
    }, 700);

});

// about-us-page-buttons

$("#scroll-about-us, .nav-about-us").click(function() {

    $('html, body').animate({
        scrollTop: $("#about-us-section").offset().top
    }, 700);

});

$("#scroll-team, .nav-team").click(function() {

    $('html, body').animate({
        scrollTop: $("#team-section").offset().top
    }, 700);

});

// about-us-page-team-descriptions
$(document).ready(function(){

    $('.team .wrapper li').on({
        click: function() {
            var memberId = this.dataset.memberId;

            $('.team .wrapper li').removeClass('active');
            $('[data-member-id="' + memberId + '"]').addClass('active');

            $(".detailed-description").hide(0, function() {
                $('[data-desc-id="' + memberId + '"]').show();
            });
        }
    });

});