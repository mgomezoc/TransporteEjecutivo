/***
 *
 * APP
 *
 */

AOS.init({
    duration: 1000, // Duración de las animaciones
    easing: 'ease-in-out',
    once: true, // Las animaciones se ejecutarán una sola vez al desplazarse
    mirror: false // Las animaciones no se repiten al desplazarse hacia arriba
});

$(document).ready(function () {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 5,
        spaceBetween: 15, // Disminuye el espacio entre las diapositivas
        loop: true,

        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            640: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 15
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 15
            }
        }
    });

    // Show or hide the scroll to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('#scrollToTop').fadeIn();
        } else {
            $('#scrollToTop').fadeOut();
        }
    });

    // Scroll to top animation
    $('#scrollToTop a').click(function (e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 100);
        return false;
    });
});

function setActiveMenu(page) {
    $(`.navigation-link[data-page=${page}]`).addClass('active');
}
