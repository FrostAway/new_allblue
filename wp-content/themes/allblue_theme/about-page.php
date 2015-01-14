<?php
/*
 * Template Name: About
 */
?>

<?php get_header() ?>
<?php include_once 'inc/breadcrum.php'; ?>

<div id="allblue-philosophy" class="full">
    <div class="wrapper">
        <div class="blueship">
            <img src="<?php echo bloginfo('template_directory') ?>/assets/images/allblue-ship.png">
        </div>
        <div class="philoshophy">
            <div class="quote-left"><i class="fa fa-quote-left fa-2x"></i></div>
            <div class="quote-text">
                Có ba thứ không thể nào dừng lại: <span class="blue">ước mơ</span> của con người, dòng chảy của <span class="blue">thời gian</span>,
                    và <span class="blue">ý chí</span> được thừa kế.
                Miễn là con người vẫn còn tiếp tục tìm kiếm ý nghĩa thực sự của tự do, ba thứ này sẽ không bao giờ kết thúc.
            </div>
            <div class="quote-right"><i class="fa fa-quote-right fa-2x"></i></div>
            <div class="all-blue-dream">
                <img src="<?php echo bloginfo('template_directory') ?>/assets/images/small-allblue.png">
                tượng trưng cho những ước mơ điên rồ và khát khao cháy bỏng. Lịch sử đã minh chứng về những kỳ tích được làm
                nên từ ảo tưởng. Và những kẻ điên rồ đã thay đổi thế giới này ra sao.
                Miễn là bạn có ước mơ, đừng bao giờ từ bỏ nó!
            </div>
        </div>
        <div class="clear-fix"></div>
    </div>
    <hr>
</div>

<div id="allblue-info" class="full">
    <div class="wrapper">
        <div class="left">
            <h1 class="dark">Đôi nét về AllBlue</h1>
            <div>
                AllBlue là tập thể của những con người có chung niềm đam mê trong lĩnh vực thiết kế và lập trình.
                Chúng tôi cố gắng xây dựng một gia đình hơn là một công ty, nơi mọi người sống và làm việc với nhau
                như những người anh em, cùng một mục tiêu chung là xây dựng tập thể ngày càng lớn mạnh. Ước mơ của chúng tôi
                là tạo ra những sản phẩm công nghệ xứng tầm quốc tế, ứng dụng công nghệ thông tin để cải cách giáo dục,
                y tế và nông nghiệp, tạo dựng cuộc sống tốt đẹp hơn.<br>
                Chặng đường thực hiện ước mơ còn dài. Chúng tôi chỉ còn biết cách cố gắng hết sức, minh chứng khả năng bằng
                chất lượng của từng sản phẩm và thái độ phục vụ đối với mỗi khách hàng. AllBlue không cố gắng tự pr bản thân bằng những
                giá trị tầm thường. Phương châm của chúng tôi là chất lượng sản phẩm và thái độ phục vụ!<br>
            </div>
        </div>
        <div class="right">
            <h1 class="dark">Kỹ năng và công nghệ</h1>
            <p class="help"></p>
            <div>
                <p class="skill skill-1" style="width: 20%">Photoshop</p>
                <p class="skill skill-2" style="width: 30%">Illustrator</p>
                <p class="skill skill-3" style="width: 50%">Html, CSS, Javascript</p>
                <p class="skill skill-4" style="width: 40%">Wordpress</p>
                <p class="skill skill-5" style="width: 25%">CodeIgniter</p>
            </div>
        </div>
        <div class="clear-fix"></div>
    </div>
</div>

<div id="allblue-advantage" class="full">
    <h1 class="text-center">AllBlue có gì khác?</h1>
    <p class="help text-center">Những lý do để tin chọn AllBlue thiết kế website cho bạn</p>
    <div class="wrapper">
        <?php query_posts(array('post_type'=>'page', 'showposts'=>6, 'parent'=>19)); ?>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <div class="advantage-box">
            <div class="left">
                <div></div>
            </div>
            <div class="right">
                <h4><?php the_title(); ?></h4>
                <?php the_content(); ?>
            </div>
            <div class="clear-fix"></div>
        </div>
        <?php endwhile;            wp_reset_query();       endif; ?>
        
        <div class="clear-fix"></div>
    </div>
</div>

<div id="allblue-team" class="full">
    <div class="wrapper">
        <h1 class="dark text-center">Đội ngũ AllBlue</h1>
        
        <?php $users = get_users(array(
            'orderby'=> 'ID', 'order'=>'asc',
        )); ?>
        <div class="member-box">
            <img src="<?php echo bloginfo('template_directory') ?>/assets/images/templates/item3.jpg">
            <h4>Nguyễn Duy Nhân - Developer</h4>
            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.
                Sed non mauris vitae erat conse Sed non mauris vitae erat conse dfdfd</p>
            <p>
                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                <a href="#"><i class="fa fa-youtube-square fa-2x"></i></a>
                <a href="#"><i class="fa fa-rss-square fa-2x"></i></a>
                <a href="#"><i class="fa fa-skype fa-2x"></i></a>
            </p>
        </div>
        <div class="member-box">
            <img src="<?php echo bloginfo('template_directory') ?>/assets/images/templates/item3.jpg">
            <h4>Nguyễn Duy Nhân - Developer</h4>
            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.
                Sed non mauris vitae erat conse Sed non mauris vitae erat conse dfdfd</p>
            <p>
                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                <a href="#"><i class="fa fa-youtube-square fa-2x"></i></a>
                <a href="#"><i class="fa fa-rss-square fa-2x"></i></a>
                <a href="#"><i class="fa fa-skype fa-2x"></i></a>
            </p>
        </div>
        <div class="member-box">
            <img src="<?php echo bloginfo('template_directory') ?>/assets/images/templates/item3.jpg">
            <h4>Nguyễn Duy Nhân - Developer</h4>
            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.
                Sed non mauris vitae erat conse Sed non mauris vitae erat conse dfdfd</p>
            <p>
                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                <a href="#"><i class="fa fa-youtube-square fa-2x"></i></a>
                <a href="#"><i class="fa fa-rss-square fa-2x"></i></a>
                <a href="#"><i class="fa fa-skype fa-2x"></i></a>
            </p>
        </div>
        <div class="member-box">
            <img src="<?php echo bloginfo('template_directory') ?>/assets/images/templates/item3.jpg">
            <h4>Nguyễn Duy Nhân - Developer</h4>
            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.
                Sed non mauris vitae erat conse Sed non mauris vitae erat conse dfdfd</p>
            <p class="social">
                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                <a href="#"><i class="fa fa-youtube-square fa-2x"></i></a>
                <a href="#"><i class="fa fa-rss-square fa-2x"></i></a>
                <a href="#"><i class="fa fa-skype fa-2x"></i></a>
            </p>
        </div>
        <div class="clear-fix"></div>
    </div>
</div>

<?php get_footer() ?>
