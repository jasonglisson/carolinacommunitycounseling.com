<?php 

$images = get_field('gallery');

if( $images ): ?>
	<?php $index = 1; ?>
	<?php $totalNum = count( get_field('gallery') ); ?>
	<div class="row">

        <?php foreach( $images as $image ): ?>
            <div class="col-xs-4">
                <a href="<?php echo $image['url']; ?>">
                     <img src="<?php echo $image['sizes']['medium']; ?>" class="aligncenter" />
                </a>
                <p><?php echo $image['caption']; ?></p>
            </div>
            <? if ($index % 3 == 0) : ?>
                        <? if ($index < $totalNum) : ?>                            
                            </div><!-- .row -->
                            <div class="row">
                        <? elseif ($index == $totalNum) : ?>                            
                            </div><!-- .row -->
                        <? endif; ?>
                    <? endif; ?>
                <?php $index++; ?>
        <?php endforeach; ?>
<?php endif; ?>

<?php 
/*
*---------------------------------------------------------
* The code below was no longer sorting or removing images 
* once they were deleted, so we updated the code as seen 
* above, which fixed both of these problems.
*---------------------------------------------------------
<?php 
	$images = get_field('gallery');
		if( $images ): ?>
	        <?php foreach( $images as $image ): ?>
	            <div class="col-xs-4">
	                <a href="<?php echo $image['url']; ?>">
	                     <img src="<?php echo $image['sizes']['medium']; ?>" class="aligncenter" />
	                </a>
	                <p><?php echo $image['caption']; ?></p>
	            </div>
	        <?php endforeach; ?>
		<?php endif; ?>
*/ 
?>