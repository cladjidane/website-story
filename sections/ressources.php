<?php

    $args = array(
        'post_type' => 'source',
    );

    $the_query = new WP_Query( $args );

?>

<section class="sources">
	<h2>Ressources</h2>
	<h3>Sur les mêmes sujets</h3>

	<div class="cbzh-accordion">

    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<button class="accordion"><?php the_title(); ?></button>
		<div class="panel">
			<?php the_content(); ?>
		</div>    
	<?php endwhile; ?>
	
    <?php
        /* Restore original Post Data */
        wp_reset_postdata();
    ?>

	</div>  
</section>