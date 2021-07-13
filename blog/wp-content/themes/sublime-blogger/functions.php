<?php
/**
 * Theme functions and definitions
 *
 * @package Sublime_Blog
 */

/**
 * After setup theme hook
 */
function sublime_blogger_theme_setup(){
    /*
     * Make child theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_child_theme_textdomain( 'sublime-blogger', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'sublime_blogger_theme_setup' );

function sublime_blog_fonts_url() {
    $fonts_url = '';
    $fonts     = array();
    /*
    * translators: If there are characters in your language that are not supported
    * by Poppins, translate this to 'off'. Do not translate into your own language.
    */
    if ( 'off' !== _x( 'on', 'Nunito Sans font: on or off', 'sublime-blogger' ) ) {
        $fonts[] = 'Nunito Sans:400,400i,700,700i';
    }

    /*
    * translators: If there are characters in your language that are not supported
    * by Leckerli One, translate this to 'off'. Do not translate into your own language.
    */
    if ( 'off' !== _x( 'on', 'Leckerli One font: on or off', 'sublime-blogger' ) ) {
        $fonts[] = 'Leckerli One';
    }

    if ( $fonts ) {
        $fonts_url = add_query_arg(
            array(
                'family'  => urlencode( implode( '|', $fonts ) ),
                'display' => urlencode( 'swap' ),
            ),
            'https://fonts.googleapis.com/css'
        );
    }

    return esc_url( $fonts_url );
}

/**
 * Load assets.
 */
function sublime_blogger_enqueue_styles() {
    $my_theme = wp_get_theme();
    $version = $my_theme['Version'];
    $build = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
    wp_enqueue_style( 'perfect-scrollbar', get_stylesheet_directory_uri() . '/css/perfect-scrollbar' . $build . '.css', array(), '1.5.0', true );
    wp_enqueue_style( 'sublime-blogger-style', get_stylesheet_directory_uri() . '/css/main'. $build .'.css', array( 'sublime-blog-style' ), $version );    
    //custom js
    wp_enqueue_script( 'perfect-scrollbar', get_stylesheet_directory_uri() . '/js/perfect-scrollbar' . $build . '.js', array(), '1.5.0', true );
    wp_enqueue_script( 'sublime-blogger-custom', get_stylesheet_directory_uri() . '/js/custom' . $build . '.js', array(), $version, true );
}
add_action( 'wp_enqueue_scripts', 'sublime_blogger_enqueue_styles', 11 );

/**
 * Overriding the Body Classes
*/
function sublime_blog_body_classes( $classes ) {
    global $post;
        // Adds a class of hfeed to non-singular pages.
    if ( ! is_singular() ) {
        $classes[] = 'hfeed';
    }
    if( is_active_sidebar( 'sidebar' ) ){

        if( is_home() || is_archive() || is_search() ){
            $classes[] = 'rightsidebar grid-layout';
        }
        
        if( is_singular() ){
            $sidebar_layout = get_post_meta( $post->ID, '_sublime_blog_sidebar_layout', true );
            if( $sidebar_layout == 'no-sidebar' ){
                $classes[] = 'fullwidth';
            }else{
                $classes[] = 'rightsidebar';
            }
        }
    }else{
        $classes[] = 'fullwidth';
    }
    if( is_404() ){
        $classes[] = 'fullwidth';
    }
    $classes[] = 'header-four';

    return $classes;
}

