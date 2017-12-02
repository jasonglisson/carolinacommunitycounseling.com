<?php get_header(); 
/*
Template Name: Home Page
*/
?>

<?php if( get_field('intro') ): ?>
    <section id="intro">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <?php the_field('intro'); ?>
          </div>
        </div> <!-- row -->
      </div> <!-- container -->
    </section>
<?php endif; ?>



    <section id="inspired">
      <div class="container">
        <div class="row">
          <?php
            if( have_rows('services') ):
                while ( have_rows('services') ) : the_row(); ?>
                  <div class="col-sm-3">
                  <a href="<?php the_sub_field('link'); ?>">
                    <img src="<?php the_sub_field('image'); ?>" alt="">
                    <h3><?php the_sub_field('title'); ?></h3>
                  </a>
                      </div> <!-- col-sm-3 -->
                <?php endwhile;
              else :
              // no rows found
            endif;
          ?>
        </div> <!-- row -->
      </div> <!-- container -->
    </section>       
<?php get_footer(); ?>