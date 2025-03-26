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
get_header();

$fa_pencil = 'fa-pencil-alt';
$fa_file   = 'fa-file-alt';

// $awesome['ver'][0] を安全にチェック
if (
    isset($awesome['ver']) &&
    is_array($awesome['ver']) &&
    isset($awesome['ver'][0]) &&
    $awesome['ver'][0] === '4'
) {
    $fa_pencil = 'fa-pencil';
    $fa_file   = 'fa-file-text';
}

// カテゴリ情報を安全に取得
$categories = get_the_category($post->ID);
if (!empty($categories) && isset($categories[0])) {
    $cate = $categories[0];
} else {
    $cate = null;
}
?>

<div class="page-mv">
    <h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/materials/archive/title_download.svg" alt="DOWNLOAD"><span>資料ダウンロード</span></h1>
</div>

<nav class="breadcrumb">
    <ol class="breadcrumb-list">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
        <?php if (is_single()) : ?>
            <li><a href="<?php echo esc_url(home_url('/downloads/')); ?>">資料ダウンロード</a></li>
            <li><?php the_title(); ?></li>
        <?php endif; ?>
    </ol>
</nav>

<div class="ly-archive">
    <div class="ly-archive__main downloads-main">
        <article>
            <div id="core" class="">
                <?php
                //if ($luxe['breadcrumb_view'] === 'inner') get_template_part('breadcrumb');
                ?>
                <div itemprop="mainEntityOfPage" id="mainEntity" <?php post_class('post'); ?>>
                    <?php
                    if (function_exists('dynamic_sidebar') === true) {
                        if (isset($luxe['amp'])) {
                            if (is_active_sidebar('post-title-upper-amp') === true) {
                                $amp_widget = thk_amp_dynamic_sidebar('post-title-upper-amp');
                                if (!empty($amp_widget)) echo $amp_widget;
                            }
                        } else {
                            if (is_active_sidebar('post-title-upper') === true) {
                                dynamic_sidebar('post-title-upper');
                            }
                        }
                    }

                    if (have_posts() === true) {
                        while (have_posts() === true) :
                            the_post();

                            // <h1> タイトル
                            ?>
                            <header id="article-header">
                                <?php
                                $span = false;
                                if (isset($luxe['thumb_auto_post']) && isset($luxe['thumb_auto_insert_position'])) {
                                    if ($luxe['thumb_auto_insert_position'] === 'top') {
                                        $post_thumbnail = has_post_thumbnail();
                                        if ($post_thumbnail === true) { // タイトル上サムネイル
                                            echo '<figure id="post-thumbnail">', thk_get_the_post_thumbnail($post->ID, 'full', array('itemprop' => 'image', 'class' => 'post_thumbnail')), '</figure>';
                                        }
                                    }
                                    if ($luxe['thumb_auto_insert_position'] === 'background') {
                                        $span = true; // <span> タグ付き (タイトルに background 入れる場合)
                                    }
                                }
                                echo apply_filters('thk_h_tag', 1, '', 'headline name', '', 'entry-title', $span);
                                ?>
                            </header>
                            <?php
                            if (isset($luxe['thumb_auto_post']) && isset($luxe['thumb_auto_insert_position'])) {
                                if ($luxe['thumb_auto_insert_position'] === 'below') {
                                    $post_thumbnail = has_post_thumbnail();
                                    if ($post_thumbnail === true) { // タイトル下サムネイル
                                        echo '<figure id="post-thumbnail">', thk_get_the_post_thumbnail($post->ID, 'full', array('itemprop' => 'image', 'class' => 'post_thumbnail')), '</figure>';
                                    }
                                }
                            }
                            ?>
                            <div class="clearfix">
                                <?php
                                // get_template_part('meta');

                                if (isset($luxe['thumb_auto_post'])) {
                                    if (isset($luxe['thumb_auto_insert_position']) && $luxe['thumb_auto_insert_position'] === 'above') {
                                        $post_thumbnail = has_post_thumbnail();
                                        if ($post_thumbnail === true) { // タイトル下サムネイル
                                            echo '<figure id="p.00..ost-thumbnail">', thk_get_the_post_thumbnail($post->ID, 'full', array('itemprop' => 'image', 'class' => 'post_thumbnail')), '</figure>';
                                        }
                                    }
                                }

                                if (function_exists('dynamic_sidebar') === true) {
                                    if (isset($luxe['amp'])) {
                                        if (is_active_sidebar('post-title-under-amp') === true) {
                                            $amp_widget = thk_amp_dynamic_sidebar('post-title-under-amp');
                                            if (!empty($amp_widget)) echo $amp_widget;
                                        }
                                    } else {
                                        if (is_active_sidebar('post-title-under') === true) {
                                            dynamic_sidebar('post-title-under');
                                        }
                                    }
                                }

                                // the_content();
                                echo apply_filters('thk_content', ''); // 本文

                                if (!empty(get_field('toc'))) {
                                    echo '<div id="toc_container"><span class="toc_title">目次</span>';
                                    $fieldData = explode("\n", get_post_meta($post->ID, 'toc', true));
                                    $i = 0;
                                    foreach ($fieldData as $value) {
                                        if ($value) {
                                            echo '<li>' . $value . '</li>';
                                        }
                                        $i++;
                                    }
                                    echo '</div>';
                                }

                                if (function_exists('dynamic_sidebar') === true) {
                                    if (isset($luxe['amp'])) {
                                        if (is_active_sidebar('post-under-1-amp') === true) {
                                            $amp_widget = thk_amp_dynamic_sidebar('post-under-1-amp');
                                            if (!empty($amp_widget)) echo $amp_widget;
                                        }
                                    } else {
                                        if (is_active_sidebar('post-under-1') === true) {
                                            dynamic_sidebar('post-under-1');
                                        }
                                    }
                                }
                                ?>
                            </div>
                            <?php
                            echo apply_filters('thk_link_pages', '');
                            ?>
                            <div class="meta-box">
                                <?php
                                $luxe['meta_under'] = true;
                                get_template_part('meta');

                                $author = get_the_author();

                                if (isset($luxe['author_visible']) && !empty($author)) {
                                    if ($luxe['author_page_type'] === 'auth') {
                                        ?>
                                        <p class="vcard author"><i class="<?php echo $awesome['fas'], $fa_pencil; ?>"></i><?php echo __('Posted by', 'luxeritas'); ?> <span class="fn" itemprop="editor author creator copyrightHolder">
                                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                                <?php echo $author; ?>
                                            </a>
                                        </span>
                                        <?php
                                    } else {
                                        ?>
                                        <p class="vcard author"><i class="<?php echo $awesome['fas'], $fa_pencil; ?>"></i><?php echo __('Posted by', 'luxeritas'); ?> <span class="fn" itemprop="editor author creator copyrightHolder">
                                            <a href="<?php echo isset($luxe['thk_author_url']) ? $luxe['thk_author_url'] : THK_HOME_URL; ?>">
                                                <?php echo $author; ?>
                                            </a>
                                        </span>
                                        <?php
                                    }
                                    ?></p><?php
                                }
                                if (isset($luxe['hide_luxe_adminbar']) && $_is['edit_posts'] === true && $_is['customize_preview'] === false) {
                                    $post_link = get_edit_post_link();
                                    if (isset($post_link)) {
                                        echo '<p class="vcard author">[ ';
                                        if (isset($luxe['amp_enable'])) {
                                            $amp_permalink = thk_get_amp_permalink(get_queried_object_id());
                                            if (isset($luxe['amp'])) {
                                                echo ' <i class="', $awesome['fas'], 'fa-chevron-circle-left"></i><a href="', wp_get_canonical_url(), '">', __('Origin', 'luxeritas'), '</a>', ' &#x26A1; <a href="https://validator.ampproject.org/#url=', $amp_permalink, '" target="_blank" rel="noopener noreferrer">', __('Validate', 'luxeritas'), '</a>', ' &#x26A1; <a href="https://cdn.ampproject.org/c/', (stripos($amp_permalink, 'https:') !== false) ? 's/' : '', str_replace(array('http://', 'https://'), '', $amp_permalink), '" target="_blank" rel="noopener noreferrer">', __('Cache', 'luxeritas'), '</a>';
                                            } else {
                                                echo ' <i class="', $awesome['fas'], $fa_file, '"></i>';
                                                edit_post_link(__('Edit This', 'luxeritas'));
                                                echo ' &#x26A1; <a href="', $amp_permalink, '#development=1">AMP</a>';
                                            }
                                        } else {
                                            edit_post_link(__('Edit This', 'luxeritas'));
                                        }
                                        echo ' ]</p>';
                                    }
                                }
                                ?>
                            </div>
                            <!--/.meta-box-->
                            <?php
                            if (isset($luxe['sns_bottoms_enable']) || (function_exists('dynamic_sidebar') === true && is_active_sidebar('post-under-1') === true)) {
                                echo '<hr class="pbhr" />';
                            }
                            ?>
                </div>
                <!--/.post-->
                <aside>
                <?php
                        endwhile;
                    } else {
                        ?><p><?php echo __('No posts yet', 'luxeritas'); ?></p><?php
                    }
                ?>
                </aside>
            </div>
            <!--/#core-->

        </article>

    </div>
    <aside class="ly-archive__sidebar downloads-side">
        <?php
        $dl_url = get_field('dl_url') ? get_field('dl_url') : '';
        ?>
       <?php /*?><?php
			$post_id = $post->ID;
			if ($post_id == 3576) {
				echo <<<EOT
				<script id="_bownow_cs_sid_ee29c6d3b6be2c8d8399">
				var _bownow_cs_sid_ee29c6d3b6be2c8d8399 = document.createElement('script');
				_bownow_cs_sid_ee29c6d3b6be2c8d8399.charset = 'utf-8';
				_bownow_cs_sid_ee29c6d3b6be2c8d8399.src = 'https://contents.bownow.jp/forms/sid_ee29c6d3b6be2c8d8399/trace.js';
				document.getElementsByTagName('head')[0].appendChild(_bownow_cs_sid_ee29c6d3b6be2c8d8399);
				</script>
				EOT;
			}
			if ($post_id == 5625) {
				echo <<<EOT
				<script id="_bownow_cs_sid_65da43fb8fb44eb4d6e0">
				var _bownow_cs_sid_65da43fb8fb44eb4d6e0 = document.createElement('script');
				_bownow_cs_sid_65da43fb8fb44eb4d6e0.charset = 'utf-8';
				_bownow_cs_sid_65da43fb8fb44eb4d6e0.src = 'https://contents.bownow.jp/forms/sid_65da43fb8fb44eb4d6e0/trace.js';
				document.getElementsByTagName('head')[0].appendChild(_bownow_cs_sid_65da43fb8fb44eb4d6e0);
				</script>
				EOT;
			}
			if ($post_id == 3539) {
				echo <<<EOT
				<script id="_bownow_cs_sid_e478b00d053c44714943">
				var _bownow_cs_sid_e478b00d053c44714943 = document.createElement('script');
				_bownow_cs_sid_e478b00d053c44714943.charset = 'utf-8';
				_bownow_cs_sid_e478b00d053c44714943.src = 'https://contents.bownow.jp/forms/sid_e478b00d053c44714943/trace.js';
				document.getElementsByTagName('head')[0].appendChild(_bownow_cs_sid_e478b00d053c44714943);
				</script>
				EOT;
			}
			if ($post_id == 3573) {
				echo <<<EOT
				<script id="_bownow_cs_sid_88fb40c683af91567e11">
				var _bownow_cs_sid_88fb40c683af91567e11 = document.createElement('script');
				_bownow_cs_sid_88fb40c683af91567e11.charset = 'utf-8';
				_bownow_cs_sid_88fb40c683af91567e11.src = 'https://contents.bownow.jp/forms/sid_88fb40c683af91567e11/trace.js';
				document.getElementsByTagName('head')[0].appendChild(_bownow_cs_sid_88fb40c683af91567e11);
				</script>
				EOT;
			}
			if ($post_id == 4463) {
				echo <<<EOT
				<script id="_bownow_cs_sid_0af7a7bf9851a8f636ec">
				var _bownow_cs_sid_0af7a7bf9851a8f636ec = document.createElement('script');
				_bownow_cs_sid_0af7a7bf9851a8f636ec.charset = 'utf-8';
				_bownow_cs_sid_0af7a7bf9851a8f636ec.src = 'https://contents.bownow.jp/forms/sid_0af7a7bf9851a8f636ec/trace.js';
				document.getElementsByTagName('head')[0].appendChild(_bownow_cs_sid_0af7a7bf9851a8f636ec);
				</script>
				EOT;
			}
		?><?php */?>
        <?php echo do_shortcode('[contact-form-7 id="3536" title="資料ダウンロード" dl_url="' . esc_url($dl_url) . '" ]'); ?>
    </aside>
</div>

</main>
<?php thk_call_sidebar(); ?>
</div>
<!--/#primary-->

<script>
    document.addEventListener('wpcf7mailsent', function(event) {
        location = 'https://pentagon.tokyo/dlthanks/';
    }, false);
</script>

<?php echo apply_filters('thk_footer', ''); ?>
