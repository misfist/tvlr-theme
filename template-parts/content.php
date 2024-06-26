<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tvlr
 */

use function TVLR\print_post_date;
use function TVLR\print_post_author;
use function TVLR\print_entry_footer;
use function TVLR\print_post_taxonomies;
?>

<article <?php post_class( 'post-container' ); ?>>

	<header class="entry-header has-global-padding">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
	</header><!-- .entry-header -->

	<div class="entry-content has-global-padding">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. */
					esc_html__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'tvlr' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links has-global-padding">' . esc_attr__( 'Pages:', 'tvlr' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer has-global-padding">
		<?php print_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
