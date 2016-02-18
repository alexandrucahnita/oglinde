<?php remove_filter('the_content', 'wpautop'); ?>
<?php get_header(); ?>
<body>
	<?php include_once("analyticstracking.php") ?>
	<?php include("navigation-menu.php") ?>
	<div id="content" class="container">
		<?php while(have_posts()) : the_post(); ?>
			<div class="row">
				<div class="post col-md-12" id="<?php the_ID(); ?>">
					<div class="col-md-6 col-md-offset-3">
						<p class="small"><?php the_date('d / m / Y') ?></p>
						<h1><?php the_title(); ?></h1>
						<div>
							<div class="span9 maincontent">
								<div class="entry">
									<?php the_content(); ?>
								</div> <!-- .entry -->
							</div><!-- .maincontent -->
						</div><!-- #content -->
					</div><!-- .col-md-6 -->
				</div> <!-- .post -->


			</div><!-- .row -->
			<div class="row">
				<div class="col-md-12">
					<div id="comment-area" class="col-md-6 col-md-offset-3">
						<h2>Comments</h2>
						<?php comments_template(); ?>
					</div>
				</div><!--.col-md-12 -->
			</div><!-- .row -->
		<?php endwhile; ?>
	</div><!-- .container -->
	<?php get_sidebar(); ?>

	<?php get_footer(); ?>