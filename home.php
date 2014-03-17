<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>	<?php wp_title( '|', true, 'right' ); bloginfo( 'name' );?> </title>
	
	<?php wp_head();?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar" role="navigation">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="row collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				    	<?php wp_nav_menu( array( 'theme_location' => 'header','menu_class' => 'nav navbar-nav' ) ); ?>
				    	<?php wp_nav_menu( array( 'theme_location' => 'sosmed','menu_class' => 'nav navbar-nav navbar-right' ) ); ?>
				  	</div>
				</nav>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 wrapper-banner">
				<?php get_search_form(); ?>
				<h1 class="logo"><?php bloginfo('name');?></h1>
				<a href="#" class="btn-donate">DONATE</a>
				<img class="col-md-12" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
			</div>
		</div>
	</div>
	<div class="container content">
		<div class="row wrapper-articles">
		<?php if(have_posts()) : while(have_posts()) : the_post();?>
			<div class="col-md-6 wrapper-article">
				<h2 class="col-md-12 main-title main-home-title"><?php the_title();?></h2>
				<?php
					// check if the post has a Post Thumbnail assigned to it.
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} 
				?>
				<article class="col-md-12 main-home-article">
					<?php the_content();?>
				</article>
				<footer class="col-md-12 footer-article">
					<div class="row">
						<span class="date">
							<i class="fa fa-calendar"></i>
							<?php the_date('d M y'); ?>
						</span>
						<a href="#" class="more">Read More</a>
						<div class="clearfix"></div>
					</div>
				</footer>
			</div>
				<?php 
					endwhile;
					else : 		
				?>
					<center class="row"><h2 class="col-md-12">Mohon Maaf Data Artikel Belum Tersedia ^_^</h2></center>
				<?php endif; ?>
		</div>
		<div class="pagination hidden">
			<?php posts_nav_link(); ?> 
		</div>
	</div>
	<?php get_footer(); ?>
</body>
</html>