<section id="partnership" class="clearfix">
  <div class="container">
    <div class="row">
      <div class="page-header col-xs-12">
        <h1>Parceiros</h1>
      </div><!-- ./page header -->

      <?php if( have_rows('add_partnership', 'option') ): ?>

        <?php while( have_rows('add_partnership', 'option') ): the_row(); ?>

          <div class="col-xs-6 col-sm-2 partner">
              <?php the_sub_field('link_partnership'); ?>
          </div><!-- /.partner -->

        <?php endwhile; ?>

    <?php endif; ?>

    </div><!-- ./row -->
  </div><!-- /.container -->
</section>
