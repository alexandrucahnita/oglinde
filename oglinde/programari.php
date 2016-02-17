<?php
/*
Template Name: Programari
*/
?>
<?php remove_filter ('the_content', 'wpautop'); ?>
<?php get_header(); ?>
<body>
<?php include_once("analyticstracking.php") ?>
<div class="grid"></div>
<div class="container">
<?php include("headerContent.php") ?>
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class=" row-fluid" id="post-<?php the_ID(); ?>">

                <h1>Lista Inscrieri</h1>

        <div class="row-fluid" id="content">
            <div class="span12 maincontent">
                <?php the_content(); ?>

            </div>
<?php endwhile; endif; ?>
        </div>
    </div>
    <div style="height:40px; overflow:hidden;"></div>
<?php get_footer(); ?>