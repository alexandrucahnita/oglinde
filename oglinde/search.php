<?php get_header(); ?>
</div><!--header-->
<div style="float:left; clear:left;">
</div>
		<div id="content" class="search">

<?php if ( have_posts() ) : ?>
				<h3>Rezultate pentru "<?php echo $s ?>"</h3>
				<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<div class="entry-content">
						<?php
				// Support for "Search Excerpt" plugin
				// http://fucoder.com/code/search-excerpt/
				if ( function_exists('the_excerpt') && is_search() ) {
					the_excerpt();
				} ?>
                    </div><!-- .entry-content -->
				</div><!-- #post-0 -->
		<?php endwhile; ?>

<?php else : ?>

		<p>Nu am gasit niciun rezultat. Incercati din nou?</p>

	<?php endif; ?>
			</div><!-- #content -->
<?php include("sidebar.php") ?>
<?php get_footer(); ?>
