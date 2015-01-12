<?php
/* 
    Template Name: Contact
 */
?>

<?php get_header() ?>
<?php include_once 'inc/breadcrum.php'; ?>


<div id="contact" class="full">
    <div class="wrapper">
        <div class="left">
            <h3>Liên hệ với AllBlue</h3>
            <form method="post" action="">
                <p>Họ tên</p>
                <p><input name="contact[name]" type="text" required=""></p>
                <p>Số điện thoại</p>
                <p><input name="contact[phone]" type="text"></p>
                <p>Email</p>
                <p><input name="contact[email]" type="email" required=""></p>
                <p>Nội dung liên hệ</p>
                <p><textarea name="contact[content]" rows="10"></textarea></p>
                <p><button name="contact-submit" type="submit">Gửi</button></p>
            </form>
        </div>
        <div class="right">
            <h1>AllBlue Việt</h1>
            <table>
                <tr>
                    <td><i class="fa fa-home fa-2x"></i></td>
                    <td>P1603 chung cư A2 ngõ 229 phố Vọng, Đồng Tâm, Hai Bà Trưng, Hà Nội</td>
                </tr>
                <tr>
                    <td><i class="fa fa-phone fa-2x"></i></td>
                    <td>01695.959.890 - 0985.770.713</td>
                </tr>
                <tr>
                    <td><i class="fa fa-envelope fa-2x"></i></td>
                    <td>allblueviet@gmail.com</td>
                </tr>
                <tr>
                    <td><i class="fa fa-facebook fa-2x"></i></td>
                    <td>https://www.facebook.com/allblueviet</td>
                </tr>
            </table>
        </div>
        <div class="clear-fix"></div>
    </div>
</div>

<?php get_footer(); ?>



