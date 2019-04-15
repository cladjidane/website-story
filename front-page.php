<?php

get_header();
?>

	<div id="primary" class="content-area">

		<header class="entry-header-home">
			<?php include('sections/slides.php'); ?>
		</header><!-- .entry-header -->

		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			include ('sections/timeline.php');
			include ('sections/quiz.php');
			include ('sections/searchbar.php');
			include ('sections/staff.php');
			include ('sections/ressources.php');

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
