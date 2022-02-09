<!-- Template de la page d'accueil -->

<?php get_header() ?>

<!-- permet d'afficher le titre de la page:
the_title() -> fait un echo
get_the_title() -> ne fait pas d'echo et on doit le faire nous-même
                   (mais ca nous permet de faire d'autres manipulations sur le titre avant, ex. strtoupper) -->

<!-- permet d'afficher le contenu de la page -->
<?php the_content() ?>

<?php get_footer() ?>