<?php
/*
Home/catch-all template
*/

get_header(); 

?>

	<div class="content-wide" role="main">

		<?php
		if ( is_search() ) {
			?><h1 class="post-title">Search Results for <span>'<?php print $_REQUEST["s"]; ?>'</span></h1><?php
		} else {
			?><h1 class="post-title">Our Blog</h1><?php
		}

		if ( have_posts() ) : 

			// Start the Loop.
			while ( have_posts() ) : the_post(); 
				?>
				<hr />
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php the_excerpt(); ?>
				<?php
			endwhile;

		else :

			print "<p>There are currently no posts to list here.</p>";

		endif;
		?>
		
		<?php paginate(); ?>

	</div><!-- #primary -->


<?php get_footer(); ?>