<?php
/**
 * Template for Pages.
 *
 * This is the template file that shows all pages by default.
 * Learn more about page.php : http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>
<div class="row">

	<div class="col-md-8">

			<?php while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_title('<h2>','</h2>'); ?>
			 		<?php the_content(); ?>
				</div>

		<?php 	endwhile; ?>

		</div> <!--  .left-section -->

		<div class="col-md-4">

			<?php
			 if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')) : //  Sidebar name
			?>
			<?php
					 endif;
			?>
		</div>
	</div> <!--  .container main-section -->
<?php get_footer(); ?>
