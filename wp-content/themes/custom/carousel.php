<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false" data-interval="4000">
	<div class="carousel-inner">
		<?php $row = 1; if(get_field('images')): ?>
		<?php while(has_sub_field('images')): ?>
		<div class="item <?php if($row == 1) { echo 'active'; } ?>">
			<?php if(get_sub_field('link')) { ?>
				<a href="<?php the_sub_field('link'); ?>">
			<?php } ?>
					<img src="<?php the_sub_field('image'); ?>" />
			<?php if(get_sub_field('link')) { ?>
					</a>
			<?php } ?>
			<?php
			    if(get_sub_field('title')) { ?>
				<div class="carousel-caption description">
				    <?php the_sub_field('title'); ?>
				</div> <!-- .carousel-caption description -->
			<?php } ?>
		</div> <!-- item -->
		<?php $row++; endwhile; ?>
		<?php endif; ?>
	</div> <!-- carousel-inner -->
</div> <!-- myCarousel -->