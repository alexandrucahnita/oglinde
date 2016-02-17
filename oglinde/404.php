<?php remove_filter ('the_content', 'wpautop'); ?>
<?php get_header(); ?>
<body>
    <body id="home">
<?php include_once("analyticstracking.php") ?>
    <div style="position:absolute; width:100%; height:1px; z-index:5000000; border-bottom:1px solid #36ff00; top:10px;"></div>     
<?php include("navigation.php") ?>
<div id="content" class="container">  
<div class="row equal">
    <div class="col-md-12">
      <h2>Page not found.</h2>
    </div>
  </div>
	</div>
<?php get_footer(); ?>