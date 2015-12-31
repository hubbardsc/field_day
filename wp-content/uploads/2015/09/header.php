<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title ><?php wp_title( '', true, 'right' ); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type='text/javascript' src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--> 
<?php 
wp_head();
add_theme_support('post-thumbnails'); 
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );

?>

</head>
<script>

$(document).ready(function(){
	$(".sb-search-input").hide();
    $(".search-button").click(function(){
        $(".sb-search-input").toggle(700);
        $(".spaceholder").toggle(700);
    });
	$("#navMenu").hide();
    $("#menu_button").click(function(){
        $("#page_load_navmenu").toggle(700);
        $("#navMenu").toggle(700);
    });
    $("#menu_button_expanded").click(function(){
        $("#page_load_navmenu").toggle(700);
        $("#navMenu").toggle(700);   
    });
    $("#page_load_navmenu").hover(function(){
		$('#logo').animate({
        	left: '82px',
      	});
	});
});

$(window).scroll(function() {
;
	var flag = true;
	
    if ($(window).scrollTop() == 0) {
    	$('#logo').animate({
        	left: '82px',
      	});	
    }
    else {
    	if ($('#logo').css('left') >= '82px') {
	    	$('#logo').animate({
	        	left: $('#logo').outerWidth() * -1,
	      	});
	    }
    }
});

</script>
<body>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<? if(is_front_page()) { ?>
		<?php if (get_the_post_thumbnail()) { ?>
		<?php $image = the_post_thumbnail(); ?>
			<div class="col-md-12 welcome" style="background-image: url(<?php echo $image[1]; ?>)">
		<? } else { ?>
			<div class="col-md-12 welcome" style="background-image: url(<?php the_field('backup_background_image', 'options'); ?>);">
		<? } ?>
	<? } else { ?>
		<?php if (get_the_post_thumbnail()) { ?>
		<?php $image = the_post_thumbnail(); ?>
			<div class="col-md-12 page-welcome" style="background-image: url(<?php echo $image[1]; ?>)">
		<? } else { ?>
			<div class="col-md-12 page-welcome" style="background-image: url(<?php the_field('backup_background_image', 'options'); ?>);padding-left: 0px !important; padding-right: 0px!important; ">
		<? } ?>
	<? } ?>
<?php endwhile ?>
	<div class="col-md-12 col-xs-12 row">
        <div class="input-group col-md-12 col-xs-12">
        	<button class="btn btn-default search-button col-md-1 col-xs-1" type="button"><span class="glyphicon glyphicon glyphicon-search" aria-hidden="false"></span></button>
        	
        	<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
			<div class="col-md-8 col-xs-8 spaceholder"></div>
			<div><input class="sb-search-input col-md-8 col-xs-8" type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
			</div>
			</form>

	 		<?php if (get_field('donation_button_title', 'options')): ?>
				<a href="<?php the_field('donation_button_link', 'options'); ?>"><div class="col-md-2 col-xs-2 donation_div"><button type="button" class="btn btn-default donate_button"><?php the_field('donation_button_title', 'options'); ?></button></div></a>
			<?php endif ?>
		</div>
	</div>
	<div class="col-xs-12">
		<div id="page_load_navmenu">
			<a class="btn btn-default menu-button col-xs-1" role="button" type="button" id="menu_button" align=""><span><img class="menu_icon" src="<?php echo get_site_url(); ?>/wp-content/themes/riveroak/images/menu-icon.png"></span></a><a href="<? echo site_url(); ?>"><img src="<?php the_field('logo', 'options'); ?>" class="logo" id="logo"></a>
		</div>
		<div id="navMenu">
			<a class="btn btn-default menu-button-expanded" type="button" role="button" id="menu_button_expanded" align=""><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			     
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse in" id="bs-example-navbar-collapse-1">
			    	
			    	<ul class="nav navbar-nav">
		        		<div id="main-nav">
						    <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => '')); ?>
						</div>
				      	<a href="<?php echo site_url() ?>"><img src="<?php the_field('logo', 'options'); ?>" class="logo_expanded" id="logo_expanded" align="right"></a>
				   </ul>
			      
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
		<div class="social-media" align="right;" style="margin-right: 30px;">
				<?php if (get_field('social_media_icon_1', 'options')): ?>
					<a href="<?php the_field('social_media_link_1', 'options'); ?>"><img src="<?php the_field('social_media_icon_1', 'options'); ?>"></a>
				<?php endif ?>
				<?php if (get_field('social_media_icon_2', 'options')): ?>
					<a href="<?php the_field('social_media_link_2', 'options'); ?>"><img src="<?php the_field('social_media_icon_2', 'options'); ?>"></a>
				<?php endif ?>
				<?php if (get_field('social_media_icon_3', 'options')): ?>	
					<a href="<?php the_field('social_media_link_3', 'options'); ?>"><img src="<?php the_field('social_media_icon_3', 'options'); ?>"></a>
				<?php endif ?>
		</div>
	</div><!--stop here -->
