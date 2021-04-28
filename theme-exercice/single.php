<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php if(is_active_sidebar('sidebar-droite')) : ?>
        <section id="articleSeul" class="haut avecAside">
    <?php else : ?>
        <section id="articleSeul" class="haut">
    <?php endif; ?>
            <div class="precSuiv">
                <div class="articlePrec">
                    <?php previous_post_link(); ?>
                </div>
                <div class="articleSuiv">
                    <?php next_post_link(); ?>
                </div>
            </div>
            <div <?php post_class(); ?>>
            <?php 
            if(!get_post_format()){
                get_template_part('content/content', 'default');
            }
            else {
                get_template_part('content/content', get_post_format());
            }
            ?>
            </div>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>