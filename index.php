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
			<?php if(have_posts()) : while(have_posts()) : the_post();?>
		<div class="row">
			<h2 class="col-md-12 main-title"><?php the_title();?></h2>
		</div>
		<div class="row">
			<div class="col-md-9 wrapper-article">
				<div class="row">
					<article class="col-md-12 main-article">
						<?php the_content();?>
					</article>
				</div>
				
				<section id="comments">
					<?php comments_template( '', true ); ?>
				</section>
			</div>
				<?php 
					endwhile;
					else : 		
				?>
					<h1>Not found</h1>
				<?php
					endif;
				?>
	
			<aside class="col-md-3">
				<?php dynamic_sidebar();?>
			</aside>
		</div>
	</div>
	<?php get_footer(); ?>
</body>
</html>