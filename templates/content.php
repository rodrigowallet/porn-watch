<div class="card col-xs-12 col-sm-6 col-md-4 col-lg-3">
  <article <?php post_class('clearfix'); ?>>
    <header>
      <div class="thumbnail">
        <a href="<?php the_permalink(); ?>">
            <?php
              $thumbCustomField = get_field('thumbnail');
              $thumbDefault = the_post_thumbnail();
                if(empty($thumbCustomField)) {
                  $thumbDefault;
                }else {
                  echo "<img src='".$thumbCustomField."' title='".get_the_title()." | ".get_bloginfo('name')."' alt='".get_the_title()." | ".get_bloginfo('name')."' />";
                }
            ?>
          </a>
        </div><!-- /Thumbnail -->
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php get_template_part('templates/entry-meta'); ?>
    </header><!-- /header -->
    <div class="entry-summary">
      <p>
        <?php echo limit_words(get_the_excerpt(), '15').'...'; ?>
      </p>
    </div><!-- /.entry-summary -->
    <footer>
      <button type="button" class="btn btn-primary pull-left">
        <a href="<?php the_permalink(); ?>">
          <i class="fa fa-play-circle-o" aria-hidden="true"></i> Ver vídeo
        </a>
      </button>
    </footer><!-- /footer -->
  </article><!-- /article -->
</div><!-- /.card -->
