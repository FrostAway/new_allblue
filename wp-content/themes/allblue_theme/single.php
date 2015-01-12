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
                <ul class="list-unstyled">
                    <li><i class="fa fa-angle-right"></i><a href="#">IKI.vn - Hệ thống thời trang xuất khẩu hàng Việt Nam chất lượng cao</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="#">IKI.vn - Hệ thống thời trang xuất khẩu</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="#">IKI.vn - Hệ thống thời trang xuất khẩu</a></li>
                </ul>
            </div>
        </div>
        <div class="clear-fix"></div>
    </div>
</div>

<?php get_footer(); ?>