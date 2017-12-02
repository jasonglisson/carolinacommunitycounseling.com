<div id="subnav">
  <div class="container">
    <div class="row">
      <div class="col-sm-7 bottomNav">
          <?php /* Primary navigation */
            wp_nav_menu( array(
              'theme_location'    => 'header-menu',
              'menu' => 'header-menu',
              'depth' => 1,
              'container' => false,
              'menu_class' => '',
              'walker' => new wp_bootstrap_navwalker())
            );
          ?>
      </div> <!-- col-sm-12 -->
      <div class="col-sm-5">
        <center>
        <?php if( get_field('facebook',4) ): ?>
          <a href="<?php the_field('facebook',4); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
        <?php endif; ?>

        <?php if( get_field('twitter',4) ): ?>
          <a href="<?php the_field('twitter',4); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
        <?php endif; ?>

        <?php if( get_field('houzz',4) ): ?>
          <a href="<?php the_field('houzz',4); ?>" target="_blank"><i class="fa fa-houzz"></i></a>
        <?php endif; ?>

        <?php if( get_field('pinterest',4) ): ?>
          <a href="<?php the_field('pinterest',4); ?>" target="_blank"><i class="fa fa-pinterest"></i></a>
        <?php endif; ?>

        <?php if( get_field('instagram',4) ): ?>
          <a href="<?php the_field('instagram',4); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
        <?php endif; ?>

        <?php if( get_field('youtube',4) ): ?>
          <a href="<?php the_field('youtube',4); ?>" target="_blank"><i class="fa fa-youtube"></i></a>
        <?php endif; ?>
        </center>
      </div>
    </div> <!-- row -->
    
  </div> <!-- container -->
</div><!-- #subnav -->

<section id="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy; Copyright <?php echo date('Y');?> Kimberly Spader. All Rights Reserved.<br />
            Developed by <a href="http://www.WebWorks89.com" target="_blank">WebWorks89</a></p>
          </div> <!-- col-sm-6 -->
        </div> <!-- row -->
      </div> <!-- container -->
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo get_option('home');?>/wp-content/themes/custom/slick/slick.min.js"></script>
    <script type="text/javascript">
    //Slider Options
      $(document).ready(function(){
        $('.responsive-main').slick({
          slidesToShow: 1,
          dots: false,
          infinite: true,
          autoplay: true,
          fade: true,
          autoplaySpeed: 5000,
        });
      });
    </script>
    <script type="text/javascript">
    //Slider Options
      $(document).ready(function(){
        $('.responsive-slider').slick({
          slidesToShow: 1,
          dots: false,
          infinite: true,
          autoplay: true
        });
      });
    </script>
  </body>
  <?php wp_footer(); ?> 
</html>