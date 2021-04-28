<?php get_header(); 
$image1 = get_theme_mod('themeExercice_image1');
$image2 = get_theme_mod('themeExercice_image2');
$image3 = get_theme_mod('themeExercice_image3');
?>
<section class="slider">
    <?php
    if ($image1=='') : 
        $image1 = get_template_directory_uri().'/images/image1.jpg';
    endif;
    if ($image2=='') :
        $image2 = get_template_directory_uri().'/images/image2.jpg';
    endif;
    if ($image3 == '') :
        $image3 = get_template_directory_uri().'/images/image3.jpg';
    endif; ?>

    <div><img src="<?php echo $image1 ; ?>"></div>
    <div><img src="<?php echo $image2 ; ?>"></div>
    <div><img src="<?php echo $image3 ; ?>"></div>
</section>
<section id="articles" class="aligne"> 
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php $format = get_post_format();
    if(empty($format)) :?>
        <div class="article">
            <div id="thumbnail"><?php the_post_thumbnail( 'thumbnail'); ?></div>
            <div id="texte">
            <h2>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <p><?php the_excerpt(  ); ?></p>
            <a href="<?php the_permalink(); ?>">Lire la suite</a>
            </div>
        </div>
    <?php elseif($format == 'quote') : ?>
        <div class="article" id="texte">
            <div class="quote">
            <h1>"</h1>
            <h2>
                <?php the_author(); ?>
            </h2>
            </div>
            <p><?php the_excerpt(  ); ?></p>
            <a href="<?php the_permalink(); ?>">Lire la suite</a>
        </div>
    <?php endif; ?>

<?php endwhile;
endif; ?>
    </section>
<?php get_footer(  ); ?>