<?php get_header(); ?>
<div class="body-bg">


  
    <div class="container">
        <div class="row" style="margin-top:3%;">



            <div class="col-sm-8">
              <div class="content-block">
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
                      <div class="row">
                          <div class="col-xs-12">
                              <a href="<?php the_permalink(); ?>"><h3 class="blogheading"><?php the_title() ?></h3></a>
				        <p class="dateinfo">Posted on: <?php the_date(); ?></p>

                              <div class="row">
                                <div class="col-sm-3">
                                  <?php the_post_thumbnail('thumbnail'); ?>
                                </div><!--col-sm-3 -->

                                <div class="col-sm-9">
                                  <?php the_content_rss('read more', false, ' ' , 50); ?><br />
                                      <a href="<?php the_permalink(); ?>"><span class="continue">Continue Reading</span></a>

                                       <div class="clearfix"></div>
                              <div class="lower-meta"><br />Posted In: <?php the_category(', '); ?></div>
                                </div><!--col-sm-9 -->
                              </div><!--row -->
                              
                              

                             
                          </div>
                      </div> <!-- row -->
                      


                      <div class="row">
                          <div class="col-lg-12">
                              <hr/>
                            </div>
                      </div>
                  <?php endwhile; else: ?>
                  <div class="row">
                      <div class="col-xs-12">
                          <h2>Sorry, that page doesn't seem to exist.</h2>
                          <h3>Try searching</h3>
            
                          <?php get_search_form(); ?>
                          <br />
                          <h3>Or navigate to another page.</h3>
                          <ul>
                              <?php wp_list_pages('title_li=&depth=1'); ?>
                          </ul>
                      </div>
                  </div>
                  <?php endif; ?>
                  <?php wp_reset_query(); ?>
                  <?php if(is_single()) { // single-view navigation ?>
                      <?php $posts = query_posts($query_string); if (have_posts()) : while (have_posts()) : the_post(); ?>
                          <div class="next-prev-nav">
                              <div class="prev-s"><?php previous_post_link('%link', '&larr; Previous Post'); ?></div>
                              <div class="next-s"><?php next_post_link('%link', 'Next Post &rarr;'); ?></div>
                          </div><!-- /next-prev-nav -->
                      <?php endwhile; endif; ?>
                  <?php } else { // archive view navigation ?>
                          <?php posts_nav_link(); ?>
                  <?php } ?>
                </div>
            </div>


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
                          <span class="the-date">added on: <em><?php echo get_the_date(); ?>...</em></span><br/><br/>
                      </li>
                  <?php endforeach; ?>
              </ul>
          </li>
      </ul>
  <?php endif; ?>
  </ul>

        </div><!--col-sm-4-->
            



            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-pull-8">
                <?php get_sidebar('sidebar')?>
            </div>
        </div>
    </div>
</div>  
<?php get_footer(); ?>