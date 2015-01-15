<?php
/* 
    Template Name: Check Out
 */
?>

<?php get_header() ?>
<?php include_once 'inc/breadcrum.php'; ?>


<div id="contact" class="full">
    <div class="wrapper">
        <div class="left">
            <h3>Check Out</h3>
            <form method="post" action="">
                <p>Product ID</p>
                <p><input name="order-product-id" type="text" required=""></p>
                <p>Order Email</p>
                <p><input name="order-email" type="text" required=""></p>
                <p>Số điện thoại</p>
                <p><input name="order-phone" type="text"></p>
                <p>Địa chỉ</p>
                <p><input name="order-address" type="text" required=""></p>
                <p><input type="submit" name="order-submit" value="Process" /></p>
            </form>
        </div>
        
        <div class="clear-fix"></div>
    </div>
</div>

<?php get_footer(); ?>



