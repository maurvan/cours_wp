<!-- Template de la page d'archive -->

<?php get_header() ?>

<div class="form-container">
    <form action="#" method="GET">
        <div>
            <input name="s">
            <button>Rechercher</button>
        </div>
    </form>
</div>

<div class="card-container">
    <!-- la fonction have_posts() retourne vrai s'il reste des articles à parcourir -->
    <!-- la fonction the_post() passe à l'article suivant -->
    <?php while(have_posts()) {
        the_post(); ?>
        <a class="card" href="<?php the_permalink() ?>">
            <!-- <div class="card"> -->
                <?php the_post_thumbnail('medium'); ?>
                <?php the_title(); ?>
            <!-- </div> -->
        </a>
    <?php } ?>
</div>

<div class="pagination-container">
    <?php the_posts_pagination() ?>
</div>

<?php get_footer() ?>