<section class="most-view">
  <div class="container">
    <div class="row row-eq-height">
      <div class="page-header col-xs-12">
        <h1>Mais vistos</h1>
        <p>
          Os melhores vídeos do nosso site
        </p>
      </div>
      <?php
        $popularpost = new WP_Query( array( 'posts_per_page' => 32, 'meta_key' => 'post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
        while ( $popularpost->have_posts() ) : $popularpost->the_post();


          //#! Include post content
          include(get_template_directory().'/templates/content.php');

        endwhile;
      ?>
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.most-view -->
