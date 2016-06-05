<div class="row hidden-md hidden-lg">
<section class="pwads pwads-mobile">
      <div class="col-xs-12 col-sm-6 hidden-md hidden-lg">
        <div class="pwad">
          <?php
            if (get_field('mobile_a', 'option')) {
              the_field('mobile_a', 'option');
            }else {
              echo '<img src="http://placehold.it/300x250" alt="" />';
            }
          ?>
        </div>
      </div><!-- /.pwad -->

      <div class="hidden-xs col-sm-6 hidden-md hidden-lg">
        <div class="pwad">
          <?php
            if (get_field('mobile_b', 'option')) {
              the_field('mobile_b', 'option');
            }else {
              echo '<img src="http://placehold.it/300x250" alt="" />';
            }
          ?>
        </div>
      </div><!-- /.pwad -->

    </section>
</div><!-- /.row -->
