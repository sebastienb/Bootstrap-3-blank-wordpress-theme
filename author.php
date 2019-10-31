<?php
/**
 * Author pages template.
 *
 * Learn more about author.php : http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

<div class="row">

	<div class="col-md-8">
		<div class="author-section">

			<h5>Auther Name</h5>

			<div class="author-data clearfix">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry.
			</div>
		</div> <!--  .about-section -->

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_title('<h2>','</h2>'); ?>
		 		<?php the_content(); ?>
			</div>


			<?php endwhile;

			// Display Pagination.
			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );

		endif; ?>
	</div><!--  .left-section -->
	<div class="col-md-4">

		<?php
		 if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')) : //  Sidebar name
		?>
		<?php
				 endif;
		?>
	</div>
</div>
<?php get_footer(); ?>
