<?php
/**
 * Template for Single posts.
 */

get_header(); ?>

<div class="row">

	<div class="col-md-8">
		<?php while ( have_posts() ) : the_post();

		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */

			?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_title('<h2>','</h2>'); ?>
		 		<?php the_content(); ?>
			</div>

		   <!--  .comment-formwrapper -->
			<?php

		endwhile; ?>

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
