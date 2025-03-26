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

$fa_pencil	= 'fa-pencil-alt';
$fa_file	= 'fa-file-alt';

if ( isset($awesome['ver']) && is_string($awesome['ver']) && $awesome['ver'][0] === '4' ) {
	$fa_pencil	= 'fa-pencil';
	$fa_file	= 'fa-file-text';
}

$image = get_the_post_thumbnail() ? get_the_post_thumbnail_url( ) :  get_stylesheet_directory_uri().'/assets/img/materials/work/work_noimage.png';
$title = !empty(get_field('worktitle')) ? get_field('worktitle') : get_the_title();

$customer = !empty(get_field('customer')) ? get_field('customer') : '会社名非公開';
?>

<article>
  <div class="p-work__content">
    <div class="p-work-detail__top">
      <h1 class="p-work-detail__top__title"><?= esc_attr($title); ?></h1>
      <p class="p-work-detail__top__company"><?= esc_attr($customer); ?></p>
      <?php if(!empty(get_field('workcategory'))): ?>
        <p class="p-work-detail__top__category"><?= esc_attr(get_field('workcategory')); ?></p>
      <?php endif; ?>
    </div>

    <div class="p-work-detail__mv">
      <div>
        <img src="<?= esc_url($image); ?>" alt="">
      </div>
    </div>

    <?php if(!empty(get_field('summary'))):
      $summary = get_field('summary');
      ?>
      <div class="p-work-detail__section p-work-detail__section__01">
        <div class="p-work-detail__section__inner">
          <h2 class="p-work-detail__section__title" data-pagettl="Outline">概要</h2>
          <div class="p-work-detail__section__01__text">
            <?php if($summary['copy'] != ''): ?>
              <p class="p-work-detail__section__01__copy"><?= esc_attr($summary['copy']); ?></p>
            <?php endif;
              if($summary['textarea'] != ''): ?>
            <p class="p-work-detail__section__01__text__detail"><?= $summary['textarea']; ?></p>
            <?php endif;  ?>
          </div>
        </div>
        <?php if(!empty($summary['movies']) || !empty($summary['images'])): ?>
          <div class="p-work-detail__img__box">
            <?php if(!empty($summary['movies'])): ?>
              <?php
              foreach ($summary['movies'] as $movie) : ?>
              <div class="p-work-detail__img__item__movie">
                <?php
                  if(!empty($movie['youtube'])){
                    $youtube_id =  get_youtube_id_from_url($movie['youtube']);
                    ?>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo esc_attr($youtube_id); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>
                    <?php
                  }else{
                    $movie_url = $movie['mp4'];
                    ?>
                    <video src="<?php echo esc_url($movie_url ); ?>"  playsinline controls loading="lazy"></video>
                    <?php
                  }
                ?>

              </div>
              <?php  endforeach;  ?>
            <?php endif ?>
            <?php if(!empty($summary['images'])): ?>
              <?php
              foreach ($summary['images'] as $image) : ?>
              <div class="p-work-detail__img__item">
                <img src="<?= esc_url(wp_get_attachment_image_url( $image, 'full')); ?>" alt="">
              </div>
              <?php  endforeach;  ?>
            <?php endif ?>
          </div>
        <?php endif;  ?>
      </div>
    <?php endif; ?>


    <?php if(!empty(get_field('projectsumary'))):
      $project = get_field('projectsumary');
      ?>
      <div class="p-work-detail__section p-work-detail__section__02">
        <div class="p-work-detail__section__inner">
          <h2 class="p-work-detail__section__title" data-pagettl="Project Outline">プロジェクト概要</h2>
          <div class="p-work-detail__outline__list">
            <dl>
              <div class="p-work-detail__outline__list__item">
                <dt class="p-work-detail__outline__list__ttl">サービス</dt>
                <dd class="p-work-detail__outline__list__service p-work-detail__outline__list__desc">
    <?php
    $service = get_field_object('field_624d0b07e2797');
    $selected_choice = !empty($project['service']) ? $project['service'] : [];

    if (!empty($service) && is_array($service['choices'])) {
        foreach ($service['choices'] as $s) {
            $is_active = in_array($s, $selected_choice) ? 'active' : 'passive';
            echo '<div class="p-work-detail__service__tag p-work-detail__service__tag__' . esc_attr($is_active) . '">' . esc_attr($s) . '</div>';
        }
    }
    ?>
