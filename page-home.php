<?php 
    /* Template Name: Homepage */
?>

<?php get_header(); ?>

<div id="wrapper" class="clearfix page-home">
    <section id="headerwrap" class="allwrap">
        <div class="overlay">
            <?php echo do_shortcode('[vidbg container=".overlay" mp4="http://rmp.mladenangelov.net/wp-content/themes/rmp2/video/rmp_loop_2.mp4" webm="#" poster="#" loop="true" overlay="true" muted="true"]'); ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-center">Regn med penge</h1>
                        <h1 class="text-center header-secondary">en app, du kan regne med</h1>
                    </div>
                </div><!-- /row -->   
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>Et digitalt regneredskab, som styrker læringen med 10-talssystemet</p>
                        <span class="rmp-btn green mt">
                            <a href="/prov-appen/" class="">Prøv app her</a>
                        </span>
                        <span class="btn-play">
                            <a href="https://www.youtube.com/watch?v=UAuavls3omQ" rel="vidbox">
                            </a>
                        </span>
                    </div>
                </div><!-- /row -->
            </div> <!-- /container -->
        </div>
    </section><!-- /headerwrap -->
    
    <section id="content-home">
        <div class="container">
            <div class="row mt-mobile mb">
                <div class="text-justify col-md-5">
                    <h2>Hvad er Regn med penge?</h2>
                    <p>Regn med penge er et simpelt digitalt regneredskab, som kan styrke børns læring med 10-talssystemet samt deres talforståelse. Tallene visualiseres gennem penge så det bliver nemmere at forstå 10'ernes betydning, og hvordan tallene hænger sammen. Regn med penge er tiltænkt børn i 0-2.kl.</p>
                    <p>Regn med penge er <a href="/om-os/">resultatet af samarbejdet</a> mellem en matematiklærer, der savnede et simpelt og fokuseret regneredskab, og to udviklere.</p>
                    <p>Regn med penge er dog ikke kun tiltænkt undervisningen. Man kan også have gavn af det derhjemme. <a href="/historier/">Kast jer f.eks. ud i regnehistorierne her</a> på hjemmesiden eller find på jeres egne.</p>
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
                <h2 class="text-center">Gør som mere end <strong>5,000</strong> forældre og lærer. Leg og regn med penge sammen med dine børn.</h2>
            </div>
        </div>
    </section>
    
    <section id="testimonials" class="pattern">
        <div class="container">
            <div class="row centered">
                <h2>Andre siger</h2>
                <?php echo do_shortcode('[wcp_testimonial category="Testimonials"]'); ?>
            </div>
        </div>
    </section>
    
    <section id="call-to-action">
        <div class="container">
            <div class="row text-center">
                <h2 class="cta-title">Forny din matematik undervisning. Prøv det nu - <strong>gratis</strong> og altid tilgængelig!</h2>
                <span class="rmp-btn green">
                    <a href="/prov-appen/" class="">Prøv Regn med Penge</a>
                </span>
            </div>
        </div>
    </section>
</div>



<?php get_sidebar(); ?>

<?php get_footer(); ?>