<?php get_header(); ?>   
    <div id="wraper">
    	<?php get_sidebar(); ?>
        <div id="right_column">
			<div id="content">
				<?php if ( ! dynamic_sidebar( 'Alert' ) ) : ?>
					<!--Wigitized 'Alert' for the home page -->
				<?php endif ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
						<!-- <div class="content_toolbar">
							<div class="content_toolbar_extra">                   
							</div>                
							<div class="content_toolbar_player">
								<div class="player_title">&Aacute;udio</div>
								<!-- JPLAYER --
								<div id="jquery_jplayer_1" class="jp-jplayer"></div>
								<div class="jp-audio">
									<div class="jp-type-single">
										<div id="jp_interface_1" class="jp-interface">
											<ul class="jp-controls">
												<li><a href="#" class="jp-play" tabindex="1" title="Iniciar &aacute;udio">play</a></li>
												<li><a href="#" class="jp-pause" tabindex="1" title="Pausar &aacute;udio">pause</a></li>
												<li><a href="#" class="jp-stop" tabindex="1" title="Parar &aacute;udio">stop</a></li>
												<li><a href="#" class="jp-mute" tabindex="1" title="Desligar som">mute</a></li>
												<li><a href="#" class="jp-unmute" tabindex="1" title="Ligar som">unmute</a></li>
											</ul>
											<div class="jp-progress">
												<div class="jp-seek-bar">
													<div class="jp-play-bar"></div>
												</div>
											</div>
											<div class="jp-volume-bar">
												<div class="jp-volume-bar-value"></div>
											</div>
											<div class="jp-current-time"></div>
											<div class="jp-duration"></div>
										</div>                        
									</div>
								</div>
								<!-- END JPLAYER --                    
							</div>                    
						</div>	-->
				
						<div class="post-single">
							<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
							<?php if ( has_post_thumbnail() ) { /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } ?>
							<div class="post-content">
								<?php the_content(__('Read more'));?>
							</div>
							<div class="post-meta">
								<!-- <p><?php _e('Postado em '); the_time('F j, Y'); _e(' as '); the_time(); _e(', por '); the_author_posts_link(); ?></p> -->
								<p><?php comments_popup_link('Nenhum palpite', '1 palpite', '% palpites'); ?> 
								<!-- <p><?php if (the_tags('Tags: ', ', ', ' ')); ?></p>-->
							</div> 
						</div><!--.post-single-->
						
				

			</div><!--#content-->
		                
            <?php endwhile; else: ?>
					<div class="no-results">
						<p><strong><?php _e('Ocorreu um erro.'); ?></strong></p>
						<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
					</div><!--noResults-->
			<?php endif; ?>
						
							
			<div class="oldernewer">
				<p class="older"><?php next_posts_link('&laquo; Posts antigos') ?></p>
				<p class="newer"><?php previous_posts_link('Posts mais recentes &raquo;') ?></p>
			</div><!--.oldernewer-->
				
		</div> <!--#right_column-->
	</div>        

</body>
</html>
