<?php
/**
 * Luxeritas Theme - archive-works.php
 * カスタム投稿タイプ「works」のアーカイブテンプレート
 */

get_header();
?>

<article>
  <div class="l-work__wrap">
    <h1 class="p-work__title">実績一覧</h1>
    <div class="l-work__main__contents">
      <div class="p-work__list__contents">

        <?php
        $terms = get_terms('works_cat');
        $current = get_queried_object();
        // ✅ 判定強化：カテゴリページでも「アーカイブ扱い」にする
        $is_archive = is_post_type_archive('works') || is_tax('works_cat');
        ?>




<ul class="filters">
  <li class="p-work__tab__item">
    <a href="<?php echo get_post_type_archive_link('works'); ?>"
       class="p-work__tab__item <?php echo (!is_tax('works_cat')) ? 'p-work__tab__active' : ''; ?>">
      全て
    </a>
  </li>
  <?php
  $categories = [
    'sp-app' => 'スマホアプリ',
    'web-app' => 'Webアプリ',
    'web-site' => 'Webサイト',
    'logo' => 'ロゴ',
    'graphic' => 'グラフィック',
    'animation' => 'アニメーション'
  ];
  foreach ($categories as $slug => $label) :
  ?>
    <li class="p-work__tab__item">
      <a href="<?php echo home_url('/works_cat/' . $slug . '/'); ?>"
         class="p-work__tab__item <?php echo is_tax('works_cat', $slug) ? 'p-work__tab__active' : ''; ?>">
        <?php echo $label; ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>






        <div class="p-work__list__wrap targets">
          <?php
          $paged = max(1, get_query_var('paged'), get_query_var('page'));

          $args = array(
            'post_type' => 'works',
            'posts_per_page' => 5,
            'paged' => $paged,
            'post_status' => 'publish'
          );

          if (is_tax('works_cat')) {
            $term = get_queried_object();
            $args['tax_query'] = array(
              array(
                'taxonomy' => 'works_cat',
                'field' => 'slug',
                'terms' => $term->slug
              )
            );
          }

          $query = new WP_Query($args);

          if ($query->have_posts()) {
            while ($query->have_posts()) {
              $query->the_post();
              get_template_part('pentagon-parts/worksitem');
            }

            $total = $query->max_num_pages;
            if (function_exists('pagination') && $total > 1) {
              echo '<div class="pagenation-wrap">';
              pagination($total, $paged);
              echo '</div>';
            }
          } else {
            echo '<p>該当する実績が見つかりませんでした。</p>';
          }

          wp_reset_postdata();
          ?>
        </div>

      </div>
    </div>
  </div>
</article>

<?php get_footer(); ?>
