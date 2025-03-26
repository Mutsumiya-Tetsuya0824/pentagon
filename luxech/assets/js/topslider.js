// let swiper, swiperBool;
// const breakPoint = 800;


// window.addEventListener('load', () => {
//   if (breakPoint > window.innerWidth) {
//     swiperBool = false;
//   } else {
//     createSwiper();
//     swiperBool = true;
//   }

// }, false);



// function createSwiper() {
//   swiper = new Swiper('.swiper-container', {
//     // Optional parameters
//     loop: true,

//     // If we need pagination
//     pagination: {
//       el: '.swiper-pagination',
//     },

//     // Navigation arrows
//     navigation: {
//       nextEl: '.swiper-button-next',
//       prevEl: '.swiper-button-prev',
//     },

//     centeredSlides: true,
//     loop: true,
//     loopAdditionalSlides: 3,
//     // Responsive breakpoints
//     slidesPerView: 3,
//     spaceBetween: 32,
//     breakpoints: {
//       1920: {
//         slidesPerView: 'auto',
//         spaceBetween: 32
//       }
//     }
//   });
// }


// window.addEventListener('resize', () => {
//   if (breakPoint > window.innerWidth && swiperBool) {
//     swiper.destroy(false, true);
//     swiperBool = false;
//   } else if (breakPoint <= window.innerWidth && !(swiperBool)) {
//     createSwiper();
//     swiperBool = true;
//   }
// }, false);

////////////////////////////////////////////////////////



/* card05
------------------------------*/
// スクロールイベントで画面幅をチェック
// function initSwiper() {
//   if (window.innerWidth >= 820) {
//     // 画面幅が768px以上の場合、Swiperを初期化
//     (function () {
//       const slideLength = document.querySelectorAll('.p-top-works_slider .swiper-slide').length;

//       const initSwiper = () => {
//         const mySwiper = new Swiper('.p-top-works_slider', {
//           slidesPerView: 'auto',
//           spaceBetween: 16,
//           loop: true,
//           loopedSlides: slideLength,
//           speed: 8000,
//           autoplay: {
//             delay: 0,
//             disableOnInteraction: false,
//           },
//           freeMode: {
//             enabled: true,
//             momentum: false,
//           },
//           grabCursor: true,
//           breakpoints: {
//             1025: {
//               spaceBetween: 32,
//             }
//           },
//           on: {
//             touchEnd: (swiper) => {
//               swiper.slideTo(swiper.activeIndex + 1);
//             }
//           }
//         });
//       };

//       window.addEventListener('load', function () {
//         initSwiper();
//       });
//     }());
//   } else {
//     // 画面幅が768px未満の場合、スライダーのインスタンスを無効にする
//     // ここでは何もしません（スライダー機能は無効）
//     const swiperElement = document.querySelector('.p-top-works_slider');
//     if (swiperElement && swiperElement.swiper) {
//       swiperElement.swiper.destroy();  // Swiperインスタンスを破棄
//     }
//   }
// }

// // 初期化
// initSwiper();

// // ウィンドウのリサイズ時にもチェック
// window.addEventListener('resize', initSwiper);



////////////////////////////////////////////////////////


  // Swiperインスタンスを保持するための変数を用意
  let mySwiper = null;

  // 画面幅をチェックしてSwiperを生成・破棄する関数
  function checkSwiper() {
    const swiperContainer = document.querySelector('.p-top-works_slider');
    if (!swiperContainer) return;

    // 820px以上なら無限ループスライダーを生成
    if (window.innerWidth >= 820) {
      if (!mySwiper) {
        const slideLength = swiperContainer.querySelectorAll('.p-top-works_slider .swiper-slide').length;

        mySwiper = new Swiper(swiperContainer, {
          slidesPerView: 'auto',
          spaceBetween: 32,
          loop: true,
          loopedSlides: slideLength,
          speed: 8000,
          autoplay: {
            delay: 0,
            disableOnInteraction: false,
          },
          freeMode: {
            enabled: true,
            momentum: false,
          },
          grabCursor: true,
          breakpoints: {
            // 画面幅が 1025px 以上のときはスペースを広げるなど
            1025: {
              spaceBetween: 32,
            }
          },
          on: {
            // 指でスライドを止めたとき、指を離した直後に一つ先にスライド
            touchEnd: (swiper) => {
              swiper.slideTo(swiper.activeIndex + 1);
            }
          }
        });
      }
    } else {
      // 820px未満ならスライダーを破棄
      if (mySwiper) {
        mySwiper.destroy(true, true);
        mySwiper = null;
      }
    }
  }

  // ページ読み込み時とウィンドウリサイズ時にチェック関数を実行
  window.addEventListener('load', checkSwiper);
  window.addEventListener('resize', checkSwiper);