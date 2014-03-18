<?php get_header(); ?>
	<div class="container content">
		<div class="row wrapper-articles">
		<?php if(have_posts()) : while(have_posts()) : the_post();?>
			<div class="col-md-12 wrapper-article">
				<h2 class="col-md-12 main-title"><?php the_title();?></h2>
				<?php
					// check if the post has a Post Thumbnail assigned to it.
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('post-head',array("class" => "img-responsive wrapper-img col-md-12"));
					} 
				?>
				<article class="col-md-12 main-article">
					<?php the_content();?>
				</article>
				<footer class="col-md-12 footer-article">
					<div class="row">
						<span class="date">
							<i class="fa fa-calendar"></i>&nbsp;
							<?php the_date('d M y'); ?>
						</span>
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
			<section class="comments">
				<?php comments_template( '', true ); ?>
			</section>
		</div>
		<div class="pagination hidden">
			<?php posts_nav_link(); ?> 
		</div>
	</div>
<?php get_footer(); ?>