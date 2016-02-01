<?php 
    /* Template Name: Page No Title */
?>

<?php get_header(); ?>

<?php 
// Loop through posts.
    if(have_posts()): 
        while(have_posts()): the_post(); ?>

            <!-- Define post formatting here. -->
            <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> in <?php the_category(); ?></small>
            <p><?php the_content(); ?></p>
            <hr>
        <?php endwhile;
    endif;
?>

<?php get_footer(); ?>