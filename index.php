<?php get_header(); ?>

<div class="row-fluid">
	
	<div class="span8">
	
		<?php if(have_posts()) : ?>
		   <?php while(have_posts()) : the_post(); ?>
		
			<h2><?php the_title(); ?></h2>
			 
		 	<?php the_content(); ?>
		
		   <?php endwhile; ?>
		
		<?php else : ?>
		
		// Content when no loop content found
		
		<?php endif; ?>
	
	
	</div>

	<div class="span4">
	
	<h4>This is a simple sidebar</h4>
	
	<p>This is a simple wordpress theme with twitter bootstrap. It contains nothing but the simplest loop</p>
	
	</div>

</div>




<?php get_footer(); ?>