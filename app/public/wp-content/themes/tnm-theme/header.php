<!doctype html>
<html lang="en-US">
<head>
<?php wp_head();
 ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
<body class="home blog logged-in admin-bar no-customize-support hfeed right-sidebar">
<header id="saga-header" class="site-header data-bg" data-background="http://team-night-moose.local/wp-content/themes/magazine-saga/assets/images/header-banner.jpg">
    <div class="saga-topnav primary-background">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="top-nav primary-font">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="social-icons">
                    </div>
                    <div class="pull-right">
                        <a href="#" class="search-button">
                            <span class="saga-search-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="search-box">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-xs-12">
                    <form role="search" method="get" class="search-form" action="<?php echo site_url(); ?>">
            <label>
                <span class="screen-reader-text">Search for:</span>
                <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
            </label>
            <input type="submit" class="search-submit" value="Search" />
        </form>                    </div>
            </div>
        </div>
    </div><!--Searchbar Ends-->


    <div class="saga-midnav">
        <div class="container">
            <div class="row flex-row">
                <div class="col-sm-4 flex-row-child">
                    <div class="site-branding-wrapper">
                        <div class="site-branding">
                            <a href="<?php echo site_url(); ?>" rel="home"><img src="<?php echo get_theme_file_uri('tnm-logo-transparent_burlesque.png');?>" alt="Logo"/></a> 
                        </div><!-- .site-branding -->
                    </div>
                </div>
                <div class="col-sm-4 flex-row-child"></div>
                <div class="col-sm-4 flex-row-child">
                    <div class="site-branding-wrapper">
                        <div class="site-branding">
                            <a href="https://www.bevelbeer.com/" rel="friend"><img src="<?php echo get_theme_file_uri('BevelLogo.png'); ?>" /></a>
                            <p class="site-description primary-font"></p>
                        </div><!-- .site-branding -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="saga-navigation navigation-background">
        <div class="container">
            <nav id="site-navigation" class="main-navigation">
                <span class="toggle-menu" aria-controls="primary-menu" aria-expanded="false">
                    <span class="screen-reader-text">
                        Primary Menu                    </span>
                    <i class="ham"></i>
                </span>
                <div class="menu">
                    <ul id="primary-menu" class="menu">
                        <li id="menu-item-28" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28"><a href="<?php echo site_url(); ?>">Home</a></li>
                        <li id="menu-item-29" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-29"><a href="<?php echo site_url('/team'); ?>">Team</a></li>
                        <li id="menu-item-30" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-30"><a href="<?php echo site_url('/leagues'); ?>">Leagues</a></li>
                        <li id="menu-item-31" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31"><a href="<?php echo site_url('/tournaments'); ?>">Tournaments</a></li>
                        <li id="menu-item-32" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32"><a href="<?php echo site_url('/message-board'); ?>">Message Board</a></li>
                        <li id="menu-item-33" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33"><a href="<?php echo site_url('/player-stats'); ?>">Player Stats</a></li>
                        <li id="menu-item-34" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-34"><a href="<?php echo site_url('/ambassadors'); ?>">Ambassadors</a></li>
                    </ul>
                </div>
            </nav><!-- #site-navigation -->
        </div>
    </div>
</header><!-- #masthead -->