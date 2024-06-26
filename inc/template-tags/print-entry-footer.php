<?php
/**
 * Prints HTML with meta information for the categories, tags and comments.
 *
 * @package tvlr
 */

namespace TVLR;

/**
 * Prints HTML with meta information for the categories, tags and comments.
 *
 * @author WebDevStudios
 */
function print_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_attr__( ', ', 'tvlr' ) );
		if ( $categories_list && get_categorized_blog() ) {

			/* translators: the post category */
			printf( '<div class="cat-links">' . __( '<span class="screen-reader-text">Posted in</span> %1$s', 'tvlr' ) . '</div>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_attr__( ', ', 'tvlr' ) );
		if ( $tags_list ) {

			/* translators: the post tags */
			printf( '<div class="tags-links">' . __( '<span class="screen-reader-text">Tagged</span> %1$s', 'tvlr' ) . '</div>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<div class="comments-link">';
		comments_popup_link( esc_attr__( 'Leave a comment', 'tvlr' ), esc_attr__( '1 Comment', 'tvlr' ), esc_attr__( '% Comments', 'tvlr' ) );
		echo '</div>';
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'tvlr' ),
			wp_kses_post( get_the_title( '<span class="screen-reader-text">"', '"</span>', false ) )
		),
		'<div class="edit-link">',
		'</div>'
	);
}
