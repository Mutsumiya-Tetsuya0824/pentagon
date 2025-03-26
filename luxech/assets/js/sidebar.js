// サイドバー/目次追従

$(function(){

    $(window).on('scroll resize', function() {
		
		if($(".p-service__contents__wrap").length == 0) { return; }

      if (window.matchMedia('(min-width:992px)').matches) {
        // スクロール位置
        var scroll = $(document).scrollTop();
        // コンテンツエリアのトップ
        var contenttop = $(".p-service__contents__wrap").offset().top;
        // サイドバーの左位置
        var sideleft = $("#main").offset().left;
        // サイドバーの高さ
        var sideheight = $("#js-sidebar").outerHeight();
        // メインコンテンツの高さ
        var mainheight = $(".p-services__main__contents").outerHeight();
        // サイドバーの上マージン
        var sidemargintop = 100;
        // サイドバーの下マージン
        var sidemarginbottom = 0;
        // フッターTOP位置
        var footertop = $("#js-img").offset().top;

      if (scroll > (footertop - sidemarginbottom - sidemargintop - sideheight - 100)) {
        // フッターにあたった場合
        $("#js-sidebar").css({
          'position': 'absolute',
          'top': (mainheight - sideheight - 100),
          'left': 0,
          'width': '240px'
        });
      } else if (scroll > (contenttop - sidemargintop)) {
        // 追従時
        $("#js-sidebar").css({
          'position': 'fixed',
          'top': sidemargintop,
          'left': sideleft,
          'width': '240px'
        });
      } else {
        // 追従するまでスクロールされてないとき
        $("#js-sidebar").css({
          'position': 'static',
          'top': 'auto',
          'bottom': 'auto',
          'right': 'auto'
        });
      }
    } else {
      $("#js-sidebar").css({
        'position': 'static',
        'top': 'auto',
        'bottom': 'auto',
        'width': 'content-fit',
        'right': 'auto'
      });
    }
    });
});
