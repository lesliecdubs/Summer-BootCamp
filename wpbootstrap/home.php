<?php get_header(); ?>

<div class="row">
  <div class="span8">

	<!-- If posts, loop through and display title and time -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><em><?php the_time('&#039l, F jS, Y'); ?></em></p>
    <hr>

	<!-- If no posts, display message -->
    <?php endwhile; else: ?>
      <p><?php _e('Sorry, there are no posts.'); ?></p>
    <?php endif; ?>

  </div>
  <div class="span4">

    <?php get_sidebar(); ?>   

  </div>
</div>

<?php get_footer(); ?>