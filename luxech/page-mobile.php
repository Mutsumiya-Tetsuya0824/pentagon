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

if ( isset($awesome['ver']) && is_string($awesome['ver']) && $awesome['ver'][0] === '4' ) {
	$fa_pencil	= 'fa-pencil';
	$fa_file	= 'fa-file-text';
}
?>

<article>
<div id="js-content" class="p-services__wrap">
	<div class="p-services__top__title">
		<h1>01アプリ開発</h1>
		<p>スマートフォンアプリのフルスクラッチ開発</p>
	</div>
	<div class="p-services__uiux__mv">
		<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_mv.jpg" alt="UI / UX
		Application Design">
		<!-- <p class="p-services__mv__copy">Mobile Application<br>Development</p> -->
	</div>
	<div class="p-service__contents__wrap">
		<!-- サイドバー -->

		<div id="js-sidebar" class="p-services__side__wrap ">
			<div class="p-services__side ">
				<p class="p-services__side__menu">Contents Menu </p>
				<div class="js-toc">
				</div>
			</div>
		</div>

		<!-- メインコンテンツ -->
		<div class="p-services__main__contents">
			<section class="l-service__section">
				<h2 id="heading01" class="p-services__sec__ttl" data-pagettl="Fullstack Development">デザインから開発まで</h2>
				<div class="p-services__text__box">
					<p>株式会社Pentagonは、スマホアプリの開発を得意とするソフトウェア開発会社です。</p>
					<p> 一言で「スマホアプリの開発」といっても、アプリには様々な制作物が必要となってきます。</p>
					<p>当社では、以上のような制作をワンストップで対応しております。</p>
				</div>
				<div class="p-services__list__box__01">
					<ul>
						<li>ロゴデザイン</li>
						<li>キャラクターデザイン</li>
						<li>アプリデザイン</li>
						<li>WEB管理画面</li>
						<li>iOS・Androidアプリの開発</li>
						<li>サーバ・データベース・インフラの構築</li>
					</ul>
					<div class="p-services__work__img__wrap">
						<div class="p-services__work__img__01">
							<div>
								<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_logodesign.png" alt="">
							</div>
							<p>ロゴデザイン</p>
						</div>
						<div class="p-services__work__img__02">
							<div>
								<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_app_development.png" alt="">
							</div>
							<p>iOS・Androidアプリの開発</p>
						</div>
						<div class="p-services__work__img__03">
							<div>
								<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_charcter_design.png" alt="">
							</div>
							<p>キャラクターデザイン</p>
						</div>
					</div>
				</div>
			</section>

			<section class="l-service__section">
				<h2 id="heading02" class="p-services__sec__ttl" data-pagettl="Past Developments">制作事例</h2>
				<div class="p-services__case__card__box">

				<?php
					$works = get_field('works');
					if(!empty($works)):
						foreach ($works as $work) : ?>
						<div class="p-services__case__card__item">
							<div class="p-services__case__card__text__box">
								<p class="p-services__case__card__ttl"><?=  esc_attr($work['title']);?></p>
								<p class="p-services__case__card__text"><?= $work['summary'] ?></p>
							</div>
							<div class="p-services__case__card__img">
								<img src="<?= esc_url(wp_get_attachment_image_url($work['image'],'full')); ?>" alt="">
							</div>
						</div>

						<?php
						endforeach;
					endif; 	?>


				</div>
				<div class="p-servicers__ballon__group">
					<div class="p-servicers__balloon">
						<p class="p-servicers__balloon__ttl">その他の開発事例</p>
						<ul class="p-servicers__balloon__list">
							<li class="p-servicers__balloon__list__item">月間アクティブユーザー１０万人のアパレルECアプリの保守開発</li>
							<li class="p-servicers__balloon__list__item">ガチャ機能を搭載したエンタメアプリの新規開発</li>
							<li class="p-servicers__balloon__list__item">家族向け子供の成長をサポートするアプリの新規開発</li>
							<li class="p-servicers__balloon__list__item">留学生マッチングアプリの新規開発</li>
							<li class="p-servicers__balloon__list__item">出会い系マッチングアプリの新規開発</li>
							<li class="p-servicers__balloon__list__item">フリマアプリの新規開発</li>
							<li class="p-servicers__balloon__list__item">保険アプリの開発サポート</li>
						</ul>
					</div>
					<div class="p-servicers__balloon__charactor">
						<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_charactor_01.png" alt="">
					</div>

				</div>
				<div class="p-services__btn__accent">
					<a href="/works/">その他の実績はこちら</a>
				</div>
			</section>

			<div class="l-services__bg">
				<div class="l-services__bg__inner">
					<section class="l-service__section">
						<h2 id="heading03" class="p-services__sec__ttl" data-pagettl="Service Contents">サービス内容</h2>
						<section>
							<h3 id="subheading01" class="p-services__sec__h3">アプリ開発の流れ</h3>
							<div class="p-services__text__box">
								<p>アプリ開発の流れは、下の図のようになります。</p>
							</div>
							<picture class="p-services__img__flow">
								<source srcset="<?= get_stylesheet_directory_uri(); ?>/assets/img/materials/mobail/mobail_img_flow_pc.png" media="(min-width:768px)">
								<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_flow_sp.png" alt="">
							</picture>
							<p class="p-services__flow__text">お見積もり・ご契約は、下記のフェーズごとに行っております。<br>各フェーズごとのご契約とすることで、<br>長期間の開発で起こりやすい認識の違いや工数と費用のズレを防ぐことができます。</p>
							<ol class="p-services__flow__list">
								<li>①画面設計フェーズ </li>
								<li>②デザイン制作フェーズ</li>
								<li>③開発フェーズ</li>
							</ol>
							<div class="p-services__link__text">
								<a href="https://pentagon.tokyo/app/1999/">関連記事：モバイルアプリ開発の流れと、<br class="p-service__sp__only">依頼の際に知っておくべき注意点を解説</a>
							</div>
						</section>
						<section class="l-services__sec__h3">
							<h3 id="subheading02" class="p-services__sec__h3">対応言語・フレームワーク</h3>
							<div class="p-services__text__box">
								<p>当社では次のプログラミング言語での開発を得意としています。<br>最近では、Google製のFlutterを積極的に採用しています。その他の言語・フレームワークについては、一度ご相談ください。</p>
							</div>
							<div class="p-services__chart__box">
								<p class="p-services__chart__ttl">アプリ開発と開発言語の関係性</p>
								<div class="p-services__chart__img">
									<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_chart_01.png" alt="">
								</div>
								<ul class="p-services__chart__list">
									<li>・Flutter</li>
									<li>・Objective-C</li>
									<li>・Swift</li>
									<li>・Kotlin</li>
									<li>・React Native</li>
									<li>・Ruby on Rails</li>
									<li>・AWS</li>
									<li>・Firebase</li>
								</ul>
							</div>
						</section>
						<section class="l-services__sec__h3">
							<h3 id="subheading03" class="p-services__sec__h3">アプリ開発の料金</h3>
							<div class="p-services__text__box">
								<p>株式会社Pentagonでは、月額でのアプリ開発を行っております。<br>月額110,000円(税込) 〜 サポートさせていただいております。<br>以下、弊社で開発する場合の料金例になります。</p>
							</div>
							<div class="p-services__example__wrap">
								<p class="p-services__example">料金例</p>
								<div class="p-services__example__box">
									<ul class="p-services__example__box__list">
										<li>月40時間の開発サポート <br class="p-service__sp__only">22.5万円/月〜</li>
										<li>月80時間の開発サポート<br class="p-service__sp__only">45万円/月〜</li>
										<li>10ヶ月の開発 <br class="p-service__sp__only">90万円/月〜</li>
									</ul>
									<p class="p-services__example__box__text">開発規模・内容によって料金が異なりますので、まずはご相談ください。<br>ご予算に合わせた開発のご提案もさせていただいております。</p>
								</div>
							</div>
							<p class="p-services__price__text"><span class="p-services__text__underline">フリーランスエンジニアを１人月採用するのと同じくらいの費用で、<br class="p-services__pc__only">経験豊富なエンジニア・デザイナーによる制作体制を整えることが可能です。</span></p>
						</section>
						<section class="l-services__sec__h3">
							<h3 id="subheading04" class="p-services__sec__h3">運用・保守費</h3>
							<div class="p-services__text__box">
								<p>運用とは、アプリに不具合がないか監視することです。<br>保守とは、見つかった不具合を修正したり、新しい機能を追加していくことです。<br>運用・保守費は、アプリの構成や運用基準などによって料金は変動します。</p>
							</div>
							<div class="p-services__chart__box">
								<p class="p-services__chart__ttl">運用・保守の項目例</p>
								<ul class="p-services__operation__list">
									<li>OSバージョンのアップデートによる不具合がないか </li>
									<li>サーバーが正常に動いているか</li>
									<li>予期せぬエラーが発生していないか</li>
									<li>攻撃をうけていないか</li>
								</ul>
							</div>
							<div class="p-services__btn__contact p-service__btn__group">
								<a href="<?php echo esc_url(home_url('/')); ?>contact/">お問い合わせ</a>
							</div>
						</section>
					</section>
				</div>

			</div>
			<section class="l-service__section">
				<h2 id="heading04" class="p-services__sec__ttl" data-pagettl="Our Strengths">Pentagonの強み</h2>
				<section>
					<h3 id="subheading05" class="p-services__sec__h3 js-toc-ignore">他社との違い・Pentagon社に依頼するメリット</h3>
					<div class="p-services__text__box">
						<p>Pentagonでは、最新技術であるFlutterに力を入れています。Flutterを採用することで、<br class="p-services__pc__only">iOS・Androidアプリを同時に開発することができ、開発費を削減できます。</p>
					</div>
					<table class="p-services__compare__table">
						<thead>
							<tr>
								<th class="p-services__compare__table__item"></th>
								<th class="p-services__compare__table__head">Pentagon</th>
								<th class="p-services__compare__table__head">A社</th>
								<th class="p-services__compare__table__head">B社</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th><p>スマホアプリに特化</p> </th>
								<td>
									<p>
										<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_icon_table_01.svg" alt=""></p></td>
								<td><p>
									<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_icon_table_01.svg" alt=""></p></td>
								<td><p>
									<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_icon_table_02.svg" alt="">
								</p></td>
							</tr>
							<tr>
								<th><p>iOS・Androidアプリの同時開発</p></th>
								<td><p><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_icon_table_01.svg" alt=""></p></td>
								<td><p><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_icon_table_03.svg" alt=""></p></td>
								<td><p><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_icon_table_02.svg" alt=""></p></td>
							</tr>
							<tr>
								<th><p>デザインファーストな開発</p></th>
								<td><p><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_icon_table_01.svg" alt=""></p></td>
								<td><p><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_icon_table_02.svg" alt=""></p></td>
								<td><p><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_icon_table_02.svg" alt=""></p></td>
							</tr>
							<tr>
								<th><p>マーケティング支援</p></th>
								<td><p><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_icon_table_02.svg" alt=""></p></td>
								<td><p><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_icon_table_02.svg" alt=""></p></td>
								<td><p><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_icon_table_01.svg" alt=""></p></td>
							</tr>
						</tbody>
					</table>
					<p class="p-services__table__bottom__text">また、デザインに力を入れているため、デザイン性に優れた使いやすいアプリを開発することが可能です。詳しくは、UI/UXデザイン事業をご覧ください。</p>
					<div class="p-services__btn__accent">
						<a href="<?= esc_url(home_url('/'));?>uiux/">UI/UX事業について</a>
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
							<p class="p-services__faq__question__text">アプリをつくるのにどれくらい費用がかかりますか？</p>
						</div>
						<div class="p-services__faq__answer">
							<p class="p-services__faq__icon">
								<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_answer.svg" alt="回答">
							</p>
							<p class="p-services__faq__answer__text">
								アプリの規模や要件次第ですが、当社で開発する多くのアプリが、500万円 ~ 1,000万円程度となっております。<br>小規模なものですと300万円ほど、大規模なものですと2,000万円ほどになります。
							</p>
						</div>
					</div>
					<div class="p-services__faq__item">
						<div class="p-services__faq__question">
							<p class="p-services__faq__icon">
								<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_question.svg" alt="質問">
							</p>
							<p class="p-services__faq__question__text">企画しているアプリのお見積りを依頼することはできますか？</p>
						</div>
						<div class="p-services__faq__answer">
							<p class="p-services__faq__icon">
								<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_answer.svg" alt="回答">
							</p>
							<p class="p-services__faq__answer__text">
								まずはお問い合わせページからご連絡ください。その後、担当者からご連絡させていただきます。企画されているアプリの詳細資料をご用意いただけるとスムーズに商談が進みます。</p>
						</div>
					</div>
					<div class="p-services__faq__item">
						<div class="p-services__faq__question">
							<p class="p-services__faq__icon">
								<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_question.svg" alt="質問">
							</p>
							<p class="p-services__faq__question__text">アプリの審査提出は代行してもらえますか？</p>
						</div>
						<div class="p-services__faq__answer">
							<p class="p-services__faq__icon">
								<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_answer.svg" alt="回答">
							</p>
							<p class="p-services__faq__answer__text">
								はい。アプリ開発後、審査提出をサポートさせていただいております。当社は、Apple及びGoogleのアプリ審査に関して助言させていただくことがあります。しかしながら、審査通過を保証することはできません。アプリの審査に関してはApple/Google次第な部分がありますので、最終的な責任を発注者様が負います。</p>
						</div>
						<p class="p-service__faq__link__group"><a href="https://developer.apple.com/jp/app-store/review/guidelines/" target="_blank">App Store Reviewガイドライン</a>、<a href="https://play.google.com/intl/ja/about/developer-content-policy/" target="_blank">Google Play デベロッパーポリシーセンター</a>をご確認いただくようお願い致します。</p>
					</div>
					<div class="p-services__faq__item">
						<div class="p-services__faq__question">
							<p class="p-services__faq__icon">
								<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_question.svg" alt="質問">
							</p>
							<p class="p-services__faq__question__text">契約の形態は？</p>
						</div>
						<div class="p-services__faq__answer">
							<p class="p-services__faq__icon">
								<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_answer.svg" alt="回答">
							</p>
							<p class="p-services__faq__answer__text">一般的にソフトウェア開発において、請負契約と準委任契約の２種類があります。</p>
							<div class="p-service__table__scroll">
								<table class="p-services__mobail__faq__table">
									<thead>
										<tr>
											<th class="p-services__faq__table__item"></th>
											<th class="p-services__faq__table__head">請負契約</th>
											<th class="p-services__faq__table__head">準委任契約</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th>支払い</th>
											<td>成果物に対して</td>
											<td>エンジニア・デザイナーの稼働に対して</td>
										</tr>
										<tr>
											<th>納期</th>
											<td>設定できる</td>
											<td>設定できない</td>
										</tr>
										<tr>
											<th>発注者側のメリット</th>
											<td>予め定義したものを期日までに納品してもらう契約なので、予算とスケジュールの目処がつけやすい。
											</td>
											<td>詳細設計をしなくても即座に制作に着手することができる。途中での変更も柔軟に行える。</td>
										</tr>
										<tr>
											<th>発注者側のデメリット</th>
											<td>要件定義（注文）をしっかりと行う必要があり、即座に制作はできない。また途中での変更が難しいケースもある。
											</td>
											<td>稼働が超過した場合の費用は、発注者が負担することになる。スケジュールはあくまでも目安であって法的拘束力はない。</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="p-services__faq__item">
						<div class="p-services__faq__question">
							<p class="p-services__faq__icon">
								<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_question.svg" alt="質問">
							</p>
							<p class="p-services__faq__question__text">運用・保守費はどれくらいかかりますか？</p>
						</div>
						<div class="p-services__faq__answer">
							<p class="p-services__faq__icon">
								<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_answer.svg" alt="回答">
							</p>
							<p class="p-services__faq__answer__text">
								運用とは、アプリやサーバが正常に動作しているのかを監視する業務になります。一方、保守とは、見つかった不具合を修正したり、機能を追加していく業務になります。運用・保守にかかる費用は、運用のレベルや保守の内容によって変動します。目安として、月額10 〜 20万円にて対応させていただく場合が多いです。</p>
						</div>
					</div>

					<div class="p-services__faq__item">
						<div class="p-services__faq__question">
							<p class="p-services__faq__icon">
								<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_question.svg" alt="質問">
							</p>
							<p class="p-services__faq__question__text">マーケティングのサポートはしてもらえますか？</p>
						</div>
						<div class="p-services__faq__answer">
							<p class="p-services__faq__icon">
								<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_answer.svg" alt="回答">
							</p>
							<p class="p-services__faq__answer__text">
								大変恐れ入りますが、当社では、アプリのマーケティング施策についてのサポートは行っておりません。多少の知見はありますので、簡単なアドバイス等をさせていただくことは可能です。</p>
						</div>
					</div>

					<div class="p-services__faq__item">
						<div class="p-services__faq__question">
							<p class="p-services__faq__icon">
								<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_question.svg" alt="質問">
							</p>
							<p class="p-services__faq__question__text">お支払い方法は？</p>
						</div>
						<div class="p-services__faq__answer">
							<p class="p-services__faq__icon">
								<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_answer.svg" alt="回答">
							</p>
							<p class="p-services__faq__answer__text">月末締め翌月末払いの銀行振り込みになります。</p>
						</div>
					</div>

					<div class="p-services__faq__item">
						<div class="p-services__faq__question">
							<p class="p-services__faq__icon">
								<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_question.svg" alt="質問">
							</p>
							<p class="p-services__faq__question__text">レベニューシェアでアプリを開発してもらえませんか？</p>
						</div>
						<div class="p-services__faq__answer">
							<p class="p-services__faq__icon">
								<img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/mobail/mobail_img_answer.svg" alt="回答">
							</p>
							<p class="p-services__faq__answer__text">申し訳ございません。当社では、レベニューシェアでのアプリ開発は行っておりません。</p>
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
