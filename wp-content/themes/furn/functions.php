<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;
add_action( 'carbon_fields_register_fields', 'crb_attach_hero_slider_options' );
add_action( 'carbon_fields_register_fields', 'crb_attach_clients_options' );
add_action( 'carbon_fields_register_fields', 'crb_attach_intro_options' );
add_action( 'carbon_fields_register_fields', 'crb_attach_banner_options' );
add_action( 'carbon_fields_register_fields', 'crb_attach_links_options' );
add_action( 'carbon_fields_register_fields', 'crb_attach_new_arrival_options' );
add_action( 'carbon_fields_register_fields', 'crb_attach_featured_options' );
add_action( 'carbon_fields_register_fields', 'crb_attach_product_options' );
add_action( 'carbon_fields_register_fields', 'crb_attach_blog_options' );
add_action('wp_enqueue_scripts', 'home',1 );
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
add_filter('excerpt_length', 'my_excerpt_length');
function my_excerpt_length($length){ 
    return 80; 
};

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}

show_admin_bar(false);


function crb_attach_clients_options() {
    Container::make( 'post_meta', 'Partners Data' )
    ->where( 'post_type', '=', 'page' )
    ->add_fields( array(
        Field::make( 'complex', 'crb_clients' )->add_fields( array(
            Field::make( 'image', 'image' )->set_value_type( 'url' ),
        ))));
}
function crb_attach_hero_slider_options() {
        Container::make( 'post_meta', 'Slider data on hero block' )
        ->where( 'post_type', '=', 'page' )
        ->add_fields( array(
            Field::make( 'complex', 'crb_slides' )->add_fields( array(
                Field::make( 'text', 'title', __('Title') ),
                Field::make( 'text', 'name', __('Product name') ),
                Field::make( 'textarea', 'description', __('Product description') )->set_rows( 4 ),
                Field::make( 'text', 'price', __('Price') ),
                Field::make( 'text', 'past_price', __('Price before discount') ),
                Field::make( 'text', 'link', __('Product link') ),
                Field::make( 'image', 'image' )->set_value_type( 'url' ),
        ))));
}
function crb_attach_intro_options() {
        Container::make( 'post_meta', 'crb_intro', 'Introduction settings' )
        ->where( 'post_type', '=', 'page' )
        ->add_fields( array(

            // Field::make( 'html', 'crb_information_text' ) ->set_html( '<p>Setting left block data</p>' ),
            Field::make( 'text', 'left_title', __('Left title') ),
            Field::make( 'text', 'left_link', __('Left link') ),
            Field::make( 'textarea', 'left_description', __('Left description') )->set_rows( 4 ),
            Field::make( 'image', 'left_image' )->set_value_type( 'url' ),
            
            // Field::make( 'html', 'crb_information_text' ) ->set_html( '<p>Setting middle block data</p>'),
            Field::make( 'text', 'middle_title', __('Middle title') ),
            Field::make( 'text', 'middle_link', __('Middle link') ),
            Field::make( 'textarea', 'middle_description', __('Middle description') )->set_rows( 4 ),
            Field::make( 'image', 'middle_image' )->set_value_type( 'url' ),
            Field::make( 'text', 'price', __('Price') ),
            
            // Field::make( 'html', 'crb_information_text' ) ->set_html( '<p>Setting right block data</p>' ),
            Field::make( 'text', 'right_title', __('Right title') ),
            Field::make( 'text', 'right_link', __('Right link') ),
            Field::make( 'textarea', 'right_description', __('Right description') )->set_rows( 4 ),
            Field::make( 'image', 'right_image' )->set_value_type( 'url' ),
        ));
}
function crb_attach_banner_options() {
        Container::make( 'post_meta', 'Banner settings' )
        ->where( 'post_type', '=', 'page' )
        ->add_fields( array(
            Field::make( 'complex', 'crb_sofa' )->add_fields( array(
                Field::make( 'text', 'title', __('Middle title') ),
                Field::make( 'textarea', 'description', __('Middle description') )->set_rows( 4 ),
                Field::make( 'text', 'price', __('Price') ), 
                Field::make( 'text', 'link', __('Link') ), 
                Field::make( 'image', 'image' )->set_value_type( 'url' ),
            ))));
        }
        function crb_attach_links_options() {
        Container::make( 'post_meta', 'Links settings' )
        ->where( 'post_type', '=', 'page' )
        ->add_fields( array(
            Field::make( 'html', 'crb_information_text' ) ->set_html( '<h2>Information links</h2>' ),
            Field::make( 'complex', 'information' )->add_fields( array(
                Field::make( 'text', 'title', __('Link text') ),
                Field::make( 'text', 'link', __('Link url') ), 
            )),

            Field::make( 'html', 'crb_collection_text' ) ->set_html( '<h2>Collections links</h2>' ),
            Field::make( 'complex', 'collection' )->add_fields( array(
                Field::make( 'text', 'title', __('Link text') ),
                Field::make( 'text', 'link', __('Link url') ), 
            )),
            
            Field::make( 'html', 'crb_accounts_text' ) ->set_html( '<h2>Accounts links</h2>' ),
            Field::make( 'complex', 'accounts' )->add_fields( array(
                Field::make( 'text', 'title', __('Link text') ),
                Field::make( 'text', 'link', __('Link url') ), 
            )),
            
            Field::make( 'text', 'newsletter', __('Newsletter help text') ), 
        ));
    }
    
    function crb_attach_new_arrival_options() {
        Container::make( 'post_meta', 'New arrivals options' )
        ->where( 'post_type', '=', 'post' )
        ->show_on_category('new-arrivals')
        ->add_fields( array(
            Field::make( 'checkbox', 'set_sale', 'On sale' )->set_option_value( 'yes' ),

            Field::make( 'select', 'sale_type', 'Sale Type' )
            ->set_conditional_logic( array(
                array(
                    'field' => 'set_sale',
                    'value' => true,
                )
            ))
            ->add_options( array(
                'bg-2' => 'Green',
                'bg-1' => 'Orange',
            )),
        ));
    }
    function crb_attach_featured_options() {
        Container::make( 'post_meta', 'Featured options' )
        ->where( 'post_type', '=', 'post' )
        ->show_on_category('featured')
        ->add_fields( array(
            Field::make( 'text', 'rating', 'Rating' ),
        ));
    }
    function crb_attach_product_options() {
        Container::make( 'post_meta', 'Product options' )
        ->where( 'post_type', '=', 'post' )
        ->show_on_category('product')
        ->add_fields( array(
            Field::make( 'text', 'product_price', __('Price') ), 
            Field::make( 'image', 'product_image', __('Image') ), 
        ));
    }
    function crb_attach_blog_options() {
        Container::make( 'post_meta', 'Blog options' )
        ->where( 'post_type', '=', 'post' )
        ->show_on_category('blog')
        ->add_fields( array(
            Field::make( 'image', 'blog_image', __('Image') ), 
        ));
    }
    
    
    function home() {
        //css
        
        wp_enqueue_style('font-awesome.min', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all');
        wp_enqueue_style('linearicons', get_template_directory_uri() . '/assets/css/linearicons.css', array(), '1.0.0', 'all');
        wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0.0', 'all');
        wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all');
        wp_enqueue_style('owl-default', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '1.0.0', 'all');
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
        wp_enqueue_style('bootsnav', get_template_directory_uri() . '/assets/css/bootsnav.css', array(), '1.0.0', 'all');
        wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all');
        wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css',array(), '1.0.0', 'all');

    //js
    wp_deregister_script('jquery');

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), '1.0.0', true);
    wp_enqueue_script( 'modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array(), '1.0.0', true);
    wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true);
    wp_enqueue_script( 'bootsnav', get_template_directory_uri() . '/assets/js/bootsnav.js', array(), '1.0.0', true);
    wp_enqueue_script( 'owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0.0', true);
    wp_enqueue_script( 'jquery-easing','https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', array(), '1.0.0', true);
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true);
}
?>



