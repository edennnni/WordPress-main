<article id="post"-<?php the_ID();?> <?php post_class();?>>
<header>
    <h2><a href="<?php the_permalin();?><?php the_title();?></h2>
    <?php if(have_posts()) : while(have_posts()) : ?>
        <div class="meta-info"></a>
        <p>posted in <?php echo get_the_date();?>by <?php the_author_posts_link();?></p>
         <?php if(has_category()):?>
            <p>categories: <?php the_category(' ');?></p>
            <?php endif;?>
            <?php if(has_tag()):?>
                <p>tags: <?php the_tags(' ',',');?></p>
                <?php endif;?>
    </div>
</header>
<div class="content">
    <?php the_excerpt()?>
</div>
</article>