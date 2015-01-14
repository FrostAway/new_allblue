<?php
include_once 'inc/navwalker.php';
;

// Add RSS spannks to <head> section
//automatic_feed_spannks();
//add post thumbnail

add_theme_support('post-thumbnails');

// Load jQuery
if (!is_admin()) {
    //wp_deregister_script('jquery');
    //wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"), false);
    //wp_enqueue_script('jquery');
}

// Clean up the <head>
function removeHeadLinks() {
    remove_action('wp_head', 'rsd_spannk');
    remove_action('wp_head', 'wlwmanifest_spannk');
}

add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

// Declare sidebar widget zone
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Sidebar Widgets',
        'id' => 'sidebar-widgets',
        'description' => 'These are widgets for the sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
}


//query post
add_action('pre_get_posts', 'my_post_queries');

function my_post_queries($query) {
    // do not alter the query on wp-admin pages and only alter it if it's the main query
    if (!is_admin() && $query->is_main_query()) {

        // alter the query for the home and category pages 

        if (is_home()) {
            $query->set('posts_per_page', 3);
        }

        if (is_category()) {
            $query->set('posts_per_page', 5);
        }

        if (is_search()) {
            $query->set('posts_per_page', 10);
        }
    }
}

//breadcrumb

function the_breadcrumb() {
    global $post;


    if (!is_home()) {

        echo '<span><a href="'.  home_url().'">';
        echo 'Trang chủ';
        echo '</a></span><span><i class="fa fa-angle-right"></i></span>';
        if (is_category()) {
            echo '<span>';
            the_category(get_query_var('cat'));
            echo '</span><span><i class="fa fa-angle-right"></i></span>';
        } elseif (is_single()) {
            echo '<span>';
            echo get_the_category(get_the_ID())[0]->cat_name;
            echo '</span><span><i class="fa fa-angle-right"></i></span>';
        } elseif (is_page()) {
            echo ' <span><strong> ' . get_the_title() . '</strong> </span>';
        } elseif (is_tag()) {
            single_tag_title();
        } elseif (is_day()) {
            echo"<span>";
            the_time('F jS, Y');
            echo'</span>';
        } elseif (is_month()) {
            echo"<span>";
            the_time('F, Y');
            echo'</span>';
        } elseif (is_year()) {
            echo"<span>";
            the_time('Y');
            echo'</span>';
        } elseif (is_author()) {
            echo"<span>";
            echo'</span>';
        } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
            echo "<span>Blog Archives";
            echo'</span>';
        } elseif (is_search()) {
            echo"<span>Search Results";
            echo'</span>';
        }
    }
}

// post type template

function create_post_type_template() {
    register_post_type('template', array(
        'labels' => array(
            'name' => 'Giao diện',
            'singular_name' => 'Giao diện',
            'add_new' => 'Thêm Giao diện mới',
            'edit_item' => 'Chỉnh sửa Giao diện',
            'all_items' => 'Tất cả Giao diện',
            'new_item_name' => 'Giao diện mới',
            'view_item' => 'Xem Giao diện',
            'menu_name' => 'Giao diện',
            'add_new_item' => 'Thêm Giao diện mới',
        ),
        'description' => 'Kho giao diện',
        'supports' => array(
            'title', 'excerpt', 'thumbnail', 'revisions',
        ),
        'taxonomies' => array('category'),
        'hierarchical' => true,
        'has_archive' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'show_in_admin_bar' => false,
        'menu_position' => 7,
        'menu_icon' => '',
        'capability_type' => 'post',
    ));
    register_taxonomy('template-category', 'template', array(
        'labels' => array(
            'name' => 'Loại Giao diện',
            'singular_name' => 'Loại Giao diện',
            'add_new' => 'Mục Giao diện mới',
            'new_item_name' => 'Mục Giao diện mới',
            'add_new_item' => 'Thêm mục Giao diện'
        ),
        'public' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
        'rewirte' => array('slug' => 'template-cat'),
        'query_var' => true,
    ));
}

add_action('init', create_post_type_template());
//field image
add_action('add_meta_boxes', 'add_template_image');

function add_template_image() {
    add_meta_box('template-image', 'Ảnh Demo', 'set_template_image', 'template', 'normal', 'low', array());
}

