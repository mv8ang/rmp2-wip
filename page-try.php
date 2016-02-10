<?php 
/* Template Name: Try the app */
?>

<?php get_header(); ?>

<div id="wrapper" class="clearfix page-try">
    <section id="headerwrap" class="allwrap">
        <div class="overlay pattern-purple">
            <div class="container centered">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-center">Prøv Appen</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p class="text-center">Du kan prøve Regn med penge her i browseren.
                        <br>Det behøver altså ikke installere noget for at se, hvordan Regn med penge fungerer.</p>
                        <div class="rmp-btn green mt">
                            <a href="#">Start Regn med Penge</a>
                        </div>
                    </div>
                </div>
            </div> <!-- /container -->
        </div>
    </section><!-- /headerwrap -->

    <section id="wrapper-team" class="allwrap mb mt">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Brugervejledning</h2>
            </div>
            <div class="row">
                <p class="text-center">Sådan bruger du appen:</p>
            </div>
            
            <div class="row centered" style="margin-top: 50px;">
                <div class="col-md-3">
                    <div class="col-md-12 instruction">
                        <img src="<?php echo get_template_directory_uri() . '/img/instructions/1manual.png'; ?>" alt="">
                        <p>Træk mønter og sedler fra toppen og ned på arbejdsbordet.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="col-md-12 instruction">
                        <img src="<?php echo get_template_directory_uri() . '/img/instructions/2manual.png'; ?>" alt="">
                        <p>Mønter og/eller sedler der overlapper, bliver til en gruppe.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="col-md-12 instruction">
                        <img src="<?php echo get_template_directory_uri() . '/img/instructions/3manual.png'; ?>" alt="">
                        <p>Grupper flyttes ved at trække i et tomt område inden for gruppen. Trækkes der i en mønt eller en seddel, fjernes den fra gruppen.</p>
                    </div>
                </div>   
                <div class="col-md-3">
                    <div class="col-md-12 instruction">
                        <img src="<?php echo get_template_directory_uri() . '/img/instructions/4.5manual.png'; ?>" alt="">
                        <p>Hvis præcis ti enheder af samme type placeres i en gruppe, kan de veksles op til én enhed med højere værdi. Tryk blot på det lille ikon af den nye enhed, der dukker op midt i gruppen.</p>
                    </div>
                </div>
            </div>
            
            <div class="row centered" style="margin-top: 25px;">
                <div class="col-md-3">
                    <div class="col-md-12 instruction">
                        <img src="<?php echo get_template_directory_uri() . '/img/instructions/4.5manual.png'; ?>" alt="">
                        <p>Omvendt, holder man fingeren/musen nede på en enhed et øjeblik, veksles den til ti enheder med en lavere værdi.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="col-md-12 instruction">
                        <img src="<?php echo get_template_directory_uri() . '/img/instructions/6manual.png'; ?>" alt="">
                        <p>Nulstil alt med den røde knap øverst i højre hjørne.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="col-md-12 instruction">
                        <img src="<?php echo get_template_directory_uri() . '/img/instructions/7manual.png'; ?>" alt="">
                        <p>Aflever en gruppe til banken oppe i toppen ved at trække gruppen helt op i toppen af skærmen og give slip.</p>
                    </div>
                </div>   
                <div class="col-md-3">
                    <div class="col-md-12 instruction ipad">
                        <h3>Tip til <span>ipad</span>-brugere</h3>
                        <p>Hvis du tilføjer applikationen til din hjemmeskærm, efter du har åbnet den i Safari, kan du bruge den i fuldskærm. Den virker desuden også, når du ikke har forbindelse til internettet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="compatibility">
        <div class="container">
            <div class="row mt mb text-center">
                <div class="col-md-6 devices">
                    <h2>Compatible devices</h2>
                    <p>Regn med penge kan bruges på følgende touch enheder:</p>
                    <row>
                        <div class="col-md-6">
                            <img src="<?php echo get_template_directory_uri() . '/img/compatibility/apur.png'; ?>" alt="">
                            <span>iPad / iPhone 4+</span>
                        </div>
                        <div class="col-md-6">
                            <img src="<?php echo get_template_directory_uri() . '/img/compatibility/android.png'; ?>" alt="">
                            <span>Android devices</span>
                        </div>
                    </row>
                </div>
                <div class="col-md-6 browsers">
                    <h2>Compatible browsers</h2>
                    <p>Regn med penge kan køre i følgende browsere:</p>
                    <div class="col-md-3">
                        <img src="<?php echo get_template_directory_uri() . '/img/compatibility/chrome.png'; ?>" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo get_template_directory_uri() . '/img/compatibility/firefox.png'; ?>" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo get_template_directory_uri() . '/img/compatibility/safari.png'; ?>" alt="">
                    </div>
                     <div class="col-md-3">
                            <img src="<?php echo get_template_directory_uri() . '/img/compatibility/explorer.png'; ?>" alt="">
                        </div>
                    </div>
                </div>       
            </div>
        </div>
    </section>
</div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>