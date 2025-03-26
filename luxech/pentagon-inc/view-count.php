<?php
// 閲覧数のカウント
function update_custom_meta_views()
{
  global $post;
  if ('publish' === get_post_status($post) && is_single()) {
    $views = intval(get_post_meta($post->ID, '_custom_meta_views', true));
    update_post_meta($post->ID, '_custom_meta_views', ($views + 1));
  }
}
add_action('wp_head', 'update_custom_meta_views');


// 投稿一覧にvewsの列を追加
function add_column_custom_meta_views($columns)
{
  $columns['views'] = 'Views';
  return $columns;
}
add_filter('manage_posts_columns', 'add_column_custom_meta_views');

// 投稿一覧でのvews数表示
function add_column_custom_meta_views_content($column_name, $post_id)
{
  $views = intval(get_post_meta($post_id, '_custom_meta_views', true));
  echo $views;
}
add_action('manage_posts_custom_column', 'add_column_custom_meta_views_content', 10, 2);

// 投稿一覧にて並び替え
function sortable_column_custom_meta_views($columns)
{
  $columns['views'] = 'Views';
  return $columns;
}
add_filter('manage_edit-post_sortable_columns', 'sortable_column_custom_meta_views');

// 数値として並び替え
function custom_orderby_custom_meta_views($vars)
{
  if (isset($vars['orderby']) && 'Views' == $vars['orderby']) {
    $vars = array_merge($vars, array(
      'meta_key' => '_custom_meta_views',
      'orderby' => 'meta_value_num'
    ));
  }
  return $vars;
}
add_filter('request', 'custom_orderby_custom_meta_views');




// 人気順記事一覧
function get_most_viewed($post_type = 'post', $posts_per_page = '3', $indent = 4)
{
  global $post;

  // インデントの生成
  $tab = '';
  for ($i = 0; $i < $indent; $i++) {
    $tab .= "\t";
  }


  $args = array(
    'post_type' => $post_type,
    'post_status' => 'publish',
    'posts_per_page' => $posts_per_page,
    'orderby' => 'meta_value_num',
    'meta_key' => '_custom_meta_views',
    'order' => 'DESC'
  );

  $the_query = new WP_Query($args);
  return $the_query;
}
