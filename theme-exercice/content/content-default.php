
<?php the_post_thumbnail(); ?>
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
<p>Les articles et le profil de <?php the_author_posts_link(); ?></p>
<p>Publié le <?php the_date(); ?></p>
<p>Catégorie(s) : <?php the_category(); ?></p>
<p class="motsCles"><?php the_tags(); ?></p>
<div id="commentaires">
    <h3>Commentaires de l'article :</h3>
    <?php comments_template(); ?>
</div>