<?php get_header(); ?>

<div class="row">
	<div class="span8"></div>

		<!-- If posts, loop through and display title and content -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>

		<!-- If no posts, display message -->
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, this page does not exist.'); ?></p>
		<?php endif; ?>
		
	</div>
	<div class="span4">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>