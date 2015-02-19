<?php
/*
Template Name: Alpha Home Page
*/
?>

<?php 
  function get_alpha_panel($filler='&nbsp;', $h=140) {
    $html = '';
    $html .= '
              <div class="panel panel-default">
              <div class="panel-body">
                <div style="height:'.$h.'px;">
                '.$filler.'
                </div>
              </div>
              </div>
    ';

    return $html;
  }
?>

<div class="row">
  <div class="col-md-9">
    <?php echo do_shortcode('[spl_widget home-page news]'); ?>
  </div>
  <div class="col-md-3">

    <div class="spl-hero-panel spl-hero-primary">
      <a href="/digital/" class="spl-hero-link">
        <h5 class="text-center normal">
          <i class="glyphicon glyphicon-cloud-download"></i>
          Visit the <b>Digital Branch</b> <span class="hidden-xs">to <b>download</b> eBooks, music, &amp; more</span> <small class="glyphicon glyphicon-arrow-right"></small>
        </h5>
      </a>
    </div>

    <div class="spl-hero-panel spl-hero-success">
      <a href="/calendar/" class="spl-hero-link">
        <h5 class="text-center normal">
          <i class="glyphicon glyphicon-calendar"></i>
          <span class="hidden-xs"><b>Coming up soon</b> on the</span> <b>Library Calendar</b> <small class="glyphicon glyphicon-arrow-right"></small>
        </h5>
      </a>
    </div>

  </div>
</div><!-- /.row -->

<div class="row">
  <div class="col-md-9">
    <?php echo do_shortcode('[spl_widget home-page promo=yearbooks]'); ?>
    <div class="row">
      <div class="col-sm-4">
        <?php echo do_shortcode('[spl_widget home-page calendar]'); ?>
      </div>
      <div class="col-sm-8">
        <?php echo do_shortcode('[spl_widget home-page shuffle slides slug=carousel]'); ?>
      </div>
    </div><!-- /.row -->
  </div>
  <div class="col-md-3">
    <?php echo do_shortcode('[spl_widget home-page posts]'); ?>
  </div>
</div><!-- /.row -->

<div class="row">
  <div class="col-md-12">
    <?php echo do_shortcode('[spl_widget home-page browse]'); ?>
  </div>
</div><!-- /.row -->

<div class="row">
  <div class="col-sm-4">
    <?php //echo get_alpha_panel('&nbsp;', 300); ?>
    <?php //echo get_alpha_panel('&nbsp;', 200); ?>
  </div>
  <div class="col-sm-4">
    <?php //echo get_alpha_panel('&nbsp;', 400); ?>
    <?php //echo get_alpha_panel(); ?>
  </div>
  <div class="col-sm-4">
    <?php //echo get_alpha_panel('&nbsp;', 200); ?>
    <?php //echo get_alpha_panel(); ?>
  </div>
</div><!-- /.row -->


