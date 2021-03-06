<?php get_header(); ?>

<?php 
    /* Loop through posts.
    
    get_post_format() would work in case of multiple post types
    (functions.php ln 26)
    Otherwise it returns an empty string and uses content.php. */

    if(have_posts()): 
        while(have_posts()): the_post(); ?>

            <?php get_template_part('content'); ?>

        <?php endwhile;
    endif;
?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>