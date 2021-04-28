<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>
        <?php bloginfo('name'); ?>
        <?php if(is_home() || is_front_page()):
            bloginfo( 'description' );
        else :
            wp_title( "", true );
        endif; ?>
    </title>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <?php wp_head(  ); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper">
        <header>
        <div id="titre">
            <h1><?php bloginfo( 'name' ); ?></h1>
        </div>
        <a href="<?php bloginfo('url'); ?> title="<?php bloginfo( 'name' ); ?>" >
        <div id="logo">
            <?php $image = get_header_image(); ?>
            <?php if(!empty($image)): ?>
                <img src="<?php echo esc_url($image); ?>"
                height="<?php echo get_custom_header()->height; ?>"
                width="<?php echo get_custom_header()->width; ?>"
                alt="logo" />
            <?php else : ?>
                <img src="<?php echo get_theme_support('custom-header', 'default-image'); ?>" alt="logo" />
            <?php endif; ?>
        </div>
        </a>
        <div id="slogan">
            <h2><?php bloginfo( 'description' ); ?></h2>
        </div>
        </header>
        <nav id="menuTop">
            <?php 
                wp_nav_menu( array(
                    'sort_column' => 'menu-order',
                    'theme_location' => 'principal'
                ) );
            ?>
        </nav>
