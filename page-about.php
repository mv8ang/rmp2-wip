<?php 
/* Template Name: About Us */
?>

<?php get_header(); ?>

<div id="wrapper" class="clearfix page-about">
    <section id="headerwrap" class="allwrap">
        <div class="overlay pattern-purple">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-center">Om os</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p class="text-center">Regn med penge er blevet til i et samarbejde mellem to udviklere og en matematiklærer.</p>
                    </div>
                </div>
            </div> <!-- /container -->
        </div>
    </section><!-- /headerwrap -->
    
    <section id="content-team">
        <div class="container">
            <div class="row mt mb">
                <div class="text-justify col-md-5">
                    <h2>Sådan startede det</h2>
                    <p>I undervisningen manglede Louise et visuelt regneredskab, der kunne hjælpe børnene med at løse regneopgaver og give dem et visuelt indblik i, hvordan tal hænger sammen. Louise fandt, at de eksisterende programmer ikke havde de funktioner, hun ønskede. Ofte kom de også til at forvirre eller friste børnene til at lave andre ting.</p>

                    <p>Hun henvendte sig derfor til Kenneth ved en konference og forhørte sig omkring muligheden for at udvikle et redskab specifikt målrettet undervisningssektoren. Kenneth tilkoblede efterfølgende Michael som programmør, og i fællesskab har de tre udviklet Regn med penge. 
                    </p>
                </div>
                <div class="col-md-7">
                    <img src="<?php echo get_template_directory_uri() . '/img/homepage/ipad.png' ?>" class="img-responsive">
                </div>
            </div>
        </div>
    </section>

    <section id="wrapper-team" class="allwrap mb mt">
        <div class="container">
                <h2 class="text-center">Teamet</h2>
            <div class="row centered">
                <div class="col-md-4">
                    <div class="col-md-12 team-member louise">
                        <h3>Louise Fiskaali Gammelmark</h3>
                        <h4>Matematiklærer</h4>
                        <div>
                            <a href="https://dk.linkedin.com/in/louise-fiskaali-64601560/en" class="social offset linkedin" target="_blank">in</a>
                        </div>
                        
                        <p>Matematiklærer på <a href="http://saksildskole.skoleporten.dk/sp" class="accent-link" target="_blank">Saksild-Nølev skolen</a> i Odder kommune. Skolen er en pionérskole i Danmark inden for brugen af tablets. Louise er interesseret i, hvordan redskabet kan udnyttes optimalt i undervisningen.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12 team-member kenneth">
                        <h3>Kenneth Boris Jensen</h3>
                        <h4>UX'er og grafisk designer</h4>
                        <div>
                            <a href="https://dk.linkedin.com/in/kenneth-boris-jensen-553a7411" class="social offset linkedin" target="_blank">in</a>
                        </div>
                        <p>Projektleder, grafiker og user experience designer på projektet. Kenneth er uddannet på <a href="http://www.animwork.dk/en/" class="accent-link" target="_blank">The Animation Workshop</a> i Viborg og er den ene halvdel af <a href="http://www.dailywrestler.com/" class="accent-link" target="_blank">firmaet Daily Wrestler</a>.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12 team-member michael">
                        <h3>Michael Barkholt</h3>
                        <h4>Programmør</h4>
                        <div>
                            <a href="https://dk.linkedin.com/in/barkholt" class="social offset linkedin" target="_blank">in</a>
                        </div>
                        <p>Systemudvikler med ansvaret for alle tekniske facetter i projektet samt programmeringen af Regn med Penge. Michael er kandidat i datalogi med +6 års erfaring som systemudvikler. Han er freelance udvikler i <a href="http://corteza.dk/" class="accent-link" target="_blank">firmaet Corteza</a>.</p>
                    </div>
                </div>
            </div>
            <div class="row centered" style="font-style: italic; margin-top: 50px;">
                <p>Tak til <a href="http://saksildskole.skoleporten.dk/sp" class="accent-link" target="_blank">Saksild-Nølev skole</a></p>
            </div>
        </div>
    </section>

    <section id="call-to-action">
        <div class="row">
            <div class="col-md-6 call-left">
                <div class="row">
                    <div class="col-lg-7 col-md-10 pull-right call-content text-center">
                        <h2>Kontakt</h2>
                        <p>Hvis du har ider, ris eller ros, er du velkommen til at kontakte Michael Barkholt.</p>
                        <a href="mailto:michael@corteza.dk" class="email" target="_blank">michael@corteza.dk</a>
                        <a href="tel:22362120" target="_blank">+45 22362120</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 call-right">
                <div class="row">
                    <div class="col-lg-7 col-md-10 pull-left call-content text-center">
                        <h2>Presse</h2>
                        <p>Regn med Penge bliver af og til anmeldt og nævn. Se presseomtaler og design materialer her.</p>
                        
                        <span class="rmp-btn light">
                            <a href="/press/">Se presseomtale her</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>