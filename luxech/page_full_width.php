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
* Template Name: full width
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
<?php echo apply_filters( 'thk_content', '' ); // 本文 ?>
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