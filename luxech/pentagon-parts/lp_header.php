<?php

global $luxe, $_is, $post;


?>

<header class="lp-header" itemscope="" itemtype="https://schema.org/WPHeader">
    <div class="lp-header__info" itemscope="" itemtype="https://schema.org/Website">
      <p class="lp-header__logo"><a href="https://pentagon.tokyo/" itemprop="url"><?php 	echo thk_create_srcset_img_tag($luxe['title_img'], THK_SITENAME, null, true, false); ?></a></p>
      <meta itemprop="name about" content="東京のアプリ開発会社">
      <meta itemprop="alternativeHeadline" content="東京でスマホアプリの制作会社をお探しなら">
    </div>
    <div class="lp-header__cta">
      <div class="flex">
        <div class="lp-header__btn -document"><a href="https://pentagon.tokyo/downloads/" target="_blank" rel="noopener noreferrer">資料のご請求</a></div>
        <div class="lp-header__btn -contact"><a href="https://pentagon.tokyo/contact/" target="_blank" rel="noopener noreferrer">お問い合わせ</a></div>
      </div>
    </div>
  </header>
