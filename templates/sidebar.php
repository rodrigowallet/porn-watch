<div class="pwads pwads-video">

  <div class="pwad">
    <?php
      if (get_field('sidebar_a', 'option')) {
        the_field('sidebar_a', 'option');
      }else {
        echo '<img src="http://placehold.it/300x250" alt="" />';
      }
    ?>
  </div><!-- /.pwad -->

  <div class="pwad hidden-xs hidden-sm">
    <?php
      if (get_field('sidebar_b', 'option')) {
        the_field('sidebar_b', 'option');
      }else {
        echo '<img src="http://placehold.it/300x250" alt="" />';
      }
    ?>
  </div><!-- /.pwad -->

  <div class="pwad hidden-xs hidden-sm">
    <?php
      if (get_field('sidebar_c', 'option')) {
        the_field('sidebar_c', 'option');
      }else {
        echo '<img src="http://placehold.it/300x250" alt="" />';
      }
    ?>
  </div><!-- /.pwad -->

</div>
<?php //dynamic_sidebar('sidebar-primary'); ?>
