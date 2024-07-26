<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <?php wp_head(); ?>  
</head>
<body <?php body_class(); ?>>
    <div id="page" class="site">
        <header>     
            <section class="top-bar">
                <div class="container">
                    <div class="logo" style="text-align: left;">
                    <i class="fas fa-users"></i>Japan Working Holiday Association Job Bulletin Board JobBoard
                    </div>

                    <div class="button5" style="text-align: right; ">        
                        <a href="http://jobboard.local/login/">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i> Login </a>
                        <a href="http://jobboard.local/logout/">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
                        </a>
                    </div> 

                </div>
            </section>
            <?php if(! is_page('landing-page')): ?>
            <section class="menu-area">
           
                <div class="container">
                    <div class="jobboard" >
                     JobBoard
                    </div>
                    <div class="menus" >
                    <nav class="main-menu">
                    
                        <button class="check-button">
                            <div class="menu-icon">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                            </div>
                        </button>
                        <?php wp_nav_menu( array('theme_location' => 'wp_devs_main_menu', 'depth' =>2)); ?>
                    </nav>
                    </div>
                </div>  
            </section>
            <?php endif; ?>
        </header>