<?php 
/* Template Name: Credits */
?>

<?php get_header(); ?>

<div id="wrapper" class="clearfix page-404">
    <section class="container pb pt">
        <div class="row text-center">
            <div class="col-md-6 col-md-offset-3">
                <img src="<?php echo get_template_directory_uri() . '/img/404.png'; ?>" alt="Oops!" class="img-responsive">
            </div>
        </div>
        
        <div class="row mb">
            <div class="col-lg-12 text-center">
                <h2>Beklager, men denne side er flyttet.</h2>
                <h2>Naviger videre med menuen ovenfor.</h2>
            </div>
        </div>  
    </section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>