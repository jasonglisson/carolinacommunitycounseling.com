<section id="navigation">
  <nav class="navbar navbar-default" role="navigation">
        <div class="container">

          <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-brand" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar top-bar"></span>
              <span class="icon-bar middle-bar"></span>
              <span class="icon-bar bottom-bar"></span>
            </button>
            <a href="<?php echo get_option('home');?>">
              <img src="<?php echo get_option('home');?>/wp-content/themes/custom/img/logo.png" class="logo" alt="Kimberly Spader">
            </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-brand">
            <?php /* Primary navigation */
              wp_nav_menu( array(
                'theme_location'    => 'header-menu',
                'menu' => 'header-menu',
                'depth' => 2,
                'container' => false,
                'menu_class' => 'nav navbar-nav navbar-right',
                'walker' => new wp_bootstrap_navwalker())
              );
            ?>
          </div><!-- .navbar-collapse -->
        </div><!-- .container-fluid -->
  </nav>
</section><!-- #navigation -->