<?php


/**
 * Luxeritas WordPress Theme - free/libre wordpress platform
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 */








// JSMin を根本的に無効化

if (function_exists('thk_jsmin')) {
  remove_all_filters('luxe_child_js_compress');
  function thk_jsmin($js = '')
  {
    return $js; // 圧縮処理をスルー
  }
}



if (!isset($def_border_color)) {
  $def_border_color = '#ddd'; // デフォルト色
}







require_once('pentagon-inc/view-count.php');
require_once('pentagon-inc/custompost.php');




if (!isset($luxe) || !is_array($luxe)) {
  $luxe = array();
}

if (!function_exists('luxeritas_safe_globals')) {
  function luxeritas_safe_globals()
  {
    global $luxe;
    if (!isset($luxe) || !is_array($luxe)) {
      $luxe = [];
    }
    if (!isset($GLOBALS['global_navi_open_close'])) {
      $GLOBALS['global_navi_open_close'] = isset($luxe['global_navi_open_close']) ? $luxe['global_navi_open_close'] : '';
    }
  }
  add_action('after_setup_theme', 'luxeritas_safe_globals');
}

if (!function_exists('display_post_top_thumbnail')) {
  function display_post_top_thumbnail()
  {
    if (has_post_thumbnail()) {
      global $post;
      echo '<figure id="post-thumbnail">' . get_the_post_thumbnail($post->ID, 'full', ['itemprop' => 'image', 'class' => 'post_thumbnail']) . '</figure>';
    }
  }
}
remove_filter('thk_content', 'display_post_top_thumbnail');

if (!function_exists('pagination')) {
  function pagination($pages, $paged, $range = 5, $show_only = false)
  {
    $pages = (int) $pages;
    $paged = $paged ?: 1;
    if (wp_is_mobile()) {
      $range = 4;
    }
    $text_before = '<svg xmlns="http://www.w3.org/2000/svg" width="7.41" height="12" viewBox="0 0 7.41 12"><path d="M2.205.409.8,1.819l4.58,4.59L.8,11l1.41,1.41,6-6Z" transform="translate(8.205 12.409) rotate(180)" fill="#ff5268"/></svg>';
    $text_next = '<svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.20504 0.40918L0.795044 1.81918L5.37504 6.40918L0.795044 10.9992L2.20504 12.4092L8.20504 6.40918L2.20504 0.40918Z" fill="#FF5268"/></svg>';
    if ($show_only && $pages === 1) {
      echo '<div class="pagination"><span class="current pager">1</span></div>';
      return;
    }
    if ($pages === 1)
      return;
    echo '<div class="pagination">';
    if ($paged > 1) {
      echo '<a href="' . get_pagenum_link($paged - 1) . '" class="prev pager" data-page="' . ($paged - 1) . '">' . $text_before . '</a>';
    }
    for ($i = 1; $i <= $pages; $i++) {
      if ($i <= $paged + $range && $i >= $paged - $range) {
        if ($paged == $i) {
          echo '<span class="current pager">' . $i . '</span>';
        } else {
          echo '<a href="' . get_pagenum_link($i) . '" class="pager">' . $i . '</a>';
        }
      }
    }
    if ($paged < $pages) {
      echo '<a href="' . get_pagenum_link($paged + 1) . '" class="next pager" data-page="' . ($paged + 1) . '">' . $text_next . '</a>';
    }
    echo '</div>';
  }
}

if (!function_exists('my_wp_nav_menu_objects')) {
  function my_wp_nav_menu_objects($items, $args)
  {
    foreach ($items as &$item) {
      $item->attr_title = $item->title;
      $icon = get_field('icon', $item);
      if ($icon) {
        $item->title = '<span class="icon">' . $icon . '</span>' . $item->title;
      }
    }
    return $items;
  }
  add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);
}

if (!function_exists('custom_mime_types')) {
  function custom_mime_types($mimes)
  {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'custom_mime_types');
}

if (!function_exists('fileDir')) {
  function fileDir()
  {
    return get_stylesheet_directory_uri();
  }
  add_shortcode('direcho', 'fileDir');
}

