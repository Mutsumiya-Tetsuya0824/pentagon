		<div class="sidebar-search">
			<div id="search" itemscope itemtype="https://schema.org/WebSite">
				<meta itemprop="url" content="<?php echo THK_HOME_URL; ?>" />
				<form itemprop="potentialAction" itemscope itemtype="https://schema.org/SearchAction" method="get" class="search-form" action="<?php echo THK_HOME_URL; ?>" <?php if (isset($luxe['add_role_attribute'])) echo ' role="search"'; ?>>
					<meta itemprop="target" content="<?php echo THK_HOME_URL; ?>?s={s}" />
					<label>
						<input itemprop="query-input" type="search" class="search-input" placeholder="<?php echo __('Search for', 'luxeritas'); ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr(__('Search for', 'luxeritas')); ?>" required />
					</label>
					<input type="submit" class="search-submit" value="<?php echo esc_attr(__('Search', 'luxeritas')); ?>" />
				</form>
			</div>
		</div>

		<div class="sidebar-category">
			<h2 class="sidebar-title has-icon"><span class="icon"><svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path opacity="0.4" d="M25.3843 13.6839H22.4413C21.7081 13.6888 21.012 13.3626 20.5474 12.7966L19.5782 11.4567C19.1214 10.8857 18.4253 10.558 17.6932 10.5694H15.6126C11.8782 10.5694 10.5 12.7611 10.5 16.4879V20.5164C10.4954 20.9595 30.4956 20.9589 30.4969 20.5164V19.3452C30.5147 15.6183 29.1721 13.6839 25.3843 13.6839Z" fill="#300045" />
						<path fill-rule="evenodd" clip-rule="evenodd" d="M29.3321 15.1125C29.6521 15.4866 29.8993 15.9169 30.0612 16.3814C30.3798 17.3361 30.5273 18.3393 30.4969 19.3451V24.5982C30.4956 25.0406 30.463 25.4824 30.3991 25.9203C30.2775 26.693 30.0057 27.4346 29.5989 28.1031C29.4119 28.4261 29.1849 28.7242 28.9231 28.9905C27.7383 30.0779 26.165 30.6439 24.5574 30.5611H16.4306C14.8205 30.6433 13.2446 30.0775 12.056 28.9905C11.7974 28.7237 11.5734 28.4256 11.3891 28.1031C10.9848 27.435 10.7187 26.6928 10.6067 25.9203C10.5355 25.4832 10.4998 25.041 10.5 24.5982V19.3451C10.4998 18.9064 10.5236 18.468 10.5711 18.0319C10.5811 17.9553 10.5961 17.8801 10.611 17.8056C10.6357 17.6814 10.66 17.5594 10.66 17.4373C10.7503 16.911 10.915 16.4001 11.1491 15.92C11.8426 14.4381 13.2652 13.6839 15.5948 13.6839H25.3754C26.6802 13.583 27.9753 13.9758 29.0032 14.7842C29.1215 14.8846 29.2316 14.9944 29.3321 15.1125ZM15.4703 24.1101H25.5355H25.5533C25.7741 24.1197 25.9896 24.0407 26.1517 23.8906C26.3137 23.7406 26.4088 23.532 26.4157 23.3115C26.4282 23.1177 26.3644 22.9267 26.2379 22.7791C26.0924 22.5808 25.8618 22.4625 25.6155 22.4597H15.4703C15.0136 22.4597 14.6434 22.8291 14.6434 23.2849C14.6434 23.7407 15.0136 24.1101 15.4703 24.1101Z" fill="#300045" />
					</svg>
				</span>アプリ開発の外注を<br class="pc-only">お考えの方</h2>

			<ul class="side-categorylist">
				<li><a href="https://pentagon.tokyo/app/1987/">アプリ開発のはじめかた</a></li>
				<li><a href="https://pentagon.tokyo/app/3224/">アプリの企画</a></li>
				<li><a href="https://pentagon.tokyo/app/1999/">アプリ開発の依頼</a></li>
				<li><a href="https://pentagon.tokyo/app/1997/">アプリ開発費用</a></li>
				<li><a href="https://pentagon.tokyo/design/4343/">UI/UXデザインとは</a></li>
				<li><a href="https://pentagon.tokyo/app/2808/">デザインの外注</a></li>
				<li><a href="https://pentagon.tokyo/app/2516/">アプリの運用</a></li>
				<li><a href="https://pentagon.tokyo/app/2523/">アプリマーケティング</a></li>
				<li><a href="https://pentagon.tokyo/app/2926/">ASO対策</a></li>
			</ul>

		</div>

		<div class="sidebar-category">
			<h2 class="sidebar-title has-icon"><span class="icon"><svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path opacity="0.4" d="M21.4763 11.6827L23.7028 16.157C23.8668 16.4811 24.1799 16.7063 24.541 16.7563L29.542 17.4847C29.8341 17.5257 30.0992 17.6798 30.2782 17.9149C30.4552 18.147 30.5312 18.4411 30.4882 18.7303C30.4532 18.9704 30.3402 19.1925 30.1672 19.3626L26.5434 22.8754C26.2783 23.1205 26.1583 23.4837 26.2223 23.8389L27.1145 28.7774C27.2095 29.3737 26.8144 29.936 26.2223 30.049C25.9783 30.0881 25.7282 30.047 25.5082 29.935L21.0472 27.6108C20.7161 27.4437 20.3251 27.4437 19.994 27.6108L15.533 29.935C14.9849 30.2261 14.3058 30.028 14.0007 29.4878C13.8877 29.2726 13.8477 29.0275 13.8847 28.7884L14.7769 23.8489C14.8409 23.4947 14.7199 23.1295 14.4558 22.8844L10.832 19.3736C10.4009 18.9574 10.3879 18.2721 10.803 17.8408C10.812 17.8318 10.822 17.8218 10.832 17.8118C11.0041 17.6367 11.2301 17.5257 11.4742 17.4967L16.4752 16.7673C16.8353 16.7163 17.1484 16.4932 17.3134 16.167L19.4599 11.6827C19.6509 11.2985 20.047 11.0594 20.4771 11.0694H20.6111C20.9842 11.1144 21.3093 11.3455 21.4763 11.6827Z" fill="#300045" />
						<path d="M20.492 27.4862C20.2983 27.4922 20.1096 27.5443 19.9399 27.6373L15.5007 29.9562C14.9576 30.2154 14.3076 30.0143 14.003 29.4949C13.8902 29.2827 13.8493 29.0395 13.8872 28.8013L14.7738 23.8722C14.8338 23.514 14.7139 23.1497 14.4533 22.8974L10.8279 19.3876C10.3976 18.9662 10.3896 18.2747 10.811 17.8433C10.817 17.8373 10.8219 17.8323 10.8279 17.8273C10.9997 17.6571 11.2213 17.5451 11.46 17.51L16.4652 16.7734C16.8277 16.7274 17.1422 16.5012 17.3019 16.1729L19.4776 11.6322C19.6843 11.2659 20.0806 11.0477 20.5 11.0707C20.492 11.368 20.492 27.284 20.492 27.4862Z" fill="#300045" />
					</svg>
				</span>人気記事</h2>

				<div class="ranking-list">
	<?php
	$post_count = 0; 

	$the_query = get_most_viewed('post', 5, 2);
	if ($the_query->have_posts()) :
		while ($the_query->have_posts()) :
			$the_query->the_post();

			$post_count++; ?>
			<article class="ranking-list__item">
				<a href="<?php the_permalink(); ?>">
					<span class="rank"><svg width="57" height="57" viewBox="0 0 57 57" fill="none" xmlns="https://www.w3.org/2000/svg">
							<path d="M28.5 0.569092L36.7078 8.75373L48.299 8.7701L48.3154 20.3613L56.5 28.5691L48.3154 36.7769L48.299 48.3681L36.7078 48.3845L28.5 56.5691L20.2922 48.3845L8.70101 48.3681L8.68463 36.7769L0.5 28.5691L8.68463 20.3613L8.70101 8.7701L20.2922 8.75373L28.5 0.569092Z" fill="#300045" />
						</svg>
					</span>
					<h3 class="article-title"><?php the_title(); ?></h3>
				</a>
			</article>
		<?php endwhile;
	endif;
	wp_reset_postdata();
	?>
</div>
		</div>

		<div class="sidebar-banner">
			<a href="<?php echo esc_url(home_url('/')); ?>downloads/" id="blog_dl"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/archive/banner_dl.png" alt=""></a>
			<!-- <a href="<?php echo esc_url(home_url('/')); ?>downloads/downloads-4463/" id="blog_dl02"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/archive/banner_side02.png" alt=""></a> -->
			<a href="<?php echo esc_url(home_url('/')); ?>contact/" id="blog_dl03"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/assets/img/materials/archive/banner_side03.png" alt=""></a>
		</div>
