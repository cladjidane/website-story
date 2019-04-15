<?php

    $args = array(
        'post_type' => 'slide',
    );

    $the_query = new WP_Query( $args );

?>

<div class="cbzh-slides">
    
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="cbzh-slide fade">
        <?php the_post_thumbnail('full'); ?>
        <div class="overlay"></div>
        <div class="cbzh-slide_text"><strong><?php the_title(); ?></strong><br /><?php the_content(); ?></div>
        </div>     
    <?php endwhile; ?>

    <?php
        /* Restore original Post Data */
        wp_reset_postdata();
    ?>

    <a class="cbzh-slides_prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="cbzh-slides_next" onclick="plusSlides(1)">&#10095;</a>

</div>