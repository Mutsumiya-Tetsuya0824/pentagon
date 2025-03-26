/* ==============================
  資料請求 固定ボタン
============================== */

var scrollEnd = $('.js-endBox').offset().top;
var distance = 0;
$(window).on("scroll", function () {
  scrollHeight = $(document).height();
  scrollPosition = $(window).height() + $(window).scrollTop();
  footerHeight = $('.lp-footer').innerHeight();
  var ww = window.innerWidth;
  if (scrollHeight - scrollPosition <= footerHeight) {
    $('.js-fixedbtn').css({
      "position": "absolute",
      "bottom": "-100px",
      "display": "block"
    });

  } else {
    if (ww > 768) {
      $('.js-fixedbtn').css({
        "position": "fixed",
        "bottom": "20px",
      });
    } else {
      $('.js-fixedbtn').css({
        "position": "fixed",
        "bottom": "10px",
      });
    }

    distance = $(this).scrollTop();
    if (scrollEnd <= distance) {
      $('.js-fixedbtn').fadeIn();
    } else {
      $('.js-fixedbtn').fadeOut();
    }
  }
});
