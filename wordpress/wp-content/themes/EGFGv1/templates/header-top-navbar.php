  <!-- NAVBAR
    ================================================== -->
    
      <div class="container">

        <div class="masthead">
          <div class="navbar navbar-inverse">
            <div class="navbar-inner">
              <a class="brand" href="#">The Eat Good Food Group</a>
              <div class="container">

                <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </a>
                <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
                <div class="nav-collapse collapse">
                  <?php if (has_nav_menu('primary_navigation')) :
              	   wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
              	   endif;
                  ?>
                </div><!--/.nav-collapse -->
              </div><!-- /.container -->
            </div><!-- /.navbar-inner -->
          </div> <!-- /.navbar -->
        </div><!-- /.masthead -->

