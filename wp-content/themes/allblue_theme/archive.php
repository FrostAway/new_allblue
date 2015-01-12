<?php get_header(); ?>
<?php include_once 'inc/breadcrum.php'; ?>

<?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array('posts_per_page' => 1, 'paged' => $paged , 'cat' => $cat);
    query_posts($args);  
?>
<?php if (have_posts()) : ?>

    <!-- <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

    <?php /* If this is a category archive */ if (is_category()) { ?>
        <h2><?php //single_cat_title(); ?></h2>

    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
        <h2><?php //single_tag_title(); ?></h2>

    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
        <h2><?php //the_time('F jS, Y'); ?></h2>

    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
        <h2><?php //the_time('F, Y'); ?></h2>

    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
        <h2><?php //the_time('Y'); ?></h2>

    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
        <!--<h2>Author Archive</h2>-->

    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <!--<h2>Blog Archives</h2>-->

    <?php } ?> -->


<div id="news" class="full">
    <div class="wrapper">
        <div class="left">
            
            <?php while (have_posts()) : the_post(); ?>
			
            <div class="news-item">
               <a href="<?php the_permalink() ?>">
                    <?php the_post_thumbnail(); ?>
               </a>
               <h4 class="news-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                <p class="news-date">
                    <?php the_time('F j, Y') ?>
                </p>
                <p class="news-sum">
                    <?php the_content(); ?>
                </p>
                <div class="clear-fix"></div>
            </div>
            
             <?php endwhile; ?>
            
            <div class="pagination">
                <ul class="list-inline">
                    <?php 
                        $big = 99999999;
                        echo paginate_links(array(
                            'base'      => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                        ));
                        ?>
                </ul>
            </div>
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
                                
        <?php else : ?>

		<h2>Nothing found</h2>

	<?php endif; ?>

<?php get_footer(); ?>