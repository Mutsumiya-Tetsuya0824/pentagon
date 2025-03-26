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
 * Template Name: LP
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
<main>
	<div class="p-lp__hero">
		<div class="p-lp__hero__textwrap">
			<h1 class="p-lp__hero__ttl"><span class="text__block">Flutterアプリ開発</span><span class="text__block">ソリューション</span></h1>
			<p class="p-lp__hero__caption p-lp__caption"><span class="text__block -tabOnly">当社はFlutterに特化したアプリ制作会社です。</span><span class="text__block -tabOnly">モバイルアプリ開発をする上でさまざまな強みがあるFlutter開発。</span><span class="text__block -tabOnly">その特性を最大限に活用し、</span><span class="text__block -tabOnly">デザインから開発、運用までワンストップのサービスをご提供しています。</span></p>
			<div class="btn_contact">
				<a href="https://pentagon.tokyo/contact/" target="_blank" rel="noopener noreferrer">アプリ開発のご相談はこちら</a>
			</div>
		</div>
		<p class="p-lp__hero__img"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/lp-flutter/lp-hero@2x.png" alt="Flutterによるアプリ開発"></p>
	</div>

	<!-- Problem -->
	<section class="p-lp__problem js-endBox">
		<div class="p-lp__container">
			<h2 class="p-lp__problem__ttl"><span class="text__block">アプリ開発でこんな悩みは</span><span class="text__block">ありませんか？</span></h2>
			<ul class="p-lp__problem__items">
				<li class="p-lp__problem__item">
					<span><span class="text__block">アプリ開発のコストを</span><span class="text__block">なるべく下げたい</span></span>
					<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/lp-flutter/nayami_illust_1.png" alt="コストの悩み">
				</li>
				<li class="p-lp__problem__item">
					<span><span class="text__block">異なるプラットフォームで</span><span class="text__block">同時に開発したい</span></span>
					<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/lp-flutter/nayami_illust_2.png" alt="同時開発の悩み">
				</li>
				<li class="p-lp__problem__item">
					<span><span class="text__block">リリース予定まで</span><span class="text__block">時間がない</span></span>
					<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/lp-flutter/nayami_illust_3.png" alt="開発スケジュールの悩み">
				</li>
			</ul>
		</div>
	</section>

	<!-- Overview -->
	<section class="p-lp__overview">
		<h2 class="p-lp__overview__ttl"><span class="p-lp__overview__subttl">これらのお悩みは</span><span class="text__block">Flutterアプリ開発で</span><span class="text__block">解決できます！</span></h2>
		<div class="p-lp__container">
			<div class="p-lp__overview__flex">
				<p class="p-lp__overview__img"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/lp-flutter/overview.png" alt="Flutterによるアプリ開発について"></p>
				<div class="p-lp__overview__text">
					<p class="p-lp__caption">株式会社Pentagonでは、Flutterというフレームワークを使ってアプリ開発を行うことで</p>
					<ul class="p-lp__overview__listwrap p-lp__caption bold primary">
						<li class="p-lp__overview__list">iOS/Androidアプリの同時開発</li>
						<li class="p-lp__overview__list">開発コストの削減</li>
						<li class="p-lp__overview__list">開発期間の短縮</li>
					</ul>
					<p class="p-lp__caption">が可能です。</p>
					<p class="p-lp__caption">さらにマテリアルデザインをベースとした UI 設計により、表現力豊かで柔軟性のあるデザイン制作を行っています。<br>デザインから開発、運用保守まで、ワンストップでご対応しています。</p>
				</div>
			</div>
		</div>
	</section>

	<div class="p-lp__bg__polygon">
		<!-- About -->
		<section class="p-lp__about p-lp__spacer section">
			<div class="p-lp__container">
				<h2 class="p-services__sec__ttl" data-pagettl="What is Flutter？">Flutterとは？</h2>
				<div class="p-lp__about__text">
					<p class="p-lp__caption">Flutterとは、Googleが開発したモバイルアプリのフレームワークです。</p>
					<p class="p-lp__caption">従来の開発手法では、iOSアプリとAndroidアプリをそれぞれ別のソースコードで開発する必要がありました。iOSはObjective-C/Swift, AndroidはJava/Kotlinというネイティブ言語で別々に開発を行います。</p>
					<p class="p-lp__caption">しかし、Flutterを使うことで、１つのソースコードでiOSアプリとAndroidアプリの両方を同時に開発することが可能です。ネイティブ言語で開発した場合と同程度の処理性能を発揮することが可能です。</p>
				</div>
				<p class="p-lp__about__logo"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/lp-flutter/flutter_logo.png" alt="モバイルアプリフレームワークFlutter"></p>
			</div>
		</section>
		<!-- Feature -->
		<section class="p-lp__spacer section">
			<div class="p-lp__container">
				<h2 class="p-services__sec__ttl" data-pagettl="Feature of Flutter">Flutterの特徴</h2>
				<div class="p-lp__feature__wrapper">
					<section class="p-lp__feature">
						<h3 class="p-lp__feature__ttl"><span class="p-lp__feature__number"><span class="screen-reader-text">feature</span>1</span>クロスプラットフォーム同時開発</h3>
						<p class="p-lp__caption">Flutterは、”write once, run anywhere” という思想のもとに開発されています。従来の開発では、OSやプラットフォームごとにソフトウェアを開発する必要がありました。Flutterは１回コードをかけば、スマホアプリ・Webアプリ・デスクトップアプリがすべて開発できるというところを目指しています。iOSとAndroidのアプリを同時に開発したい場合にはFlutter開発をすることが非常に有効です。</p>
						<p class="p-lp__feature__img"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/lp-flutter/feature_illust_1.png" alt="クロスプラットフォームによる開発"></p>
					</section>
					<section class="p-lp__feature">
						<h3 class="p-lp__feature__ttl"><span class="p-lp__feature__number"><span class="screen-reader-text">feature</span>2</span>ホットリロードによる高速開発</h3>
						<p class="p-lp__caption">従来のネイティブアプリ開発では、コードを変更後アプリを再起動する必要があり、コードの変更を確認するまで数分かかっていました。Flutterには、ホットリロードと呼ばれる機能があり、開発中のアプリを数秒で更新することができます。ホットリロードとは、ソースコードを書いた時点でリアルタイムに変更がアプリに反映される機能です。すぐに変更の確認ができるので、従来のネイティブアプリ開発よりも効率よく、快適に開発することができます。</p>
						<p class="p-lp__feature__img"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/lp-flutter/feature_illust_2.png" alt="ホットリロードが可能にする高速開発"></p>
					</section>
					<section class="p-lp__feature">
						<h3 class="p-lp__feature__ttl"><span class="p-lp__feature__number"><span class="screen-reader-text">feature</span>3</span>開発コストの削減</h3>
						<p class="p-lp__caption">従来ではiOSアプリの制作、Androidアプリの制作をそれぞれ進める必要があり、人員も工数もそれぞれ別々にコストがかかっていました。上記のようにFlutterではiOSとAndroid アプリを同時に開発ができ、さらにホットリロードの機能によって、従来の開発手法に比べて、開発工数とコストを大幅に削減できます。</p>
						<p class="p-lp__feature__img"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/lp-flutter/feature_illust_3.png" alt="同時開発による開発コスト削減"></p>
					</section>
					<section class="p-lp__feature">
						<h3 class="p-lp__feature__ttl"><span class="p-lp__feature__number"><span class="screen-reader-text">feature</span>4</span>表現力豊かで柔軟なUIデザイン</h3>
						<p class="p-lp__caption">FlutterではマテリアルデザインをベースとしたUI作成を行います。マテリアルデザインとは、Googleが2014年に提唱したデザインシステムのことです。マテリアルデザインに従うことで、直感的に操作できるWebサイトやアプリを作ることができます。 UIのライブラリもたくさんあるので、少ない工数で高品質なデザインをアプリに落とし込むことができます。<br>当社では、他社と違いデザイナーがアプリ開発を主導します。Flutterを採用することで、デザイナーの創造力を十分に発揮することができ、美しく使いやすいアプリを開発することができます。</p>
						<p class="p-lp__feature__img"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/lp-flutter/feature_illust_4.png" alt="マテリアルデザインをベースとしたUI"></p>
					</section>
				</div>
			</div>
		</section>
	</div>
	<!-- /.p-lp__bg__polygon -->

	<!-- CTA -->
	<section class="p-lp__cta">
		<div class="p-lp__container">
			<h2 class="p-lp__cta__ttl"><span class="text__block">Pentagonなら、</span><span class="text__block">デザインから開発・運用まで</span><span class="text__block">ワンストップで対応できます！</span></h2>
			<div class="p-lp__cta__btn">
				<a href="<?php echo esc_url(home_url('/contact')); ?>" target="_blank" rel="noopener noreferrer">お問い合わせ</a>
			</div>
		</div>
	</section>

	<!-- CASE -->
	<section class="p-lp__cases p-lp__spacer section">
		<div class="p-lp__container">
			<h2 class="p-services__sec__ttl" data-pagettl="Case of Developments">開発事例</h2>
			<!-- CASE1 -->
			<section class="p-lp__case">
				<h3 class="p-lp__case__ttl"><span class="p-lp__case__number">CASE:1</span>親子のタスク管理アプリ</h3>
				<div class="p-lp__case__body flex_spacebetween">
					<figure class="p-lp__case__figure"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/lp-flutter/case_1.png" alt=""></figure>
					<div class="p-lp__case__desc">
						<!-- アプリの機能 -->
						<dl class="p-lp__spec">
							<dt class="p-lp__spec__ttl">主な機能</dt>
							<dd>
								<ul>
									<li class="p-lp__spec__item p-lp__label border round">タスク管理</li>
									<li class="p-lp__spec__item p-lp__label border round">日記</li>
									<li class="p-lp__spec__item p-lp__label border round">プレゼント</li>
									<li class="p-lp__spec__item p-lp__label border round">招待</li>
									<li class="p-lp__spec__item p-lp__label border round">ストア</li>
									<li class="p-lp__spec__item p-lp__label border round">キャラクター育成</li>
									<li class="p-lp__spec__item p-lp__label border round">プロジェクト作成</li>
								</ul>
							</dd>
						</dl>
						<!-- 開発内容 -->
						<dl class="p-lp__involved">
							<dt class="p-lp__label secondary rounded-square">デザイン</dt>
							<dd>
								<ul class="p-lp__involved__list">
									<li class="p-lp__caption">仕様決め・ワイヤーフレーム制作</li>
									<li class="p-lp__caption">UI / UXデザイン</li>
									<li class="p-lp__caption">ロゴデザイン</li>
									<li class="p-lp__caption">キャラクターデザイン</li>
								</ul>
							</dd>
							<dt class="p-lp__label secondary rounded-square">開発</dt>
							<dd>
								<ul class="p-lp__involved__list">
									<li class="p-lp__caption">iOSアプリ開発</li>
									<li class="p-lp__caption">Androidアプリ開発</li>
									<li class="p-lp__caption">Ruby on RailsでのAPI設計・実装</li>
									<li class="p-lp__caption">AWSでのインフラ構築</li>
								</ul>
							</dd>
						</dl>
					</div>
				</div>
				<!-- アプリの説明文 -->
				<p class="p-lp__case__text p-lp__caption">Welldone!は子どもの習慣化を家族がワンチームとなって応援するアプリです。未来は日々の積み重ねの先に訪れます。より良い習慣を身につけることが人格形成やその先の夢の可能性をひろげると言われています。子どもが自らの意志で未来を切り拓けるよう、「習慣力」を楽しみながら身につけるように設計しました。</p>
			</section>

			<!-- CASE2 -->
			<section class="p-lp__case">
				<h3 class="p-lp__case__ttl"><span class="p-lp__case__number">CASE:2</span>男女のマッチングアプリ</h3>
				<div class="p-lp__case__body flex_spacebetween">
					<figure class="p-lp__case__figure"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/lp-flutter/case_2.png" alt=""></figure>
					<div class="p-lp__case__desc">
						<!-- アプリの機能 -->
						<dl class="p-lp__spec">
							<dt class="p-lp__spec__ttl">主な機能</dt>
							<dd>
								<ul>
									<li class="p-lp__spec__item p-lp__label border round">検索</li>
									<li class="p-lp__spec__item p-lp__label border round">募集</li>
									<li class="p-lp__spec__item p-lp__label border round">チャット</li>
									<li class="p-lp__spec__item p-lp__label border round">メッセージ付いいね</li>
									<li class="p-lp__spec__item p-lp__label border round">本人確認</li>
									<li class="p-lp__spec__item p-lp__label border round">審査</li>
									<li class="p-lp__spec__item p-lp__label border round">シークレットモード</li>
									<li class="p-lp__spec__item p-lp__label border round">会員プラン</li>
								</ul>
							</dd>
						</dl>
						<!-- 開発内容 -->
						<dl class="p-lp__involved">
							<dt class="p-lp__label secondary rounded-square">デザイン</dt>
							<dd>
								<ul class="p-lp__involved__list">
									<li class="p-lp__caption">仕様決め・ワイヤーフレーム制作</li>
									<li class="p-lp__caption">UI / UXデザイン</li>
									<li class="p-lp__caption">ロゴデザイン</li>
								</ul>
							</dd>
							<dt class="p-lp__label secondary rounded-square">開発</dt>
							<dd>
								<ul class="p-lp__involved__list">
									<li class="p-lp__caption">iOSアプリ開発</li>
									<li class="p-lp__caption">Androidアプリ開発</li>
									<li class="p-lp__caption">Ruby on Railsでの管理画面の制作</li>
									<li class="p-lp__caption">Ruby on RailsでのAPI設計・実装</li>
									<li class="p-lp__caption">AWSでのインフラ構築</li>
								</ul>
							</dd>
						</dl>
					</div>
				</div>
				<!-- アプリの説明文 -->
				<p class="p-lp__case__text p-lp__caption">sisterは、女性と男性が恋人をみつけるマッチングサービスです。安心してマッチングできるように本人確認機能や審査機能を設けました。マッチング率をあげるために、日程調整（募集）機能、いいね付きメッセージなど様々な工夫を行っています。</p>
			</section>
		</div>
	</section><!-- ./p-lp__case -->

	<!-- FAQ -->
	<section class="l-service__section p-lp__spacer section">
		<div class="p-lp__container">
			<h2 class="p-services__sec__ttl" data-pagettl="Questions & Answers">よくある質問</h2>
			<div class="p-services__faq__box">
				<div class="p-services__faq__item">
					<div class="p-services__faq__question">
						<p class="p-services__faq__icon"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_question.svg" alt="質問"></p>
						<p class="p-services__faq__question__text">アプリをつくるのにどれくらい費用がかかりますか？</p>
					</div>
					<div class="p-services__faq__answer">
						<p class="p-services__faq__icon"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_answer.svg" alt="回答"></p>
						<p class="p-services__faq__answer__text">アプリの規模や要件次第ですが、当社で開発する多くのアプリが、500万円 ~ 1,000万円程度となっております。<br>小規模なものですと300万円ほど、大規模なものですと2,000万円ほどになります。</p>
					</div>
				</div>
				<div class="p-services__faq__item">
					<div class="p-services__faq__question">
						<p class="p-services__faq__icon"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_question.svg" alt="質問"></p>
						<p class="p-services__faq__question__text">企画しているアプリのお見積りを依頼することはできますか？</p>
					</div>
					<div class="p-services__faq__answer">
						<p class="p-services__faq__icon"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_answer.svg" alt="回答"></p>
						<p class="p-services__faq__answer__text">まずはお問い合わせページからご連絡ください。その後、担当者からご連絡させていただきます。企画されているアプリの詳細資料をご用意いただけるとスムーズに商談が進みます。</p>
					</div>
				</div>
				<div class="p-services__faq__item">
					<div class="p-services__faq__question">
						<p class="p-services__faq__icon"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_question.svg" alt="質問"></p>
						<p class="p-services__faq__question__text">アプリの審査提出は代行してもらえますか？</p>
					</div>
					<div class="p-services__faq__answer">
						<p class="p-services__faq__icon"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_answer.svg" alt="回答"></p>
						<p class="p-services__faq__answer__text">はい。アプリ開発後、審査提出をサポートさせていただいております。当社は、Apple及びGoogleのアプリ審査に関して助言させていただくことがあります。しかしながら、審査通過を保証することはできません。アプリの審査に関してはApple/Google次第な部分がありますので、最終的な責任を発注者様が負います。</p>
					</div>
					<p class="p-service__faq__link__group"><a href="https://developer.apple.com/jp/app-store/review/guidelines/" target="_blank">App Store Reviewガイドライン</a>、<a href="https://play.google.com/intl/ja/about/developer-content-policy/" target="_blank">Google Play デベロッパーポリシーセンター</a>をご確認いただくようお願い致します。</p>
				</div>
				<div class="p-services__faq__item">
					<div class="p-services__faq__question">
						<p class="p-services__faq__icon"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_question.svg" alt="質問"></p>
						<p class="p-services__faq__question__text">運用・保守費はどれくらいかかりますか？</p>
					</div>
					<div class="p-services__faq__answer">
						<p class="p-services__faq__icon"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_answer.svg" alt="回答"></p>
						<p class="p-services__faq__answer__text">運用とは、アプリやサーバが正常に動作しているのかを監視する業務になります。一方、保守とは、見つかった不具合を修正したり、機能を追加していく業務になります。運用・保守にかかる費用は、運用のレベルや保守の内容によって変動します。目安として、月額10 〜 20万円にて対応させていただく場合が多いです。</p>
					</div>
				</div>
				<div class="p-services__faq__item">
					<div class="p-services__faq__question">
						<p class="p-services__faq__icon"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_question.svg" alt="質問"></p>
						<p class="p-services__faq__question__text">マーケティングのサポートはしてもらえますか？</p>
					</div>
					<div class="p-services__faq__answer">
						<p class="p-services__faq__icon"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_answer.svg" alt="回答"></p>
						<p class="p-services__faq__answer__text">大変恐れ入りますが、当社では、アプリのマーケティング施策についてのサポートは行っておりません。多少の知見はありますので、簡単なアドバイス等をさせていただくことは可能です。</p>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- /.p-lp__faq -->
</main>

<!-- 資料請求 固定ボタン -->
<div class="p-lp__fixedbtn js-fixedbtn">
	<a href="https://pentagon.tokyo/downloads/" target="_blank" rel="noopener noreferrer"><span class="text__block">資料請求は</span><span class="text__block">こちら</span></a>
</div>
<?php //サイドバー表示しない。//thk_call_sidebar();
?>
</div>
<!--/#primary-->


<?php get_footer('lp'); ?>

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
	#custom_html-19{
		display: none;
	}
</style>
