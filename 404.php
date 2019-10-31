<?php
/**
 * The template page for display 404 Pages.
 */

get_header(); ?>


				<div class="page404">
					<div class="container">
						<h1><?php esc_html_e( '404', 'textdomain' ); ?></h1>
						<p><?php esc_html_e( 'This isn&#39;t good. Seems like...', 'textdomain' ); ?></p>
						<h3><?php esc_html_e( 'You got lost .... Maybe try a search the links below?', 'textdomain' ); ?></h3>
						<?php get_search_form(); ?>
					</div> <!--  .container -->
				</div>

<?php get_footer(); ?>
