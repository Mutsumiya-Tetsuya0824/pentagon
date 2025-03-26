<?php
/* フッターに CSS や Javascript 等を追加したい場合は、?> 以降に書いてください。
 (To add CSS or Javascript in the footer, please write them after the below ?>. ) */


?>

<!-- 問い合わせフォーム -->
<?php if(!is_page('contact')): ?>
  <div class="fixedform" style="display: none;">
	<a href="/contact/">
    <div class="fixedformTitle"><p>アプリ開発の商談はこちらから</p></div>
<!--     <div class="fixedformBody">
      <div class="fixedformBodyInner contact"><?php echo do_shortcode('[contact-form-7 id="2689" title="お問い合わせフォーム"]'); ?></div>
    </div> -->
	 </a>
  </div>


  <div class="fixCtaBox js-fixedbtn">
    <p class="close-btn"><img src="<?php echo get_theme_file_uri('/assets/img/materials/top/close-circle-fill.svg'); ?>" alt=""></p>
    <h4 class="ttl">株式会社ペンタゴンの<br>お役立ち資料をチェック！</h4>
    <div class="btnArea pc">
      <div><a href="/downloads/downloads-4463/" class="btn_type01 bg-w">企画書テンプレート</a></div>
      <div><a href="/downloads/downloads-3539/" class="btn_type01 bg-w">アプリ開発のチェックリスト</a></div>
      <div><a href="/contact/" class="btn_type01">お問い合わせ</a></div>
    </div>
    <div class="btnArea sp">
      <div><a href="/contact/" class="btn_type01">お問い合わせ</a></div>
      <div><a href="/downloads/" class="btn_type01 bg-w">資料請求する</a></div>
    </div>
  </div>
<?php endif; ?>

<?php if (is_front_page()) : ?>
<!-- Swiper JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/topslider.js'; ?>" defer></script>
<?php endif; ?>

<?php if(is_page('contact')): ?>
<script>
	document.addEventListener('wpcf7mailsent', function(event) {
		location = '/contact/thanks';
	}, false);
</script>
<?php endif; ?>

<div id="overlay" class="overlay"></div>

<script>
  jQuery(function($) {

    function isSP() {
      if (window.matchMedia && window.matchMedia('(max-width: 1024px)').matches) {
        return true;
      } else {
        return false;
      }
    }
    switchGLobalnav();
    function switchGLobalnav() {
      $(window).on('load resize', function() {
        closeSUbmenu();
      });

      function closeSUbmenu() {
        $('.overlay').hide();
        $("#head-band").removeClass("head-brand-open");
        $('#sp-menu').removeClass('is-open');
        $('html').removeClass('nav-open');
        $('#sp-menu').attr('aria-expanded', false);
      }

      $('.menu-item-has-children > a ').on('click', function(e) {
        if (window.matchMedia && window.matchMedia('(max-width: 1024px)').matches) {
          e.stopPropagation();
          $(this).next('.sub-menu').slideToggle();
          $(this).parent('li').toggleClass('is-open');
          return false;
        }
      });

      $('#sp-menu').on('click', function() {
        $("#head-band").toggleClass("head-brand-open");
        $('#sp-menu').toggleClass('is-open');
        $('.overlay').toggle();
        $('html').toggleClass('nav-open');

        if ($(this).attr('aria-expanded') == 'false') {
          $(this).attr('aria-expanded', true);
          $('.overlay').show();
          $('#sp-menu').addClass('is-open');
        } else {
          closeSUbmenu();
        }

      });

      $('body').on('click', '.overlay', function() {
        closeSUbmenu();
      });

    }

    $('li.menu-item-has-children').hover(
      function() {
        $('.overlay').fadeIn(100);
      },
      function() {
        if (isSP() != true) {
          $('.overlay').hide();
        }
      }
    );

    $('.fixedformTitle').on('click',function(){
      $('.fixedformBody').slideToggle();
      if($('.fixedform').hasClass('is-open')){
        $('.fixedform').removeClass('is-open');
      }else{
        $('.fixedform').addClass('is-open');
      }
    })


    $('.fixedform textarea').on('focus',function(){
      $('.fixedformBodyInner').animate({
        scrollTop: $('.fixedform .wpcf7').height() - 600
      }, 800);
    });
  });
</script>

<script>
		/* ==============================
   固定CTA
============================== */
// 1. 「閉じられた」かどうかを管理するフラグ変数を用意
var isClosed = false;

var scrollEnd = 0;
  var $endBox = $('.js-endBox');
  if ($endBox.length > 0) {
    scrollEnd = $endBox.offset().top;
  }
var distance = 0;

$(window).on("scroll", function () {
  // 2. フラグを確認し、閉じている場合は以降の表示制御をしない
  if (isClosed) {
    return; // 何もしない
  }

  // 以下、スクロール時の表示・非表示のロジック
  var scrollHeight = $(document).height();
  var scrollPosition = $(window).height() + $(window).scrollTop();
  var footerHeight = $('#footer').innerHeight();
  var ww = window.innerWidth;

  // フッターが見えたら固定ボタンを非表示にする
  if (scrollHeight - scrollPosition <= footerHeight) {
    $('.js-fixedbtn').fadeOut(300);
  } else {
    if (ww > 768) {
      $('.js-fixedbtn').css({
        "position": "fixed",
        "bottom": "32px",
        "display": "block",
        "opacity": "1",
      });
    } else {
      $('.js-fixedbtn').css({
        "position": "fixed",
        "bottom": "0",
        "display": "block",
        "opacity": "1",
      });
    }
    distance = $(this).scrollTop();
    if (scrollEnd <= distance) {
      $('.js-fixedbtn').fadeIn(0);
    } else {
      $('.js-fixedbtn').fadeOut(0);
    }
  }
});

// 3. 閉じるボタンがクリックされたらフラグを true にして永久に非表示
$('.close-btn').on('click', function () {
  isClosed = true;      // 一度閉じたらフラグを true
  $('.js-fixedbtn').fadeOut();
});



	</script>

<script>
// ロゴエリア　data-no-lazy が付いている画像を全て強制読み込み
document.addEventListener('DOMContentLoaded', function() {
  const lazyImages = document.querySelectorAll('img[data-src][data-no-lazy]');
  lazyImages.forEach(img => {
    if (img.dataset.src) {
      img.src = img.dataset.src;
    }
  });
});


const target = document.querySelector('.my-element');
if (target) {
  console.log(target.getBoundingClientRect().top);
}

</script>