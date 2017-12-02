<?php get_header(); ?>
	<section id="intro">
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-12">
	        <h1 class="pageTitle"><?php the_title();?></h1>
	        <?php include_once('loop.php'); ?>
	      </div>
	    </div> <!-- row -->
	  </div> <!-- container -->
	</section>
<?php get_footer(); ?>