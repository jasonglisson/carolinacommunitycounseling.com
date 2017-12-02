<?php get_header(); 
/*
Template Name: Blog / News
*/
?>

<section id="mainContent">
  <div class="container">  
    <div class="row">
          <div class="col-sm-8">

              <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                  $args = array( 'post_type' => 'post', 'posts_per_page' => 10, 'orderby' => date, 'paged' => $paged );
                  $wp_query = new WP_Query($args);
                  while ( have_posts() ) : the_post(); ?>
          <div class="blogEntry">  
            <div class="row">
          <div class="col-sm-12">
            <a href="<?php the_permalink(); ?>"><h3 class="blogheading"><?php the_title() ?></h3></a>
                <p style="font-size:12px; font-weight:300;">Posted on: <?php the_date(); ?></p>
          </div>
        </div><!-- row -->

        <div class="row">
          <div class="col-sm-12">
            <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
          </div><!--col-sm-12 -->
          <div class="col-sm-12">
            <span style="font-weight:300;"><?php the_content_rss('read more', false, ' ' , 50); ?></span><br />
                <a href="<?php the_permalink(); ?>"><span class="continue">Continue Reading</span></a>
                
          </div><!--col-sm-12 -->
        </div><!--row -->
      </div> <!-- blogEntry -->
          <?php endwhile; ?>

          </div><!--col-sm-8--> 

          <div class="col-sm-4">
          <ul style="list-style-type:none; margin:0px 0px 0px 0px; padding:0px 0px 0px 0px;">
          <?php if ( !dynamic_sidebar('Blog Sidebar') ) : ?>
              <h2>Recently Added</h2>
              <ul style="list-style-type:none;">
                  <li>
                      <?php
                      $args = array( 'numberposts' => 3 );
                      $lastposts = get_posts( $args ); ?>
                      
                      <ul class="blog-list">
                          <?php foreach($lastposts as $post) : setup_postdata($post); ?>
                              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br/>
                                  <span class="the-date">added on: <em><?php echo get_the_date(); ?></em></span><br/><br/>
                              </li>
                          <?php endforeach; ?>
                      </ul>
                  </li>
              </ul>
          <?php endif; ?>
        </ul>
          </div><!--col-sm-4-->     
    </div> <!-- row -->
  </div> <!-- container -->
</section><!-- #mainContent -->
<?php get_footer(); ?>
