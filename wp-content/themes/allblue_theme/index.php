

                
<?php get_header(); ?>
<?php get_sidebar("slider") ?>

<!---- #feature ---->
<div id="feature" class="full">
    <div class="wrapper">
        <h1 class="text-center dark">Xây dựng thương hiệu của riêng bạn, tại sao không?</h1>
        <p class="help text-center">
            AllBlue cam kết thiết kế website phù hợp với <span class="blue">đặc trưng thương hiệu riêng</span> của mỗi khách hàng,<br>
            <span class="blue">khác biệt</span> và <span class="blue">độc đáo</span> không lẫn vào đâu được!
        </p>
        <div class="feature-box" id="fb1">
            <a href="#"><img src="<?php echo bloginfo('template_directory') ?>/assets/images/feature-icon1.png"></a>
            <h3>GIAO DIỆN</h3>
            <p>Độc đáo & khác biệt<br>
                tương tác cao</p>
        </div>
        <div class="feature-box" id="fb2">
            <a href="#"><img src="<?php echo bloginfo('template_directory') ?>/assets/images/feature-icon2.png"></a>
            <h3>HỆ THỐNG</h3>
            <p>Bảo mật, tối ưu,<br>
                luôn được cập nhật</p>
        </div>
        <div class="feature-box" id="fb3">
            <a href="#"><img src="<?php echo bloginfo('template_directory') ?>/assets/images/feature-icon3.png"></a>
            <h3>QUY TRÌNH</h3>
            <p>Chuyên nghiệp, nhanh gọn<br>
                hỗ trợ 24/7</p>
        </div>
        <div class="feature-box" id="fb4">
            <a href="#"><img src="<?php echo bloginfo('template_directory') ?>/assets/images/feature-icon4.png"></a>
            <h3>CHI PHÍ</h3>
            <p>Website chất lượng<br>
                chỉ từ 999k</p>
        </div>
        <div class="clear-fix"></div>
    </div>
</div>
<!---- / #feature ---->

<!---- #templates ---->
<div id="templates" class="full">
    <h1 class="text-center blue">Kho giao diện mẫu phong phú và tuyệt đẹp</h1>
    <div id="templates-header">
        <ul class="list-inline">
            <?php $term_hot = get_terms('template-category', array('orderby'=>'count', 'order'=>'desc', 'number'=>1)); ?>
            
            <li class="active" data-category="<?php echo $term_hot[0]->term_id ?>">
                <p><i class="fa fa-star fa-2x"></i></p>
                <p>Nổi bật</p>
                <div class="li-triangle"></div>
            </li>
            
            <?php $terms = get_terms('template-category'); ?>
            <?php foreach ($terms as $term) { ?>  
            <li data-category="<?php echo $term->term_id ?>" class="">
                <p><i class="fa <?php echo get_option('template-icon-'.$term->term_id) ?> fa-2x"></i></p>
                <p><?php echo $term->name ?></p>
                <div class="li-triangle"></div>
            </li>
            <?php } ?>
            <div class="clear-fix"></div>
        </ul>
    </div>
    <div id="templates-body">
        <div class="wrapper">
            <?php query_posts(array('post_type' => 'template', 'showposts'=>4)); ?>
            <?php if (have_posts()): while (have_posts()): the_post(); ?>

                    <?php
                    $taxonomies = get_the_terms($post->ID, 'template-category');
                    $term_id = '';
                    foreach ($taxonomies as $term) {
                        $term_id .= $term->term_id . ' ';
                    }
                    ?>
            <div class="template-box" cat="<?php echo $term_id ?>">
                <div class="template-img">
                    <?php the_post_thumbnail(); ?>
                    <div class="layer"></div>
                    <a class="view-template" data-img="<?php echo get_post_meta(get_the_ID(), 'template-image', tre); ?>">
                        <i class="fa fa-search fa-2x"></i> Chi tiết
                    </a>
                </div>
                <h5><?php the_title(); ?></h5>
                <p class="template-note"><?php echo get_the_excerpt(); ?></p>
            </div>
            <?php endwhile; else: ?>
            
            <?php endif; ?>
            
            <div class="clear-fix"></div>
            <a class="view-more blue" href="<?php echo home_url() ?>/?page_id=36">Xem thêm giao diện</a>
            <div class="clear-fix"></div>
        </div>
    </div>
