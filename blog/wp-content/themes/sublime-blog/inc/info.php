<?php 
/**
 * Sublime Info Customizer Settings
 *
 * @package Sublime_Blog
 */
if ( ! function_exists( 'sublime_blog_customize_register_info' ) ) :

function sublime_blog_customize_register_info( $wp_customize ) {

    $wp_customize->add_section( 'theme_info' , array(
        'title'       => __( 'Information Links' , 'sublime-blog' ),
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
     $theme_info .= '<span class="sticky_info_row"><span class="emoji dashicons emoji dashicons-visibility"></span><a href="' . esc_url( 'https://demo.sublimetheme.com/sublime-blog' ) . '"  target="_blank">' . __( 'View demo', 'sublime-blog' ) . '</a></span><br />';
    $theme_info .= '<span class="sticky_info_row"><span class="emoji dashicons emoji dashicons-text-page"></span><a href="' . esc_url( 'https://docs.sublimetheme.com/sublime-blog/' ) . '" target="_blank">' . __( 'View documentation', 'sublime-blog' ) . '</a></span><br />';
    $theme_info .= '<span class="sticky_info_row"><span class="emoji dashicons emoji dashicons-info"></span><a href="' . esc_url( 'https://sublimetheme.com/wordpress-themes/sublime-blog/' ) . '" target="_blank">' . __( 'Theme info', 'sublime-blog' ) . '</a></span><br />';
    $theme_info .= '<span class="sticky_info_row"><span class="emoji dashicons emoji dashicons-tickets"></span><a href="' . esc_url( 'https://sublimetheme.com/support/' ) . '" target="_blank">' . __( 'Support ticket', 'sublime-blog' ) . '</a></span><br />';
    $theme_info .= '<span class="sticky_info_row"><span class="emoji dashicons dashicons-star-filled"></span><a href="' . esc_url( 'https://wordpress.org/support/theme/sublime-blog/reviews/' ) . '" target="_blank">' . __( 'Rate this theme', 'sublime-blog' ) . '</a></span><br />';


    $wp_customize->add_control( 
        new Sublime_Blog_Theme_Info( $wp_customize ,'theme_info_theme',array(
        'section'     => 'theme_info',
        'description' => $theme_info
        )
    ));

    $wp_customize->add_setting('theme_info_more_theme',array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));
}
endif;
add_action( 'customize_register', 'sublime_blog_customize_register_info' );

if( class_exists( 'WP_Customize_control' ) ){

    class Sublime_Blog_Theme_Info extends WP_Customize_Control
    {
        /**
        * Render the content on the theme customizer page
        */
        public function render_content()
        {
            ?>
            <label>
                <strong class="customize-text_editor"><?php echo esc_html( $this->label ); ?></strong>
                <br />
                <span class="customize-text_editor_desc">
                    <?php echo wp_kses_post( $this->description ); ?>
                </span>
            </label>
            <?php
        }
    }//editor close
    
}//class close