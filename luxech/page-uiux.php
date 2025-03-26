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
 */

/**
 * Template Name: one column
 */

global $luxe, $_is, $awesome;
get_header();
$fa_pencil	= 'fa-pencil-alt';
$fa_file	= 'fa-file-alt';

if ($awesome['ver'][0] === '4') {
	$fa_pencil	= 'fa-pencil';
	$fa_file	= 'fa-file-text';
}
?>

<article>
	<div class="p-services__wrap">
		<div class="p-services__top__title">
			<h1>UI/UXアプリデザイン</h1>
		</div>
		<div class="p-services__uiux__mv">
			<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/uiux/uiux_img_mv.jpg" alt="UI / UX
			Application Design">
			<!-- <p class="p-services__mv__copy">UI / UX<br>Application Design</p> -->
		</div>
		<div class="p-service__contents__wrap">
			<!-- サイドバー -->
			<aside id="js-sidebar" class="p-services__side__wrap ">
				<div class="p-services__side ">
					<p class="p-services__side__menu">Contents Menu </p>
					<div class="js-toc">
					</div>
				</div>
			</aside>

			<!-- メインコンテンツ -->
			<div class="p-services__main__contents">
				<section class="l-service__section">
					<h2 id="heading01" class="p-services__sec__ttl" data-pagettl="Importance of Application Design">アプリデザインの重要性</h2>
					<div class="p-services__text__box">
						<p>多くのアプリが溢れて競合が激しい中、自分が作ったアプリが多くの人に使ってもらうため重要になってくるのが、アプリそのものの「デザイン」です。</p>
						<p> アプリのデザインはユーザー体験に大きく影響を与えるのはもちろんですが、デザインによって開発コストが膨れ上がってしまうこともあります。</p>
					</div>
					<div class="p-services__uiux__img__flow">
						<picture >
							<source srcset="<?= get_stylesheet_directory_uri(); ?>/assets/img/materials/uiux/uiux_img_01_pc.png" media="(min-width:544px)">
							<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/uiux/uiux_img_01_sp.png" alt="">
						</picture>
					</div>
					<div class="p-services__uiux__text__box">
						<p>当社では、経験豊富なアプリに特化したデザイナーがUI/UX・ユーザーの離脱・開発に与える影響などを考慮してアプリを全画面デザインしていきます。</p>
						<p>全画面をデザインし、デザインをお客様との共通認識とすることで、<span>システム開発で発生する「制作物が思っていたものと違った」というトラブルを未然に防ぎます。</span></p>
					</div>

				</section>

				<div class="l-services__bg l-services__uiux__bg">
					<div class="l-services__bg__inner l-services__uiux__bg__inner">

						<section class="l-service__section ">
							<h2 id="heading02" class="p-services__sec__ttl" data-pagettl="Past Developments">制作事例</h2>

							<div class="p-services__uiux__case__card__box">
							<?php
					$works = get_field('works');
					if(!empty($works)):
						foreach ($works as $work) : ?>
						<div class="p-services__uiux__case__card__item">
									<div class="p-services__uiux__case__card__text__box">
										<p class="p-services__uiux__case__card__ttl"><?=  esc_attr($work['title']);?></p>
										<p class="p-services__uiux__case__card__text"><?= $work['summary'] ?></p>
									</div>
									<div class="p-services__uiux__case__card__img">
										<img src="<?= esc_url(wp_get_attachment_image_url($work['image'],'full')); ?>" alt="">
									</div>
								</div>
						<?php
						endforeach;
					endif; 	?>
							</div>
							<div class="p-services__btn__accent p-services__uiux__btn__box">
								<a href="<?php echo esc_url(home_url('/')); ?>works/">その他の実績はこちら</a>
							</div>
						</section>


						<section class="l-service__section">
							<h2 id="heading03" class="p-services__sec__ttl" data-pagettl="Service Fee">アプリデザインの料金</h2>
							<div class="p-service__uiux__box__layout">
								<div class="p-services__uiux__text__box__left">
									<p>当社でデザインする多くのアプリのデザイン費が、100万円前後となっております。<br>アプリ開発のスケジュールやアプリの規模によって料金が大きく変わるため、一度ご相談ください。</p>
								</div>
								<div class="p-service__uiux__box__layout__img">
									<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/uiux/uiux_img_02.png" alt="">
								</div>
							</div>
							<div class="p-services__btn__contact p-service__uiux__btn__group">
								<a href="<?php echo esc_url(home_url('/')); ?>contact/">お問い合わせ</a>
							</div>
						</section>
					</div>
				</div>
				<section class="l-service__section">
					<h2 id="heading04" class="p-services__sec__ttl" data-pagettl="Our Strengths">Pentagonの強み</h2>
					<section>
						<h3 id="subheading05" class="p-services__uiux__sec__h3 js-toc-ignore">他社との違い・Pentagon社に依頼するメリット</h3>
						<div class="p-services__text__box">
							<p>当社では、アプリデザインに特化したデザイナーが全画面、あらゆるパターンの画面デザインをします。アプリ開発を熟知したデザイナーが制作するため、「使いやすく・分かりやすい・開発コストが膨れ上がらないデザイン」に仕上げます。</p>
						</div>
						<div class="p-service__table__scroll">
							<table class="p-services__faq__table">
								<thead>
									<tr>
										<th class="p-services__compare__table__item"></th>
										<th class="p-services__compare__table__head">Pentagon</th>
										<th class="p-services__compare__table__head">他社</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th><p>画面設計</p> </th>
										<td><p> デザイナーがFigma（デザインツール）を使って行う</p></td>
										<td><p> マネージャーがエクセル等で行う</p></td>
									</tr>
									<tr>
										<th><p>画面デザイン</p></th>
										<td><p>あらゆる状態のデザインを制作</p></td>
										<td><p>主要画面だけデザイン</p></td>
									</tr>
									<tr>
										<th><p>グラフィックデザイン</p></th>
										<td><p class="p-services__text__center"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_icon_table_01.svg" alt=""></p></td>
										<td><p class="p-services__text__center"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_icon_table_02.svg" alt=""></p></td>
									</tr>
									<tr>
										<th><p>ロゴデザイン</p></th>
										<td><p class="p-services__text__center"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_icon_table_01.svg" alt=""></p></td>
										<td><p class="p-services__text__center"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_icon_table_02.svg" alt=""></p></td>
									</tr>
									<tr>
										<th><p>アプリのLPサイト</p></th>
										<td><p class="p-services__text__center"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_icon_table_01.svg" alt=""></p></td>
										<td><p class="p-services__text__center"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_icon_table_02.svg" alt=""></p></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div  class="p-services__uiux__link__text">
							<a href="https://pentagon.tokyo/design/3089">関連記事：<br class="p-service__sp__only">アプリデザイナーが気をつけるべきこと６選</a>
						</div>
					</section>
				</section>
				<section class="l-service__section">
					<h2 id="heading05" class="p-services__sec__ttl" data-pagettl="Questions & Answers">よくある質問</h2>
					<div class="p-services__faq__box">
						<div class="p-services__faq__item">
							<div class="p-services__faq__question">
								<p class="p-services__faq__icon">
									<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_question.svg" alt="質問">
								</p>
								<p class="p-services__faq__question__text">アプリの仕様が決まっていないのですが、仕様決めから相談できますか？</p>
							</div>
							<div class="p-services__faq__answer p-services__uiux__faq__answer__adjust">
								<p class="p-services__faq__icon">
									<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_answer.svg" alt="回答">
								</p>
								<p class="p-services__faq__answer__text">
									はい。デザイナーがデザインツールを使って、視覚的に仕様決めをサポートさせていただきます。
								</p>
							</div>
						</div>
						<div class="p-services__faq__item">
							<div class="p-services__faq__question">
								<p class="p-services__faq__icon">
									<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_question.svg" alt="質問">
								</p>
								<p class="p-services__faq__question__text">デザインツールは何が使われますか？</p>
							</div>
							<div class="p-services__faq__answer">
								<p class="p-services__faq__icon">
									<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_answer.svg" alt="回答">
								</p>
								<p class="p-services__faq__answer__text">
									Figmaを採用しています。お客様、エンジニア、デザイナーとがコメントできるので修正ポイントも簡単にコメントできます。</p>
							</div>
						</div>
						<div class="p-services__faq__item">
							<div class="p-services__faq__question">
								<p class="p-services__faq__icon">
									<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_question.svg" alt="質問">
								</p>
								<p class="p-services__faq__question__text">アプリアイコンやサービスロゴも制作できますか？</p>
							</div>
							<div class="p-services__faq__answer">
								<p class="p-services__faq__icon">
									<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_answer.svg" alt="回答">
								</p>
								<p class="p-services__faq__answer__text">
									はい。アイコンやロゴの制作実績も豊富にあります。</p>
									<p class="p-services__faq__link"><a href=""> &gt;&gt; ロゴの制作実績をみる</a></p>
							</div>
						</div>
						<div class="p-services__faq__item">
							<div class="p-services__faq__question">
								<p class="p-services__faq__icon">
									<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_question.svg" alt="質問">
								</p>
								<p class="p-services__faq__question__text">契アプリ内で使うキャラクターが欲しいのですが、制作できますか？</p>
							</div>
							<div class="p-services__faq__answer">
								<p class="p-services__faq__icon">
									<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_answer.svg" alt="回答">
								</p>
								<p class="p-services__faq__answer__text">はい。対応可能です。キャラクターの著作権に関しては要相談となります。</p>
								<p class="p-services__faq__link"><a href=""> &gt;&gt; キャラクターデザインの制作実績をみる</a></p>
							</div>
						</div>

					</div>
					<div class="p-services__contact__box">
						<p class="p-services__contact__meeage">その他ご不明点がありましたら、<br class="p-service__sp__only">お気軽にお問い合わせください。</p>
						<p class="p-services__btn__contact"><a href="<?php echo esc_url(home_url('/')); ?>contact/">お問い合わせ</a></p>
					</div>
				</section>
			</div>
		</div>
	</div>
</article>
</main>
<?php //サイドバー表示しない。//thk_call_sidebar();
?>
</div>
<!--/#primary-->
<?php echo apply_filters('thk_footer', ''); ?>

<style>
	#main {
		width: 100%;
		flex: 0 1 1080px;
		max-width: none;
	}

	#toc_container {
		display: none;
	}

	h1 {
		color: #F8596F;
	}
</style>
