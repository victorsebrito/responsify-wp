<?php 
/*update_option( 'rwp_custom_media_queries', array(
	'default' => array(
		'smallest_image_size' => 'thumbnail',
		array(
			'image_size' => 'medium',
			'media_property' => 'min-width',
			'media_value' => '500px'
		),
		array(
			'image_size' => 'large',
			'media_property' => 'min-width',
			'media_value' => '1024px'
		)
	),
	'scenario'
) );*/
?>
<h3>Custom media queries</h3>
<table class="wp-list-table widefat">
	<thead>
		<tr>
			<th>Image size</th>
			<th>Property</th>
			<th>Value</th>
			<th></th>
		</tr>
	</thead>
	<tbody class="js-media-queries-table">
		<tr>
			<td>
				<select name="image-size">
					<?php foreach ( get_intermediate_image_sizes() as $image_size ) : ?>
						<option><?php echo $image_size;?></option>
					<?php endforeach; ?>
				</select>
			</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</tbody>
</table>

<div class="js-add-new-media-query">
	<select name="image-size">
		<?php foreach ( get_intermediate_image_sizes() as $image_size ) : ?>
			<option><?php echo $image_size;?></option>
		<?php endforeach; ?>
	</select>
	<select name="property">
		<option>min-width</option>
		<option>max-width</option>
	</select>
	<input type="text" name="breakpoint" placeholder="Breakpoint">
	<button class="button">Add</button>
</div>