<?php 
    /* Template Name: Homepage */
?>

<?php get_header(); ?>

<div id="wrapper" class="clearfix page-home">
    <section id="headerwrap" class="allwrap">
        <div class="overlay">
            <?php echo do_shortcode('[vidbg container=".overlay" mp4="#" webm="http://rmp.mladenangelov.net/wp-content/themes/rmp2/video/rmp_loop_2.mp4" poster="#" loop="true" overlay="true" muted="true"]'); ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-center">En app, du kan regne med</h1>
                    </div>
                </div><!-- /row -->   
                <div class="row">
                    <div class="col-lg-12">
                        <p class="text-center">Regn med penge er et digitalt regneredskab, som styrker læringen med 10-talssystemet.</p>
                    </div>
                </div><!-- /row -->
            </div> <!-- /container -->
        </div>
    </section><!-- /headerwrap -->
    
    <section id="content-home">
        <div class="container">
            <div class="row mt mb">
                <div class="text-justify col-md-5">
                    <h2>Hvad er Regn med penge?</h2>
                    <p>Regn med penge er et simpelt digitalt regneredskab, som kan styrke børns læring med 10-talssystemet samt deres talforståelse. Tallene visualiseres gennem penge så det bliver nemmere at forstå 10'ernes betydning, og hvordan tallene hænger sammen. Regn med penge er tiltænkt børn i 0-2.kl.</p>
                    <p>Regn med penge er resultatet af samarbejdet mellem en matematiklærer, der savnede et simpelt og fokuseret regneredskab, og to udviklere.</p>
                    <p>Regn med penge er dog ikke kun tiltænkt undervisningen. Man kan også have gavn af det derhjemme. Kast jer f.eks. ud i regnehistorierne her på hjemmesiden eller find på jeres egne.</p>
                </div>
                <div class="col-md-7">
                    <img src="<?php echo get_template_directory_uri() . '/img/homepage/ipad.png' ?>" class="img-responsive">
                </div>
            </div>
        </div>
    </section>
    
    <section id="photowrap" class="allwrap">
        <div class="container">
            <div class="row centered">
                <h2 class="text-center">Join over <strong>5,000</strong> satisfied parents & teachers - educate your kids together with Regn med Penge.</h2>
            </div>
        </div>
    </section>
    
    <section id="testimonials" class="pattern">
        <div class="container">
            <div class="row">
                <?php echo do_shortcode('[wcp_testimonial category="Testimonials"]'); ?>
            </div>
        </div>
    </section>
    
    <section id="call-to-action">
        <div class="container">
            <div class="row text-center">
                <h2 class="mb">The next step in math education. Try it now - it's <strong>free</strong> forever!</h2>
                <span class="rmp-btn-green">
                    <a href="#" class="">Prøv Regn med Penge</a>
                </span>
            </div>
        </div>
    </section>
</div>



<?php get_sidebar(); ?>

<?php get_footer(); ?>