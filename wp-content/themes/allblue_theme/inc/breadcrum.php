<!----- #breadcrumb ----->
<div class="breadcrumb full">
    <div class="wrapper">
        <div class="left-bread">
            <h1>            
           <?php
		     if (function_exists('is_tag') && is_tag()) {
		        single_tag_title("Tag Archive for &quot;");  }
		      elseif (is_archive()) {
		         wp_title('');  }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot;'; }
		      elseif (is_page()) {
		         wp_title('');                         
                      }else if(is_single()){
                          echo get_the_category(get_the_ID())[0]->cat_name;
                      }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		   ?>
            
            </h1>
        </div>
        <div class="right-bread">
            <?php the_breadcrumb(); ?>
        </div>
        <div class="clear-fix"></div>
    </div>
</div>
<!-----/ #breadcrumb ----->

