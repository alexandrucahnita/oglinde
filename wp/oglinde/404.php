<?php remove_filter ('the_content', 'wpautop'); ?>
<?php get_header(); ?>
<body>
<body class="homepage">
    <div class="grid"></div>
<div class="container">
<?php include("headerContent.php") ?>
<div class="row-fluid">
<h1>Eroare 404</h1>
<div id="content" class="row-fluid">
<div class="span9">
<p>Pagina cautata nu a fost gasita.</p>
<p><a href="/">Home</a>
            </div>
<?php include("aside.php") ?>
        </div>
</div>
    </div>
<?php get_footer(); ?>