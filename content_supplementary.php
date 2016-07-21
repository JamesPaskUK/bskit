<?php 

// <!-- Image 6 -->

	$image = get_field( 'image6' );

	if( !empty($image) ): 

		// vars
		$url = $image['url'];
		$title = $image['title'];
		$alt = $image['alt'];
		$caption = $image['caption'];
		$id = 'akabakeneko_image';

		// thumbnail
		$size = 'large';
		$thumb = $image['sizes'][ $size ];
		$width = $image['sizes'][ $size . '-width' ];
		$height = $image['sizes'][ $size . '-height' ];

		if( $caption ): ?>

			<div class="wp-caption">

	<?php endif; ?>

		<a href="<?php echo $url; ?>" title="<?php echo $title; ?>">
			<img id="<?php echo $id; ?>" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
		</a>

		<?php if( $caption ): ?>

				<p class="wp-caption-text"><?php echo $caption; ?></p>

			</div>

		<?php endif; ?>

	<?php endif;

// <!-- Image 7 -->

		$image = get_field('image7');

	if( !empty($image) ): 

		// vars
		$url = $image['url'];
		$title = $image['title'];
		$alt = $image['alt'];
		$caption = $image['caption'];
		$id = 'akabakeneko_image';

		// thumbnail
		$size = 'large';
		$thumb = $image['sizes'][ $size ];
		$width = $image['sizes'][ $size . '-width' ];
		$height = $image['sizes'][ $size . '-height' ];

		if( $caption ): ?>

			<div class="wp-caption">

	<?php endif; ?>

		<a href="<?php echo $url; ?>" title="<?php echo $title; ?>">
			<img id="<?php echo $id; ?>" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
		</a>

		<?php if( $caption ): ?>

				<p class="wp-caption-text"><?php echo $caption; ?></p>

			</div>

		<?php endif; ?>

	<?php endif;

// <!-- Image 8 -->

		$image = get_field('image8');

	if( !empty($image) ): 

		// vars
		$url = $image['url'];
		$title = $image['title'];
		$alt = $image['alt'];
		$caption = $image['caption'];
		$id = 'akabakeneko_image';

		// thumbnail
		$size = 'large';
		$thumb = $image['sizes'][ $size ];
		$width = $image['sizes'][ $size . '-width' ];
		$height = $image['sizes'][ $size . '-height' ];

		if( $caption ): ?>

			<div class="wp-caption">

	<?php endif; ?>

		<a href="<?php echo $url; ?>" title="<?php echo $title; ?>">
			<img id="<?php echo $id; ?>" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
		</a>

		<?php if( $caption ): ?>

				<p class="wp-caption-text"><?php echo $caption; ?></p>

			</div>

		<?php endif; ?>

	<?php endif;
?>