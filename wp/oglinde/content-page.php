<?php
/*
Template Name: Despre
*/
?>

<?php remove_filter('the_content', 'wpautop'); ?>
<?php get_header(); ?>
    <body>
<?php include_once("analyticstracking.php") ?>
    <div style="position:absolute; width:100%; height:1px; z-index:5000000; border-bottom:1px solid #36ff00; top:10px;"></div>     
<?php include("navigation-menu.php") ?>
<div id="content" class="container">  
<?php include("portraits.php") ?>
<!-- START CONTENT -->
<div class="row">
<div class="col-md-12">
  <div class="col-md-6 col-md-offset-3">
 <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
 <?php the_content(); ?>

<?php endwhile; endif; ?>
  </div><!-- col-md-6 -->
  </div><!--col-md-12-->
</div><!-- .row -->  

<!-- END CONTENT -->
</div><!-- #content .container -->
<?php get_footer(); ?>