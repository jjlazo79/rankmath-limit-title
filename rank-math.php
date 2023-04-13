<?php

/**
 * Filter to change the page title.
 * 
 * @param string $title
 */
add_filter( 'rank_math/frontend/title', function( $title ) {
    if (strlen($title) > 60) $title = str_replace(' | Institut Vila-Rovira', '', $title);
	return $title;
});
