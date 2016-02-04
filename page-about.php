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
                        <h1 class="text-center">Team</h1>
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
                <div class="text left col-md-5">
                    <h2>How it all happened</h2>
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
                <h2 class="text-center">Meet the team</h2>
            <div class="row centered">
                <div class="col-md-4">
                    <div class="col-md-12" style="background: grey"></div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12" style="background: grey"></div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12" style="background: grey"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="call-to-action">
        <div class="row">
            <div class="col-md-6 call-left">
                <div class="row mb mt">
                    <div class="col-md-7 pull-right text-center">
                        <h2>Contact us</h2>
                        <p>If you have anything you want to tell us, please write to, or call Michael Barkholt</p>
                        <a href="mailto:michael@corteza.dk" class="email">michael@corteza.dk</a>
                        <a href="tel:22362120">+45 22362120</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 call-right">
                <div class="row mb mt">
                    <div class="col-md-7 pull-left text-center">
                        <h2>Press</h2>
                        <p>Read the press mentions and see design assets</p>
                        
                        <span class="rmp-btn">
                            <a href="#">Visit the press page</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>




<?php get_footer(); ?>