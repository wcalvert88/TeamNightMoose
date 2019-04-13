<?php

/**
 * Function that gets currently activated theme.
 */
if( ! function_exists( 'themebeez_toolkit_theme' ) ) :

    function themebeez_toolkit_theme() {

        $theme = wp_get_theme();

        return $theme;
    }
endif;


/**
 * Function that gets text-domain of currently activated theme.
 */
if( ! function_exists( 'themebeez_toolkit_theme_text_domain' ) ) :

    function themebeez_toolkit_theme_text_domain() {

        $theme = themebeez_toolkit_theme();

        $theme_text_domain = $theme->get( 'TextDomain' );

        return $theme_text_domain;
    }
endif;


/**
 * Function that gets all the themes by themebeez.
 */
if( ! function_exists( 'themebeez_toolkit_theme_array' ) ) :

    function themebeez_toolkit_theme_array() {

        return array( 'royale-news', 'cream-blog', 'styleblog', 'style-blog-fame', 'one-hive', 'royale-news-pro', 'cream-blog-pro', 'styleblog-plus', 'one-hive-pro', 'cream-magazine', 'cream-magazine-pro' );
    }
endif;

/**
 * Function to load theme info
 */
if( ! function_exists( 'themebeez_toolkit_theme_info_demo_loader' ) ) {

    function themebeez_toolkit_theme_info_demo_loader() {

        $theme_text_domain = themebeez_toolkit_theme_text_domain();

        if( $theme_text_domain == 'royale-news' ) {
            
            require_once plugin_dir_path( __FILE__ ) . 'theme-info/configs/royale-news-config.php'; 

            add_action( 'admin_notices', 'themebeez_toolkit_admin_notice' );

            add_action( 'admin_init', 'themebeez_toolkit_notice_ignore' );           
        }

        if( $theme_text_domain == 'styleblog' ) {
            
            require_once plugin_dir_path( __FILE__ ) . 'theme-info/configs/styleblog-config.php'; 

            add_action( 'admin_notices', 'themebeez_toolkit_admin_notice' );

            add_action( 'admin_init', 'themebeez_toolkit_notice_ignore' );           
        }

        if( $theme_text_domain == 'style-blog-fame' ) {
            
            require_once plugin_dir_path( __FILE__ ) . 'theme-info/configs/style-blog-fame-config.php'; 

            add_action( 'admin_notices', 'themebeez_toolkit_admin_notice' );

            add_action( 'admin_init', 'themebeez_toolkit_notice_ignore' );           
        }

        if( $theme_text_domain == 'cream-blog' ) {
            
            require_once plugin_dir_path( __FILE__ ) . 'theme-info/configs/cream-blog-config.php'; 

            add_action( 'admin_notices', 'themebeez_toolkit_admin_notice' );

            add_action( 'admin_init', 'themebeez_toolkit_notice_ignore' );           
        }

        if( $theme_text_domain == 'styleblog-plus' ) {
            
            require_once plugin_dir_path( __FILE__ ) . 'theme-info/configs/style-blog-plus-config.php'; 

            add_action( 'admin_notices', 'themebeez_toolkit_admin_notice' );

            add_action( 'admin_init', 'themebeez_toolkit_notice_ignore' );           
        }

        if( $theme_text_domain == 'royale-news-pro' ) {
            
            require_once plugin_dir_path( __FILE__ ) . 'theme-info/configs/royale-news-pro-config.php'; 

            add_action( 'admin_notices', 'themebeez_toolkit_admin_notice' );

            add_action( 'admin_init', 'themebeez_toolkit_notice_ignore' );           
        }

        if( $theme_text_domain == 'cream-magazine' ) {
            
            require_once plugin_dir_path( __FILE__ ) . 'theme-info/configs/cream-magazine-config.php'; 

            add_action( 'admin_notices', 'themebeez_toolkit_admin_notice' );

            add_action( 'admin_init', 'themebeez_toolkit_notice_ignore' );           
        }

        if( $theme_text_domain == 'cream-magazine-pro' ) {
            
            require_once plugin_dir_path( __FILE__ ) . 'theme-info/configs/cream-magazine-pro-config.php'; 

            add_action( 'admin_notices', 'themebeez_toolkit_admin_notice' );

            add_action( 'admin_init', 'themebeez_toolkit_notice_ignore' );           
        }
    }
}

add_action( 'themebeez_toolkit_load_theme_info_demo', 'themebeez_toolkit_theme_info_demo_loader' );


/**
 * Add admin notice when active theme, just show one time
 *
 * @return bool|null
 */
if( ! function_exists( 'themebeez_toolkit_admin_notice' ) ) {

    function themebeez_toolkit_admin_notice() {

        global $current_user;

        $user_id     = $current_user->ID;

        $theme  = themebeez_toolkit_theme();

        $admin_url = 'themes.php?page=' . esc_html( $theme->get( 'TextDomain' ) ) . '-about';
        
        if ( !get_user_meta( $user_id, esc_html( $theme->get( 'TextDomain' ) ) . '_notice_ignore' ) ) {
            ?>
            <div class="notice themebeez-toolkit-notice">

                <h1>
                    <?php
                    /* translators: %1$s: theme name, %2$s theme version */
                    printf( esc_html__( 'Welcome to %1$s - Version %2$s', 'themebeez-toolkit' ), esc_html( $theme->Name ), esc_html( $theme->Version ) );
                    ?>
                </h1>

                <p>
                    <?php
                    /* translators: %1$s: theme name, %2$s link */
                    printf( __( 'Welcome! Thank you for choosing %1$s! To fully take advantage of the best our theme can offer please make sure you visit our <a href="%2$s">Welcome page</a>', 'themebeez-toolkit' ), esc_html( $theme->Name ), esc_url( admin_url( $admin_url ) ) );
                    printf( '<a href="%1$s" class="notice-dismiss dashicons dashicons-dismiss dashicons-dismiss-icon"></a>', '?' . esc_html( $theme->get( 'TextDomain' ) ) . '_notice_ignore=0' );
                    ?>
                </p>
                <p>
                    <a href="<?php echo esc_url( admin_url( $admin_url ) ); ?>" class="button button-primary button-hero" style="text-decoration: none;">
                        <?php
                        /* translators: %s theme name */
                        printf( esc_html__( 'Get started with %s', 'themebeez-toolkit' ), esc_html( $theme->Name ) )
                        ?>
                    </a>
                </p>
            </div>
            <?php
        }
    }
}


if( !function_exists( 'themebeez_toolkit_notice_ignore' ) ) {

    function themebeez_toolkit_notice_ignore() {

        global $current_user;

        $theme  = themebeez_toolkit_theme();

        $user_id     = $current_user->ID;

        /* If user clicks to ignore the notice, add that to their user meta */
        if ( isset( $_GET[ esc_html( $theme->get( 'TextDomain' ) ) . '_notice_ignore' ] ) && '0' == $_GET[ esc_html( $theme->get( 'TextDomain' ) ) . '_notice_ignore' ] ) {
            add_user_meta( $user_id, esc_html( $theme->get( 'TextDomain' ) ) . '_notice_ignore', 'true', true );
        }
    }
}