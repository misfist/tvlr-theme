<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tvlr
 */

?>

<section class="no-results not-found">

	<header class="page-header has-global-padding">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'tvlr' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content has-global-padding">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<p>
			<?php
			printf(
				wp_kses(
					/* translators: the edit post url */
					esc_html__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'tvlr' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				),
				esc_url( admin_url( 'post-new.php' ) )
			);
			?>
			</p>
		<?php elseif ( is_search() ) : ?>
			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'tvlr' ); ?></p>
			<?php get_search_form(); ?>
		<?php else : ?>
			<p><?php esc_html_e( 'It seems we can\'t find what you\'re looking for. Perhaps searching can help.', 'tvlr' ); ?></p>
			<?php get_search_form(); ?>
		<?php endif; ?>
	</div><!-- .page-content -->

</section><!-- .no-results -->
