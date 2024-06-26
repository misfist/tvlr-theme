<?php
/**
 * The template for displaying your latest blog posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#home-page-display
 *
 * @package tvlr
 */

use function TVLR\print_numeric_pagination;
use function TVLR\main_classes;

get_header(); ?>
<div class="wp-site-blocks">
	<main id="main" class="<?php echo esc_attr( main_classes( array() ) ); ?>">

		<?php
		if ( have_posts() ) :
			?>
			<header class="entry-header has-global-padding">
				<h1 class="page-title"><?php single_post_title(); ?></h1>
			</header>

			<div class="grid post-list">
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					if ( is_single() ) {
						get_template_part( 'template-parts/content', get_post_type() );
					} else {
						get_template_part( 'template-parts/loops/content', get_post_type() );
					}

				endwhile;
				?>
			</div>
			<!-- post-list -->

			<?php
			print_numeric_pagination();

		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
		
	</main><!-- #main -->
</div><!-- .wp-site-blocks -->

<?php get_footer(); ?>
