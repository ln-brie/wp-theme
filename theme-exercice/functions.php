<?php
$header_args = array(
    'flex-height'=>true,
    'height'=> 150,
    'flex-width'=>true,
    'width'=>206,
    'default-image'=> get_template_directory_uri().'/images/logo.png'
);
add_theme_support( 'custom-header', $header_args );
add_theme_support( 'custom-header', array('default-color'=>'cccccc') );

function themeExercice_scripts(){
    wp_enqueue_style( 'themeExercice-style', get_stylesheet_uri( ) );
    wp_enqueue_style( 'slideshow-style', get_template_directory_uri().'/css/jquery.bxslider.css' );
    wp_enqueue_script( 'slideshow-script', get_template_directory_uri(  ).'/script/jquery.bxslider.min.js', array('jquery') );
}
add_action('wp_enqueue_scripts', 'themeExercice_scripts');

function themeExercice_slider(){
    ?>
    <script>
    jQuery(document).ready(function(){
      jQuery('.slider').bxSlider({
          auto: true,
          controls: true
      });
    });
    </script>
    <?php
}
add_action('wp_head', 'themeExercice_slider');

if(function_exists('register_nav_menus')){
    register_nav_menus( array(
        'principal'=>'Menu principal',
        'footer'=> 'Menu footer'
    ) );
}

function themeExercice_customize_register($wp_customize){
    $wp_customize->add_setting('text_color', array(
        'default'=>'000000',
        'transport'=>'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'text_color', array(
        'label' => 'Couleur du texte',
        'section' => 'colors',
        'settings' => 'text_color',
    )));
    $wp_customize->add_section('my_footer', array(
        'title'=> 'Footer',
        'priority'=> '120',
    ));
    $wp_customize->add_setting('themeExercice_credits', array(
        'default'=>'',
        'capability'=>'edit_theme_options',
    ));
    $wp_customize->add_control('themeExercice_credits', array(
        'settings'=>'themeExercice_credits',
        'label'=> 'Copyright',
        'section' => 'my_footer',
        'type'=>'text',
    ));
    $wp_customize->add_section('themeExercice_slideshow', array(
        'title'=> 'Slideshow',
        'priority'=> '80',
    ));
    $wp_customize->add_setting('themeExercice_image1', array(
        'default' => ''
    ));
    $wp_customize->add_setting('themeExercice_image2', array(
        'default' => ''
    ));
    $wp_customize->add_setting('themeExercice_image3', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'themeExercice_image1'
    , array(
        'label'=> 'Image 1',
        'section'=> 'themeExercice_slideshow',
        'settings'=> 'themeExercice_image1'
    )));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'themeExercice_image2'
    , array(
        'label'=> 'Image 2',
        'section'=> 'themeExercice_slideshow',
        'settings'=> 'themeExercice_image2'
    )));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'themeExercice_image3'
    , array(
        'label'=> 'Image 3',
        'section'=> 'themeExercice_slideshow',
        'settings'=> 'themeExercice_image3'
    )));
    $wp_customize->add_setting('themeExercice_adresse', array(
        'default' => ''
    ));
    $wp_customize->add_control('themeExercice_adresse', array(
        'label'=>'Votre adresse',
        'section'=>'my_footer',
        'settings'=>'themeExercice_adresse',
        'type'=>'text'
    ));
    $wp_customize->add_setting('themeExercice_tel', array(
        'default' => ''
    ));
    $wp_customize->add_control('themeExercice_tel', array(
        'label'=>'Votre numéro de téléphone',
        'section'=>'my_footer',
        'settings'=>'themeExercice_tel',
        'type'=>'text'
    ));
    $wp_customize->add_section('themeExercice_reseaux', array(
        'title'=>'Réseaux sociaux',
        'priority'=>'50'
    ));
    $wp_customize->add_setting('themeExercice_facebook', array(
        'default'=>''
    ));
    $wp_customize->add_control('themeExercice_facebook', array(
        'label'=>'URL page facebook',
        'section'=> 'themeExercice_reseaux',
        'settings'=>'themeExercice_facebook',
        'type'=>'url'
    ));
    $wp_customize->add_setting('themeExercice_twitter', array(
        'default'=>''
    ));
    $wp_customize->add_control('themeExercice_twitter', array(
        'label'=>'URL compte twitter',
        'section'=> 'themeExercice_reseaux',
        'settings'=>'themeExercice_twitter',
        'type'=>'url'
    ));
    $wp_customize->add_section('themeExercice_map', array(
        'title'=>'Google maps',
        'priority'=>'100'
    ));
    $wp_customize->add_setting('themeExercice_iframeGM', array(
        'default'=>''
    ));
    $wp_customize->add_control('themeExercice_iframeGM', array(
        'label'=>'Lien iframe Google Maps',
        'section'=>'themeExercice_map',
        'settings'=>'themeExercice_iframeGM',
        'type'=>'url'
    ));

}
add_action( 'customize_register', 'themeExercice_customize_register' );

function theme_customize_css(){
    $couleurTexte = get_theme_mod( 'text_color');
    $couleurTitre = get_header_textcolor(  );
    ?>
    <style>
        body{
            color:<?php echo $couleurTexte; ?>
        }
        header h1{
            color:<?php echo $couleurTitre; ?>
        }
    </style>
    <?php
}
add_action('wp_head', 'theme_customize_css');

if(function_exists('register_sidebar')){
    register_sidebar( array(
        'id' => 'sidebar-droite',
        'name' => 'Barre latérale',
        'description' => "Colonne de widgets à droite",
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ) );
    register_sidebar(array(
        'id'=> 'sidebar-contact',
        'name'=> 'Informations complémentaires',
        'description'=>"Colonne de widgets sur la page contact",
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
function themeExercice_extrait($length){
    return 30;
}
add_filter('excerpt_length', 'themeExercice_extrait');

add_theme_support( 'post-formats', array(
    'quote'
) );
add_theme_support( 'post-thumbnails');