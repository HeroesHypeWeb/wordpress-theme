<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    <title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>
 
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
 
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <?php wp_head(); ?>
 
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'hbd-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'hbd-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>
<body>
<?php if ( get_theme_mod( 'global_site_alert' ) ) : ?>

    <div id="global-alert">
        <span>
            <?php echo get_theme_mod( 'global_site_alert' ); ?>
            <?php if ( get_theme_mod( 'global_site_alert_link' ) ) : ?><i class="icon-live"></i><?php endif; ?>
        </span>
        <?php if ( get_theme_mod( 'global_site_alert_link' ) ) : ?>
            <a href="<?php echo get_theme_mod( 'global_site_alert_link' ); ?>" target="_blank"
            >
                WATCH LIVE
                <i class="fa fa-external-link-alt"></i>
            </a>
        <?php endif; ?>
    </div>
    
    
<?php endif; ?>
<div id="wrapper" class="hfeed">
    <div id="header">
        <div id="masthead">
 
            <div id="access" class="header">
				<!--<div class="skip-link"><a href="#content" title="<?php _e( 'Skip to content', 'hbd-theme' ) ?>"><?php _e( 'Skip to content', 'hbd-theme' ) ?></a></div>-->
                <?php #wp_page_menu( 'sort_column=menu_order' ); ?>
                <div id="site-nav-container">
                    <a class="logo-link" href="<?php echo get_bloginfo('url') ?>">
                        <div id="logo-container">
                            <img src="<?php echo get_bloginfo('template_url') ?>/img/hh_logo.png" width="75" height="75" alt="" />
                            <!-- <img src="/heroeshype/wp-content/themes/heroeshype/img/hh_logo.png" width="75" height="75" alt="" /> -->
                            <h1>
                            Heroes<br />
                            Hype
                            </h1>
                        </div>
                    </a>
                    <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header', 'menu' => 'Header navigation' ) ); ?>
                </div>
                <div id="search-container">
                    <?php get_search_form(true); ?>
                    <div class="hgc">
                        <span>Proud partner with</span>
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/hgc_od_logo.png" width="65" height="65" alt="" />
                    </div>
                </div>
            </div><!-- #access -->
 			
        </div><!-- #masthead -->
    </div><!-- #header -->
 
    <div id="main">