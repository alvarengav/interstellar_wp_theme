//global full styles
import '../sass/full-style.scss';


try {
    window.Popper = require('popper.js');
    require('bootstrap');
} catch (error) {}

import WOW from 'wow.js';

jQuery(function ($) {
    setTimeout(() => {
        $('.preloader-container').slideUp(500, function () {
            $(this).remove();
            $('body').removeClass('preloader');
        });
    }, 1500);

    new WOW({ animateClass: 'animate__animated' }).init();
});