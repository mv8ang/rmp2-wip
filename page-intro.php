<?php 
/* Template Name: Page Intro */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Regn med Penge</title>
        <?php wp_head(); ?>
    </head>

    <!-- adds specific classes to home page body -->
    <?php 
    if(is_front_page()):
    $awesome_classes = array('awesome-class', 'my-class');
    else: 
    $awesome_classes = array('not-awesome-class');
    endif;
    ?>

    <body <?php body_class($awesome_classes); ?>>


<div id="wrapper" class="clearfix page-home page-intro">
    <section id="headerwrap" class="allwrap">
        <div class="overlay pattern"><!-- add .overlay for 100vh -->
            <div class="container">
                <div class="row">
                    <img src="<?php echo get_template_directory_uri() . '/img/logo-black-big.png'; ?>" alt="" class="img-responsive">
                    </div>
                <div class="row mb">
                    <div class="col-lg-12 text-center">
                        <h2>Hello! Who are you?</h2>
                    </div>
                </div>  
                
                <div class="row text-center">
                    <div class="col-md-6">
                       <div class="intro-card left">
                            <h2>Elev</h2>
                            <p>Play the game</p>
                            <a href=""></a>
                       </div>
                    </div>
                    <div class="col-md-6">
                        <div class="intro-card right">
                            <h2>Lærer / Forældre</h2>
                            <p>Visit the website</p>
                            <a href="/home"></a>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section><!-- /headerwrap -->
</div>



<?php get_sidebar(); ?>

<?php get_footer(); ?>