/*
 *Overriding the Parent header
*/
function sublime_blog_header(){ ?>
    <header id="masthead" class="site-header layout-four" itemscope itemtype="http://schema.org/WPHeader">
        <div class="top-header">
            <button class="toggle-button" data-toggle-target=".main-menu-modal" data-toggle-body-class="showing-main-menu-modal" aria-expanded="false" data-set-focus=".close-main-nav-toggle">
                <span class="toggle-bar"></span>
                <span class="toggle-bar"></span>
                <span class="toggle-bar"></span>
            </button>
            <div class="container">
                <div class="site-branding" itemscope itemtype="http://schema.org/Organization">
                    <?php the_custom_logo(); ?>

                    <div class="site-title-wrap">
                        <?php
                        if ( is_front_page() && is_home() ) : ?>
                            <h1 class="site-title" itemprop="name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php
                        else : ?>
                            <p class="site-title" itemprop="name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url"><?php bloginfo( 'name' ); ?></a></p>
                            <?php
                        endif;
                        $sublime_blog_description = get_bloginfo( 'description', 'display' );
                        if ( $sublime_blog_description || is_customize_preview() ) : ?>
                            <p class="site-description" itemprop="description"><?php echo $sublime_blog_description; /* WPCS: xss ok. */ ?></p>
                        <?php endif; ?>
                    </div>
                </div><!-- .site-branding -->
                <nav id="site-navigation" class="main-navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
                    <div class="primary-menu-list main-menu-modal cover-modal" data-modal-target-string=".main-menu-modal">
                        <button class="close close-main-nav-toggle" data-toggle-target=".main-menu-modal" data-toggle-body-class="showing-main-menu-modal" aria-expanded="false" data-set-focus=".main-menu-modal"></button>
                        <div class="mobile-menu" aria-label="<?php esc_attr_e( 'Mobile', 'sublime-blogger' ); ?>">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'primary',
                                'menu_id'        => 'primary-menu',
                                'menu_class'     => 'menu main-menu-modal',
                            ) );
                            ?>
                        </div>
                    </div>
                </nav><!-- #site-navigation -->
                <?php if( get_theme_mod( 'ed_header_search',true ) ) : ?>               
                    <div class="header-right">
                        <div class="header-search">
                            <?php get_search_form(); ?>
                        </div><!-- .header-search -->
                    </div><!-- .header-left -->
                <?php endif; ?>
            </div>
        </div><!-- .top-header -->
    </header><!-- #masthead -->
    <?php 
}

function sublime_blog_footer_copyright(){
    $copyright = get_theme_mod( 'copyright' );
    echo '<span class="copyright">';
    if( $copyright ){
        echo wp_kses_post( $copyright );
    } 
    echo '</span>';
    /* translators: 1: Theme name, 2: Theme author. */
    printf( esc_html__( 'Theme: %1$s by %2$s.', 'sublime-blogger' ), 'Sublime Blogger', '<a href="'.esc_url( 'https://sublimetheme.com/' ).'" rel="nofollow" target="_blank" >Sublime Theme</a>' );
}

function sublime_blog_customize_register_info( $wp_customize ) {

    $wp_customize->add_section( 'theme_info' , array(
        'title'       => __( 'Information Links', 'sublime-blogger' ),
        'priority'    => 6,
        'capability' => 'edit_theme_options'
        )
    );

    $wp_customize->add_setting('theme_info_theme',array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
        )
    );
    
    $theme_info = '';
    $theme_info .= '<span class="sticky_info_row"><span class="emoji dashicons emoji dashicons-visibility"></span><a href="' . esc_url( 'https://demo.sublimetheme.com/sublime-blogger' ) . '"  target="_blank">' . __( 'View demo', 'sublime-blogger' ) . '</a></span><br />';
    $theme_info .= '<span class="sticky_info_row"><span class="emoji dashicons emoji dashicons-text-page"></span><a href="' . esc_url( 'https://docs.sublimetheme.com/sublime-blogger/' ) . '" target="_blank">' . __( 'View documentation', 'sublime-blogger' ) . '</a></span><br />';
    $theme_info .= '<span class="sticky_info_row"><span class="emoji dashicons emoji dashicons-info"></span><a href="' . esc_url( 'https://sublimetheme.com/wordpress-themes/sublime-blogger/' ) . '" target="_blank">' . __( 'Theme info', 'sublime-blogger' ) . '</a></span><br />';
    $theme_info .= '<span class="sticky_info_row"><span class="emoji dashicons emoji dashicons-tickets"></span><a href="' . esc_url( 'https://sublimetheme.com/support/' ) . '" target="_blank">' . __( 'Support ticket', 'sublime-blogger' ) . '</a></span><br />';

    $wp_customize->add_control( 
        new Sublime_Blog_Theme_Info( $wp_customize ,'theme_info_theme',array(
        'label'       => __( 'Information Links', 'sublime-blogger' ),
        'section'     => 'theme_info',
        'description' => $theme_info
        )
    ));

    $wp_customize->add_setting('theme_info_more_theme',array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));
}