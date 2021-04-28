<?php
/*
Template name: Page sans sidebar
*/
?>
<?php get_header(); ?>
<?php if(have_posts(  )): while(have_posts(  )): the_post(  ); ?>
    <?php the_post_thumbnail( 'full'); ?>
    <section id="pages">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        </section>
    <?php endwhile;
    endif; ?>
    <?php get_footer(  ); ?>