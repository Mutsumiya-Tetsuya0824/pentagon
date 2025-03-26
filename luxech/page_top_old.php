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
 * Template Name: top
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
	<!-- wp:html -->
	<div class="top_hero">
		<h1>Design for Business, Develop for Business</h1>
		<h2>アプリを駆使したビジネスの立ち上げをサポートします。</h2>
		<p>東京都のアプリ開発会社 / Web制作会社</p>

		<a class="primary-button" href="https://pentagon.tokyo/contact/">お問い合わせ</a>
	</div>
	<!-- /wp:html -->

	<!-- wp:html -->
	<div class="top_pentagon">
		<h1>株式会社Pentagonは、<br>東京都千代田区のアプリ制作会社です。</h1>
		<p>弊社では、新規事業を企画されている企業様向けにモバイルアプリのデザイン・開発を行っています。アプリを用いたビジネスをサポートします。 iOS・Androidアプリの開発はもちろん、アプリのUI・UXデザイン・ロゴデザインもおまかせください。</p>
		<img src="https://pentagon.tokyo/wp-content/uploads/2020/01/hero-sub.png" alt="株式会社Pentagon">
		<a class="primary-button" href="https://pentagon.tokyo/contact/">お問い合わせ</a>
	</div>
	<!-- /wp:html -->

	<!-- wp:html -->
	<div class="top_jyutaku">
		<h2>受託開発事業</h2>
		<div class="top_jyutaku_flex">
			<div class="top_jyutaku_item">
				<h3>モバイルアプリ開発</h3>
				<p>iOS・Androidのモバイルアプリの開発を行っています。設計・デザイン・開発・運用といったアプリ開発に必要な業務をワンストップで対応可能です。 管理・運用しやすいプログラムを書くことを意識し、仕様の変更に強いアプリ開発を心がけております。<a href="https://pentagon.tokyo/business/"></a></p>
				<img src="https://pentagon.tokyo/wp-content/uploads/2020/02/o-development_app.png" alt="">
			</div>
			<div class="top_jyutaku_item">
				<h3>UI/UXデザイン</h3>
				<p>仕様決めの段階からデザイナーが参画することで、より良いアプリを制作することができます。開発コストも考慮し、アプリの個性を生かしたデザインに仕上げます。<a href="https://pentagon.tokyo/business/"></a></p>
				<img src="https://pentagon.tokyo/wp-content/uploads/2020/02/o-development_sp.png" alt="">
			</div>
			<div class="top_jyutaku_item">
				<h3>ロゴデザイン</h3>
				<p>弊社では、ヒアリングをしっかり行い、お客様のビジョンをまとめ・整理していきます。その上でロゴ制作に着手し、「長く愛されるロゴマーク・ロゴタイプ」を制作していきます。<a href="https://pentagon.tokyo/business/"></a></p>
				<img src="https://pentagon.tokyo/wp-content/uploads/2020/02/o-development_logo.png" alt="">
			</div>
			<div class="top_jyutaku_item">
				<h3>Webサイト制作</h3>
				<p>5Gによる通信速度の向上を見越して、動画とWebデザインを組み合わせ、見る人にとってよりわかりやすい、キャッチーなWebサイト制作をしております。</p>
				<img src="https://pentagon.tokyo/wp-content/uploads/2020/02/o-development_web.png" alt="">
			</div>
		</div>
		<a class="primary-button" href="https://pentagon.tokyo/business/">事業内容</a>
	</div>
	<!-- /wp:html -->

	<!-- wp:html -->
	<div class="top_contents">
		<h2>コンテンツ</h2>
		<ul class="post_list">
			<li>
				<img src="https://pentagon.tokyo/wp-content/uploads/2020/01/%E3%82%A2%E3%83%95%E3%82%9A%E3%83%AA%E9%96%8B%E7%99%BA.png" alt="">
				<h3>アプリ開発の流れを知る</h3>
				<p>スマートフォンアプリ開発の流れをご説明いたします。<a href="https://pentagon.tokyo/app/102/">詳細はこちら</a></p>
			</li>
			<li>
				<img src="https://pentagon.tokyo/wp-content/uploads/2020/01/web%E3%83%87%E3%82%B6%E3%82%A4%E3%83%B3%E3%81%AE%E6%B5%81%E3%82%8C.png" alt="">
				<h3>Web制作の流れ</h3>
				<p>Webサイト制作の流れをご紹介します。（準備中）</p>
			</li>
			<li>
				<img src="https://pentagon.tokyo/wp-content/uploads/2020/01/%E3%83%96%E3%83%A9%E3%83%B3%E3%83%87%E3%82%A3%E3%83%B3%E3%82%B0%E3%83%87%E3%82%B6%E3%82%A4%E3%83%B3%E3%81%AE%E6%B5%81%E3%82%8C.jpg" alt="">
				<h3>ブランディングデザインとは？</h3>
				<p>弊社では、企業様のブランディングデザインをさせていただいております。（準備中）</p>
			</li>
		</ul>
		<a class="primary-button" href="https://pentagon.tokyo/blog/">記事一覧へ</a>
	</div>
	<!-- /wp:html -->
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
