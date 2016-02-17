<?php
/*
Template Name: Homepage
*/
?>

<?php remove_filter('the_content', 'wpautop'); ?>
<?php get_header(); ?>
    <body id="home">
<?php include_once("analyticstracking.php") ?>
    <div style="position:absolute; width:100%; height:1px; z-index:5000000; border-bottom:1px solid #36ff00; top:10px;"></div>     
<?php include("navigation-menu.php") ?>
<div id="content" class="container">  
<!-- START CONTENT -->

<!-- HOME BANNER -->
  <div class="row" id="home-banner">
  <div id="home-banner-content">
    <p>We are a group of psychologists that are<br />doing things differently.</p>
    <p>Here it is why we are doing it so.</p>
    <p><a href=""><i class="fa fa-chevron-circle-right"></i></a></p>
    </div>
      <img src="<?php bloginfo('stylesheet_directory'); ?>/img/home-banner.jpg" alt="" class="img img-responsive" />
  </div><!-- -banner-content -->
<!-- END HOME BANNER -->
<div class="row equal">
    <div class="col-md-7">
      <h2>Cui i se adreseaza</h2>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aeneancommodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
      <a class="more" href="#">Read More</a>
    </div><!-- Cui se adreseaza -->
    <div class="col-md-5 green">
      <h2>Appointments</h2>
      <p class="big">0744 444 444 <br />
      <a href="">email@oglinde.ro</a></p>
    </div>
  </div><!-- row -->
  <div class="row equal">
      <div class="col-md-5 imgContainer">
        <img class="img img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/img/young-couple.jpg" alt="">
      </div>
      <div class="col-md-7"> 
          <h2>De ce sa lucrezi cu noi</h2>
          <ul class="twocols">
              <li> Lorem ipsum dolor</li>
              <li> Sit amet conesectuer</li>
              <li> Cum sociis natoque</li>
              <li> Comodo ligua eget dolor sit</li>
              <li> Lorem ipsum dolor</li>
              <li> Sit amet conesectuer</li>
              <li> Cum sociis natoque</li>
              <li> Comodo ligua eget dolor sit</li>
          </ul>
          <a class="more" href="#">Read More</a>
      </div>
  </div><!-- .row -->
  <div class="row equal">
    <div class="col-md-6">
      <h2>Aboneaza-te la Newsletter</h2>
      <p>Lorem ipsum dolor sit amet. <strong>Lorem ipsum anean.</strong></p>
      <form action="">
      <div class="row"> 
        <div class="form-group col-md-8">
          <label for="newsletterSign">Adresa ta de e-mail</label>
          <input type="email" class="form-control" id="newsletterSign" placeholder="Email">
        </div>
        <div class="col-md-4 zeroLeft">
        <div class="fixBtn">
          <a type="submit" class="more">Ma abonez</a>
        </div>
        </div>
        </div>
      </form>
    </div>
    <div class="hideit col-md-6 imgContainer">
      <img class="hideit  img img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/img/postals.jpg" alt="">
    </div>
  </div><!-- .row -->
  <div class="row">
    <div class="col-md-12">
      <h2>Testimonials</h2>
      <div class="row">
      <div class="col-md-2">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/testimonials.jpg" alt="" class="img img-responsive">
      </div>
      <div class="col-md-10 testimonial zeroBottom">
        <p>Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut eros et nisl sagittis vestibulum.</p>
        <p>Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Sed lectus.</p>
        <p class="signature">Lorem Ipsum</p>
        <div class="row">
        <div class="col-md-12 zeroBottom">
          <a href="#" id="testimonial-prev"><i class="fa fa-chevron-circle-left"></i></a>
          <a href="#" id="testimonial-prev"><i class="fa fa-chevron-circle-right pull-right"></i></a>
        </div>
        </div><!-- .row -->
      </div><!-- testimonial -->
      </div>
    </div>
  </div><!-- .row -->



<!-- END CONTENT -->
</div><!-- #content .container -->
<?php get_footer(); ?>