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
 * Template Name: business
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
	<div class="business">
		<h1>事業内容</h1>
	</div>
	<!-- /wp:html -->

	<!-- wp:html -->
	<div class="business">
		<div class="business-header">
			<p>Mobile Application Development</p>
			<h2>モバイルアプリ開発</h2>
			<img src="/wp-content/uploads/2020/01/%E3%82%A2%E3%83%95%E3%82%9A%E3%83%AA%E9%96%8B%E7%99%BA-1200x423.png" alt="" title="アプリ開発">
		</div>
		<div class="business-body">
			<div class="business-body-left">
				<h3>モバイルアプリの開発</h3>
			</div>
			<div class="business-body-right">
				<h3>iOSアプリの開発</h3>
				<p>７年間培ってきた代表のiOSアプリ開発経験を活かして、iOSアプリの開発を行っています。Swiftでのネイティブ言語開発での開発はもちろん、React NativeやFlutterでのハイブリッド開発もできますので、お気軽にご相談ください。</p>
				<h3>Androidアプリの開発</h3>
				<p>KotlinでAndroidアプリの開発を行っています。React NativeやFlutterでハイブリッド開発もできますので、お気軽にご相談ください。</p>
				<h3>管理画面の開発</h3>
				<p>アプリを運用するにあたって必要な管理画面を、Ruby on Railsを用いて、作成いたいます。管理画面のデザインも対応可能ですので、ご希望の方はお気軽にご相談ください。</p>
			</div>
			<div class="business-body-left">
				<h3>スキルセット</h3>
			</div>
			<div class="business-body-right">
				<ul>
					<li>Objective-C</li>
					<li>Swift</li>
					<li>Kotlin</li>
					<li>React Native</li>
					<li>Flutter</li>
					<li>Ruby on Rails</li>
					<li>AWS</li>
				</ul>
			</div>
			<div class="business-body-left">
				<h3>実際の事例</h3>
			</div>
			<div class="business-body-right">
				<ul>
					<li>iOSアプリ・Androidアプリ・管理画面まとめて開発</li>
					<li>CtoCマッチングアプリの制作</li>
					<li>iOSアプリを参考にAndroidアプリを制作</li>
					<li>iOS・Android両対応のハイブリッド開発</li>
					<li>センサーを用いたIoTアプリの開発</li>
				</ul>
			</div>
			<div class="business-body-left">
				<h3>開発の流れ</h3>
			</div>
			<div class="business-body-right">
				<p>アプリ開発ってどんなフローで進めていくの？と疑問の方は、こちらの記事をご覧ください。</p>
				<p>»&nbsp;<a href="/app/102/">【開発の前に】アプリ開発の流れを知る</a></p>
			</div>
			<div class="business-body-left">
				<h3>アプリ開発の料金</h3>
			</div>
			<div class="business-body-right">
				<p>月額220,000円(税込) 〜 サポートさせていただいております。以下、弊社で開発する場合の料金例になります。</p>
				<h5>料金例</h5>
				<ul>
					<li>毎月５人日分の開発サポート 22万円/月〜</li>
					<li>毎月10人日分の開発サポート 44万円/月〜</li>
					<li>10ヶ月規模の開発 90万円/月〜</li>
				</ul>
				<p>開発規模・内容によって料金が異なりますので、まずはご相談ください。<br>ご予算に合わせた開発のご提案もさせていただいております。</p>
			</div>
			<a class="primary-button" href="/contact/">お問い合わせ</a>

		</div>
	</div>
	<!-- /wp:html -->

	<!-- wp:html -->
	<div class="business" id="uiuxdesign">
		<div class="business-header">
			<p>UI/UX Design</p>
			<h2>UI/UXデザイン</h2>
			<figure class="wp-block-image"><img src="/wp-content/uploads/2020/01/%E3%82%A2%E3%83%97%E3%83%AA%E9%96%8B%E7%99%BA%E3%81%AE%E6%B5%81%E3%82%8C-1200x430.jpg" alt="" class="wp-image-372" title="UI/UXデザイン"></figure>
		</div>
		<div class="business-body">
			<div class="business-body-left">
				<h3>仕様決めからデザイナーが参画</h3>
			</div>
			<div class="business-body-right">
				<p>仕様決めの段階からデザイナーが参画することで、情報を整理し、デザイン性に優れたアプリを制作することができます。開発コストも考慮し、個性を活かした使いやすいアプリデザインに仕上げていきます。</p>
				<p>また、アプリ開発の初期段階にデザイナ−が参画することで、お客様は、アプリ画面の仕上がりを早い段階で確認することができます。これにより、成果物の認識をすり合わせることができるので、開発後に「期待していたアプリではなかった」などのトラブルを防ぐこともできます。</p>
			</div>
			<div class="business-body-left">
				<h3>制作ツール</h3>
			</div>
			<div class="business-body-right">
				<ul>
					<li>Sketch</li>
					<li>figma</li>
					<li>Adobe XD</li>
					<li>InVision</li>
					<li>Zeplin</li>
				</ul>
			</div>
			<div class="business-body-left">
				<h3>UI/UXデザインの流れ</h3>
			</div>
			<div class="business-body-right">
				<p>「アプリのデザインってどうやって進めていくの？」と疑問に思っている方は、こちらの記事をご覧ください。</p>
				<p>» [準備中] UI/UXデザインの流れを知る。</p>
			</div>
			<a class="primary-button" href="/contact/">お問い合わせ</a>
		</div>
	</div>
	<!-- /wp:html -->

	<!-- wp:html -->
	<div class="business">
		<div class="business-header">
			</a>Logo Design</p>
			<h2>ロゴデザイン</h2>
			<figure class="wp-block-image"><img src="/wp-content/uploads/2020/01/%E3%83%96%E3%83%A9%E3%83%B3%E3%83%87%E3%82%A3%E3%83%B3%E3%82%B0%E3%83%87%E3%82%B6%E3%82%A4%E3%83%B3%E3%81%AE%E6%B5%81%E3%82%8C-1200x430.jpg" alt="" class="wp-image-374" title="ブランディングデザイン" /></figure>
		</div>
		<div class="business-body">
			<div class="business-body-left">
				<h3>ビジョン・コンセプトを可視化</h3>
			</div>
			<div class="business-body-right">
				<p>弊社では、ヒアリングをしっかり行い、お客様のビジョンをまとめ・整理していきます。その上でロゴ制作に着手し、「長く愛されるロゴ・ロゴタイプ」を制作していきます。</p>
			</div>
			<div class="business-body-left">
				<h3>ロゴデザインの流れ</h3>
			</div>
			<div class="business-body-right">
				<p>まずは、ヒアリングさせていただき、ヒアリング内容をもとに３案ご提案させていただきます。提案させていただいたロゴの中から１番イメージに近いものを選んでいき、さらにブラッシュアップしていきます。</p>
				<p>ロゴデザインの流れについて、詳しく知りたい方は次の記事をご覧ください。</p>
				<p>» [準備中] ロゴデザインの流れ</p>
			</div>
			<div class="business-body-left">
				<h3>ロゴデザインの提案例</h3>
			</div>
			<div class="business-body-right">
				<p>ロゴデザインのサンプルをご用意いたしましたので、もしよろしければご覧ください。</p>
				<p>»&nbsp;<a href="https://drive.google.com/file/d/1wFAFpZ0rmW07ef9bvTlpI2j4cbv9huix/view?usp=sharing">ロゴデザインのご提案書</a></p>
			</div>
			<div class="business-body-left">
				<h3>ロゴデザインの料金</h3>
			</div>
			<div class="business-body-right">
				<p>ロゴデザインは、220,000円（税込）から承っております。</p>
			</div>
			<a class="primary-button" href="/contact/">お問い合わせ</a>
		</div>
	</div>
	<!-- /wp:html -->

	<!-- wp:html -->
	<div class="business">
		<div class="business-header">
			<p>Web Design</p>
			<h2>Webサイト制作</h2>
			<figure class="wp-block-image"><img src="/wp-content/uploads/2020/01/web%E3%83%87%E3%82%B6%E3%82%A4%E3%83%B3%E3%81%AE%E6%B5%81%E3%82%8C-1200x430.png" alt="" class="wp-image-369" title="webデザイン"></figure>
		</div>
		<div class="business-body">
			<div class="business-body-left">
				<h3>デザインされた世界観</h3>
			</div>
			<div class="business-body-right">
				<p>5Gによる通信速度の向上を見越して、動画とWebデザインを組み合わせ、見る人にとってよりわかりやすい、キャッチーなWebサイト制作をしております。デザインからコーディングまで対応可能です。</p>
				<h3>Webサイト制作の流れ</h3>
				<p>Webサイト制作の進め方を知りたい方は、こちらの記事をご覧ください。</p>
				<p>» [準備中] Webサイト制作の流れ</p>
			</div>
			<div class="business-body-left">
				<h3>スキルセット</h3>
			</div>
			<div class="business-body-right">
				<ul>
					<li>HTML</li>
					<li>CSS</li>
					<li>JavaScript</li>
				</ul>
			</div>
			<div class="business-body-left">
				<h3>Webサイト制作の料金</h3>
			</div>
			<div class="business-body-right">
				<p>弊社で制作するWebサイトの多くは、660,000円 (税込)〜が中心となります。</p>
			</div>
			<a class="primary-button" href="/contact/">お問い合わせ</a>
		</div>
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
