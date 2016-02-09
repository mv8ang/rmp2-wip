<?php 
/* Template Name: Stories */
?>

<?php get_header(); ?>

<div id="wrapper" class="clearfix page-stories">
    <section id="headerwrap" class="allwrap">
        <div class="overlay pattern-purple">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-center">Regnehistorier</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p class="text-center">Her på siden finder I regnehistorier - små historier med regnestykker.</p>
                    </div>
                </div>
            </div> <!-- /container -->
        </div>
    </section><!-- /headerwrap -->

    <section id="content-stories">
        <div class="container">
            <div class="row mt mb">
                <div class="text-left col-md-12 text-center">
                    <h2>Choose your stories</h2>
                    <p>Regnehistorierne gør det lidt hyggeligere at øve regning. På den måde er det nemlig ikke bare regnestykke efter regnestykke og kun tal. Måske får I også inspiration og lyst til at lave jeres egne historier.</p>
                    <p>Med regnehistorierne i hånden kan I også hurtigt komme i gang med at bruge Regn med penge. Regnehistorierne er opdelt efter klassetrin. De findes både som tekst og som lydfil.</p>
                </div>
            </div>
            
            <div class="row">
                <!-- nav tabs -->
                <ul class="nav nav-pills nav-justified" role="tablist">
                    <li role="presentation" class="active"><a href="#0klasse" aria-controls="home" role="tab" data-toggle="tab">0 klasse</a></li>
                    <li role="presentation"><a href="#1klasse" aria-controls="profile" role="tab" data-toggle="tab">1 klasse</a></li>
                    <li role="presentation"><a href="#2klasse" aria-controls="messages" role="tab" data-toggle="tab">2 klasse</a></li>
                </ul>

                <!-- tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in container active" id="0klasse">
                        <div class="row text-center mt">
                            <div class="col-md-5 col-md-offset-1">
                                <a href="" class="dl-all pdf">Download all 0.kl. stories in pdf</a> 
                            </div>
                            <div class="col-md-5">
                                <a href="" class="dl-all audio">Download all 0.kl. stories in audio</a>
                            </div>
                        </div>
                        <div class="row mb mt">
                            <div class="col-md-4">
                                <div class="story">
                                    <h2 class="text-center">Morgenmad til undsætning</h2>
                                    <p>Brum... rum... br... Karens mave rumler. Hun er godt sulten. Heldigvis går døren og hendes far kommer ind i køkkenet... med en indkøbspose.</p>
                                    <p>"Hvad har du købt? Hvad har du købt?" spørger Karen begejstret. Hendes far giver sig til remse op, imens han viser tingene frem.</p>
                                    <p>Appelsinjuice til 5 kr.
                                    <br>Marmelade til 4 kr.
                                    <br>Pålægschokolade til 10 kr.
                                    <br>Rundstykker til 10 kr.
                                    </p>
                                    <p>Hvor meget har Carlas far købt ind for?</p>
                                    <div class="text-center">
                                        <a href="#" class="pdf">Download PDF</a>
                                        <a href="#" class="audio">Download audio</a>
                                        <a href="#" class="app">Afspil historie i app</a>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade container" id="1klasse">1 klasse</div>
                    <div role="tabpanel" class="tab-pane fade container" id="2klasse">2 klasse</div>
                </div>
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