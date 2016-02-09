<header>
    <div class="row-fluid" id="branding">
        <a href="/">
            <div class="span5">
			<div class="symbol"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/symbol.png" alt="Mihaela Vicol"></div>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/img/mihaela-vicol.png" alt="Mihaela Vicol" style="margin-bottom:10px;"/><p style="text-transform:uppercase; font-size:12px;">Medic specialist medicina de familie &ndash; Iasi</div>
        </a>

        <div class="right">
            <div id="phone">
                Vrei sa vorbim? Suna la <strong>0744 674 880</strong>
            </div>

            <div id="socialMedia">
                <a href="https://www.facebook.com/MedicinaDeFamilieIasi?fref=ts" target="_blank">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/facebook_icon.png" alt="FB"/>
                </a>
            </div>
        </div>
    </div>
    <nav class="row-fluid">
        <!-- Navigation -->
        <?php wp_nav_menu( array( 'sort_column'=> 'menu_order', 'container_class' => 'menu-header' ) ); ?><!-- wordpress menu-->
        <!-- End Navigation -->
    </nav>
</header>