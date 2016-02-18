<?php remove_filter('the_content', 'wpautop'); ?>
<?php get_header(); ?>

 <body>
<?php include_once("analyticstracking.php") ?>
    <div style="position:absolute; width:100%; height:1px; z-index:5000000; border-bottom:1px solid #36ff00; top:10px;"></div>     
<?php include("navigation-menu.php") ?>
<div id="content" class="container">  
<div class="row">
<div class="col-md-12">


			
<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>
<!-- <h1>Category: <?php single_cat_title( '', false ); ?></h1> -->

<?php
// The Loop
while ( have_posts() ) : the_post(); ?>
  <div class="col-md-6 col-md-offset-3 b60">
  	<p class="small"><?php the_date('d / m / Y') ?></p>
	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" class="title-link"><?php the_title(); ?></a></h2>
	<div>	
	<?php
		if ( has_excerpt()) {
			the_excerpt();
		} else {
			//the_content();
			echo apply_filters('the_content', $post->post_content);
		}
	?> &hellip;
	</div>
	<p class="t20"><a class="more" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>
	<!-- <p class="postmetadata"><?php //comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed'); ?></p>-->
	  </div><!-- col-md-6 -->
<?php endwhile; 
else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

    </div><!--col-md-12-->
	</div><!-- .row -->

</div><!-- #content .container -->
<?php get_footer(); ?>
