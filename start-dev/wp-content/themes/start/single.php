<?php get_header(); ?>   
    <div id="wraper">
    	<?php get_sidebar(); ?>
        <div id="right_column">
			<div id="content">
				<?php if ( ! dynamic_sidebar( 'Alert' ) ) : ?>
					<!--Wigitized 'Alert' for the home page -->
				<?php endif ?>
				<?php the_post(); ?>
					<div id="breadcrumb">
						<span id="breadcrumb_instruction">Voc&ecirc; est&aacute; em:</span>
						<ul id="breadcrumb_list">
							<?php $category = get_the_category(); ?>
							<li><a href="<?php echo esc_url( home_url( '/' ) ) . "?cat=" . $category[0]->term_id; ?>"><?php echo $category[0]->cat_name; ?> </a>></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ) . "?cat=" . $category[1]->term_id; ?>"><?php echo $category[1]->cat_name; ?> </a>></li>
							<li><?php the_title(); ?></li>
						</ul>
					</div>
					
					<div id="content_section" class="section_blog">
				
						<div class="post-single">
							<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
							<?php if ( has_post_thumbnail() ) { /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } ?>
							<div class="post-content">
								<?php the_content(__('Read more'));?>
							</div>
							<div class="post-meta">
								<!-- <p><?php _e('Postado em '); the_time('F j, Y'); _e(' as '); the_time(); _e(', por '); the_author_posts_link(); ?></p> -->
								
							</div> 
							<?php comments_template( '', true ); ?>
							

						</div><!--.post-single-->
						
			</div><!--#content-->
		                				
		</div> <!--#right_column-->
	</div>        

</body>
</html>
