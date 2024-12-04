import './scss/style.scss';

// jQuery
import $ from 'jquery'
window.jQuery = window.$ = $

// Bootstrap JS
import '@popperjs/core';
import * as bootstrap from 'bootstrap'
import 'jquery.cookie';

// Slick Carousel
import 'slick-carousel';

// Turbo SPA
import * as Turbo from "@hotwired/turbo";

Turbo.setProgressBarDelay(500);

import './js/header';

document.addEventListener("turbo:before-render", (event) => {
    // Make sure menu is not open when loading the page from cache
    event.detail.newBody.classList.remove('menu-open');
    if (event.detail.newBody.querySelector('#jivo-iframe-container')) event.detail.newBody.querySelector('#jivo-iframe-container').remove();
    if (event.detail.newBody.querySelector('.jivo_shadow')) event.detail.newBody.querySelector('.jivo_shadow').remove();
    if (event.detail.newBody.querySelector('[src*="//code.jivosite"]')) event.detail.newBody.querySelector('[src*="//code.jivosite"]').remove();
})


document.addEventListener("turbo:load", function () {

    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

    if (!$.cookie('alert-modal'))
        $('.alert-modal').removeClass('d-none');

    $('.alert-modal .close').click(function () {
        $('.alert-modal').fadeOut();
        $.cookie('alert-modal', 1);
    });

    // runJivoChat('hmn6lFfN84');

    $(".slider.programmes").slick({
        autoplay: true,
        autoplaySpeed: 4000,
        prevArrow: null,
        nextArrow: null,
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        rows: 0,
        swipeToSlide: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $(".slider.logos").slick({
        autoplay: true,
        autoplaySpeed: 1,
        speed: 6000,
        prevArrow: null,
        nextArrow: null,
        slidesToShow: 8,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        cssEase: 'linear',
        waitForAnimate: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 3
                }
            }
        ]
    });



});


// function runJivoChat(jivo_id){
//     $('#jivo-iframe-container, .jivo_shadow, [src*="//code.jivosite"]').remove();
//
//     delete(window.jivo_api);
//     delete(window.jivo_config);
//     window.jivo_magic_var = undefined;
//
//     window.$jivosite = null;
//     (function(d,s){
//         var z = $jivosite=function(c){ z._.push(c) },
//             el_script = z.s = d.createElement(s),
//             e=d.getElementsByTagName(s)[0];
//
//         z.set=function(o){
//             z.set._.push(o)
//         };
//
//         z._=[];
//         z.set._=[];
//         $.async = !0;
//         el_script.setAttribute("charset","utf-8");
//
//         el_script.src='//code.jivosite.com/widget/'+jivo_id;
//         z.t=+new Date;
//         el_script.type="text/javascript";
//         e.parentNode.insertBefore(el_script,e)
//     })(document,"script");
// }