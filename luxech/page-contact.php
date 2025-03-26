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
 * Template Name: Contactページ
 */

global $luxe, $_is, $awesome;
get_header();

$fa_pencil = 'fa-pencil-alt';
$fa_file   = 'fa-file-alt';

// $awesome['ver'][0] を安全にチェックする
if ( isset( $awesome['ver'] ) && is_array( $awesome['ver'] ) && isset( $awesome['ver'][0] ) && $awesome['ver'][0] === '4' ) {
	$fa_pencil = 'fa-pencil';
	$fa_file   = 'fa-file-text';
}

// get_the_category($post->ID)[0] を安全にチェックする
$categories = get_the_category( $post->ID );
if ( ! empty( $categories ) && isset( $categories[0] ) ) {
	$cate = $categories[0];
} else {
	$cate = null; // カテゴリが無い場合は null や空変数等で回避
}
?>

<div class="contactPage">
    <div class="contactBox">
        <div class="txtBlock">
            <h1 class="ttl">お問い合わせ</h1>
            <p class="txt">このたびは当社にご関心をお寄せいただき、誠にありがとうございます。アプリ開発に関するご質問や無料相談のお申し込みは、こちらのフォームよりお気軽にご連絡ください。いただいた内容には、3営業日以内に担当者よりご返信申し上げます。</p>
            <div class="exampleBox">
                <div class="topArea">
                    <h3 class="ttl">過去の実績例</h3>
                    <p class="exampleTxt">教育系アプリ、マッチングアプリ、地図アプリ、etc.</p>
                </div>
                <div class="imgArea">
                    <div class="img"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/materials/contact/contact_img01.png" alt="" width="526" height="424"></div>
                </div>
            </div>
        </div>
        <div class="formBlock">
			<?php echo do_shortcode('[contact-form-7 id="6748" title="お問い合わせフォームA"]'); ?>
		</div>
    </div>
</div>
</main>
<?php //thk_call_sidebar(); ?>
</div> <!--/#primary-->
<?php echo apply_filters('thk_footer', ''); ?>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    var selectElement = document.querySelector('select[name="your-budget"]');
    if (selectElement) {
      var placeholderOption = selectElement.querySelector('option[value=""]');
      if (placeholderOption) {
        placeholderOption.style.color = '#CBCBCB'; // 色を指定（例: グレー）
      }
      
      // 「選択してください」が選択された場合のみ色を切り替える
      selectElement.addEventListener('change', function() {
        if (this.value === "") {
          this.style.color = '#CBCBCB'; // プレースホルダーカラー
        } else {
          this.style.color = '#000'; // 通常選択時のカラー
        }
      });

      // 初期状態で「選択してください」が選択された状態の色を反映
      selectElement.style.color = '#CBCBCB';
    }
  });
</script>
