<article>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php if( has_post_thumbnail() ) : ?>
       <a href="<?php the_permalink(); ?>">
           <?php the_post_thumbnail('thumbnail'); ?>
           <?php endif; ?>
           <div class="meta-info">
            <p>Posted on <?php echo get_the_date(); ?> by <?php the_author(); ?></p>
            <p><?php if (has_category)(); ?>
            <p><?php the_excerpt(); ?></p>
        </div>