if (!function_exists('custom_shortcode_atts_wpcf7_filter')) {
  function custom_shortcode_atts_wpcf7_filter($out, $pairs, $atts)
  {
    $my_attr = 'dl_url';
    if (isset($atts[$my_attr])) {
      $out[$my_attr] = $atts[$my_attr];
    }
    return $out;
  }
  add_filter('shortcode_atts_wpcf7', 'custom_shortcode_atts_wpcf7_filter', 10, 3);
}

add_filter('run_wptexturize', '__return_false');

if (!function_exists('specific_url_redirect')) {
  function specific_url_redirect()
  {
    $uri = $_SERVER['REQUEST_URI'];
    $redirects = [
      '/app/1495/' => '2040',
      '/app/2215/' => '2046',
      '/app/2337/' => '2058',
      '/app/2867/' => '2079',
      '/app/2419/' => '2073',
      '/app/1573/' => '2070',
      '/app/1245/' => '2043',
      '/app/2257/' => '2049',
      '/app/2275/' => '2052',
      '/app/2312/' => '2055',
      '/app/2397/' => '2067',
      '/app/2375/' => '2064',
      '/app/2351/' => '2061',
    ];
    foreach ($redirects as $key => $val) {
      if (strstr($uri, $key)) {
        wp_redirect("https://blog.pentagon.tokyo/$val/", 301);
        exit;
      }
    }
  }
  add_action('get_header', 'specific_url_redirect');
}

if (!function_exists('myPreGetPosts')) {
  function myPreGetPosts($query)
  {
    if (!is_admin() && $query->is_main_query()) {
      if ($query->is_post_type_archive('works')) {
        $query->set('posts_per_page', 5);
      }
    }
  }
  add_action('pre_get_posts', 'myPreGetPosts');
}

if (!function_exists('add_posttype_classes')) {
  function add_posttype_classes($classes)
  {
    if (is_post_type_archive('works') || is_singular('works') || is_tax('works_cat')) {
      $classes[] = 'l-work';
    }
    if (is_page('company')) {
      $classes[] = 'l-company';
    }
    if (is_page(['uiux', 'mobile'])) {
      $classes[] = 'l-services page-template-page_onecolumn';
    }
    return $classes;
  }
  add_filter('body_class', 'add_posttype_classes');
}

if (!function_exists('disable_redirect_canonical')) {
  function disable_redirect_canonical($redirect_url)
  {
    if (is_singular('works')) {
      return false;
    }
    return $redirect_url;
  }
  add_filter('redirect_canonical', 'disable_redirect_canonical');
}

add_action('init', function () {
  add_rewrite_rule(
    '^works_cat/([^/]+)/page/([0-9]+)/?$',
    'index.php?taxonomy=works_cat&term=$matches[1]&post_type=works&paged=$matches[2]',
    'top'
  );
});

if (!function_exists('get_youtube_id_from_url')) {
  function get_youtube_id_from_url($url)
  {
    preg_match('/(http(s|):|)\/\/(www\.|)yout(.*?)\/(embed\/|watch.*?v=|)([a-z_A-Z0-9\-]{11})/i', $url, $results);
    return $results[6];
  }
}

if (!function_exists('my_wpcf7_mail_sent')) {
  function my_wpcf7_mail_sent($contact_form)
  {
    if ($contact_form->id() == 6757)
      return;
    $url = (strpos($_SERVER['REQUEST_URI'], '/contact/') !== false || $_SERVER['REQUEST_URI'] === '/') ? '/contact/thanks/' : '/dlthanks/';
    echo "<script>location = '$url';</script>";
  }
  add_action('wpcf7_mail_sent', 'my_wpcf7_mail_sent');
}

if (!function_exists('my_orderby_modified')) {
  function my_orderby_modified($query)
  {
    if ($query->is_main_query()) {
      if ($query->is_home() || $query->is_category() || $query->is_archive()) {
        $query->set('orderby', 'modified');
      }
    }
  }
  add_action('pre_get_posts', 'my_orderby_modified');
}

