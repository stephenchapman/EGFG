<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->

  <?php
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>
  
  <!-- Part 1: Wrap all page content here and begin page content -->

  <div id="wrap"> 
    <div class="container" role="document">
      <div id="content" class="row">

  <?php include roots_template_path(); ?>
      
  <?php if (roots_display_sidebar()) : ?>
      <aside id="sidebar" class="<?php echo roots_sidebar_class(); ?>" role="complementary">
        <?php get_template_part('templates/sidebar'); ?>
      </aside>
      <?php endif; ?>

      </div><!-- /#content -->
    </div><!-- /#container -->
  </div><!-- /#wrap -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
