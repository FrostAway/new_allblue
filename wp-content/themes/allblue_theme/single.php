<?php get_header(); ?>
<?php include_once 'inc/breadcrum.php'; ?>


<div id="news" class="full">
    <div class="wrapper">
        <div class="left">
            
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		
            <div class="news-detail">
                <h2 class=""><?php the_title(); ?></h2>
                <p class="">
                    <?php the_time('F j, Y') ?> | <?php the_time('g:i a') ?>
                </p>
                <?php the_content(); ?>
            </div>	

	<?php endwhile; endif; ?>
            
            
        </div>
        <div class="right">
            <div class="ads">
                <a href="#">
                    <img src="assets/images/ads.jpg">
                </a>
            </div>
            <div class="right-nav">
                <h1>Tin mới</h1>
                <?php query_posts(array('showposts'=>5, 'post_type'=>'post', 'orderby'=>'date', 'order'=>'asc')); ?>
                
                <ul class="list-unstyled">
                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    <li><i class="fa fa-angle-right"></i><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                    <?php endwhile; wp_reset_postdata(); ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="clear-fix"></div>
    </div>
</div>

<?php get_footer(); ?>