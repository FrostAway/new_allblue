<?php

/*
 * Plugin Name: Cusgom Widget
 * Plugin Author: FrostLife
 * Plugin URI: allbluviet.com 
 */

function create_post_comment_widget(){
    register_widget('Most_Comment_Post');
}
add_action('widgets_init', 'create_post_comment_widget');

class Most_Comment_Post extends WP_Widget{ // ten class trung voi ten register
    // ten widget
    function Most_Comment_Post(){
        $wg_options = array(
            'classname' => 'Most_Comment_Post',
            'description' => 'posts have most comments',
        );
        $this->WP_Widget('most_comment_post_id', 'Most Comment Post', $wg_options);
    }
    
    //form option
    function form($instance) {
        $default = array(
            'num_posts' => 5
        );
        $instance = wp_parse_args((array) $instance, $default);
        $num_posts = esc_attr($instance['num_posts']); // echo ky tu dac biet nua.
        //create form
        echo '<p><label>Enter Num Posts </label>'; ?>
<input type="text" id="<?php echo $this->get_field_id('num_posts') ?>" 
       name="<?php echo $this->get_field_name('num_posts') ?>" value="<?php echo attribute_escape($num_posts) ?>" />
</p>
    <?php }
    
    // save data
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['num_posts'] = strip_tags($new_instance['num_posts']);
        return $instance;
    }
    
    //display widget
    function widget($args, $instance) {
        $num = apply_filters('widget_num_posts', $instance['num_posts']);
        query_posts(array('post_type'=>'post', 'showposts'=>$num, 'orderby'=>'comment_count', 'order'=>'desc'));
        if(have_posts()): while (have_posts()): the_post(); ?>
<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
<?php endwhile; wp_reset_query();endif;
    }
}