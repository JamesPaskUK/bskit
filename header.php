<!--DOCTYPE html -->
<html>
    <head>
        <meta charset="utf-8">
        <title>Bootstrap Starter Kit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="bskit, bootstrap starter kit, bootstrap builder">
        <meta name="description" content="Business Startup &amp; Prototyping HTML Framework">
        
        <link rel="shortcut icon" href="ico/favicon.png">
        
        <?php wp_head(); ?>
    </head>

<body <?php body_class( $class ); ?>>
    
    <!--<div id="page" class="page">-->
        
    <!-- HEADER 2 -->
    <header id="header-2">
    
        <nav class="main-nav navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <img src="images/brand/bskit-logo-nostrap.png" class="brand-img img-responsive">
              </div>
            <div id="navbar" class="navbar-collapse collapse">

                <?php

                    $args = array(
                        'menu'              => 'header-menu',
                        'theme_location'    => 'header-menu',
                        'depth'             => 2,
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'navbar-collapse',
                        'menu_class'        => 'nav navbar-nav navbar-right',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker()
                        );

                wp_nav_menu( $args );

                ?>
            </div>
          </div><!-- container-fluid -->
        </nav>
    
    </header>
