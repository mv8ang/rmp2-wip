<?php 
/* Template Name: Contact */
?>

<?php get_header(); ?>

<div id="wrapper" class="clearfix page-contact">
    <section id="headerwrap" class="allwrap">
        <div class="overlay pattern-purple">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-center">Contact us</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p class="text-center">Comments? Questions? Let's keep in touch.</p>
                    </div>
                </div>
            </div> <!-- /container -->
        </div>
    </section><!-- /headerwrap -->

    <section class="container">
        <div class="row mt mb">
            <div class="col-md-12">
                <h2 class="text-center">Kontaktinformationer</h2>
                <p class="text-center">For any kind of contact, please write or cal Michael Barkholt</p>
            </div>
        </div>
        
        <div class="row mt contact-info">
                <div class="col-xs-12 col-sm-2 col-sm-offset-4" style="text-align: center;">
                    <img src=<?php echo get_template_directory_uri() . '/img/contact/Michael-rounded.png'; ?> alt="">
                </div>
            <div class="col-xs-12 col-sm-4" style="transform: translate(-40px,0)">
                    <h4>Michael Barkholt</h4>
                    <a href="mailto:michael@corteza.dk" class="contact-email">michael@corteza.dk</a><br>
                    <a href="tel:22362120" class="contact-phone">+45 22362120</a>
                </div>
            </div>
        </div>
    </section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>