<?php

get_header();
?>

	<div id="primary" class="content-area">

		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>
		
		<?php  get_sidebar(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
