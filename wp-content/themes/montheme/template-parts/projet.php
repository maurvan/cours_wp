<!-- on découpe les template en morçeaux qu'on peut réutiliser -->

<a href="<?php the_permalink() ?>">
    <div class="card-side">
        <div class="card-img">
            <?php the_post_thumbnail('thumbnail') ?>
        </div>
        <div class="card-text">
            <span class="card-title"><?php the_title() ?></span>
            <?php the_excerpt() ?>
        </div>
    </div>
</a>