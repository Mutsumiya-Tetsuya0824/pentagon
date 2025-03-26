const swiper = new Swiper('.swiper',{
  loop: true,
  slidesPerView:2,
  speed: 5000,

autoplay: {
  delay: 1,
  disableOnInteraction: false,
},

breakpoints: {
  554: {
    slidesPerView: 2,
  },
  // 768px以上の場合
  768: {
    slidesPerView: 3,
  },
  // 980px以上の場合
  980: {
    slidesPerView: 3,
  },
  // 1200px以上の場合
  1200: {
    slidesPerView: 4,
  }
}
});
