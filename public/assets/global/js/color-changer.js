"use strict";

// Color Switcher
$(".color-switcher").on('click', function() {
    $("body").toggleClass("dark-theme");

    var url = '/theme-mode';

    $.get(url);
});

let isDisabled = "true"

$(window).on('load', function() {
    AOS.init({
        duration: 1000,
        mirror: true,
        once: true,
        disable: isDisabled == 'true' ? true : 'mobile',
    });
});
