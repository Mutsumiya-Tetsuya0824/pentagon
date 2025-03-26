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
* Template Name: blog
*/

global $luxe, $_is, $awesome;
get_header();
$fa_pencil	= 'fa-pencil-alt';
$fa_file	= 'fa-file-alt';

if ( isset($awesome['ver']) && is_string($awesome['ver']) && $awesome['ver'][0] === '4' ) {
	$fa_pencil	= 'fa-pencil';
	$fa_file	= 'fa-file-text';
}
?>
	<article>

		<!-- タイトル -->
		<div class="article">
			<h1>新着記事</h1>
		</div>
		<!-- /タイトル -->

		<!-- 記事一覧 -->
		<ul class="post_list">
			<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array( 'post_type' => 'post', 'posts_per_page' => 12, 'paged' => $paged );
						$wp_query = new WP_Query($args);
						while ( have_posts() ) : the_post(); ?>
				<li>
					<a href="<?php echo get_the_permalink() ?>">
						<?php the_post_thumbnail('medium') ?>
						<?php the_title() ?>
					</a>
					<?php get_the_date('y/m/d') ?>
				</li>
			<?php endwhile; ?>
		</ul>
		<!-- /記事一覧 -->

		<!-- pagenation -->
		<div id="bottom-area" class="toc grid clearfix">
			<div class="pagenation">
				<?php 
					if ($wp_query->max_num_pages > 1) {
							echo paginate_links(array(
									'base' => get_pagenum_link(1) . '%_%',
									'format' => 'page/%#%/',
									'current' => max(1, $paged),
									'mid_size' => 1,
									'total' => $wp_query->max_num_pages
							));
					} 
					wp_reset_postdata();
				?>
			</div>
		</div>
		<!-- /pagenation -->

		<div class="article-tags">
			<h4><a href="/category/app/">アプリ開発</a></h4>
			<span class="blog-tags minor-meta">
				<a href="/tag/iphone/">iPhoneアプリ</a>
				<a href="/tag/android/">Androidアプリ</a>
				<a href="/tag/request/">アプリ開発の依頼</a>
				<a href="/tag/cost/">アプリ開発の費用</a>
				<a href="/tag/average/">アプリ開発の相場</a>
				<a href="/tag/technical/">エンジニアブログ</a>
				<a href="/tag/matching/">マッチングアプリ</a>
			</span>


			<h4><a href="/category/design/">デザイン</a></h4>
			<span class="blog-tags minor-meta">
				<a href="/tag/app-design/">アプリデザイン</a>
				<a href="/tag/web-design/">Webデザイン</a>
				<a href="/tag/logo-design/">ロゴデザイン</a>
				<a href="/tag/ar-filter">ARフィルター</a>
			</span>
		</div>
	</article>
</main>
<?php //サイドバー表示しない。//thk_call_sidebar(); ?>
</div><!--/#primary-->
<?php echo apply_filters( 'thk_footer', '' ); ?>

<style>
	#main {
		width: 100%; 
	  flex: 0 1 1080px;
    max-width: none;
	}
	#toc_container {
		display: none;
	}

	h1 {
		color: #F8596F;
	}
</style>