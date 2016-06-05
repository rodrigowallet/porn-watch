<?php use Roots\Sage\Titles; ?>

<div class="page-header col-xs-12">
  <h1><?= Titles\title(); ?></h1>
  <?php
    $count_posts = wp_count_posts()->publish;
    if (is_home()) :
  ?>

  <p>
    <?php echo $count_posts; ?> vídeos selecionados pra você
  </p>

  <?php endif; ?>

</div><!-- /.page-header -->
