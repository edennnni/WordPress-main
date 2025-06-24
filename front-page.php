<?php get_header(); ?>
<div id="container">
    <div id="inner_container">
        <div class="imgs_container">
            <div class="img_container">
                <img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" >
            </div>
            <div class="img_container">
                <img src="<?php echo get_template_directory_uri(); ?>/images/2.jpg" >
            </div>
            <div class="img_container">
                <img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" >
            </div>
           
         </div>  
         <div id="overlay">
            <div class="left_button" class="overlay_button"> onclick="onleftButton()"><<</div>
            <div class="right_button" class="overlay_button"> onclick="onrightButton()">
                <h1>Welcome to Our Website</h1>
                <p>Discover amazing content and connect with us.</p>
                <a href="<?php echo site_url('/about'); ?>" class="btn">Learn
       
    </div>  
    <div style="text-align: center">
        <span class="dott" onclick="currentSlide(1)"></span>
        <span class="dott" onclick="currentSlide(2)"></span>
        <span class="dott" onclick="currentSlide(3)"></span>
</div> 

        <div id="content" class="site-content">
         <div class="primary" class="content-area">
          <main id="main" class="site-main">
           <section class="hero">
              Hero 
              </section>
             <section class="services">
            <h2>Our Services</h2>
        <div class=container">
        <div class="services-item">
            <?php 
            if(is_active_sidebar('services-1')) {
                dynamic_sidebar('services-1');
            }
            ?>
             <?php 
            if(is_active_sidebar('services-2')) {
                dynamic_sidebar('services-2');
            }
            ?>
             <?php 
            if(is_active_sidebar('services-3')) {
                dynamic_sidebar('services-3');
            }
            ?>
            <section class="home-blog">
                <h2>Latest Blog Posts</h2>
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                    'category__in' => array(9, 10, 15),
                    'category__not_in' => array(1),
                );

                $postlist = new WP_Query($args);
                if ($postlist->have_posts()) :
                    while ($postlist->have_posts()) : $postlist->the_post();
                    get_template_part('parts/content','latest-news');
                        endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>No posts found.</p>';
                endif;
                    ?>
    </div>
    <?php get_footer(); ?>
