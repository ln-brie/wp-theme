<?php get_header(); ?>
<?php if(have_posts(  )): while(have_posts(  )): the_post(  ); ?>
    <?php the_post_thumbnail( 'full'); ?>
    <?php if(is_active_sidebar( 'sidebar-droite' )): ?>
        <section id="pages" class="avecWidgets"> 
    <?php else: ?>
        <section id="pages">
    <?php endif; ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        </section>
    <?php endwhile;
    endif; ?>
    <?php get_sidebar(  );?>
    <?php get_footer(  ); ?>
