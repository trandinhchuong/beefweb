<?php
// Add custom Theme Functions here
//Bài viết liên quan
function mh_add_post_content($content) {
  if (is_single()) {
    $content .= "<div class='clearfix'></div>";
    global $post;
    $categories = get_the_category($post->ID);
    if ($categories) {
      $category_ids = array();
      foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
      $args=array(
        'category__in' => $category_ids,
        'post__not_in' => array($post->ID),
        'posts_per_page'=> 3, // Number of related posts that will be shown.
        'caller_get_posts'=>1
      );

      $my_query = new wp_query( $args );
      if( $my_query->have_posts() ) { 		
        $content .= '<div id="related_posts"><h3>Bài viết liên quan</h3><ul>';
        while( $my_query->have_posts() ) {
            		$my_query->the_post();
          $content .= '
            <li class="col large-4">
              <div class="relatedthumb">
                <a href="' . get_the_permalink() .'">'. get_the_post_thumbnail().'</a>
              </div>
                  		<div class="relatedcontent">
                      		<h3>
                      			<a href="'. get_the_permalink().'">'. get_the_title().'</a>
                      		</h3>
                        	</div>
                      </li>';
        } //End while
        $content .= "</ul></div> 
        <div class='clearfix'></div>";
      } //End if
    } //End if
  }
  return $content;
}
add_filter ('the_content', 'mh_add_post_content', 0);
