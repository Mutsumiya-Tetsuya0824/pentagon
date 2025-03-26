<?php
/* ヘッダーに CSS や Javascript 等を追加したい場合は、以下の ?> 以降にに書いてください
 *
 * 記事や固定ページ単位でヘッダーを追加したい場合は、
 * 記事投稿(編集)画面で、カスタムフィールドに addhead という名前を追加し、
 * 値の部分に CSS や Javascript を書くことで、ヘッダーを追加することもできます。
 *
 * To add CSS or Javascript in the header, please write them after the below ?>.
 *
 * If you want to。add elements in header for certain posts or pages,
 * create a customfield with the name of "addhead" and write your own CSS or Javascript.
 * These elements will be added in the header.
*/
?>


<?php if (is_front_page()) : ?>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js" defer></script> 

<!-- Swiper CSS -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"> -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "株式会社Pentagon",
    "url": "https://pentagon.tokyo/"
  }
  </script>

<?php endif; ?>

<?php if(is_page('company')) : ?>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js" defer></script>
  <script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/company.js'; ?>" defer></script>
<?php endif; ?>

<?php if(is_page()): ?>
  <script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/tocbot.min.js'; ?>" defer></script>
  <script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/tocbot.js'; ?>" defer></script>
  <script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/sidebar.js'; ?>" defer></script>

<?php endif; ?>

<?php if(!is_page_template('page_flutter.php')): ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/add-legacy.css?=<?php echo esc_attr(date('YmdHis')); ?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/new-top.css?=<?php echo esc_attr(date('YmdHis')); ?>">
<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/header.css?=<?php echo esc_attr(date('YmdHis')); ?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/footer.css?=<?php echo esc_attr(date('YmdHis')); ?>"> -->
<?php endif; ?>


<?php if(is_page_template('page_flutter.php')): ?>
  <script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/lp-app.js'; ?>" defer></script>


  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/lp.css?=<?php echo esc_attr(date('YmdHis')); ?>">

<?php endif; ?>



<?php if (is_singular('post')) : ?>
  <script>
  // 追従メニューの関数
  const FixedNav = () => {
    const scroll = $(window).scrollTop();
    const header = $('#header_form');
    const fixed = $('#header');
    const fixedform = $('.fixedform');
    const spMenu = $('#sp-menu');
    const siteName = $('#sitename');
    const isHeaderVisible = header.height() >= scroll - 60;

    fixed.css({
      'top': isHeaderVisible ? '-100%' : '0',
      'position': isHeaderVisible ? 'static' : 'fixed',
    });
    fixedform.css('visibility', isHeaderVisible ? 'hidden' : 'visible');
    spMenu.css('visibility', isHeaderVisible ? 'hidden' : 'visible');
    if (window.innerWidth <= 779) {
      siteName.css('visibility', isHeaderVisible ? 'hidden' : 'visible');
    }
  }

  // スクロール時に発火
  $(window).on('scroll', () => {
    FixedNav();
  });
  
  // ロード完了時にも発火
  $(window).on("load", function() {
    FixedNav();
  });
</script>

  <style>
    #header {
      top: 0;
      position: static;
    }

    #head-in {
      position: static;
      padding-top: 60px;
    }
    #head-in {
      padding: 0px;
    }

    .band {
      position: static;
    }

    .fixedform {
      visibility: hidden;
    }

    #sp-menu {
      visibility: hidden;
    }

    @media only screen and (max-width: 779px) {
      #sitename {
        visibility: hidden;
        
      }
     
    }
  </style>
<?php endif; ?>
