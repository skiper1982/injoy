<script type="text/javascript">
	function jsOnclick(object){
		window.open(object.href, object.target, 'width=700,height=400');
		return false;
	}
</script>
<!--script type="text/javascript">
	$("a[href$='.jpg'],a[href$='.png'],a[href$='.gif']").attr('rel', 'gallery').fancybox();
</script-->

<?php 
/**
Template Page for the gallery overview

Follow variables are useable :

	$gallery     : Contain all about the gallery
	$images      : Contain all images, path, title
	$pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/
?>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) : ?>

<div class="ngg-galleryoverview" id="<?php echo $gallery->anchor ?>">
<!-- Slideshow link aqui va el codigo -->
<?php if ($gallery->show_slideshow) { ?>
	<!-- Slideshow link -->
	<div class="slideshowlink">
		<a class="slideshowlink" href="<?php echo $gallery->slideshow_link ?>">
			<?php echo $gallery->slideshow_link_text ?>
		</a>
	</div>
<?php } ?>

<?php if ($gallery->show_piclens) { ?>
	<!-- Piclense link -->
	<div class="piclenselink">
		<a class="piclenselink" href="<?php echo nextgen_esc_url($gallery->piclens_link) ?>">
			<?php _e('[View with PicLens]','nggallery'); ?>
		</a>
	</div>
<?php } ?>
	
	<!-- Thumbnails -->
    <?php $i = 0; ?>
     <?php $_x = 1; ?>
	<?php foreach ( $images as $image ) : ?>
	
	<div id="ngg-image-<?php echo $image->pid ?>" class="ngg-gallery-thumbnail-box <?php if($_x == 6){ echo 'last';$_x=0;}  ?>" <?php echo $image->style ?> >
		<div class="ngg-gallery-thumbnail" >
			
			<a href="<?php echo nextgen_esc_url($image->imageURL) ?>#<?php echo base64_encode(esc_attr($image->filename)); ?>"
               title="<?php echo esc_attr($image->title); ?>"
               data-src="<?php echo nextgen_esc_url($image->imageURL); ?>"
               data-thumbnail="<?php echo nextgen_esc_url($image->thumbnailURL); ?>"
               data-image-id="<?php echo esc_attr($image->pid); ?>"
               data-title="<?php echo esc_attr($image->alttext); ?>"
               data-description="<?php echo esc_attr($image->description); ?>"
               <?php echo $image->thumbcode ?> >
			<?php if ( !$image->hidden ) { ?>
				<img title="<?php echo esc_attr($image->alttext) ?>" alt="<?php echo esc_attr($image->alttext) ?>" src="<?php echo nextgen_esc_url($image->thumbnailURL) ?>" <?php echo $image->size ?> />
			<?php } ?>
			<span class='thumbnail-info'></span>
			<span class='info-title'><?php echo esc_attr($image->alttext); ?></span>
			<span class='info-line'></span>
			<span class='info-description'><?php echo esc_attr($image->description); ?></span>
			</a>
		</div>
	</div>

    <?php if ( $image->hidden ) continue; ?>
    <?php if ($gallery->columns > 0): ?>
        <?php if ((($i + 1) % $gallery->columns) == 0 ): ?>
            <br style="clear: both" />
        <?php endif; ?>
    <?php endif; ?>
    <?php $i++; ?>
     <?php $_x++; ?>

 	<?php endforeach; ?>
 	
	<!-- Pagination -->
 	<?php echo $pagination ?>
 	
</div>

<?php endif; ?>
