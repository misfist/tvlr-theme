<?php
/**
 * The search template file.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tvlr
 */

use function TVLR\print_numeric_pagination;
use function TVLR\main_classes;

get_header(); ?>

	<main id="main" class="<?php echo esc_attr( main_classes( array() ) ); ?>">

		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			print_numeric_pagination();

		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>

	</main><!-- #main -->

<?php get_footer(); ?>
