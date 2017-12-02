<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>
	
	<section id="mainContent">
		<div class="container">  
			<div class="row">
				<div class="col-sm-8 col-sm-offset-1 col-sm-push-3">
				<?php if (have_posts()) : // Results Found ?>

                <h1><?php _e('Search Results'); ?></h1>
                <?php while (have_posts()) : the_post(); ?>

                <article <?php post_class(); ?>>
                    <p id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
                    <div class="entry">
                        <p><?php echo wp_trim_words( get_the_excerpt(), 30, '...' ); ?></p>
                    </div>
                </article>
                <hr />

                <?php endwhile; ?>

                <ul class="pager">
                    <li><?php next_posts_link('<i class="icon-chevron-left"></i>&nbsp; Older Results') ?></li>
                    <li><?php previous_posts_link('Newer Results &nbsp;<i class="icon-chevron-right"></i>') ?></li>
                </ul>

            <?php else : // No Results ?>

                <p><?php _e('Sorry. We couldn&rsquo;t find anything for that search. View one of our site&rsquo;s pages or a recent article below.'); ?></p>
                <div class="row">
                    <div class="col-md-6 posts">
                        <p><?php _e('Recent Articles'); ?></p>
                        <ul>
                            <?php
                                $args = array(
                                    'numberposts' => '10',
                                    'post_status' => 'publish'
                                );
                                $recent_posts = wp_get_recent_posts( $args );
                                foreach( $recent_posts as $recent ) {
                                    echo '<li><a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . '</a></li>';
                                }
                            ?>
                        </ul>
                    </div> <!-- .posts -->
                    <div class="col-md-6 pages">
                        <h3><?php _e('Page Sitemap'); ?></h3>
                        <ul>
                            <?php wp_list_pages('title_li=&sort_column=menu_order'); ?>
                        </ul>
                    </div> <!-- .pages -->
                </div> <!-- .row -->

            <?php endif; ?>
				</div> <!-- col-sm-8 -->

				<div class="col-sm-3 sidebar col-sm-pull-9">
                    <?php get_sidebar();?>
				</div> <!-- col-sm-3 -->
			</div> <!-- row -->
		</div><!-- container -->
	</section>
<?php get_footer(); ?>