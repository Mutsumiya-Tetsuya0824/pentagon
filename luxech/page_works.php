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
* Template Name: works
*/

global $luxe, $_is, $awesome;
get_header();
$fa_pencil	= 'fa-pencil-alt';
$fa_file	= 'fa-file-alt';

if ( isset($awesome['ver']) && is_string($awesome['ver']) && $awesome['ver'][0] === '4' ) {
	$fa_pencil	= 'fa-pencil';
	$fa_file	= 'fa-file-text';
}
?>
	<article>
		<!-- wp:html -->
		<div class="work">
		<h1>実績</h1>
		</div>
		<!-- /wp:html -->

		<!-- wp:html -->
		<h2>UI/UXデザイン</h2>
		<div class="work-body">
			<div class="work-body-left">
					<figure class="wp-block-image"><img src="/wp-content/uploads/2020/07/andgo_mockup-495x400.png" alt="" class="wp-image-1776" title="andgo_mockup"></figure>
			</div>
			<div class="work-body-right">
					<h3>仮想通貨ウォレットアプリのデザイン</h3>
					<p>ビットコインをはじめとする仮想通貨を管理できるアプリのデザイン。仕様決めの段階からサポートさせていただきました。独自の暗号技術を活かすために、情報設計やワイヤーフレームの制作に注力しました。</p>
					<p>制作期間：４ヶ月<br>試作画面数： 100 画面<br>最終画面数：24 画面<br>ダークモード画面数：24 画面</p>
			</div>
		</div>
		<div class="work-body">
			<div class="work-body-left">
					<figure class="wp-block-image"><img src="/wp-content/uploads/2020/07/sister_mockup-495x400.png" alt="" class="wp-image-1778" title="sister_mockup"></figure>
			</div>
			<div class="work-body-right">
					<h3>マッチングアプリのデザイン</h3>
					<p>男女のマッチングアプリのデザインを制作させていただきました。年齢認証やプロフィールの審査など多機能に渡る画面一式のデザインをいたしました。また、Appleの審査が厳しいので、ガイドラインに沿うように意識してデザインしました。</p>
					<p>制作期間：5ヶ月<br>最終画面数：121 画面</p>
			</div>
		</div>
		<div class="work-body">
			<div class="work-body-left">
					<figure class="wp-block-image"><img src="/wp-content/uploads/2020/07/habit_mockup-495x400.png" alt="" class="wp-image-1777" title="habit_mockup"></figure>
			</div>
			<div class="work-body-right">
					<h3>フィットネスアプリのデザイン</h3>
					<p>動画を見ながら部位別にトレーニングできるを実現するアプリのデザインを行いました。</p>
					<p>直感的に操作できるように、グラフィックデザインを上手く利用して部位別トレーニングを表現しました。</p>
					<p>制作期間：１ヶ月<br>最終画面数：15画面</p>
			</div>
		</div>
		<div class="work-body">
			<div class="work-body-left">
					<figure class="wp-block-image"><img src="/wp-content/uploads/2020/07/pinzz_mockup-495x400.png" alt="" class="wp-image-1780" title="pinzz_mockup"></figure>
			</div>
			<div class="work-body-right">
					<h3>飲食店向けクーポンアプリのデザイン</h3>
					<p>ハッピーアワーなどお得なキャンペーンを実施している飲食店を発見できるアプリのデザインをしました。キャラクターやオリジナルのアイコンを制作して、使いやすくわかりやすいポップなデザインに仕上げました。</p>
					<p>制作期間：1ヶ月<br>最終画面数：15画面</p>
			</div>
			<a class="primary-button" href="/contact/">お問い合わせ</a>
		</div>
		<!-- /wp:html -->

		<!-- wp:html -->
		<h2>アプリ開発</h2>
		<div class="work-body">
			<div class="work-body-left">
					<figure class="wp-block-image"><img class="wp-image-1787" title="ec_icon" src="/wp-content/uploads/2020/07/ec_icon-495x400.png" alt=""></figure>
			</div>
			<div class="work-body-right">
					<h3>アパレルECアプリの開発</h3>
					<ul>
						<li>iOSアプリ開発のサポート</li>
						<li>iOSアプリの審査サポート</li>
						<li>Firebaseを利用したアプリの開発</li>
					</ul>
			</div>
		</div>
		<div class="work-body">
			<div class="work-body-left">
					<figure class="wp-block-image"><img class="wp-image-1784" title="sister_icon" src="/wp-content/uploads/2020/07/sister_icon-640x430.png" alt=""></figure>
			</div>
			<div class="work-body-right">
					<h3>マッチングアプリの開発</h3>
					<ul>
						<li>iOSアプリ開発</li>
						<li>Androidアプリ開発</li>
						<li>Ruby on Railsでの管理画面の制作</li>
						<li>Ruby on RailsでのAPI設計・実装</li>
						<li>AWSでのインフラ構築</li>
					</ul>
					<p>開発期間：8ヶ月</p>
			</div>
		</div>
		<div class="work-body">
			<div class="work-body-left">
					<figure class="wp-block-image"><img class="wp-image-1786" title="insurance_icon" src="/wp-content/uploads/2020/07/insurance_icon-640x430.png" alt=""></figure>
			</div>
			<div class="work-body-right">
					<h3>保険アプリ開発</h3>
					<ul>
						<li>iOSアプリ開発サポート</li>
						<li>Androidアプリ開発サポート</li>
					</ul>
					<p>Swift, Koltinを使用してアプリ開発のサポートをさせていただきました。</p>
					<p>参画当初は既存のソースコードを拝見し、リファクタリングのご提案をさせていただきました。</p>
			</div>
		</div>
		<div class="work-body">
			<div class="work-body-left">
					<figure class="wp-block-image"><img class="wp-image-1785" title="pinzz_icon" src="/wp-content/uploads/2020/07/pinzz_icon-640x430.png" alt=""></figure>
			</div>
			<div class="work-body-right">
					<h3>飲食店向けクーポンアプリの開発</h3>
					<p>iOS・Androidアプリを開発させていただきました。</p>
					<ul>
						<li>React Nativeでのアプリ開発</li>
						<li>Ruby on Rails での管理画面の作成</li>
						<li>Ruby on Rails でのAPIの設計・開発</li>
					</ul>
					<p>React Nativeを用いてiOS・Androidのアプリを同時に開発しました。</p>
					<p>開発期間：6ヶ月</p>
			</div>
			<a class="primary-button" href="/contact/">お問い合わせ</a>
		</div>
		<!-- /wp:html -->

		<!-- wp:html -->
		<h2>ロゴデザイン</h2>
		<div class="work-body">
			<div class="work-body-left">
					<figure class="wp-block-image"><img class="wp-image-1175" title="fukushimap-logo-fix" src="/wp-content/uploads/2020/02/fukushimap-logo-fix-495x400.png" alt=""></figure>
			</div>
			<div class="work-body-right">
					<h3>福島県の観光促進サービスのロゴデザイン</h3>
					<p>地図上に様々な投稿ができるサービスのロゴデザイン。</p>
					<p>楽しんで使ってほしいという思いを込めてポップに仕上げています。ロゴタイプは、ロゴマークのポップな印象に合わせて可愛らしさを重視した書体にしています。</p>
					<p>制作期間：１ヶ月</p>
		<p>» <a href="https://drive.google.com/file/d/1wFAFpZ0rmW07ef9bvTlpI2j4cbv9huix/view?usp=sharing">実際の提案書はこちらから</a>ご覧いただけます。</p>
			</div>
		</div>

		<div class="work-body">
			<div class="work-body-left">
					<figure class="wp-block-image"><img class="wp-image-1754" title="andgo_logo" src="/wp-content/uploads/2020/07/andgo_logo-495x400.png" alt=""></figure>
			</div>
			<div class="work-body-right">
					<h3>株式会社AndGo様のロゴデザイン</h3>
					<p>「安堵」をコンセプトにしたロゴデザイン。</p>
					<p>会社の強みである秘匿暗号技術を想起させる「鍵穴」 と、お守りや縁起物としても馴染みのある「ひょうた ん」、双方の意味合いと形状を「&amp;」したデザイン。</p>
					<p>又、「Made in Japan」を象徴的に表すため、日本で は馴染みのある家紋デザインを取り入れています</p>
					<p>制作期間：５ヶ月</p>
			</div>
		</div>
		<div class="work-body">
			<div class="work-body-left">
					<figure class="wp-block-image"><img class="wp-image-1758" title="sister_logo" src="/wp-content/uploads/2020/07/sister_logo-495x400.png" alt=""></figure>
			</div>
			<div class="work-body-right">
					<h3>マッチングアプリのロゴデザイン</h3>
					<p>「S」をモチーフにしたシンプルでミニマルなデザインになります。</p>
					<p>サービス名が伝わりやすいよう「S」を用いて、線のフォルムに温かみをもたせるよう意識して制作しました。</p>
					<p>安心して当サービスを使用してもらえるよう、優しくて、温かみのある配色を心がけています。 線には丸みや太さをもたせて親しみやすさを感じても らえるようなバランスに仕上げています。</p>
					<p>制作期間：２ヶ月</p>
			</div>
		</div>
		<div class="work-body">
			<div class="work-body-left">
					<figure class="wp-block-image"><img class="wp-image-1760" title="canal_logo-tate" src="/wp-content/uploads/2020/07/canal_logo-tate-495x400.png" alt=""></figure>
			</div>
			<div class="work-body-right">
					<h3>系統分析ツールのロゴデザイン</h3>
					<p>生物の起源を分析するツールのロゴデザイン。</p>
					<p>「起源 = 種」と「受け継がれていく」イメージを抽象的に表現したロゴに仕上げました。</p>
					<p>制作期間：１ヶ月</p>
			</div>
		</div>
		<div class="work-body">
			<div class="work-body-left">
					<figure class="wp-block-image"><img class="wp-image-1756" title="pinzz_logo-tate" src="/wp-content/uploads/2020/07/pinzz_logo-tate-495x400.png" alt=""></figure>
			</div>
			<div class="work-body-right">
					<h3>飲食店向けクーポンアプリのロゴデザイン</h3>
					<p>お得な割引がある飲食店を地図上から見つけられるサービスのロゴデザイン。</p>
					<p>リスのドングリを集める習性をモチーフに、「お得」を集めるというコンセプトのロゴデザイン。</p>
					<p>ポップさを表現する配色とネオンをイメージさせるフォントで仕上げました。</p>
					<p>制作期間：３ヶ月</p>
			</div>
			<a class="primary-button" href="/contact/">お問い合わせ</a>
		</div>
		<!-- /wp:html -->

		<!-- wp:html -->
		<h2>Webサイト制作</h2>
		<div class="work-body">
			<div class="work-body-left">
					<figure class="wp-block-image"><img class="wp-image-1762" title="fi_hp" src="/wp-content/uploads/2020/07/fi_hp-495x400.jpg" alt=""></figure>
			</div>
			<div class="work-body-right">
					<h3>電気通信事業者様のWebページ制作</h3>
					<p>Fi（ファイ）株式会社様</p>
					<p><a href="https://www.fi-inc.me/">wiffy（ウィフィー） | Wi-Fiを置くだけでできる集客支援ツール</a></p>
					<p>LP・アニメーション・キャラクター・イラスト一式を制作いたしました。Wi-Fiがいろんな場所で使えるというサービスのコンセプトを「街」をテーマに表現しました。アニメーションの制作により、閲覧者の滞在時間が長かったとご好評をいただきました。</p>
					<p>制作期間：３.５ヶ月</p>
			</div>
		</div>
		<div class="work-body">
			<div class="work-body-left">
					<figure class="wp-block-image"><img class="wp-image-1763" title="andgo_hp" src="/wp-content/uploads/2020/07/andgo_hp-495x400.png" alt=""></figure>
			</div>
			<div class="work-body-right">
					<h3>仮想通貨ウォレットアプリのLP制作</h3>
					<p>株式会社AndGo様</p>
					<p>»<a href="https://drive.google.com/file/d/13zCQUhrGSW9FIRnp7MKZehd-SlwuVRGC/view?usp=sharing"> 実際のアプリLPのデザインはこちら</a></p>
					<p>ファーストビューの暖簾は「Made in Japan」を打ち出すと共に「セキュリティ」におけるデータの出力入力をイメージして制作いたしました。古事記に登場するヤタガラスをキャラクターとして表現することで、データを「保護する」というコンセプトを表現しております。</p>
					<p>制作期間：３ヶ月</p>
			</div>
		</div>
		<div class="work-body">
			<div class="work-body-left">
					<figure class="wp-block-image"><img class="wp-image-1768" title="habit_media" src="/wp-content/uploads/2020/07/habit_media-640x430.png" alt=""></figure>
			</div>
			<div class="work-body-right">
					<h3>フィットネスメディアの制作</h3>
					<p><a href="https://habit-jp.com/">「日常に少しの運動習慣をプラスするメディア」</a></p>
					<p>「部位別でトレーニングできる」をテーマに制作したWebメディア。30代の女性をターゲットに落ち着いた雰囲気で可愛さを表現したデザインに仕上げました。弊社の強みでもあるグラフィックデザインも加え、ポップさを表現しております。</p>
					<p>制作期間：３ヶ月</p>
			</div>
		</div>
		<div class="work-body">
			<div class="work-body-left">
					<figure class="wp-block-image"><img class="wp-image-540" title="Many charts and graphs. Reflection light and flare." src="/wp-content/uploads/2020/01/%E7%B3%BB%E7%B5%B1%E5%88%86%E6%9E%90-495x400.jpeg" alt=""></figure>
			</div>
			<div class="work-body-right">
					<h3>系統分析ツール</h3>
					<p>生物の起源を分析するツールのサイト制作。</p>
					<p>制作期間：２ヶ月</p>
			</div>
		<a class="primary-button" href="/contact/">お問い合わせ</a>
		</div>
		<!-- /wp:html -->


	</article>
</main>
<?php //サイドバー表示しない。//thk_call_sidebar(); ?>
</div><!--/#primary-->
<?php echo apply_filters( 'thk_footer', '' ); ?>

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
