<?php

  //#? Count post views
  setPostViews(get_the_ID());

?>

<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('single-video'); ?>>
    <header>
      <!-- 16:9 aspect ratio -->
      <div class="embed-responsive embed-responsive-16by9">
        <?php echo get_field('embed'); ?>
      </div>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div><!-- /.entry-content -->
    <footer>
      <div class="entry-categories">
        <h2>Categorias</h2>
        <?php the_category(' '); ?>
      </div><!-- /.entry-categories -->
      <div class="entry-tags">
        <?php the_tags( $before = '<h2>Tags </h2>', $sep = '', $after = '' ) ?>
      </div><!-- /.entry-tags -->
    </footer>
  </article><!-- /.single-video -->
<?php endwhile; ?>
