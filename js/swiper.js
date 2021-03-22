// スライダーライブラリ Swiper.js

var init = function () {
    var slides = $(this).find('.swiper-slide');
    // スライドが4枚を下回るとループオフ（バグ修正のため）
    var slidable = (slides >= 4);

    new Swiper('.swiper-container', {
        loop: slidable,
        direction: 'horizontal',
        slidesPerView: 'auto',
        spaceBetween: 20,
        centerdSlides: true,
        autoplay: false,
        navigation: {
            prevEl: '.swiper-button-prev',
            nextEl: '.swiper-button-next'
        },
    });
}

document.addEventListener('DOMContentLoaded', init);