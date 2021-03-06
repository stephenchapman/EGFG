<?php if (!have_posts()) : ?>
  <div class="alert alert-block fade in">
    <a class="close" data-dismiss="alert">&times;</a>
    <p><?php _e('Sorry, no results were found.', 'roots'); ?></p>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-summary">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php the_tags('<ul class="entry-tags"><li><i class="icon-tag"></i>','</li><li><i class="icon-tag"></i>','</li></ul>'); ?>
    </footer>
  </article>
<?php endwhile; ?>

<?php get_template_part('templates/pagination'); ?> 
