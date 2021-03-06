<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Regn med Penge</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
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
                       
                       <button class="navbar-toggle collapsed" data-toggle="collapse" type="button" data-target="#navcontent">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>

                       <a class="navbar-brand pull-left" href="/home/"></a>
                   </div>

                   <div class="navbar-collapse collapse navbar-responsive-collapse" id="navcontent">
                       
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
