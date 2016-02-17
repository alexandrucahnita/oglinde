
<div class="row">
<div class="col-md-12">
  <div class="col-md-12">
 <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
 <?php the_content(); ?>

<?php endwhile; endif; ?>
  </div><!-- col-md-6 -->
  </div><!--col-md-12-->
</div><!-- .row -->  