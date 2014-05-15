<?php
/*
Template Name: Indice geral
*/
?>
<?php
get_header(); ?>

		<div id="wraper">
			<div id="content_section" role="main">

				<?php
    echo '<ul style="width: 500px;">';
 foreach( get_categories('hide_empty=0') as $cat ) :
 if( !$cat->parent ) {
    echo '<li class="category"><span><strong>' . $cat->name . '</strong></span>';
    process_cat_tree( $cat->term_id, $cat );
    echo '</li>';
 }
 endforeach;
     echo '</ul>';
 wp_reset_query(); //to reset all trouble done to the original query
//
function process_cat_tree( $cat, $cat2) {
 
	 $args = array('category__in' => array( $cat ), 'numberposts' => -1);
	 $cat_posts = get_posts( $args );
	
	 if( $cat_posts && $cat2->category_parent != 0) :
	  echo '<ul>';
		 foreach( $cat_posts as $post ) :
			 echo '<li class="post_link">';
			 echo '<a href="' . get_permalink( $post->ID ) . '">' . $post->post_title . '</a>';
			 echo '</li>';
		 endforeach;
	  echo '</ul>';
	 endif;
	 
	 $next = get_categories('hide_empty=0&parent=' . $cat);
	 
	 if( $next ) :
		 foreach( $next as $cat ) :
			 echo '<li class="subcategory"><span><strong>' . $cat->name . '</strong></span>';
			 process_cat_tree( $cat->term_id, $cat );
			 echo '</li>';
		 endforeach;
	 endif;
 
}
?>

			</div><!-- #content -->
		</div><!-- #primary -->
     

</body>
</html>
