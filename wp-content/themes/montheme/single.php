<?php get_header() ?>

<div class="projects-container">
    <div class="projects-main">
        <h2><?php the_title() ?></h2>
        <?php the_content() ?>
    </div>

    <div class="side-related">
        <h3>Projets similaires</h3>
        <?php $loop = getRelatedProjects(4, get_the_ID()) ?>
            <?php while($loop->have_posts()) {
                $loop->the_post();
                get_template_part('template-parts/projet');
            } ?>
    </div>
</div>


<?php get_footer() ?>