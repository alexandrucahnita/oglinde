<nav class="navbar navbar-fixed-top sansSerif">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <i class="fa fa-navicon"></i>
          </button>
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.svg" id="logo" alt=""></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav" id="uno"><?php wp_nav_menu( array( 'container_id' => 'uno', 'theme_location' => 'menu1' ) ); ?></ul>
        <ul class="nav navbar-nav" id="dos"><?php wp_nav_menu( array( 'container_id' => 'dos', 'theme_location' => 'menu2' ) ); ?></ul>
        <ul class="nav navbar-nav" id="tres"><?php wp_nav_menu( array( 'container_id' => 'tres', 'theme_location' => 'menu3' ) ); ?></ul>
        <ul class="nav navbar-nav" id="quatro"><?php wp_nav_menu( array( 'container_id' => 'quatro', 'theme_location' => 'menu4' ) ); ?></ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>

          
          
          
         