</dd>

              </div>
              <?php if(!empty($project['term'])): ?>
                <div class="p-work-detail__outline__list__item">
                  <dt class="p-work-detail__outline__list__ttl">期間</dt>
                  <dd class="p-work-detail__outline__list__desc">
                    <?= $project['term']; ?>
                  </dd>
                </div>
              <?php endif; ?>
              <?php if(!empty($project['teams'])): ?>
              <div class="p-work-detail__outline__list__item">
                <dt class="p-work-detail__outline__list__ttl">制作体制</dt>
                <dd class="p-work-detail__outline__list__desc">
                  <dl class="p-work-detail__product__list">
                    <?php foreach ($project['teams'] as $team) : ?>
                      <div class="p-work-detail__product__list__item">
                        <dt><?= esc_attr($team['item']); ?></dt>
                        <dd><?= esc_attr($team['num']); ?></dd>
                      </div>
                    <?php endforeach; ?>
                  </dl>
                </dd>
              </div>
              <?php endif; ?>

            </dl>
          </div>
        </div>
      </div>
    <?php endif; ?>


    <?php
    // 他の実績
    $exclude_id = [$post->ID];
    
    // タームの取得とエラーチェック
    $terms = get_the_terms($post, 'works_cat');
    $term_slug = '';

    if (!empty($terms) && is_array($terms)) {
        $term_slug = $terms[0]->slug; // タームがある場合は slug を取得
    }

    $args = [
        'post_type'      => 'works',
        'posts_per_page' => 3,
        'orderby'        => 'rand',
        'post__not_in'   => $exclude_id,
    ];

    // タームが取得できている場合のみ tax_query を追加
    if (!empty($term_slug)) {
        $args['tax_query'] = [
            [
                'taxonomy' => 'works_cat',
                'field'    => 'slug',
                'terms'    => $term_slug
            ]
        ];
    }

    $the_query = new WP_Query($args);
?>

    <?php if(!empty(get_field('customervoice')['content']) || $the_query->have_posts() ) : ?>

      <div class="p-work-detail__section p-work-detail__section__01">
        <div class="p-work-detail__section__inner">
          <?php
          if(!empty(get_field('customervoice')['content'])):
          ?>

          <h2 class="p-work-detail__section__title" data-pagettl="Reviews">お客様の声</h2>
          <div class="p-work-detail__previews__text">
            <p class="p-work-detail__previews__text__main">
              <?= get_field('customervoice')['content']; ?>
            </p>
            <p class="p-work-detail__previews__text__customer"><?= esc_attr(get_field('customervoice')['name']); ?></p>
          </div>

          <?php endif; ?>


          <?php

            if($the_query->have_posts()): ?>

          <div class="p-work-detail__work__more">
            <p class="p-work-detail__work__more__ttl">他の実績をみる</p>
            <div class="p-work-detail__work__more__list">
              <?php
                while($the_query->have_posts()):
                  $the_query->the_post();
                  $image = get_the_post_thumbnail() ? get_the_post_thumbnail_url( ) :  get_stylesheet_directory_uri().'/assets/img/materials/work/work_noimage.png';
                  $title = !empty(get_field('worktitle')) ? get_field('worktitle') : get_the_title();
                  $customer = !empty(get_field('customer')) ? get_field('customer').'様' : '会社名非公開';

              ?>
              <div class="p-work-detail__work__more__item">
                <a href="<?php the_permalink(); ?>">
                  <div class="p-work-detail__work__more__item__img"><img src="<?= esc_url($image); ?>" alt=""></div>
                  <div class="p-work-detail__work__more__item__text">
                    <p class="p-work-detail__work__more__item__text__company"><?= esc_attr($customer); ?></p>
                    <p class="p-work-detail__work__more__item__text__ttl"><?= esc_attr($title); ?></p>
                    <?php
                      if(!empty(get_field('workcategory'))):?>
                      <p class="p-work-detail__work__more__item__text__category"><?= esc_attr(get_field('workcategory')); ?></p>

                    <?php endif; ?>
                  </div>
                </a>
              </div>
              <?php
                endwhile;
              ?>

            </div>
          </div>
          <?php
            endif; wp_reset_postdata();
          ?>
        </div>
      </div>

    <?php endif; ?>
  </div>
</article>
</main>
<?php //サイドバー表示しない。//thk_call_sidebar();
?>
</div>
<!--/#primary-->
<?php echo apply_filters('thk_footer', ''); ?>
