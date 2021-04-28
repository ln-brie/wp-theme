<?php get_header(); ?>
<?php if(is_active_sidebar('sidebar-droite')) : ?>
    <section id="categeries" class="avecWidgets">
<?php else : ?>
    <section id="categories">
<?php endif; ?>
    <h2>Catégorie : <?php the_category(' &bull;'); ?></h2>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> - <?php the_date(); ?></p>
        <?php the_excerpt(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>