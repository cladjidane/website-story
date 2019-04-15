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

			// Pour exemple à supprimer
			echo 'ACCUEIL';
			include ('sections/timeline.php');
			// Fin exemple
			

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
