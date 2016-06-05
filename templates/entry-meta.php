<div class="entry-meta">
  <span class="views">
    <i class="fa fa-eye"></i>
    <?php echo getPostViews(get_the_ID()); ?>
  </span><!-- /.views -->

  <span class="time">
    <i class="fa fa-clock-o"></i>
    <?php echo the_field('time'); ?>
  </span><!-- /.time -->

  <span class="byline author vcard">
    <i class="fa fa-user" aria-hidden="true"></i> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a>
  </span><!-- /.author -->
</div><!-- /.entry-meta -->
