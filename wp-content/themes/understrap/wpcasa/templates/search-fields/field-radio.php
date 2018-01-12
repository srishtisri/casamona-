
<?php if( isset( $fields[$field]['data'] ) && is_array( $fields[$field]['data'] ) ) : ?>

<div class="listings-search-field listings-search-field-<?php echo esc_attr( $fields[$field]['type'] ); ?> listings-search-field-<?php echo esc_attr( $field ); ?> <?php echo esc_attr( $class ); ?>">
	
	<?php if( ! empty( $fields[$field]['label'] ) ) : ?>
	<label class="radiogroup" for="<?php echo esc_attr( $field ); ?>"><?php echo esc_attr( $fields[$field]['label'] ); ?></label>
	<?php endif; ?>
	
	<?php foreach( $fields[$field]['data'] as $k => $v ) : ?>	
		<?php $data_default = ( isset( $fields[$field]['default'] ) && $fields[$field]['default'] == $k ) ? 'true' : 'false'; ?>
		<div class="radio-gp">
		<input type="radio" name="<?php echo esc_attr( wpsight_get_query_var_by_detail( $field ) ); ?>" value="<?php echo esc_attr( $k ); ?>"<?php checked( $k, sanitize_key( $field_value ) );?> data-default="<?php echo esc_attr( $data_default ); ?>" id="<?php echo esc_attr( $k ); ?>"/> 
		<label class="radio" for="<?php echo esc_attr( $k ); ?>">
			<?php echo esc_attr( $v ); ?>
		</label>
		</div>		
	<?php endforeach; ?>

</div><!-- .listings-search-field-<?php echo esc_attr( $field ); ?> -->

<?php endif; ?>