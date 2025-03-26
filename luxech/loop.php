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

global $luxe, $_is;

$catetitle =  '新着情報';
if (is_category() || is_tag()) {
	$catetitle = single_cat_title('', false);
} elseif (is_search()) {
	$catetitle = !empty($_GET['s']) ? $_GET['s'] . 'の検索結果' : '検索結果';
}
?>
<nav class="breadcrumb">
	<ol class="breadcrumb-list">
		<li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
		<?php if (is_home()) : ?>
			<li>お役立ち記事</li>
		<?php elseif (is_category() || is_tag() || is_search()) : ?>
			<li><a href="<?php echo esc_url(home_url('/blog/')); ?>">お役立ち記事</a></li>
			<li><?php echo $catetitle; ?></li>
		<?php endif; ?>
	</ol>
</nav>

<?php if (is_home()) : ?>
	<div class="archive-title">
		<h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/materials/archive/title_archive.png" alt="Article" width="195">お役立ち記事</h1>
	</div>
<?php endif; ?>

<div class="archive-subtitle">
	<h2><span class="icon"><svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path opacity="0.4" d="M31.0125 15.389H27.0884C26.1108 15.3954 25.1827 14.9606 24.5632 14.2058L23.271 12.4193C22.6619 11.658 21.7338 11.2211 20.7577 11.2362H17.9836C13.0043 11.2362 11.1668 14.1585 11.1668 19.1276V24.499C11.1606 25.0897 37.8276 25.0889 37.8293 24.499V22.9373C37.853 17.9682 36.0629 15.389 31.0125 15.389Z" fill="#300045" />
				<path fill-rule="evenodd" clip-rule="evenodd" d="M36.2763 17.2937C36.7028 17.7925 37.0325 18.3662 37.2484 18.9856C37.6732 20.2585 37.8698 21.5962 37.8293 22.9372V29.9413C37.8276 30.5312 37.784 31.1203 37.6989 31.7041C37.5368 32.7344 37.1743 33.7231 36.6319 34.6146C36.3826 35.0452 36.0799 35.4427 35.7309 35.7977C34.1512 37.2476 32.0534 38.0023 29.91 37.8918H19.0742C16.9274 38.0015 14.8262 37.2471 13.2414 35.7977C12.8966 35.442 12.5979 35.0445 12.3523 34.6146C11.8131 33.7238 11.4583 32.7341 11.309 31.7041C11.2141 31.1213 11.1665 30.5317 11.1667 29.9413V22.9372C11.1665 22.3522 11.1982 21.7677 11.2616 21.1862C11.2749 21.0842 11.2949 20.9838 11.3147 20.8845C11.3477 20.7189 11.3801 20.5562 11.3801 20.3935C11.5005 19.6917 11.72 19.0106 12.0322 18.3704C12.9569 16.3946 14.8537 15.3889 17.9598 15.3889H31.0007C32.7404 15.2544 34.4671 15.7781 35.8376 16.856C35.9955 16.9898 36.1422 17.1362 36.2763 17.2937ZM17.7939 29.2906H31.2141H31.2378C31.5322 29.3034 31.8196 29.198 32.0356 28.9979C32.2517 28.7978 32.3785 28.5198 32.3877 28.2258C32.4044 27.9673 32.3193 27.7126 32.1506 27.5159C31.9566 27.2515 31.6491 27.0937 31.3208 27.09H17.7939C17.1849 27.09 16.6913 27.5826 16.6913 28.1903C16.6913 28.7979 17.1849 29.2906 17.7939 29.2906Z" fill="#300045" />
			</svg>
		</span><?php echo $catetitle; ?></h2>
</div>
<div class="ly-archive">
	<div class="ly-archive__main">
		<div class="archive-list">

			<?php if (have_posts()) :
				while (have_posts()) :
					the_post();
			?>
					<article class="archive-list__item">
						<a href="<?php the_permalink(); ?>">
							<figure class="img">
								<?php if (has_post_thumbnail()) {
									the_post_thumbnail('full');
								}else{
									echo '<img src="'. get_stylesheet_directory_uri() . '/assets/img/materials/archive/noimage.jpg" alt="">';
								}?></figure>
						</a>
						<div class="arichive-list__text">
							<h3 class="article-title"><?php the_title(); ?></h3>
							<div class="article-meta">
								<?php $category = get_the_category();
								if (!empty($category)) { ?>
									<div class="category">
										<?php echo $category[0]->name; ?>
									</div>
								<?php } ?>
								<div class="date">
									<time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
								</div>
							</div>
						</div>
					</article>

			<?php endwhile;
			endif; ?>
		</div>

		<div class="pagenation-wrap">
			<?php
			if (function_exists('pagination')) :
				pagination($wp_query->max_num_pages, get_query_var('paged'));
			endif; ?>
		</div>

	</div>
	<aside class="ly-archive__sidebar">
		<?php get_sidebar('pentagon'); ?>
	</aside>
</div>
