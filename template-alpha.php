<?php
/*
Template Name: Alpha Home Page
*/
?>

<?php 
  function get_alpha_panel($title='', $h=100) {
    $html = '';
    $html .= '
              <div class="panel panel-default">
              <div class="panel-body">
                <div style="height:'.$h.'px;">&nbsp;</div>
              </div>
              </div>
    ';

    return $html;
  }
?>



<div class="row">

  <div class="col-sm-12">
      <?php echo get_alpha_panel(); ?>
  </div><!-- /.col -->

  <div class="col-sm-5">
    <?php echo get_alpha_panel(); ?>
  </div><!-- /.col -->
  <div class="col-sm-7">
      <?php echo get_alpha_panel(); ?>
  </div><!-- /.col -->

  <div class="col-sm-12">
      <?php echo get_alpha_panel(); ?>
  </div><!-- /.col -->

  <div class="col-sm-3">
      <?php echo get_alpha_panel(); ?>
  </div><!-- /.col -->
  <div class="col-sm-3">
      <?php echo get_alpha_panel(); ?>
  </div><!-- /.col -->
  <div class="col-sm-3">
      <?php echo get_alpha_panel(); ?>
  </div><!-- /.col -->
  <div class="col-sm-3">
      <?php echo get_alpha_panel(); ?>
  </div><!-- /.col -->

</div><!-- /.row -->
