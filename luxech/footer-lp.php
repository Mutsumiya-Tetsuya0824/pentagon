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

global $luxe, $_is, $awesome;

?>

<a href="#" id="page-top" style="opacity: 0; visibility: hidden;">トップへ戻る</a>

<div id="footer" itemscope itemtype="https://schema.org/WPFooter" <?php if (isset($luxe['add_role_attribute']))
	echo ' role="contentinfo"'; ?>>

	<footer class="lp-footer">
		<div id="foot-in">
			<aside class="row">
				<div class="col-12 col-xs-12">
					<div id="custom_html-24" class="widget_text widget widget_custom_html">
						<div class="textwidget custom-html-widget">
							<div class="lp-footer__container">
								<div class="footetr-nav__bottom">
									<div class="footer-nav__logo">
										<p><a href="https://pentagon.tokyo/" target="_blank"
												rel="noopener noreferrer"><img
													src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/logo/logo_yoko.svg"
													class="lazy"
													data-src="https://pentagon.tokyo/wp-content/themes/luxech/assets/img/materials/logo/logo_yoko.svg"
													alt="Pentagon" data-loaded="true">
												<noscript><img
														src="https://pentagon.tokyo/wp-content/themes/luxech/assets/img/materials/logo/logo_yoko.svg"
														alt="Pentagon"></noscript>
											</a></p>
										<address>株式会社Pentagon<br>
											〒102-0083<br>
											東京都千代田区麹町1-4-4 2F</address>
									</div>
									<div class="footer-nav__buttons">
										<a href="https://pentagon.tokyo/downloads/"
											class="footer-nav__buttons__button button01" target="_blank"
											rel="noopener noreferrer">資料請求するa</a>
										<a href="https://pentagon.tokyo/contact/"
											class="footer-nav__buttons__button button02 js-footercontact"
											target="_blank" rel="noopener noreferrer"> お問い合わせ</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</aside>
			<div class="clearfix"></div>
		</div>
		<!--/#foot-in-->
		<div id="copyright">
			<p class="copy">Copyright © Pentagon, Inc All Rights Reserved.</p>
			
		</div>
		<!--/#copy-->
	</footer>


