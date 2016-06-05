<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->

    <div class="wrapper">
      <nav class="navbar-categories">
        <h2>Categorias</h2>
        <span class="close-nav"><i class="fa fa-times-circle-o" aria-hidden="true"></i>
</span>
        <ul>
          <?php
          $args = array(
            'hide_empty' => FALSE,
            'title_li'   => __( '' ),
            'show_count' => 1,
            'echo'       => 0
          );
            $links = wp_list_categories($args);
            $links = str_replace('</a> (', '</a> <span class="count">', $links);
            $links = str_replace(')', '</span>', $links);
          echo $links;
          ?>
        </ul>
      </nav>

      <div class="main-content">
        <?php
          do_action('get_header');
          get_template_part('templates/header');
        ?>

        <div class="wrap container" role="document">
          <!-- //MOBILE PWADS -->
          <?php get_template_part('templates/pwads-mobile'); ?>
          <div class="content row">
            <main class="main row-eq-height">
              <!-- //MAIN GRID -->
              <?php include Wrapper\template_path(); ?>
            </main><!-- /.main -->

            <?php if (Setup\display_sidebar()) : ?>
              <aside class="sidebar">
                <?php include Wrapper\sidebar_path(); ?>
              </aside><!-- /.sidebar -->
            <?php endif; ?>

            <!-- //PAGINATION -->
              <div class="row">
                <?php  wp_bootstrap_pagination() ;?>
              </div>

          </div><!-- /.content -->
          <!-- //RELATED POSTS -->
          <?php if(is_single()) : ?>
            <?php related_posts(); ?>
          <?php endif; ?>
        </div><!-- /.wrap -->

        <!-- //PWADS HOME -->
        <?php
          if (is_front_page()) {
            get_template_part('templates/pwads-home');
          }
        ?>

        <!-- //PARTNERSHIP -->
        <?php
          if (get_field('partnership', 'option') === 'Ativar' && is_front_page()) {
            get_template_part('templates/partnership');
          }
        ?>

        <!-- //MOST VIEWS -->
        <?php
          if (is_front_page()) {
            get_template_part('templates/most-views');
          }
        ?>

        <!-- //PWADS FOOTER -->
        <?php get_template_part('templates/pwads-footer'); ?>


        <?php
          do_action('get_footer');
          get_template_part('templates/footer');
          wp_footer();
        ?>
      </div><!-- /.main -->
    </div><!-- /.wrapper -->
  </body>
</html>
