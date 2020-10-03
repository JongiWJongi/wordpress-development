<?php

// Global header
get_header();

    while (have_posts()) {
        the_post();?>
    <h2><?php the_title() ?></h2>
    <p><?php the_content() ?></p> <br> <span><?php the_author() ?></span>

<?php }

// Global footer
get_footer();

?>