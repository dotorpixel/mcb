<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>
	<?php wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	?></title>
	 <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
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
	<section id="maincontent">
		<?php if(have_posts()) : while(have_posts()) : the_post();?>
		<article>
			<header>
				<h1><?php the_title();?></h1>
			</header>
			
			<?php the_content();?>
			
			
		</article>
		<?php 
			endwhile;
			else : 		
		?>
			<h1>Not found</h1>
		<?php
			endif;
		?>
		
		<section id="comments">
			<?php comments_template( '', true ); ?>
		</section>
	</section>
	
	<aside>
		<?php dynamic_sidebar();?>
	</aside>
	<footer>
		<p>Copyright &copy; <?php echo date('Y');?> - <?php bloginfo('name');?></p>
	</footer>
	<?php
		wp_footer();
	?>
</body>
</html>