if (!function_exists('custom_tel_validation_filter')) {
  function custom_tel_validation_filter($result, $tag)
  {
    $name = $tag->name;
    if (isset($_POST[$name])) {
      $value = sanitize_text_field($_POST[$name]);
      if (!preg_match('/^(0\d{1,4}-\d{1,4}-\d{4}|^\d{10,11})$/', $value)) {
        $result->invalidate($tag, '正しい電話番号を入力してください（例: 090-1234-5678）。');
      }
    }
    return $result;
  }
  add_filter('wpcf7_validate_tel*', 'custom_tel_validation_filter', 20, 2);
}

add_filter('wpcf7_autop_or_not', '__return_false');

if (!function_exists('move_toc_before_first_h2')) {
  function move_toc_before_first_h2($content)
  {
    if (is_single() && !is_admin()) {
      $toc_shortcode = do_shortcode('[toc]');
      $content = preg_replace('/<div id="toc_container">.*?<\/div>/s', '', $content);
      $content = preg_replace('/(<h2.*?>)/', '<div id="toc_container"><span class="toc_title">この記事の内容</span>' . $toc_shortcode . '</div>' . '$1', $content, 1);
    }
    return $content;
  }
  add_filter('the_content', 'move_toc_before_first_h2');
}


add_filter('luxe_speedup_compress', '__return_false');

if (function_exists('thk_compress')) {
  remove_action('customize_save_after', 'thk_compress', 75);
  function thk_compress()
  {
    // 強制的に中身を空にする
    return;
  }
}










add_action('wp_enqueue_scripts', function () {
  // Luxeritas親テーマの style.css を読み込む
  wp_enqueue_style('luxeritas-style', get_template_directory_uri() . '/style.css');

  // 子テーマの style.css を読み込む（上書きが必要なら）
  wp_enqueue_style('luxeritas-child-style', get_stylesheet_directory_uri() . '/style.css', ['luxeritas-style']);
});



add_action('after_setup_theme', function () {
  global $luxe;
  if (!is_array($luxe)) {
    $luxe = [];
  }

  // 空キー削除（ルート）
  foreach (array_keys($luxe) as $key) {
    if (trim($key) === '') {
      unset($luxe[$key]);
    }
  }

  // Luxeritasの設定キーを安全に初期化
  $defaults = [
    'title_position' => '',
    'head_margin_top' => 0,
    'head_band_height' => 0,
    'head_padding_top' => 0,
    'head_padding_right' => 0,
    'head_padding_bottom' => 0,
    'head_padding_left' => 0,
    'side_1_width' => 0,
    'side_2_width' => 0,
    'side_position' => '',
    'side_discrete' => '',
    'cont_padding_top' => 0,
    'cont_padding_bottom' => 0,
    'cont_padding_left' => 0,
    'cont_padding_right' => 0,
    'side_border_radius' => 0,
    'thumbnail_layout' => '',
    'gnavi_border_top_width' => 0,
    'gnavi_border_bottom_width' => 0,
    'gnavi_top_buttom_padding' => 0,
    'gnavi_bar_top_buttom_padding' => 0,
    'blogcard_max_width' => 0,
    'blogcard_radius' => 0,
    'blogcard_img_radius' => 0,
    'blogcard_img_position' => '',
    'gallery_type' => '',
    'sns_tops_type' => '',
    'sns_bottoms_type' => '',
    'column_style' => '',
    'column_home' => '',
    'column_post' => '',
    'column_page' => '',
    'column_archive' => '',
    'column3_position' => '',
    'content_discrete' => '',
    'content_side_discrete' => '',
    'bootstrap_footer' => '',
    'jquery_load' => '',
    'wp_block_library_load' => '',
    'child_css_compress' => 'bind',
    'child_js_compress' => '',
    'font_alphabet' => '',
    'font_japanese' => '',
    'title_position' => '',
    'head_margin_top' => 0,
    'meta_keywords' => '', // ← ここに追加！
    'head_band_height' => 0,
    'head_padding_top' => 0,
    'head_padding_right' => 0,
    'head_padding_bottom' => 0,
    'head_padding_left' => 0,
    'side_1_width' => 0,
    'side_2_width' => 0,
    'side_position' => '',
    'side_discrete' => '',
    'cont_padding_top' => 0,
    'cont_padding_bottom' => 0,
    'cont_padding_left' => 0,
    'cont_padding_right' => 0,
    'side_border_radius' => 0,
    'overall_image' => '',
    'thumbnail_layout' => '',
    'gnavi_border_top_width' => 0,
    'gnavi_border_bottom_width' => 0,
    'gnavi_top_buttom_padding' => 0,
    'gnavi_bar_top_buttom_padding' => 0,
    'blogcard_max_width' => 0,
    'blogcard_radius' => 0,
    'blogcard_img_radius' => 0,
    'blogcard_img_position' => '',
    'trans_image' => '', // ← 追加
    'gallery_type' => '',
    'column_default' => '',
    'bootstrap_js_load_type' => '',
    'bootstrap_header' => '',
    'html_compress' => '',
    'home_text' => '',
    'author_page_type' => ''
  ];

  foreach ($defaults as $key => $val) {
    if (!isset($luxe[$key]) || is_array($luxe[$key])) {
      $luxe[$key] = $val;
    }
  }

  // 空のキーを含む設定を削除（ルートレベル）
  foreach ($luxe as $key => $val) {
    if ($key === '') {
      unset($luxe[$key]);
    }
  }

  // overall_image が空文字キーやネスト配列なら削除
  if (isset($luxe['overall_image']) && is_array($luxe['overall_image'])) {
    foreach ($luxe['overall_image'] as $k => $v) {
      if (trim($k) === '' || is_array($v) || $v === null) {
        unset($luxe['overall_image'][$k]);
      }
    }
  }
  // フォントが配列だったら空文字に
  if (is_array($luxe['font_alphabet'])) {
    $luxe['font_alphabet'] = '';
  }
  if (is_array($luxe['font_japanese'])) {
    $luxe['font_japanese'] = '';
  }
});

