<footer>
    <section id="blocs">
        <nav id="menuFooter">
            <?php
            wp_nav_menu(array(
                'sort_column'=>'menu-order',
                'theme_location'=>'footer'
            ));
            ?>
        </nav>          
        <?php $adresse = get_theme_mod('themeExercice_adresse');
        $tel = get_theme_mod('themeExercice_tel');
        if(($adresse!='') || ($tel!='')) :?>
        <div id="contactFooter">
        <h2>Contact</h2>
        <p>
        <?php
        echo $adresse; ?>
        </p>
        <p>
        <?php
        echo $tel; ?>
        </p>
        </div>
        <?php endif;?>

        <div id="reseaux">
            <?php if(get_theme_mod('themeExercice_facebook')!='') : ?>            
                <a href="<?php echo get_theme_mod('themeExercice_facebook'); ?>"><img src="<?php echo get_template_directory_uri(  ).'/images/facebook.png'; ?>"/></a>
            <?php endif;?>
            <?php if(get_theme_mod('themeExercice_twitter')!='') : ?>
                <a href="<?php echo get_theme_mod('themeExercice_twitter'); ?>"><img src="<?php echo get_template_directory_uri(  ).'/images/twitter.png'; ?>"/></a>
            <?php endif; ?>
        </div>
    </section>
    <div id="copyright">
        <p><?php $copyright = get_theme_mod('themeExercice_credits', '<i>&copy; HBrie - '. date('Y').' / Tous droits réservés</i>');
        echo $copyright; ?></p>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>