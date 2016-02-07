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
   <header>
       <nav role="navigation">
           <div class="navbar navbar-default navbar-custom navbar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button class="navbar-toggle collapsed" data-toggle="collapse" type="button" data-target="#bs-example-navbr-collapse-1">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>

                       <a class="navbar-brand pull-left" href="#">
                           <img src="<?php echo get_template_directory_uri() . '/img/logo-white.png' ?>" title="Regn med Penge">
                       </a>
                   </div>

                   <div class="navbar-collapse collapse navbar-responsive-collapse" id="bs-example-navbar-collapse-1">
                       <?php wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'container' => false,
                                'menu_class' => 'nav navbar-nav navbar-right'
                                )
                            );
                       ?>
                   </div>
               </div>
           </div>
       </nav>
   </header>
