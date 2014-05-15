<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>Start</title>
	<meta name="description" content="<?php wp_title(''); echo ' | '; bloginfo( 'description' ); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<meta name="viewport" content="width=device-width; initial-scale=1"/><?php /* Add "maximum-scale=1" to fix the Mobile Safari auto-zoom bug on orientation changes, but keep in mind that it will disable user-zooming completely. Bad for accessibility. */ ?>
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<?php wp_enqueue_script("jquery"); /* Loads jQuery if it hasn't been loaded already */ ?>
	<?php /* The HTML5 Shim is required for older browsers, mainly older versions IE */ ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php //wp_head(); ?> <?php /* this is used by many Wordpress features and for plugins to work proporly */ ?>

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/pepper-grinder/jquery-ui.css" />

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/slide.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/lytebox.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/drop1.css" />
    <script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="js/jquery.qtip-1.0.0-rc3.min.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slides.min.jquery.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lytebox.js"></script>

    
    <script type="text/javascript">
      $(document).ready(function(){
	$(".subcategory ul").slideUp();
	$(".subcategory span").click(function(){
            $(this).siblings().slideToggle();
	});
      });
    </script>
    <style type="text/css">
      .category {
	height: 20px;
      }
      .category, .subcategory {
	border-left: 1px solid #eee;
	line-height: 30px;
      }

      .subcategory {
	 margin-left: 20px;
      }

      .post_link {
	padding: 5px;
	border: 1px dotted #ccc;
      }

      .post_link a {
	text-decoration: none;
	margin-left: 20px;
      }
    </style>

</head>

<body>
   	<div id="top_bar">
       	<div id="top_bar_container">
           	<div id="logo_start_top_bar">
               	<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo_start_top_bar.png" alt="Start" />
				</a>
			</div>
            <div id="logo_inst_top_bar">
            	<ul id="logos_top_bar_list">
                	<li>
                    	<a href="http://ead1.unicamp.br/e-lang/" title="Acesse o site do e-lang" target="_blank">
                    		<img src="<?php echo get_template_directory_uri(); ?>/images/logo_elang_top_bar.png" alt="e-lang" />
						</a>
					</li>
                    <li>
                    	<a href="http://www.iel.unicamp.br/" title="Acesse o site do IEL" target="_blank">
                    		<img src="<?php echo get_template_directory_uri(); ?>/images/logo_iel_top_bar.png" alt="IEL" />
						</a>
					</li>
                    
                    <li>
                    	<a href="http://www.unicamp.br/" title="Acesse o site da Unicamp" target="_blank">
                    		<img src="<?php echo get_template_directory_uri(); ?>/images/logo_unicamp_top_bar.png" alt="Unicamp" />
						</a>
					</li>
                </ul>
            </div>

			<nav id="access" role="navigation">
				<?php wp_page_menu( array('sort_column' => 'menu_order' ) ); ?>
			</nav><!-- #access -->
            
		</div>    	
	</div>