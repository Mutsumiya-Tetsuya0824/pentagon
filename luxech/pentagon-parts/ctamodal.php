<div class="ctaModalWrap">
    <!-- モーダル A -->
    <div id="modalA" class="ctaModal">
        <div class="modalContent">
        <div class="close-btn"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/archive/modal_close.svg" alt=""></div>
            <div class="modalBox">
                <div class="imgArea">
                    <img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/archive/cta_modal_a.svg" alt="">
                </div>
                <div class="txtArea">
                    <h2 class="ttl">アプリ開発でお悩みは<br>ありませんか？</h2>
                    <div class="btnArea">
                        <p class="btnTxt"><span class="txt">Pentagonに<br class="sp-only">お気軽にお問い合わせください！</span></p>
                        <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="primary-button">無料相談はこちら</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- モーダル B -->
    <div id="modalB" class="ctaModal">
        <div class="modalContent">
        <div class="close-btn"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/archive/modal_close.svg" alt=""></div>
            <div class="modalBox">
                <div class="imgArea">
                    <img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/archive/cta_modal_b.svg" alt="">
                </div>
                <div class="txtArea">
                    <h2 class="ttl">アプリエンジニアや<br>UI/UXデザイナー<br>人員足りていますか？</h2>
                    <div class="btnArea">
                        <p class="btnTxt"><span class="txt">開発のサポートも承ります！</span></p>
                        <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="primary-button pc-only">開発サポートを相談する</a>
                        <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="primary-button sp-only">サポートを相談する</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- モーダル C -->
    <div id="modalC" class="ctaModal">
        <div class="modalContent">
            <div class="close-btn"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/archive/modal_close.svg" alt=""></div>
            <div class="modalBox">
                <div class="imgArea">
                    <img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/archive/cta_modal_c.svg" alt="">
                </div>
                <div class="txtArea">
                    <h2 class="ttl">アプリ開発ってどれくらいの費用がかかるの？</h2>
                    <div class="btnArea">
                        <p class="btnTxt"><span class="txt">アプリ開発のお見積もりは<br>お気軽に！</span></p>
                        <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="primary-button">見積もりを依頼する</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {

        // 1. 各種フラグの準備
        var timeHasPassed    = false; // 60秒が経過したかどうか
        var scrolledHalfway  = false; // ページを50%スクロールしたかどうか
        var isModalDone      = false; // モーダルをすでに表示＆閉じたかどうか
        var WAIT_TIME        = 60000; // 60秒（テスト時は 5000 等に変更）

        // 2. 60秒後に timeHasPassed = true にし、条件をチェック
        setTimeout(function() {
            timeHasPassed = true;
            checkModalCondition();
        }, WAIT_TIME);

        // 3. スクロールイベントで50%超えたら scrolledHalfway = true にし、条件をチェック
        $(window).scroll(function() {
            var scrollPosition = $(this).scrollTop();
            var documentHeight = $(document).height();
            var windowHeight   = $(window).height();
            var triggerPoint   = documentHeight * 0.5 - windowHeight; // ページ50%の位置

            if (!scrolledHalfway && scrollPosition >= triggerPoint) {
                scrolledHalfway = true;
                checkModalCondition();
            }
        });

        // 4. すでにロード時点で50%超えている場合に対応
        if ($(window).scrollTop() >= $(document).height() * 0.5 - $(window).height()) {
            scrolledHalfway = true;
        }

        // モーダルを表示するかどうかをチェックし、条件を満たせば表示する
        function checkModalCondition() {
            // 60秒 & 50%スクロール & まだ表示していない場合
            if (timeHasPassed && scrolledHalfway && !isModalDone) {
                showRandomModal();
            }
        }

        // ランダムでモーダル表示
        function showRandomModal() {
            var modalType   = ['modalA', 'modalB', 'modalC'];
            var randomModal = modalType[Math.floor(Math.random() * modalType.length)];
            $("#" + randomModal).fadeIn();
            isModalDone = false;  // まだ閉じていない状態
        }

        // モーダルを閉じる
        function closeModal() {
            $(".ctaModal").fadeOut();
            // ページ滞在中はもう表示させない
            isModalDone = true;
        }

        // ×ボタンをクリックしたとき
        $(".close-btn").click(function() {
            closeModal();
        });
        
        // モーダルの背景部分をクリックしたとき
        $(".ctaModal").click(function(event) {
            if ($(event.target).hasClass("ctaModal")) {
                closeModal();
            }
        });
    });
</script>
