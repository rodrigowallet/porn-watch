<header class="banner">

  <div class="hero"
  <?php if(is_user_logged_in()) { echo 'style="margin-top: 30px"'; /* Fix margin-top wp admin bar*/ }?>>
    <div class="container">
      <div class="row row-eq-height">

      <?php

      //#? Change type of hero header
      if (get_field('logotipo', 'option')) {

      ?>

        <div class="align-items col-xs-12 col-sm-8 col-lg-8">
          <div class="logo">
            <a class="brand" href="<?= esc_url(home_url('/')); ?>">
              <img src="<?php the_field('logo', 'option'); ?>" alt="<?php echo get_bloginfo('name'); ?> | <?php echo get_bloginfo('description')?>" title="<?php echo get_bloginfo('name'); ?> | <?php echo get_bloginfo('description')?>" />
            </a>
          </div><!-- /.logo -->
        </div><!-- /.col -->
        <div class="hidden-xs col-sm-4 col-lg-4">
          <div class="img-tagline">
            <img src="<?php the_field('logotipo', 'option'); ?>" alt="<?php echo get_bloginfo('name'); ?> | <?php echo get_bloginfo('description')?>" title="<?php echo get_bloginfo('name'); ?> | <?php echo get_bloginfo('description')?>" />
          </div><!-- /.img-tagline -->
        </div><!-- /.col -->

      <?php }else { ?>

        <div class="align-items col-xs-12 col-sm-6">
          <div class="logo">
            <a class="brand" href="<?= esc_url(home_url('/')); ?>">
              <img src="<?php the_field('logo', 'option'); ?>" alt="<?php echo get_bloginfo('name'); ?> | <?php echo get_bloginfo('description')?>" title="<?php echo get_bloginfo('name'); ?> | <?php echo get_bloginfo('description')?>" />
            </a>
          </div><!-- /.logo -->
        </div><!-- /. col -->

        <div class="hidden-xs col-sm-4 col-sm-offset-2 align-items">
          <?php $search_terms = htmlspecialchars( $_GET["s"] ); ?>
          <form role="form" action="<?php bloginfo('siteurl'); ?>/" id="searchform" method="get">
            <div class="input-group">
              <input type="text" class="form-control" id="s" name="s" placeholder="O que quer assistir?"<?php if ( $search_terms !== '' ) { echo ' value="' . $search_terms . '"'; } ?> >
              <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </span>
            </div><!-- /.input-group -->
          </form><!-- /form -->
        </div>

      <?php } ?>

      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.hero -->

  <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="btn btn-primary categories-toggle hidden-md hidden-sm hidden-lg">
          <span>Categorias</span> <i class="fa fa-folder" aria-hidden="true"></i>
        </button>
        <button type="button" class="navbar-toggle btn btn-primary" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span>Menu</span> <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
      </div><!-- /.navbar-header -->

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <?php
          wp_nav_menu( array(
          'menu'              => 'primary_navigation',
          'theme_location'    => 'primary_navigation',
          'depth'             => 2,
          'container'         => 'div',
          'menu_class'        => 'nav navbar-nav',
          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
          'walker'            => new wp_bootstrap_navwalker())
          );
        ?>

        <?php if (get_field('logotipo', 'option')): ?>
        <?php $search_terms = htmlspecialchars( $_GET["s"] ); ?>
        <form class="navbar-form navbar-right hidden-xs" role="form" action="<?php bloginfo('siteurl'); ?>/" id="searchform" method="get">
          <div class="input-group">
            <input type="text" class="form-control" id="s" name="s" placeholder="O que quer assistir?"<?php if ( $search_terms !== '' ) { echo ' value="' . $search_terms . '"'; } ?> />
            <span class="input-group-btn">
              <button class="btn btn-primary" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </span>
          </div><!-- /.input-group -->
        </form><!-- /form -->
      <?php endif; ?>
      </div><!-- /.collapse -->
    </div> <!-- /.container -->
  </nav>
</header>

<div class="container search-box hidden-sm hidden-md hidden-lg">
  <div class="row">
    <div class="col-xs-12">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Procurar por...">
        <span class="input-group-btn">
          <button class="btn btn-primary" type="button">
            <i class="fa fa-search" aria-hidden="true"></i>
          </button>
        </span>
      </div><!-- /input-group -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container -->
