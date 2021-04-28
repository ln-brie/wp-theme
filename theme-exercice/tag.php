<?php get_header(); ?>
<?php if(is_active_sidebar('sidebar-droite')) : ?>
    <section id="motsCles" class="avecWidgets">
<?php else : ?>
    <section id="motsCles">
<?php endif; ?>
    <h2>Mot-clé : <?php single_tag_title(); ?></h2>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> - <?php the_date(); ?></p>
        <?php the_excerpt(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
    </section>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>