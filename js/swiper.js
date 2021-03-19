// スライダーライブラリ Swiper.js

//https://garigaricode.com/swiper/
//https://www.puzzle-web.jp/archive/2256/
var init = function () {
  new Swiper('.swiper-container', {
    direction: 'horizontal',
    slidesPerView: 1.1,
    centerdSlides:true,
    breakpoints: {
      768: {
        slidesPerView: 3.5,
        centerdSlides:true,
      }
    },
    autoplay: false,
    loop: false,
    navigation: {
      prevEl: '.swiper-button-prev',
      nextEl: '.swiper-button-next'
    },
  });
}

document.addEventListener('DOMContentLoaded', init);