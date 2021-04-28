<?php get_header(); ?>
<?php if(is_active_sidebar('sidebar-droite')) : ?>
    <section id="archives" class="avecWidgets">
    <?php else : ?>
        <section id="archives">
    <?php endif; ?>
        <h2>Articles publiés au mois de : <?php echo get_the_date('F Y'); ?><h2>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> - <?php the_date(); ?></p>
            <?php the_excerpt() ; ?>
            <?php the_post_thumbnail('thumbnail'); ?>
        <?php endwhile; ?>
        <?php endif; ?>
    </section>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
