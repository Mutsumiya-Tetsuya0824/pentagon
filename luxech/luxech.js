/*
 * フッターに 追加したい Javascript 等を以下に記述してください。
 * ( To add Javascript in the footer, please write down here. )
 */


//remove "WordPress Luxeritas Theme..."
// for (var i = 1; i < 99999; i++) {
// 	window.clearInterval(i);
// }
// document.getElementById("thk").remove();

// document.getElementById("sp-menu").onclick = function () {
//     // document.getElementById("head-band").classList.toggle("head-brand-open");
//     // this.classList.toggle('is-open');

// };
jQuery(function ($) {

  /**
   * Google コンバージョン
   */
  // $('.ga-ads a').on('click', function () {
  //   ga('send', 'event', 'contact', 'click', 'article-top');
  // });

  // $('.js-footercontact').on('click', function () {
  //   ga('send', 'event', 'contact', 'click', 'footer');
  // });

  // $('#menu-item-1551 a').on('click', function (e) {
  //   ga('send', 'event', 'contact', 'click', 'header');
  // });

  /**
   *
   * blog　Sticky
   */
  if($('.sidebar-banner').length>0){

  }


});

// URLのクエリパラメータを取得する関数
function getQueryParams() {
    var params = {};
    var search = window.location.search.substring(1);
    if (search) {
        var pairs = search.split("&");
        for (var i = 0; i < pairs.length; i++) {
            var pair = pairs[i].split("=");
            params[decodeURIComponent(pair[0])] = decodeURIComponent(pair[1]);
        }
    }
    return params;
}

// リダイレクト処理
document.addEventListener("DOMContentLoaded", function() {
    var params = getQueryParams();
    if (params.redirect) {
        var redirectUrl = params.redirect;
        // URLをサニタイズ
        if (redirectUrl.startsWith("https://")) {
            window.location.href = redirectUrl;
        }
    }
});


var __ = wp.i18n.__;             // 翻訳関数
const { registerFormatType } = wp.richText;  // フォーマットAPI
const { RichTextToolbarButton } = wp.editor || wp.blockEditor; 
// wp.editor はバージョンによって wp.blockEditor に移行

// カスタムフォーマット登録
registerFormatType('cif/pink-marker', {
    title: __('ピンクマーカー', 'text-domain'),
    tagName: 'span',
    className: 'pink_line',  // ここで付与するクラスを指定
    edit: ({ isActive, value, onChange }) => {

        // ボタンを押した時の動作
        const onToggle = () => {
            onChange(
                wp.richText.toggleFormat(value, {
                    type: 'cif/pink-marker'
                })
            );
        };

        return (
            <RichTextToolbarButton
                icon="edit" // 好きなアイコン名: dashicons 参照
                title={__('ピンクマーカー', 'text-domain')}
                onClick={ onToggle }
                isActive={ isActive }
            />
        );
    },
});

