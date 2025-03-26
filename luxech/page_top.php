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
 
 $fa_pencil = 'fa-pencil-alt';
 $fa_file = 'fa-file-alt';
 
 if ( isset($awesome['ver']) && is_string($awesome['ver']) && isset($awesome['ver'][0]) && $awesome['ver'][0] === '4' ) {
   $fa_pencil = 'fa-pencil';
   $fa_file = 'fa-file-text';
 }
 
?>
<article>

  <!-- ▽ MV ▽ -->
  <div class="wide-bg topMvArap js-endBox">
    <div class="topMv">
      <div class="mvBox">
        <h1 class="ttl l-s00">
          想いに共感し<span>事業を共に創り上げる</span><br>“アプリ開発パートナー”<br>株式会社ペンタゴン
        </h1>
        <div class="mvImg sp">
          <img src="<?php echo get_theme_file_uri('/assets/img/materials/top/mv-img.png'); ?>" alt="想いに共感し事業を共に創り上げる“アプリ開発パートナー”株式会社ペンタゴン">
        </div>
        <p class="txt l-s08">
          株式会社ペンタゴンは、<span class="pink_line">iOS・Android・Webアプリの開発支援</span>を行っています。<br class="pc-only">
          設計・デザイン・開発・運用といったアプリに必要な業務をワンストップで対応しております。<br class="pc-only">スタートアップから大手企業まで、様々なアプリ開発の支援実績がございます。
        </p>
        <div class="btnArea">
          <div>
            <p class="btnTop"><span>まずはお気軽に</span></p>
            <a href="/contact/" class="btn_type01">お問い合わせ</a>
          </div>
          <div>
            <a href="/downloads/" class="btn_type01 bg-w">資料請求する</a>
          </div>
        </div>
      </div>
      <div class="mvImg pc">
        <img src="<?php echo get_theme_file_uri('/assets/img/materials/top/mv-img.png'); ?>" alt="想いに共感し事業を共に創り上げる“アプリ開発パートナー”株式会社ペンタゴン">
      </div>
    </div>
  </div>


  <!-- logoArea -->
  <div class="logo-scroll-infinity wide-bg">
    <div class="logo-scroll-infinity__wrap">
      <ul class="logo-scroll-infinity__list logo-scroll-infinity__list--left one-line">
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_trio.svg'); ?>" class="lazyload" data-no-lazy></li>
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_health_basis.png'); ?>" class="lazyload" data-no-lazy></li>
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_playtronics_re.png'); ?>" class="lazyload" data-no-lazy></li>
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_teach.svg'); ?>" class="lazyload" data-no-lazy></li>
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_daichi.svg'); ?>" class="lazyload" data-no-lazy></li>
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_&ai.svg'); ?>" class="lazyload" data-no-lazy></li>
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_init.svg'); ?>" class="lazyload" data-no-lazy></li>
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_stocksun.svg'); ?>" class="lazyload" data-no-lazy></li>
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_goodnews.png'); ?>" class="lazyload" data-no-lazy></li>
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_zizo.svg'); ?>" class="lazyload" data-no-lazy></li>
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_funtre.png'); ?>" class="lazyload" data-no-lazy></li>
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_clan.svg'); ?>" class="lazyload" data-no-lazy></li>
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_eee.svg'); ?>" class="lazyload" data-no-lazy></li>
      </ul>
      <ul class="logo-scroll-infinity__list logo-scroll-infinity__list--left one-line">
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_trio.svg'); ?>" class="lazyload" data-no-lazy></li>
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_health_basis.png'); ?>" class="lazyload" data-no-lazy></li>
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_playtronics_re.png'); ?>" class="lazyload" data-no-lazy></li>
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_teach.svg'); ?>" class="lazyload" data-no-lazy></li>
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_daichi.svg'); ?>" class="lazyload" data-no-lazy></li>
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_&ai.svg'); ?>" class="lazyload" data-no-lazy></li>
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_init.svg'); ?>" class="lazyload" data-no-lazy></li>
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_stocksun.svg'); ?>" class="lazyload" data-no-lazy></li>
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_goodnews.png'); ?>" class="lazyload" data-no-lazy></li>
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_zizo.svg'); ?>" class="lazyload" data-no-lazy></li>
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_funtre.png'); ?>" class="lazyload" data-no-lazy></li>
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_clan.svg'); ?>" class="lazyload" data-no-lazy></li>
        <li class="logo-scroll-infinity__item"><img data-src="<?php echo get_theme_file_uri('/assets/img/materials/top/image_logo_eee.svg'); ?>" class="lazyload" data-no-lazy></li>
      </ul>      
    </div>
  </div>


  <!-- work -->
  <section class="OurWorksWrap wide-bg">
    <div class="container">
      <div class="p-top_sec_ttlArea">
        <h2><span class="en">Our Works</span>実績紹介</h2>
        <p class="Txt">ペンタゴンでは、UI/UXデザインに力を入れ<br class="tab-only">
          <span class="pink_line font-bold">ユーザーが使いやすく、使い続けたくなるようなアプリ</span>を制作しています。<br>
          0からのサービスの立ち上げや、Webサービスのスマホアプリ化など、<br class="tab-only">
          お客様にあったアプリ開発を提案し制作いたします。
        </p>
      </div>
      <div class="p-top-works_wrap">
        <div class="p-top-works_slider swiper-container">
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <a href="/works/welldone-app/">
                <div class="works_card">
                  <div class="img"><img src="<?php echo get_theme_file_uri('/assets/img/materials/top/works_img01.png'); ?>" alt="Welldone!"></div>
                  <div class="txtBox">
                    <h3 class="ttl">Welldone!</h3>
                    <p class="txt">子どもの習慣化を家族で応援するアプリ</p>
                    <ul class="tag">
                      <li>UI/UXデザイン</li>
                      <li>モバイルアプリ開発</li>
                      <li>ロゴデザイン</li>
                      <li>キャラクターデザイン</li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>
            <!-- Slides -->
            <div class="swiper-slide">
              <a href="/works/teach-app/">
                <div class="works_card">
                  <div class="img"><img src="<?php echo get_theme_file_uri('/assets/img/materials/top/works_img02.png'); ?>" alt="Teach"></div>
                  <div class="txtBox">
                    <h3 class="ttl">Teach</h3>
                    <p class="txt">相性ピッタリの先生を探す！オンライン家庭教師マッチングアプリ</p>
                    <ul class="tag">
                      <li>UI/UXデザイン</li>
                      <li>モバイルアプリ開発</li>
                      <li>ロゴデザイン</li>
                      <li>キャラクターデザイン</li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>
            <!-- Slides -->
            <div class="swiper-slide">
              <a href="/works/zonebe-app/">
                <div class="works_card">
                  <div class="img"><img src="<?php echo get_theme_file_uri('/assets/img/materials/top/works_img03.png'); ?>" alt="ZoneBe"></div>
                  <div class="txtBox">
                    <h3 class="ttl">ZoneBe</h3>
                    <p class="txt">72時間で消える半径200m の『ゾーン』内にいる人とだけ情報交換ができるSNS</p>
                    <ul class="tag">
                      <li>UI/UXデザイン</li>
                      <li>モバイルアプリ開発</li>
                      <li>ロゴデザイン</li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>
            <!-- Slides -->
            <div class="swiper-slide">
              <a href="/works/okiba-app/">
                <div class="works_card">
                  <div class="img"><img src="<?php echo get_theme_file_uri('/assets/img/materials/top/works_img04.png'); ?>" alt="OKIBA"></div>
                  <div class="txtBox">
                    <h3 class="ttl">OKIBA</h3>
                    <p class="txt">空き地を有効活用！建設職人のための資材置場予約マッチングアプリ</p>
                    <ul class="tag">
                      <li>UI/UXデザイン</li>
                      <li>モバイルアプリ開発</li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>
            <!-- Slides -->
            <div class="swiper-slide">
              <a href="/works/kadecon-app/">
                <div class="works_card">
                  <div class="img"><img src="<?php echo get_theme_file_uri('/assets/img/materials/top/works_img09.png'); ?>" alt="カデコン"></div>
                  <div class="txtBox">
                    <h3 class="ttl">カデコン</h3>
                    <p class="txt">口コミと料金で最適な業者を選べるマッチングサービス</p>
                    <ul class="tag">
                      <li>UI/UXデザイン</li>
                      <li>モバイルアプリ開発</li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>
            <!-- Slides -->
            <div class="swiper-slide">
              <a href="/works/manaport-app/">
                <div class="works_card">
                  <div class="img"><img src="<?php echo get_theme_file_uri('/assets/img/materials/top/works_img10.png'); ?>" alt="mana port"></div>
                  <div class="txtBox">
                    <h3 class="ttl">mana port</h3>
                    <p class="txt">日々の生活をサポートするための様々なコンテンツを搭載した情報系アプリ</p>
                    <ul class="tag">
                      <li>UI/UXデザイン</li>
                      <li>モバイルアプリ開発</li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>
            <!-- Slides -->
            <div class="swiper-slide">
              <a href="/works/orange-app/">
                <div class="works_card">
                  <div class="img"><img src="<?php echo get_theme_file_uri('/assets/img/materials/top/works_img05.png'); ?>" alt="Meet Music"></div>
                  <div class="txtBox">
                    <h3 class="ttl">Meet Music</h3>
                    <p class="txt">レビュー投稿を参考に、行きたいコンサートが見つかる</p>
                    <ul class="tag">
                      <li>UI/UXデザイン</li>
                      <li>モバイルアプリ開発</li>
                      <li>ロゴデザイン</li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>
            <!-- Slides -->
            <div class="swiper-slide">
              <a href="/works/jpn470-app/">
                <div class="works_card">
                  <div class="img"><img src="<?php echo get_theme_file_uri('/assets/img/materials/top/works_img06.png'); ?>" alt="JPN470"></div>
                  <div class="txtBox">
                    <h3 class="ttl">JPN470</h3>
                    <p class="txt">日本の旅行記録と観光ガイドを一つに。目指せ47都道府県制覇</p>
                    <ul class="tag">
                      <li>UI/UXデザイン</li>
                      <li>モバイルアプリ開発</li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>
            <!-- Slides -->
            <div class="swiper-slide">
              <a href="/works/onki-app/">
                <div class="works_card">
                  <div class="img"><img src="<?php echo get_theme_file_uri('/assets/img/materials/top/works_img07.png'); ?>" alt="英語の音暗記 Onki"></div>
                  <div class="txtBox">
                    <h3 class="ttl">英語の音暗記 Onki</h3>
                    <p class="txt">カメラから英文読み上げ、絵本の読み聞かせ、シャドーイング</p>
                    <ul class="tag">
                      <li>UI/UXデザイン</li>
                      <li>モバイルアプリ開発</li>
                      <li>ロゴデザイン</li>
                      <li>キャラクターデザイン</li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>
            <!-- Slides -->
            <div class="swiper-slide">
              <a href="/works/stocksun-app/">
                <div class="works_card">
                  <div class="img"><img src="<?php echo get_theme_file_uri('/assets/img/materials/top/works_img08.png'); ?>" alt="StockSunサロン"></div>
                  <div class="txtBox">
                    <h3 class="ttl">StockSunサロン</h3>
                    <p class="txt">サロン会員限定アプリで、ここでしか見れない動画の視聴や案件をチェック</p>
                    <ul class="tag">
                      <li>UI/UXデザイン</li>
                      <li>モバイルアプリ開発</li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="secBtnArea">
          <a href="/works/" class="btn_type01 bg-w">実績をもっと見る</a>
        </div>
      </div>
    </div>
  </section>



  <section class="systemWrap">
    <div class="container">
      <div class="p-top_sec_ttlArea">
        <h2><span class="en">System</span>開発事例</h2>
        <p class="Txt">公開実績以外にも、以下のように<span class="pink_line font-bold">多種多様な業界のアプリやシステムの開発実績</span>がございます。<br>
          また、行政や自治体のアプリ開発の対応も可能です。<br>
          アプリ開発をご検討中の方は、お気軽にご相談ください。</p>
      </div>
      <div class="flex_box">
        <div class="box box01">
          <div class="txt_area">
            <p class="ttl">ビジネス・マーケット関連</p>
            <ul>
              <li>M&A内部システム</li>
              <li>卸マッチングアプリ</li>
              <li>留学マッチングアプリ</li>
              <li>インフルエンサーマッチングアプリ</li>
              <li>マーケットアプリ</li>
            </ul>
          </div>
          <p class="img"><img src="<?php echo get_theme_file_uri('/assets/img/materials/top/system_ph01.svg'); ?>"
              alt="ビジネス・マーケット関連"></p>
        </div>
        <div class="box box02">
          <div class="txt_area">
            <p class="ttl">ライフスタイル</p>
            <ul>
              <li>住宅ローンアプリ</li>
              <li>車検アプリ</li>
              <li>中古車売買アプリ</li>
              <li>宿泊予約アプリ</li>
              <li>ポイ活アプリ</li>
            </ul>
          </div>
          <p class="img"><img src="<?php echo get_theme_file_uri('/assets/img/materials/top/system_ph02.svg'); ?>"
              alt="ライフスタイル"></p>
        </div>
        <div class="box box03">
          <div class="txt_area">
            <p class="ttl">教育・学習・趣味</p>
            <ul>
              <li>教育系アプリ</li>
              <li>学習アプリ</li>
              <li>家庭教師マッチングアプリ</li>
              <li>スポーツマッチングアプリ</li>
              <li>合コンマッチングアプリ</li>
            </ul>
          </div>
          <p class="img"><img src="<?php echo get_theme_file_uri('/assets/img/materials/top/system_ph03.svg'); ?>"
              alt="教育・学習・趣味"></p>
        </div>
        <div class="box box04">
          <div class="txt_area">
            <p class="ttl">SNS・コミュニティ</p>
            <ul>
              <li>SNSアプリ</li>
              <li>地域限定SNSアプリ</li>
              <li>障害児童SNSアプリ</li>
              <li>会員限定メディア</li>
              <li>会員サロンアプリ</li>
            </ul>
          </div>
          <p class="img"><img src="<?php echo get_theme_file_uri('/assets/img/materials/top/system_ph04.svg'); ?>"
              alt="SNS・コミュニティ"></p>
        </div>
        <div class="box box05">
          <div class="txt_area">
            <p class="ttl">ヘルスケア・ペットケア</p>
            <ul>
              <li>ヘルスケアアプリ</li>
              <li>ペット健康状態管理アプリ</li>
              <li>IoTアプリ</li>
            </ul>
          </div>
          <p class="img"><img src="<?php echo get_theme_file_uri('/assets/img/materials/top/system_ph05.svg'); ?>"
              alt="ヘルスケア・ペットケア"></p>
        </div>
        <div class="box box06">
          <div class="txt_area">
            <p class="ttl">テクノロジー・インフラ</p>
            <ul>
              <li>電話応答自動化システム</li>
              <li>置き場アプリ</li>
            </ul>
          </div>
          <p class="img"><img src="<?php echo get_theme_file_uri('/assets/img/materials/top/system_ph06.svg'); ?>"
              alt="テクノロジー・インフラ"></p>
        </div>

      </div>
    </div>
  </section>



  <section class="induceWrap">
    <div class="induceBox">
      <div class="flex_box">
        <p class="txt sp">ペンタゴンでは、毎月3社限定で無料相談を実施中です！<br>まずはお気軽にお問い合わせください。</span></p>
        <p class="img"><img src="<?php echo get_theme_file_uri('/assets/img/materials/top/induce_ph01.svg'); ?>"
            alt="pentagon"></p>
        <div class="txt_area">
          <p class="txt pc">ペンタゴンでは、毎月3社限定で無料相談を実施中です！まずはお気軽にお問い合わせください。</p>
          <div class="btn_area">
            <div>
              <p class="btnTop">プロのアドバイスをお届け</p>
              <a href="/contact/" class="btn_type01">お問い合わせ</a>
            </div>
            <div>
              <a href="/downloads/" class="btn_type01 bg-w">資料請求する</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="serviceWrap wide-bg">
    <div class="container">
      <div class="p-top_sec_ttlArea">
        <h2><span class="en">Service</span>サービス</h2>
        <p class="Txt">ペンタゴンの社員は、プロジェクトマネージャークラスのエンジニア・デザイナー集団であり、<br>
          リーダーシップを持ってアプリ制作に取り組んでいます。<br>
          <span class="pink_line font-bold">お客様からの指示待ちではなく、積極的に提案いたします。</span>
        </p>
      </div>
      <div class="flex_box">
        <div class="box box01 link">
          <a href="/mobile/">
            <p class="img"><img src="<?php echo get_theme_file_uri('/assets/img/materials/top/service_ph01.png'); ?>" alt="アプリ開発">
              <span class="img_txt"><img src="<?php echo get_theme_file_uri('/assets/img/materials/top/service_ph01_txt.svg'); ?>" alt="Develop"></span>
            </p>
            <div class="txt_area">
              <div class="txtBox">
                <h3 class="ttl">アプリ開発</h3>
                <p class="sub_ttl">#アプリ0→1の立ち上げ支援<br>
                  #アジャイル開発支援</p>
                <p class="txt">iOS・Android向けのモバイルアプリ開発中心に、
                  設計・デザイン・実装・運用までワンストップでサポートします。Webアプリの制作も対応可能です。
                  お客様のご要望に合わせて、0→1開発やアプリのリニューアル、月額でのアジャイル開発を提供しています。</p>
                <dl class="bottomTxt">
                  <dt>得意な技術</dt>
                  <dd>Flutter/Swift/Kotlin/Ruby on Rails/Next.js</dd>
                </dl>
              </div>
              <p href="" class="link_txt">詳しく見る</p>
            </div>
          </a>
        </div>
        <div class="box box02 link">
          <a href="/uiux/">
            <p class="img"><img src="<?php echo get_theme_file_uri('/assets/img/materials/top/service_ph02.png'); ?>"
                alt="UI/UX デザイン">
              <span class="img_txt"><img src="<?php echo get_theme_file_uri('/assets/img/materials/top/service_ph02_txt.svg'); ?>" alt="Design"></span>
            </p>
            <div class="txt_area">
              <div class="txtBox">
                <h3 class="ttl">UI/UXデザイン</h3>
                <p class="sub_ttl">#アプリ0→1の立ち上げ支援<br>
                  #アジャイル開発支援</p>
                <p class="txt">デザイナーが企画・設計段階から参画し、お客様や開発チームなど様々なステークホルダーと密接に連携し要件定義を行います。
                  そうすることで、ビジネスの目的に沿った、使いやすいアプリをお客様と創り上げることが可能です。</p>
              </div>
              <p href="" class="link_txt">詳しく見る</p>
            </div>
          </a>
        </div>
        <div class="box support_box">
          <p class="img"><img src="<?php echo get_theme_file_uri('/assets/img/materials/top/service_ph03.png'); ?>"
              alt="アプリ開発">
            <span class="img_txt"><img src="<?php echo get_theme_file_uri('/assets/img/materials/top/service_ph03_txt.svg'); ?>" alt="Support"></span>
          </p>
          <div class="txt_area">
            <div class="txtBox">
              <h3 class="ttl">補助金の支援</h3>
              <p class="sub_ttl">#資金調達の支援</p>
              <p class="txt">アプリ開発を行う際、必要になる資金調達や補助金の支援をさせていただきます。企業やアプリの成長段階や状況にあった資金調達方法をご提案させていただきます。<br>
                また調達のスケジュールに合わせたリリースや開発もご対応させていただきます。</p>
            </div>
          </div>
        </div>
      </div>
      <div class="secBtnArea">
        <a href="/company/" class="induce_btn btn_type01 bg-w">会社概要を見る</a>
      </div>
    </div>
  </section>

  <section class="featuresWrap wide-bg">
    <div class="featureBoxWrap">
      <div class="p-top_sec_ttlArea">
        <h2><span class="en">Features</span>ペンタゴンの4つの強み</h2>
        <p class="Txt">アプリの制作はどの制作会社でも可能ですが、ペンタゴンは単なる「作り手」ではありません。<br>
          特に次の４つのポイントに力を注ぎ、<span class="pink_line font-bold">「高品質なアプリ開発」を提供します。</span></p>
      </div>
      <div class="flex_box">
        <div class="box box01">
          <div class="img_area">
            <p class="left"><img
                src="<?php echo get_theme_file_uri('/assets/img/materials/top/features_ph01.svg'); ?>" alt="アプリの専門家としての知見"></p>
            <p class="right">1</p>
          </div>
          <div class="txt_area">
            <h3 class="ttl">アプリの専門家としての知見</h3>
            <p class="txt">アプリの企画からリリースまで一貫してご対応いたします。<br>
              10年以上に及ぶアプリの企画やデザイン、開発実績や審査対応経験を活かし、高品質なアプリを迅速かつ安心してお客様に提供いたします。</p>
          </div>
        </div>
        <div class="box box02">
          <div class="img_area">
            <p class="left"><img
                src="<?php echo get_theme_file_uri('/assets/img/materials/top/features_ph02.svg'); ?>" alt="ユーザーの視点を取り入れた制作プロセス"></p>
            <p class="right">2</p>
          </div>
          <div class="txt_area">
            <h3 class="ttl">ユーザーの視点を取り入れた制作プロセス</h3>
            <p class="txt">
              デザイナーがアプリの企画段階から関わることで、ビジネス視点だけではなくユーザー視点を取り入れたアプリ開発を行います。使いやすさや伝わりやすさにこだわって制作することで、『ユーザーに選ばれるアプリ』を開発しビジネスを後押しします。
            </p>
          </div>
        </div>
        <div class="box box03">
          <div class="img_area">
            <p class="left"><img
                src="<?php echo get_theme_file_uri('/assets/img/materials/top/features_ph03.svg'); ?>" alt="オーナーシップを持った取り組み"></p>
            <p class="right">3</p>
          </div>
          <div class="txt_area">
            <h3 class="ttl">オーナーシップを持った取り組み</h3>
            <p class="txt">
              ペンタゴン社員は全メンバーPMを兼任しているため、メンバーがミーティング内やチャットを通して、オーナーシップを持ってコミュニケーションを取ります。そのため、予算やアプリ開発の目的に合わせた最適な提案とスコープ選定を行うことができます。
            </p>
          </div>
        </div>
        <div class="box box04">
          <div class="img_area">
            <p class="left"><img
                src="<?php echo get_theme_file_uri('/assets/img/materials/top/features_ph04.svg'); ?>" alt="独自の品質管理体制"></p>
            <p class="right">4</p>
          </div>
          <div class="txt_area">
            <h3 class="ttl">独自の品質管理体制</h3>
            <p class="txt">開発進行段階でのデザイナーのレビュー実施や進捗の可視化と認識齟齬の早期解消、第三者機関によるテスト実施などの独自の品質管理体制により高品質なアプリ開発を目指しています。</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="top-download-form top-download-form-re wide-bg">
    <div class="container">
      <div class="p-top_sec_ttlArea">
        <h2>まずは相談してみる</h2>
        <p class="Txt">このたびはペンタゴンにご興味を持って頂き、誠にありがとうございます。<br>
          アプリ開発に関するご質問や無料相談のお申し込みは、こちらのフォームよりお気軽にご連絡ください。
          お問い合わせいただいた内容につきましては、<span class="pink_line font-bold">3営業日以内に担当者よりご返信させて頂きます。</span></p>
      </div>
      <?php echo do_shortcode('[contact-form-7 id="6788" title="【TOP】ご相談フォーム"]'); //テスト用 
      ?>
      <!-- <//?php echo do_shortcode('[contact-form-7 id="7214" title="【TOP】ご相談フォーム"]'); //本番用 ?> -->
    </div>
  </section>

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