</div>
<!---- / #templates ---->

<a href="#" id="close-layer-button">
    <i class="fa fa-close fa-2x"></i>
</a>
<div id="fixed-layer"></div>
<div id="fixed-img">
    <img src="">
</div>

<!---- #progress ---->
<div id="progress" class="full">
    <div class="triangle"></div>
    <div class="wrapper">
        <h1 class="text-center">Quy trình thiết kế website tại AllBlue</h1>
        <p class="help text-center">Nỗ lực không ngừng để đảm bảo chất lượng và sự hài lòng của khách hàng</p>
        <div class="progress-box" id="pb1">
            <a href="#"><img src="<?php echo bloginfo('template_directory') ?>/assets/images/p-icon1.png"></a>
            <p>
                Trao đổi, tư vấn<br>
                chốt yêu cầu
            </p>
        </div>
        <div class="next-progress">
            <i class="fa fa-angle-right"></i>
        </div>
        <div class="progress-box" id="pb2">
            <a href="#"><img src="<?php echo bloginfo('template_directory') ?>/assets/images/p-icon2.png"></a>
            <p>
                Báo giá và ký hợp đồng<br>
                thanh toán trước 50%
            </p>
        </div>
        <div class="next-progress">
            <i class="fa fa-angle-right"></i>
        </div>
        <div class="progress-box" id="pb3">
            <a href="#"><img src="<?php echo bloginfo('template_directory') ?>/assets/images/p-icon3.png"></a>
            <p>
                Demo, chỉnh sửa<br>
                chốt giao diện
            </p>
        </div>
        <div class="next-progress">
            <i class="fa fa-angle-right"></i>
        </div>
        <div class="progress-box" id="pb4">
            <a href="#"><img src="<?php echo bloginfo('template_directory') ?>/assets/images/p-icon4.png"></a>
            <p>
                Lập trình, hoàn thiện<br>
                chức năng
            </p>
        </div>
        <div class="next-progress">
            <i class="fa fa-angle-right"></i>
        </div>
        <div class="progress-box" id="pb5">
            <a href="#"><img src="<?php echo bloginfo('template_directory') ?>/assets/images/p-icon5.png"></a>
            <p>
                Bàn giao sản phẩm<br>
                bảo hành trọn đời
            </p>
        </div>
        <div class="clear-fix"></div>
    </div>
</div>
<!---- / #progress ---->

