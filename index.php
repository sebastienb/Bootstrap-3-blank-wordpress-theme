<?php get_header(); ?>

<div class="row">
	
	<div class="col-md-8">
	
		<?php if(have_posts()) : ?>
		   <?php while(have_posts()) : the_post(); ?>
		
			<h2><?php the_title(); ?></h2>
			 
		 	<?php the_content(); ?>
		
		   <?php endwhile; ?>
		
		<?php else : ?>
		
		<div class="alert alert-info">
		  <strong>No content in this loop</strong>
		</div>
		
		<?php endif; ?>
	
	
	</div>

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