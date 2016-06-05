<?php
  if(have_posts() && get_field('main_title', 'option') === 'Ativar') {
    get_template_part('templates/page', 'header');
  }
?>

<?php if (!have_posts()) : ?>
  <div class="no-posts align-items">
    <i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
    <h2>Nenhum vídeo foi postado ainda! Volte mais tarde!</h2>
  </div>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>
