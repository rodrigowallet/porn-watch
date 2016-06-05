<section class="pwads pwads-footer">
  <div class="container">
    <div class="row">

      <div class="col-xs-12 col-md-4 col-sm-6">
        <div class="pwad">
          <?php
            if (get_field('footer_a', 'option')) {
              the_field('footer_a', 'option');
            }else {
              echo '<img src="http://placehold.it/300x250" alt="" />';
            }
          ?>
        </div>
      </div><!-- /.pwad -->

      <div class="col-xs-12 col-md-4 col-sm-6">
        <div class="pwad">
          <?php
            if (get_field('footer_b', 'option')) {
              the_field('footer_b', 'option');
            }else {
              echo '<img src="http://placehold.it/300x250" alt="" />';
            }
          ?>
        </div>
      </div><!-- /.pwad -->

      <div class="col-xs-12 hidden-sm col-md-4">
        <div class="pwad">
          <?php
            if (get_field('footer_c', 'option')) {
              the_field('footer_c', 'option');
            }else {
              echo '<img src="http://placehold.it/300x250" alt="" />';
            }
          ?>
        </div>
      </div><!-- /.pwad -->

    </div><!-- /.row -->
  </div><!-- /.container -->
</section>
