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
      <div id="home-banner-content" class="col-md-12">
        <p>Cauți oameni cu experiență extinsă<br />
          în problemele care contează cel mai mult pentru tine?</p>
          <h3>Bun venit!</h3>
          <p>Suntem un grup de psihologi ieșeni preocupați
            de descifrarea structurii umane,<br />
            organizați într-o formulă completă în cadrul clinicii Oglinde.</p>
            <!-- <p><a href=""><i class="fa fa-chevron-circle-right"></i></a></p> -->
          </div>
          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/home-banner.jpg" alt="" class="img img-responsive" />
        </div><!-- -banner-content -->
        <!-- END HOME BANNER -->
        <div class="row equal">
          <div class="col-md-12">
            <h2>Specializări</h2>
            <p>Pihoterapie cognitiv&ndash;comportamentală, somato&ndash;terapie, psihoterapie experiențială, psihodiagnostic, consiliere psihologică și educațională,
              dezvoltare personală prin activități de grup, individale și Terapie Bowen.</p>
            </div>
          </div>


          <div class="row equal">
          <div class="col-md-5 imgContainer">
                <img class="img img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/img/young-couple.jpg" alt="">
              </div>
            <div class="col-md-7">
              <h2>De ce suntem altfel?</h2>
              <ul>
                <li>Credem în relația strânsă dintre trup, minte și suflet și abordăm afecțiunile psiho-somatice într-o manieră holistică, îmbinănd tehnici psihologice cu tehnici de vindecare corporală.</li> 
                <li>Îți respectăm individualitea creând programe de intervenție psihologică personalizate în funcție de particularitățile tale și istoria proprie de viață.</li>
                <li>Folosim strategii de intervenție psihoterapeutică pe modelul Brâncușian de formare și dezvoltare personală prin creativitate.</li>
                <li>Îți oferim empatie, nu te judecăm și îți respectăm curajul de a apela la serviciile unui specialist.</li>
              </ul>
            </div>
          </div>


          <div class="row equal">
            <div class="col-md-5">
              <h2>Cui i se adreseaza</h2>
              <p>Copilului, adultului, cuplului și familiei adică tuturor persoanelor dispuse să urmeze ședințele de consiliere din cadrul clinicii Oglinde sau workshopurile și trainingurile de dezvoltare personală.</p>
              <!-- <a class="more" href="#">Read More</a> -->
            </div><!-- Cui se adreseaza -->
            <div class="col-md-7 green">
                <h2>Programări</h2>
                <p class="big"><a href="tel:+40744444444">0744 444 444</a> | <a href="mailto:contact@oglinde.ro<">contact@oglinde.ro</a></p>
                <p>Cadoul de bun venit la Oglinde este un discount în valoare de 50 lei pentru prima ședință!</p>
                <p><strong>Onorariu:</strong> ședință de consiliere &ndash; 150 lei, terapie Bowen &ndash; 300 lei.</p>
              </div>
            </div><!-- row -->
            <div class="row">
              <div class="col-md-12"> 
                <h2>De ce sa lucrezi cu noi</h2>
                <ol>
                  <li>Avem experiență științifică de cercetare și experiență practică de peste 15 ani în: lucrul cu personalitatea umană,  cu simptomatologiile psiho-somatice în vederea ameliorării acestora, cu grupuri, pentru activarea potențialului individual și de grup.</li>
                  <li>Elaborăm strategii creative adaptate afecțiunilor, blocajelor, conflictelor la nivel individual sau familial.</li>
                  <li>Îmbinăm, într-o formula unică, tehnici de activare a potențialului creativ și de intervenție psiho-somatică.</li>
                  <li>Ne face plăcere să te însoțim într-un parcurs al conștientizării și activării potențialului propriu, al încrederii în sine, al iubirii de sine și al afirmării de sine!</li>
                </ol>
                <!-- <a class="more" href="#">Read More</a> -->
              </div>
            </div><!-- .row -->
            <div class="row equal">
              <div class="col-md-6 green">
                <h2>Programări</h2>
                <p class="big"><a href="tel:+40744444444">0744 444 444</a> <br />
                <a href="mailto:contact@oglinde.ro<">contact@oglinde.ro</a></p>
                <p>Cadoul de bun venit la Oglinde este un discount în valoare de 50 lei pentru prima ședință!</p>
                <p><strong>Onorariu:</strong> ședință de consiliere &ndash; 150 lei, terapie Bowen &ndash; 300 lei.</p>
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
            <div class="row equal">
            <div class="col-md-6">
                <h2>Noutati</h2>
            </div>
            <div class="col-md-6">
                <h2>Intrebari puternice</h2>
            </div>
            </div><!--.row-->            



            <!-- END CONTENT -->
          </div><!-- #content .container -->
          <?php get_footer(); ?>