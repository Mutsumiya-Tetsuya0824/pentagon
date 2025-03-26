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
 * Template Name: company
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
	<div class="l-company__wrap">
		<div class="p-company__top">
			<div class="p-company__title__box">
				<h1 class="p-company__page__ttl" data-pagettl="COMPANY">会社概要</h1>
			</div>
			<div class="p-company__mv__wrap">
				<div class="p-company__mv">
					<h2 class="p-company__mv__copy">
						<span class="p-company__mv__ttl__decoration">Don&rsquo;t Make Software.</span><br><span class="p-company__mv__ttl__decoration">Create Time.</span>
					</h2>
					<div class="p-company__text__box">
						<p class="p-company__text__copy">ソフトウェアを作るな。<br class="p-company__copy__sp__only">時間を作れ。</p>
						<p class="p-company__text__detail">Pentagonはソフトウェアを開発する会社です。特に、現在はスマートフォンのアプリ開発に特化しています。<br>しかし、Pentagonは単なるアプリを開発する会社ではありません。Pentagonは「時間を提供する会社」です。</p>
					</div>
				</div>
			</div>
		</div>

		<div class="wide-bg p-company__wide__bg">
			<div class="p-company__card__wrap">
				<div class="p-company__card__item">
					<p class="p-company__card__title">起業家・会社に<br>価値ある時間を提供する</p>
					<div class="p-company__card__img">
						<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/company/company_img_card_01.png" alt="">
					</div>
					<p class="p-company__card__text">アプリを使ったサービスを提供する企業または起業家に価値ある時間を提供したいと考えています。<br>新規事業の多くがリリース後に改善点が発見されます。リリースが早ければ早いほど、サービスの改善点にも早く気づけるのです。</p>
				</div>
				<div class="p-company__card__item">
					<p class="p-company__card__title">ユーザーに<br>価値ある時間を提供する</p>
					<div class="p-company__card__img">
						<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/company/company_img_card_02.png" alt="">
					</div>
					<p class="p-company__card__text">ソフトウェアやアプリの利点は、人が同じ作業や複雑な処理をしなくても簡単な操作で目的を達成できる点にあります。<br>同じ作業をしなくて済みますから、時間の節約という意味でもソフトウェアは時間を提供しています。</p>
				</div>
				<div class="p-company__card__item">
					<p class="p-company__card__title">経営ビジョン込められた思い</p>
					<div class="p-company__card__img">
						<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/company/company_img_card_03.png" alt="">
					</div>
					<p class="p-company__card__text">単なる作業(Make)としてソフトウェアを開発するのではなく、創造力をもって(Create)貴重な時間をユーザー、起業家、会社に提供したいと考えています。</p>
				</div>

			</div>
		</div>

		<div class="wide-bg p-company__mission__bg">
			<section class="p-company__mission__sec">
				<div class="p-company__mission__inner">
					<div class="p-company__copy__box p-company__mission__copy__box">
						<h2 class="p-company__sec__title">ソフトウェア開発の一歩先へ</h2>
					</div>
					<div class="p-company__text__box p-company__mission__text__box">
						<p class="p-company__text__copy">いかに事業に貢献できるか</p>
						<p class="p-company__text__detail">デザイナーがデザインできるのは当たり前だし、エンジニアがプログラミングできるのも当たり前です。
						</p>
						<p class="p-company__text__detail">重要なのは、他の制作会社が「開発することだけ」に注力しているのに対して、私達は「<span class="p-company__text__parimary">開発できることは当たり前で、いかに事業に貢献できるデザイン・プログラムを提供できるか</span>」というマインドで制作に取り組むことです。<br>このマインドの差が、会社として大きな違いを生み出すと信じています。</p>
					</div>
				</div>
				<div class="p-company__mission__img">
					<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/company/company_img_mission_01.png" alt="">
				</div>
			</section>
		</div>


		<div class="wide-bg p-company__policy__bg">
			<section class="p-company__policy__sec">
				<div class="p-company__policy__inner">
					<div class="p-company__copy__box">
						<h2 class="p-company__sec__title">スピードと品質</h2>
					</div>
					<div class="p-company__text__box">
						<p class="p-company__text__copy">真にクリエイティブであれ</p>
						<p class="p-company__text__detail">Pentagonの基本方針は、高品質なものを最速で制作することです。<br>その他のサービスは、一般的なレベルです。<br>決して営業トークが上手い会社ではないですし、格安でアプリが作れるサービスを提供しているわけでもありません。<br>徹底的にスピードと品質に特化していきます。</p>
					</div>
				</div>
				<div class="p-company__policy__top__img">
					<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/company/company_img_policy_01.png" alt="">
				</div>
				<div class="p-company__policy__list__box">
					<div class="p-company__policy__list">
						<div class="p-company__policy__item">
							<div class="p-company__policy__img">
								<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/company/company_img_policy_03.png" alt="">
							</div>
							<p class="p-company__policy__text">お客様に最速でアプリを<br>提供できる会社である</p>
						</div>
						<div class="p-company__policy__item">
							<div class="p-company__policy__img">
								<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/company/company_img_policy_04.png" alt="">
							</div>
							<p class="p-company__policy__text">エンジニアが車輪の再発明を<br>しない会社である</p>
						</div>
						<div class="p-company__policy__item">
							<div class="p-company__policy__img">
								<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/company/company_img_policy_05.png" alt="">
							</div>
							<p class="p-company__policy__text">デザイナーが真に<br>クリエイティブなことに<br>注力できる会社である</p>
						</div>
					</div>
				</div>
			</section>
		</div>

		<div class="p-company__logo__bg">
			<section class="p-company__logo__sec">
				<div class="p-company__logo__sec__inner">
					<h2 class="p-company__log__ttl p-company__log__border">ロゴに込めた思い</h2>
					<div class="p-company__log__text__box">
						<p class="p-company__log__text">Pentagonは、日本語で「五角形」という意味です。<br>
						五角形は古来から「万能・成就」といった縁起のいい形とされてきました。デザイン・エンジニアリングを用いて、ビジネスを成功に導く会社でありたいという意味を込めて社名として採用しました。<br>
						ロゴマークは、五角形をベースに「多角的な視点」と「柔軟さ」の２つの意味を込めたデザイン。「優しさの中にある情熱」をイメージした配色をしています。</p>
					</div>
					<div class="p-company__logo__img">
						<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/company/company_bg_logo_pentagon.svg" alt="">

					</div>
				</div>
			</section>
		</div>

		<div class="wide-bg p-company__working__bg">
			<section class="p-company__working__sec">
				<h2 class="balloon_title_secandary">Pentagonの働き方</h2>
				<div class="p-company__working__copy__box">
					<p class="p-company__working__copy__pc">
						<span class="p-company__working__copy__sp">フルリモート＆</span>
						<br class="p-company__sp__only"><span class="p-company__working__copy__sp"> フレックス制度導入！</span></p>
					<p class="p-company__working__copy__pc">
						<span class="p-company__working__copy__sp">自由に働ける環境を</span>
					</p>
				</div>
				<div class="p-company__working__item__box">
					<div class="p-company__working__item">
						<p class="p-company__working__item__title">Slackに投稿して始業</p>
						<p class="p-company__working__item__text">Slackに「昨日の振り返りと今日やること」を投稿してもらっています。また雑談もできるように「ひとこと」何でも良いのでつぶやいてもらっています。</p>
						<div class="p-company__working__item__img">
							<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/company/company_img_working_01.png" alt="">
						</div>
					</div>
					<div class="p-company__working__item">
						<p class="p-company__working__item__title">プロジェクトごとに週1回の定例リモートミーティング</p>
						<p class="p-company__working__item__text">デザイナーとエンジニアが議論できる機会を設けるため、プロジェクトごとに週1回ビデオ会議を行います。</p>
						<div class="p-company__working__item__img">
							<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/company/company_img_working_02.png" alt="">
						</div>
					</div>
					<div class="p-company__working__item">
						<p class="p-company__working__item__title">タスクやスケジュールの見える化</p>
						<p class="p-company__working__item__text">当社ではBacklogを使って、タスクとスケジュールを見える化しています。複数のプロジェクトをまたいで自分のタスク確認したり、ガントチャートで締め切りを確認したりできます。</p>
						<div class="p-company__working__item__img">
							<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/company/company_img_working_03.png" alt="">
						</div>
					</div>
				</div>
			</section>

		</div>

		<!-- <div class="p-company__member__bg">
			<section class="p-company__member__sec">
				<h2 class="balloon_title_primary">社員紹介</h2>
				<div class="p-company__member__card__box">

					<?php
					$members = get_field('member');

					if(!empty($members)):
						foreach ($members as $member):
							$role = $member['role'];
							$name = $member['name'];
							$image = !empty($member['image']) ? $member['image'] : '';
							$message = $member['message'];
						?>
					<div class="p-company__member__card">
						<div class="p-company__member__card__text__box">
							<?php
							if(!empty($role)){
								echo '<p class="p-company__member__card__position">'.esc_attr($role).'</p>';
							}

							if(!empty($name)){
								echo '<p class="p-company__member__card__name">'.$name.'</p>';
							}

							if(!empty($message)){
								echo '<p class="p-company__member__card__text">'.$message.'</p>';
							}

							?>

						</div>
						<div class="p-company__member__card__img">
							<img src="<?= esc_url($image); ?>" alt="">
						</div>
					</div>

					<?php
						endforeach;
					endif;
					?>

				</div>
			</section>
		</div> -->

		<div class="wide-bg p-company__about__bg">
			<section class="p-company__about__sec">
				<div class="p-company__about__inner">
					<div class="p-company__about__text">
						<h2 class="balloon_title_primary">会社情報 </h2>
						<div>
							<dl class="p-company__about__list">
								<div class="p-company__about__list__item">
									<dt>社名</dt>
									<dd>株式会社Pentagon</dd>
								</div>
								<div class="p-company__about__list__item">
									<dt>住所</dt>
									<dd>
										本社 〒102-0083 東京都 千代田区 麹町1-4-4-2F<br>
