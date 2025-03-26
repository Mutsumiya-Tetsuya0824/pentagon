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

global $luxe;
get_header();
?>
<div class="page-mv">
	<h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/materials/archive/title_download.svg" alt="DOWNLOAD"><span>資料ダウンロード</span></h1>
</div>
<nav class="breadcrumb">
	<ol class="breadcrumb-list">
		<li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
		<?php if (is_archive() && is_post_type_archive('downloads')) : ?>
			<li>資料ダウンロード</li>
		<?php elseif (is_category() || is_tag() || is_search()) : ?>
			<li><a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a></li>
			<li><?php echo $catetitle; ?></li>
		<?php endif; ?>
	</ol>
</nav>

<div id="section" <?php echo $luxe['content_discrete'] === 'indiscrete' ? ' class="grid"' : ''; ?>>
	<div class="ly-archive -downloads">
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
								} ?></figure>
						</a>
						<div class="arichive-list__text">
							<h3 class="article-title"><?php the_title(); ?></h3>
							<div class="article-meta">
								<div class="except"><?php echo mb_substr(get_the_excerpt(), 0, 50) . '...'; ?></div>
								<p class="download-link"><a href="<?php the_permalink(); ?>">ダウンロードページへ</a></p>
							</div>
						</div>
					</article>
			<?php endwhile;
			endif; ?>
		</div>

	</div>
</div>
</div>
<!--/#section-->
</main>
<?php thk_call_sidebar(); ?>
</div>
<!--/#primary-->
<?php echo apply_filters('thk_footer', ''); ?>
