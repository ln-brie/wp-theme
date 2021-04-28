<?php
/*
Template name: Page contact
*/
?>
<?php get_header();?>
    <?php if(is_active_sidebar( 'sidebar-droite' )): ?>
            <section class="avecWidgets">
        <?php else: ?>
            <section>
        <?php endif; ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>    
        </section>
    <?php get_sidebar('contact');?>
<div class="clear"></div>
    <?php
    $map = get_theme_mod('themeExercice_iframeGM');
    if ($map != '') :?>
    <section id="map">
        <h2>Localisation</h2>
        <?php
        echo $map;
        ?>
        </section>
    <?php endif;    ?>

<?php get_footer(  )?>