</div><!--/#footer-->
<?php
if ($luxe['bootstrap_footer'] === 'in') {
	?>
	</div><!--/.container-->
	<?php
}
?>
<div id="wp-footer">
	<?php
	if (!isset($luxe['amp'])) {
		if (isset($luxe['mobile_buttons']))
			get_template_part('mobile-buttons');
		?>

		<?php
		if ((isset($luxe['global_navi_mobile_type']) && $luxe['global_navi_mobile_type'] === 'luxury') || isset($luxe['mobile_search_button'])) {
			?>
			<aside>
				<div id="sform" itemscope itemtype="https://schema.org/WebSite">
					<meta itemprop="url" content="<?php echo THK_HOME_URL; ?>" />
					<form itemprop="potentialAction" itemscope itemtype="https://schema.org/SearchAction" method="get"
						class="search-form" action="<?php echo THK_HOME_URL; ?>">
						<meta itemprop="target" content="<?php echo THK_HOME_URL; ?>?s={s}" />
						<div><input itemprop="query-input" type="search" class="search-field mobile-search" name="s"
								placeholder="Search for ..." required /></div><input type="submit" class="search-submit"
							value="Search" />
					</form>
				</div>
			</aside>
			<?php
		}

		if ($_is['customize_preview'] === true) {
			require_once(INC . 'create-javascript.php');
			$jscript = new create_Javascript();
			$luxe['awesome_load_async'] = 'none';

			$files = array(
				'jquery.sticky-kit.min.js',
				'autosize.min.js',
			);
			foreach ($files as $val)
				echo '<script src="', TDEL, '/js/', $val, '"></script>';

			echo '<script>',
				$jscript->create_luxe_dom_content_loaded_script();
			if (isset($luxe['jquery_load']) && $luxe['jquery_load'] !== 'none') {
				echo $jscript->create_luxe_various_script();
			}
			//echo	$jscript->create_sns_count_script(),
			echo '</script>';
		}

		// 子 luxech.js もしくは luxech.min.js
		if (!isset($luxe['child_script'])) {
			if ($luxe['child_js_compress'] === 'none') {
				if (file_exists(SPATH . DSEP . 'luxech.js')) {
					?>
					<script src="<?php echo SDEL; ?>/luxech.js?v=<?php echo $_SERVER['REQUEST_TIME'] ?>" defer></script>
					<?php
				}
			} elseif ($luxe['child_js_compress'] === 'comp') {
				if (file_exists(SPATH . DSEP . 'luxech.min.js') && filesize(SPATH . DSEP . 'luxech.min.js') > 0) {
					?>
					<script src="<?php echo SDEL; ?>/luxech.min.js?v=<?php echo $_SERVER['REQUEST_TIME'] ?>" defer></script>
					<?php
				}
			}
		}
	}

	// アクセス解析追加用( Bodyタグ最下部に設定されてる場合 )
	if (isset($luxe['analytics_position']) && $luxe['analytics_position'] === 'bottom') {
		require_once(INC . 'analytics.php');
		$analytics = new thk_analytics();
		echo $analytics->analytics('add-analytics.php');
	}

	if (isset($luxe['amp'])) {
		// AMP HTML ( body )
		if (isset($luxe['amp_body_position']) && $luxe['amp_body_position'] === 'bottom') {
			get_template_part('add-amp-body');
		}
	} else {
		get_template_part('add-footer'); // ユーザーフッター追加用
	
		// SNS ボタンが非表示に設定されてるけど SNS カウントキャッシュを取得する場合
		if (isset($luxe['sns_count_cache_enable']) && isset($luxe['sns_count_cache_force'])) {
			if (
				($_is['home'] && !isset($luxe['sns_toppage_view'])) ||
				($_is['singular'] && !isset($luxe['sns_tops_enable']) && !isset($luxe['sns_bottoms_enable']))

			) {
				require(INC . 'sns-cache-get.php');
				echo '<div class="sns-cache-true feed-cache-true" '
					, 'data-incomplete="" data-luxe-permalink="' . $permalink . '"></div>';
			}
		}

		// Service Worker
		if ($_is['preview'] === false && $_is['customize_preview'] === false) {
			if (isset($luxe['pwa_enable']) && isset($luxe['pwa_mobile'])) {
				if ($_is['mobile'] !== true) {
					unset($luxe['pwa_enable']);
				}
			}

			if (isset($luxe['pwa_enable']) && $_is['ssl'] === true) {
				$sw_script = THK_HOME_PATH . 'luxe-serviceworker.js';
				$sw_regist_script = array(TPATH . DSEP . 'js' . DSEP . 'luxe-serviceworker-regist.js', TDEL . '/js/luxe-serviceworker-regist.js');
				if ((isset($luxe['pwa_dynamic_files']) || file_exists($sw_script) === true) && file_exists($sw_regist_script[0]) === true) {
					?>
					<script src="<?php echo $sw_regist_script[1]; ?>?v=<?php echo $_SERVER['REQUEST_TIME'] ?>" async defer></script>
					<?php
				}
			}
		}

		if ($_is['singular'] === true || $_is['home'] === true) {
			if ($luxe['sns_tops_type'] === 'normal' || $luxe['sns_bottoms_type'] === 'normal') {
				// Facebook normal button
				if (isset($luxe['facebook_share_tops_button']) || isset($luxe['facebook_share_bottoms_button'])) {
					$thk_locale = new thk_locale();
					?>
					<div id="fb-root"></div>
					<script async defer crossorigin="anonymous"
						src="https://connect.facebook.net/<?php echo $thk_locale->thk_locale_wp_2_ogp(get_locale()) ?>/sdk.js#xfbml=1&version=v8.0&autoLogAppEvents=1&appId="></script>
					<?php
				}
				// LinkedIn normal button
				if (isset($luxe['linkedin_share_tops_button']) || isset($luxe['linkedin_share_bottoms_button'])) {
					?>
					<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
					<?php
				}
			}

			// Pinterest button
			if (isset($luxe['pinit_share_tops_button']) || isset($luxe['pinit_share_bottoms_button'])) {
				if ($_is['home'] === true || ($_is['singular'] === true && !isset($luxe['pinit_hover_button']))) {
					?>
					<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
					<?php
				} else {
					?>
					<script async defer data-pin-hover="true" src="//assets.pinterest.com/js/pinit.js"></script>
					<?php
				}
			} elseif ($_is['singular'] === true && isset($luxe['pinit_hover_button'])) {
				?>
				<script async defer data-pin-hover="true" src="//assets.pinterest.com/js/pinit.js"></script>
				<?php
			}
		}

		wp_footer();
	}

	/* ログインしてる人がいる時 */
	if ($_is['user_logged_in'] === true) {
		/* WordPress の管理バーが見えてる場合のヘッダー上部の帯メニュー位置調整用スクリプト */
		if (is_admin_bar_showing() === true && !isset($luxe['amp'])) {
			?>
			<script src="<?php echo TDEL . '/js/wp-adminbar-position.js'; ?>" async defer></script>
			<?php
		}

		/* Luxeritas 管理バーの表示 */
		if ($_is['customize_preview'] === false && $_is['edit_posts'] === true && !isset($luxe['hide_luxe_adminbar']) && file_exists(TPATH . DSEP . 'js' . DSEP . 'ladmin.min.js') === true && file_exists(TPATH . DSEP . 'css' . DSEP . 'ladmin.css')) {
			if (isset($_GET['respond_frame'])) {
				?>
				<script><?php echo thk_fgc(TPATH . DSEP . 'js' . DSEP . 'ladmin.min.js'); ?></script>
				<?php
			} else {
				require(INC . 'ladmin.php');
			}
		}

		/* カスタマイズプレビュー用の特殊スクリプト( iframe に勝手に style 挿入された場合に style を消す) */
		if ($_is['customize_preview'] === true) {
			?>
			<script>!function () { var t = window.parent.document.getElementsByTagName("iframe"); setInterval(function () { Array.prototype.forEach.call(t, function (t) { t.removeAttribute("style") }) }, 1) }();</script>
			<?php
		}
	}
	require(INC . 'json-ld.php');
	echo apply_filters('thk_json_ld', ''); // load json-ld
	
	if (!isset($luxe['amp'])) {
		/* ブログカードのキャッシュ作成（最初の一回だけ） */
		if (isset($luxe['bc_url']) && isset($luxe['bc_md5']) && isset($luxe['bc_lnk'])) {
			$blogcard = new THK_Blogcard();

			$wp_upload_dir = wp_upload_dir();
			$cache_dir = $wp_upload_dir['basedir'] . DSEP . 'luxe-blogcard' . DSEP;
			foreach ($luxe['bc_url'] as $i => $val) {
				$url_md5 = $luxe['bc_md5'][$i];
				$cache_file = $cache_dir . $url_md5[0] . DSEP . $url_md5;
				thk_flash();
				do_action('thk_create_blogcard', $val, $url_md5);
				$caches = $blogcard->thk_get_blogcard_cache($cache_file, $luxe['bc_lnk'][$i], $url_md5);
				if (isset($caches[1])) {
					?>
					<script>try { (function () { document.getElementById('bc_<?php echo $url_md5; ?>').innerHTML = '<?php echo $caches[1]; ?>'; })(); } catch (e) { console.error('bc_<?php echo $url_md5; ?>.error: ' + e.message); }</script>
					<?php
				}
				unset($luxe['bc_url'][$i]);
			}
		}
	}
	?>
</div><!--/#wp-footer-->



<script>
  document.addEventListener('DOMContentLoaded', function () {
    const container = document.querySelector('.p-work__list__contents .filters');
    const activeTab = container.querySelector('.p-work__tab__active');

    if (activeTab && container) {
      const containerRect = container.getBoundingClientRect();
      const activeRect = activeTab.getBoundingClientRect();

      if (activeRect.left < containerRect.left || activeRect.right > containerRect.right) {
        container.scrollLeft = activeTab.offsetLeft - 16; // 少し余白つけて左に寄せる
      }
    }
  });
</script>



</body>

</html>