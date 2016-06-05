<?php get_template_part('templates/content'); ?>

<!-- //PAGINATION -->
<?php if (is_home()) : ?>
  <div class="row">
    <?php  wp_bootstrap_pagination() ;?>
  </div>
<?php endif; ?>