支店 〒323-0825 栃木県小山市大字小山84-5 
										
<!-- 										〒102-0083 東京都 千代田区 麹町1-4-4-2F<br>半蔵門駅 3b出口から徒歩３分 -->
									
									</dd>
								</div>
								<div class="p-company__about__list__item">
									<dt>設立</dt>
									<dd>2018年7月5日</dd>
								</div>
								<div class="p-company__about__list__item">
									<dt>代表取締役</dt>
									<dd>山本真矢</dd>
								</div>
								<div class="p-company__about__list__item">
									<dt>資本金</dt>
									<dd>700万円</dd>
								</div>
								<div class="p-company__about__list__item">
									<dt>事業内容</dt>
									<dd>ソフトウェア開発およびそれに付随する業務</dd>
								</div>
								<div class="p-company__about__list__item">
									<dt>求人サイト</dt>
									<dd>
										<a href="https://job.pentagon.tokyo/" target="_brank">https://job.pentagon.tokyo/</a>
									</dd>
								</div>
								<div class="p-company__about__list__item">
									<dt>主要取引銀行</dt>
									<dd>
										三井住友銀行
									</dd>
								</div>
							</dl>

						</div>
					</div>
					<div class="p-company__about__img">
						<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/company/company_img_info_01.jpg" alt="">
					</div>
					<div class="p-company__about__map">
						<!-- グーグルマップ -->
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1926.9539001335768!2d139.7431008927733!3d35.68347107571021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188dabf54724af%3A0x4340511f4338690e!2z5qCq5byP5Lya56S-UGVudGFnb24!5e0!3m2!1sja!2sjp!4v1648532537459!5m2!1sja!2sjp" width="790" height="512" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>

				<div class="swiper p-company__about__img__group__container">
				<!-- <div class="p-company__about__img__group__wrap"> -->
					<div class="p-company__about__img__group swiper-wrapper">
						<div class="p-company__about__img__item swiper-slide">
							<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/company/company_img_info_02.jpg" alt="">
						</div>
						<div class="p-company__about__img__item swiper-slide">
							<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/company/company_img_info_03.jpg" alt="">
						</div>
						<div class="p-company__about__img__item swiper-slide">
							<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/company/company_img_info_04.jpg" alt="">
						</div>
						<div class="p-company__about__img__item swiper-slide">
							<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/company/company_img_info_05.jpg" alt="">
						</div>
						<div class="p-company__about__img__item swiper-slide">
							<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/company/company_img_info_02.jpg" alt="">
						</div>
						<div class="p-company__about__img__item swiper-slide">
							<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/company/company_img_info_03.jpg" alt="">
						</div>
					</div>
				</div>
			</section>

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
