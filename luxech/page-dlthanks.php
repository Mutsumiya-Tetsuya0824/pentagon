<?php

/**
 * Luxeritas WordPress Theme - free/libre wordpress platform
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * @copyright Copyright (C) 2015 Thought is free.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 * @author LunaNuko
 * @link https://thk.kanzae.net/
 * @translators rakeem( http://rakeem.jp/ )
 *
 * Template Name: DLThanksページ
 */

global $luxe, $_is, $awesome;
get_header();

// デフォルト
$fa_pencil = 'fa-pencil-alt';
$fa_file   = 'fa-file-alt';

// $awesome['ver'][0] を安全にチェック
if (
    isset($awesome['ver']) &&
    is_array($awesome['ver']) &&
    isset($awesome['ver'][0]) &&
    $awesome['ver'][0] === '4'
) {
    $fa_pencil = 'fa-pencil';
    $fa_file   = 'fa-file-text';
}

// カテゴリ情報を安全に取得
$categories = get_the_category($post->ID);
if (!empty($categories) && isset($categories[0])) {
    $cate = $categories[0];
} else {
    $cate = null; // 必要であれば別の値を入れてもOK
}
?>

<div class="page-mv">
    <h1>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/materials/archive/title_download.svg" alt="DOWNLOAD">
        <span>資料ダウンロード</span>
    </h1>
</div>

<nav class="breadcrumb">
    <ol class="breadcrumb-list">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
        <?php if (is_page()) : ?>
            <li><a href="<?php echo esc_url(home_url('/downloads/')); ?>">資料ダウンロード</a></li>
        <?php endif; ?>
    </ol>
</nav>

<div class="downloads-thanks">
    <h1>Thank you !</h1>
    <p>資料ダウンロードにお申し込みいただき、<br class="sp-only">誠にありがとうございます。<br>
       別途メールにて<br class="sp-only">資料のURLを送付させていただきます。</p>
    <a class="primary-button" href="/">トップページに戻る</a>
</div>

</main>
<?php thk_call_sidebar(); ?>
</div><!-- /#primary -->

<?php echo apply_filters('thk_footer', ''); ?>
