<?php
// ACFフィールドを事前に1回ずつだけ取得
$worktitle = get_field('worktitle');
$customer_field = get_field('customer');
$workcategory = get_field('workcategory');

// サムネイル画像
$image = get_the_post_thumbnail_url() ?: get_stylesheet_directory_uri().'/assets/img/materials/work/work_noimage.png';

// タイトルと会社名処理
$title = !empty($worktitle) ? $worktitle : get_the_title();
$customer = !empty($customer_field) ? $customer_field . '様' : '会社名非公開';
if ($customer === '会社名非公開様') {
  $customer = '会社名非公開';
}

// カテゴリー取得（安全に）
$terms = get_the_terms($post->ID, 'works_cat');
$term_slug = !empty($terms) && !is_wp_error($terms) ? $terms[0]->slug : 'uncategorized';
?>

<div class="p-work__list__item target" data-category="<?= esc_attr($term_slug); ?>">
  <div class="p-work__list__item__img">
    <img src="<?= esc_url($image); ?>" alt="">
  </div>
  <div class="p-work__list__text__box">
    <div class="p-work__list__item__text">
      <p class="p-work__list__item__text__name"><?= esc_html($customer); ?></p>
      <p class="p-work__list__item__text__title"><?= esc_html($title); ?></p>
      <?php if (!empty($workcategory)) : ?>
        <p class="p-work__list__item__text__category"><?= esc_html($workcategory); ?></p>
      <?php endif; ?>
    </div>
    <div class="p-work__more__link">
      <a href="<?php the_permalink(); ?>">もっと見る</a>
    </div>
  </div>
</div>