function set_template_image() {
    global $post;
    $custom = get_post_custom($post->ID);
    $tpl_image = $custom['template-image'][0];
    add_thickbox();
    ?>

    <label>Ảnh Demo giao diện</label>

    <input type="hidden" name="template-image" id="imgurl" value="<?php if (isset($tpl_image)) echo $tpl_image; ?>" />
    <input onclick="upload_image('#imgurl')" type="submit" id="btn-upload" value="Upload Image" /> <br />
    <div id="template-image-box">
    <?php if(isset($tpl_image)){ ?>
    <img id="show-tpl-imgurl" src="<?php echo $tpl_image; ?>" style="width: 810px; margin: 5px;" />
    <?php }else{ ?>
    <img id="show-tpl-imgurl" src="<?php echo get_template_directory_uri() ?>/assets/images/templates/item3.jpg" style="" />
    <?php } ?>
    </div>
    <script>
        jQuery("#btn-upload").click(function () {
            return false;
        });
        function upload_image(imgid) {
            tb_show('', 'media-upload.php?type=image&height=550&width=1000&TB_iframe=true');

            window.send_to_editor = function (html) {
                imgurl = jQuery('img', html).attr('src');
                jQuery(imgid).val(imgurl);
                jQuery("#template-image-box").html(
                        '<img id="show-tpl-imgurl" src="'+imgurl+'" style="width: 810px; margin: 5px;" />'
                                        );
                tb_remove();
            };
        }
    </script>
    <?php
}

add_action('save_post', 'update_tpl_image');

function update_tpl_image($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    if (isset($_REQUEST['post_type']) && $_REQUEST['post_type'] == 'template') {
        if (!empty($_REQUEST['template-image'])) {
            update_post_meta($post_id, 'template-image', $_POST['template_image']);
        } else {
            delete_post_meta($post_id, 'template-image');
        }
        //image
        if (isset($_POST['template-image'])) {
            update_post_meta($post_id, 'template-image', esc_url_raw($_POST['template-image']));
        }
    }
}

// them truong cho taxonomy
add_action('template-category_add_form_fields', 'category_form_custom_field_add', 10);
add_action('template-category_edit_form_fields', 'category_form_custom_field_edit', 10, 2);

function category_form_custom_field_add($taxonomy) {
    ?>
    <div class="form-field">
        <label for="template-icon">Icon Taxonomy Template</label>
        <input name="template-icon" id="template-icon" type="text" value="" placeholder="fa-star" size="40" aria-required="true" />
        <p class="description">Enter a Icon value example "fa-star".</p>
    </div>
    <?php
}

function category_form_custom_field_edit($tag, $taxonomy) {

    $option_name = 'template-icon-' . $tag->term_id;
    $tpl_icon = get_option($option_name);
    ?>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="template-icon">Icon Taxonomy Template</label></th>
        <td>
            <input type="text" name="template-icon" id="template-icon" value="<?php echo esc_attr($tpl_icon) ? esc_attr($tpl_icon) : ''; ?>" placeholder="fa-star" size="40" aria-required="true" />
            <p class="description">Enter a Icon value example "fa-star".</p>
        </td>
    </tr>
    <?php
}

// luu lai truong vua them 
add_action('created_template-category', 'category_form_custom_field_save', 10, 2);
add_action('edited_template-category', 'category_form_custom_field_save', 10, 2);

function category_form_custom_field_save($term_id, $tt_id) {

    if (isset($_POST['template-icon'])) {
        $option_name = 'template-icon-' . $term_id;
        update_option($option_name, $_POST['template-icon']);
    }
}

// contact form
if (isset($_POST['contact-submit'])) {
    $contact = $_POST['contact'];
    $content = $contact['content']."\n\n".'Người gửi: '.$contact['name']."\n\n".$contact['email'];
    $headers[] = 'From '.$contact['name'].' <'.$contact['email'].'>';
    if (wp_mail(get_option('mailserver_login'), $contact['subject'], $content, $headers)) {
        echo '<p class="message-succ">Đã gửi liên hệ thành công, Chúng tôi sẽ sớm hồi đáp</p>';
        wp_redirect(home_url());
        exit();
    } else {
        echo '<p class="message-error">Có lỗi xảy ra vui lòng nhập lại</p>';
    }
}

?>