add_filter('luxe_child_js_compress', '__return_false');

if (function_exists('thk_child_js_comp')) {
  remove_action('customize_save_after', 'thk_child_js_comp', 80);
}
if (!isset($luxe['meta_keywords'])) {
  $luxe['meta_keywords'] = '';
}

// JSMinが走るのを根本的にブロック
if (function_exists('thk_jsmin')) {
  function thk_jsmin($js = '')
  {
    return $js; // 空のまま返してスルー
  }
}


add_action('customize_save_after', function () {
  global $luxe;

  if (!is_array($luxe))
    $luxe = [];

  // 空のキー削除（1階層目）
  foreach (array_keys($luxe) as $key) {
    if (trim($key) === '') {
      unset($luxe[$key]);
    }
  }

  // overall_image の中の空キーも削除
  if (isset($luxe['overall_image']) && is_array($luxe['overall_image'])) {
    foreach ($luxe['overall_image'] as $k => $v) {
      if (trim($k) === '' || is_array($v) || $v === null) {
        unset($luxe['overall_image'][$k]);
      }
    }
  }

  // 💡 さらに：'overall_image' 自体が空だったら、削除 or 空文字にしてしまう
  if (empty($luxe['overall_image'])) {
    $luxe['overall_image'] = '';
  }

  // 念押し：フォント
  if (is_array($luxe['font_alphabet'])) {
    $luxe['font_alphabet'] = '';
  }
  if (is_array($luxe['font_japanese'])) {
    $luxe['font_japanese'] = '';
  }

  // 念押し
  global $def_border_color;
  if (!isset($def_border_color)) {
    $def_border_color = '#ddd';
  }
});




// 応急処置：def_border_color 未定義対策
if (!isset($def_border_color)) {
  $def_border_color = '#ddd'; // または好みの色に
}


add_filter('option_theme_mods_' . get_template(), function ($mods) {
  if (!is_array($mods))
    return $mods;
  foreach ($mods as $k => $v) {
    if (trim($k) === '') {
      unset($mods[$k]);
    }
    if ($k === 'overall_image' && is_array($v)) {
      foreach ($v as $kk => $vv) {
        if (trim($kk) === '' || is_array($vv) || $vv === null) {
          unset($mods[$k][$kk]);
        }
      }
    }
  }
  return $mods;
});



