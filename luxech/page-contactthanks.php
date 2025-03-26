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
 * Template Name: ContactThanksページ
 */

global $luxe, $_is, $awesome;
get_header();

// デフォルト設定
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
    $cate = null;
}
?>

<div class="contactThanks">
    <picture class="contactThanksImage">
        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/contact/thanks_img.jpg" alt="Thank you!" width="548" height="380">
    </picture>
    <div class="downloads-thanks">
        <p>お問い合わせありがとうございます！<br>
        お返事までしばらくお待ちください。</p>
        <a class="primary-button" href="/">トップページに戻る</a>
    </div>
</div>
</main>
<?php thk_call_sidebar(); ?>
</div><!-- /#primary -->

<?php echo apply_filters('thk_footer', ''); ?>
