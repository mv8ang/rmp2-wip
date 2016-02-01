<?php 
    /* Template Name: Homepage */
?>

<?php get_header(); ?>

<main class="clearfix">
    <section id="headerwrap" class="allwrap">
        <div class="overlay">
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
    
    <div class="row">
       <div class="text left col-md-5">
            <h2>Hvad er Regn med penge?</h2>
            <p>Regn med penge er et simpelt digitalt regneredskab, som kan styrke børns læring med 10-talssystemet samt deres talforståelse. Tallene visualiseres gennem penge så det bliver nemmere at forstå 10'ernes betydning, og hvordan tallene hænger sammen. Regn med penge er tiltænkt børn i 0-2.kl.</p>
            <p>Regn med penge er resultatet af samarbejdet mellem en matematiklærer, der savnede et simpelt og fokuseret regneredskab, og to udviklere.</p>
            <p>Regn med penge er dog ikke kun tiltænkt undervisningen. Man kan også have gavn af det derhjemme. Kast jer f.eks. ud i regnehistorierne her på hjemmesiden eller find på jeres egne.</p>
       </div>
       <div class="col-md-6 pull-right">
           <img src="<?php echo get_template_directory_uri() . '/img/ipad.png' ?>" class="img-responsive">
       </div>
    </div>
    
    <div class="row">
        <div class="overlay green">
            <div class="col-md-12">
                <h2 class="text-center">Join over 5,000 satisfied parents & teachers - educate your kids together with Regn med Penge.</h2>
            </div>
        </div>
    </div>
    
    <div class="row">
        <!-- what others say -->
    </div>
    
    <div id="prefooter" class="row">
        <h2>The next step in math education. Try it now - it's free forever!</h2>
        <a href="#" class="rmp-btn-try misplaced">Prøv Regn med Penge</a>
    </div>
</main>




<?php get_footer(); ?>