add_action('after_setup_theme', function () {
  global $luxe;

  if (!is_array($luxe)) {
    $luxe = [];
  }

  $required_keys = [
    'title_position',
    'head_margin_top',
    'head_band_height',
    'head_padding_top',
    'head_padding_right',
    'head_padding_bottom',
    'head_padding_left',
    'side_1_width',
    'side_2_width',
    'side_position',
    'side_discrete',
    'cont_padding_top',
    'cont_padding_bottom',
    'cont_padding_left',
    'cont_padding_right',
    'overall_image'
  ];

  foreach ($required_keys as $key) {
    if (!isset($luxe[$key])) {
      $luxe[$key] = is_numeric(str_replace('_', '', $key)) ? 0 : ''; // 数値系は 0、その他は空文字
    }
  }

  // overall_image が null や配列でも空なら初期化
  if (is_array($luxe['overall_image'])) {
    foreach ($luxe['overall_image'] as $k => $v) {
      if (trim($k) === '' || is_array($v) || $v === null) {
        unset($luxe['overall_image'][$k]);
      }
    }
  }

  if (empty($luxe['overall_image']) || is_array($luxe['overall_image'])) {
    $luxe['overall_image'] = '';
  }
});

add_action('after_setup_theme', function () {
  global $luxe;

  if (!is_array($luxe)) {
    $luxe = [];
  }

  $required_keys = [
    'title_position',
    'head_margin_top',
    'head_band_height',
    'head_padding_top',
    'head_padding_right',
    'head_padding_bottom',
    'head_padding_left',
    'side_1_width',
    'side_2_width',
    'side_position',
    'side_discrete',
    'cont_padding_top',
    'cont_padding_bottom',
    'cont_padding_left',
    'cont_padding_right',
    'overall_image'
  ];

  foreach ($required_keys as $key) {
    if (!isset($luxe[$key])) {
      $luxe[$key] = is_numeric(str_replace('_', '', $key)) ? 0 : ''; // 数値系は 0、その他は空文字
    }
  }

  // overall_image が null や配列でも空なら初期化
  if (is_array($luxe['overall_image'])) {
    foreach ($luxe['overall_image'] as $k => $v) {
      if (trim($k) === '' || is_array($v) || $v === null) {
        unset($luxe['overall_image'][$k]);
      }
    }
  }

  if (empty($luxe['overall_image']) || is_array($luxe['overall_image'])) {
    $luxe['overall_image'] = '';
  }
});



add_action('after_setup_theme', function () {
  global $luxe;

  if (!is_array($luxe))
    $luxe = [];

  // 安全な初期化
  $defaults = [
    'font_alphabet' => '',
    'font_japanese' => '',
    'overall_image' => '',
    'column_default' => '',
    'bootstrap_js_load_type' => '',
    'bootstrap_header' => '',
    'html_compress' => '',
    'home_text' => '',
    'author_page_type' => '',
  ];

  foreach ($defaults as $key => $val) {
    if (!isset($luxe[$key]) || is_array($luxe[$key])) {
      $luxe[$key] = $val;
    }
  }

  // overall_image が配列で中に空キーがある場合は削除
  if (isset($luxe['overall_image']) && is_array($luxe['overall_image'])) {
    foreach ($luxe['overall_image'] as $k => $v) {
      if (trim($k) === '' || is_array($v) || $v === null) {
        unset($luxe['overall_image'][$k]);
      }
    }
  }

  // フォント指定が配列なら空文字に
  if (is_array($luxe['font_alphabet']))
    $luxe['font_alphabet'] = '';
  if (is_array($luxe['font_japanese']))
    $luxe['font_japanese'] = '';

  // def_border_color の定義（念のため）
  global $def_border_color;
  if (!isset($def_border_color)) {
    $def_border_color = '#ddd';
  }
});


add_action('after_setup_theme', function () {
  global $luxe;
  if (!isset($luxe['ver'])) {
    $luxe['ver'] = '';
  }
});



add_filter('luxe_speedup_compress', '__return_false');
add_filter('luxe_child_js_compress', '__return_false');

// JSMinが走る箇所を根本的に止める
if (function_exists('thk_jsmin')) {
  function thk_jsmin($js = '') {
    return $js; // 空のまま返してスルー
  }
}
