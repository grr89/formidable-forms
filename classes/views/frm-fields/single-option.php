<li id="frm_delete_field_<?php echo esc_attr( $field['id'] . '-' . $opt_key ); ?>_container" data-optkey="<?php echo esc_attr( $opt_key ); ?>" class="frm_single_option <?php echo $opt_key === '000' ? 'frm_hidden frm_option_template' : ''; ?>">
	<i class="fas fa-grip-vertical frm-drag"></i>
	<input type="text" name="field_options[options_<?php echo esc_attr( $field['id'] ); ?>][<?php echo esc_attr( $opt_key ); ?>][label]" value="<?php echo esc_attr( $opt ); ?>" class="field_<?php echo esc_attr( $field['id'] ); ?>_option <?php echo esc_attr( $field['separate_value'] ? 'frm_with_key' : '' ); ?>" id="<?php echo esc_attr( $html_id . '-' . $opt_key ); ?>" />

	<a href="javascript:void(0)" class="frm_icon_font frm_remove_tag" data-fid="<?php echo esc_attr( $field['id'] ); ?>" data-removeid="frm_delete_field_<?php echo esc_attr( $field['id'] . '-' . $opt_key ); ?>_container" data-showlast="#frm_add_opt_<?php echo esc_attr( $field['id'] ); ?>"></a>

	<span class="frm_option_key frm-with-right-icon field_<?php echo esc_attr( $field['id'] ); ?>_option_key<?php echo esc_attr( $field['separate_value'] ? '' : ' frm_hidden' ); ?>">
		<input type="text" name="field_options[options_<?php echo esc_attr( $field['id'] ); ?>][<?php echo esc_attr( $opt_key ); ?>][value]" id="field_key_<?php echo esc_attr( $field['id'] . '-' . $opt_key ); ?>" value="<?php echo esc_attr( $field_val ); ?>" placeholder="<?php esc_attr_e( 'Saved Value', 'formidable' ); ?>"/>
		<i class="far fa-save"></i>
	</span>
</li>