<!---- #customer ---->
<div id="customer" class="full">
    <div class="wrapper">
        <h1 id="customer-quote" class="text-center dark">
            <i class="fa fa-quote-left"></i>
            Khách hàng đến không thiếu, khách hàng ở lại mới là quan trọng
            <i class="fa fa-quote-right"></i>
        </h1>
        <p class="help text-center light">Hãy xem khách hàng nói gì về chúng tôi!</p>
        <div id="customer-slide">
            <div id="slideshow2" class="slide-content cycle-slideshow"
                 data-cycle-fx=carousel
                 data-cycle-timeout=3500
                 data-cycle-slides=">.customer-item"
                 data-cycle-carousel-visible=2
                 data-cycle-next="#carousel-prev"
                 data-cycle-prev="#carousel-next">
                <div class="customer-item">
                    <img src="<?php echo bloginfo('template_directory') ?>/assets/images/customer.png">
                    <div class="customer-info">
                        <h4 class="blue">Ông Lê Thanh Nam</h4>
                        <p class="light small">Giám đốc công ty TNHH Thành Nam</p>
                        <p class="customer-comment">
                            "Thay mặt anh em trong công ty cám ơn tinh thần và sự hỗ trợ nhiệt tình của các bạn AllBlue.
                            Thật tuyệt vời khi được làm việc cùng các bạn!"
                        </p>
                    </div>
                    <div class="clear-fix"></div>
                </div>
                <div class="customer-item">
                    <img src="<?php echo bloginfo('template_directory') ?>/assets/images/customer.png">
                    <div class="customer-info">
                        <h4 class="blue">Ông Lê Thanh Nam</h4>
                        <p class="light small">Giám đốc công ty TNHH Thành Nam</p>
                        <p class="customer-comment">
                            "Thay mặt anh em trong công ty cám ơn tinh thần và sự hỗ trợ nhiệt tình của các bạn AllBlue.
                            Thật tuyệt vời khi được làm việc cùng các bạn!"
                        </p>
                    </div>
                    <div class="clear-fix"></div>
                </div>
                <div class="customer-item">
                    <img src="<?php echo bloginfo('template_directory') ?>/assets/images/customer.png">
                    <div class="customer-info">
                        <h4 class="blue">Ông Lê Thanh Nam</h4>
                        <p class="light small">Giám đốc công ty TNHH Thành Nam</p>
                        <p class="customer-comment">
                            "Thay mặt anh em trong công ty cám ơn tinh thần và sự hỗ trợ nhiệt tình của các bạn AllBlue.
                            Thật tuyệt vời khi được làm việc cùng các bạn!"
                        </p>
                    </div>
                    <div class="clear-fix"></div>
                </div>
                <div class="customer-item">
                    <img src="<?php echo bloginfo('template_directory') ?>/assets/images/customer.png">
                    <div class="customer-info">
                        <h4 class="blue">Ông Lê Thanh Nam</h4>
                        <p class="light small">Giám đốc công ty TNHH Thành Nam</p>
                        <p class="customer-comment">
                            "Thay mặt anh em trong công ty cám ơn tinh thần và sự hỗ trợ nhiệt tình của các bạn AllBlue.
                            Thật tuyệt vời khi được làm việc cùng các bạn!"
                        </p>
                    </div>
                    <div class="clear-fix"></div>
                </div>
                <div class="clear-fix"></div>
            </div>
            <a id="carousel-prev" class="slide-control left"><i class="fa fa-angle-left"></i></a>
            <a id="carousel-next" class="slide-control right"><i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</div>
<!---- / #customer ---->

<!---- #some-posts ---->
<div id="some-posts" class="full">
    <div class="wrapper">
        <div class="post-left">
            <h1 class="">BẢN TIN ALLBLUE</h1><div class="clear-fix"></div>
            <?php query_posts(array('posts_per_page' => 3, 'paged' => $paged));  ?>
            <?php if(have_posts()): while(have_posts()) : the_post(); ?>
            <div class="post-item">
                <?php the_post_thumbnail(); ?>
                <div class="post-sum">
                    <h5><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
                    <p class="small light"><?php the_time('F j, Y') ?>, <?php the_time('g i:a') ?></p>
                    <p class="dark">
                        <?php the_content() ?>
                    </p>
                </div>
                <div class="clear-fix"></div>
            </div>
            <?php endwhile; ?>
            
            <?php endif; ?>
            
            
        </div>
        <div class="post-right">
            <h3 class="">Dự án của chúng tôi</h3><div class="clear-fix"></div>
            <img src="<?php echo bloginfo('template_directory') ?>/assets/images/project1.png">
            <img src="<?php echo bloginfo('template_directory') ?>/assets/images/project1.png">
            <img src="<?php echo bloginfo('template_directory') ?>/assets/images/project1.png">
        </div>
        <div class="clear-fix"></div>
    </div>
</div>
<!---- / #some-posts ---->

<?php get_footer(); ?>
