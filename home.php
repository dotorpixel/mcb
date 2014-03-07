<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>	<?php wp_title( '|', true, 'right' ); bloginfo( 'name' );?> </title>
	
	<?php wp_head();?>
</head>
<body>
	<header>
		<hgroup>
			<h1><?php bloginfo('name');?></h1>
			<h2><?php bloginfo('description');?></h2>
		</hgroup>
	</header>
	<nav>
		<?php wp_nav_menu()?>
	</nav>

	<div class="container content">
		<div class="row wrapper-articles">
		<?php if(have_posts()) : while(have_posts()) : the_post();?>
			<div class="col-md-6 wrapper-article">
				<h2 class="col-md-12 main-title main-home-title"><?php the_title();?></h2>
				<article class="col-md-12 main-home-article">
					<?php the_content();?>
				</article>
				<footer class="col-md-12 footer-article">
					<div class="row">
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
	</div>
	<?php get_footer(); ?>
</body>
</html>