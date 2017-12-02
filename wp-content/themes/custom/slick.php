<?php if( have_rows('rotator') ): ?>
	<div class="wrapper">
  		<div class="responsive-main">
		    <?php while( have_rows('rotator') ): the_row(); ?>
				<div class="slide">
			     <img src="<?php the_sub_field('image'); ?>" style="width:100%;">
			      <div class="slide_caption">
			        <?php if( get_sub_field('title') ): ?>
						<h2><?php the_sub_field('title'); ?></h2>
					<?php endif; ?>

					<?php if( get_sub_field('link') ): ?>
						<a href="<?php the_sub_field('link'); ?>">
					<?php endif; ?>

					<?php if( get_sub_field('sub-title') ): ?>
						<h3><?php the_sub_field('sub-title'); ?></h3>
					<?php endif; ?>

					<?php if( get_sub_field('link') ): ?>
						</a>
					<?php endif; ?>
			            
			      </div>
			    </div>
		    <?php endwhile; ?>
		 <?php endif; ?>
	</div><!-- responsive-main -->
</div><!-- wrapper -->