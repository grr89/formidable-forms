<div id="postbox-container-1" class="postbox-container frm-right-panel">
    <?php

	if ( ! isset( $hide_preview ) || ! $hide_preview ) {
		include( FrmAppHelper::plugin_path() . '/classes/views/frm-forms/_publish_box.php' );
    }
	?>

	<?php include( FrmAppHelper::plugin_path() . '/classes/views/frm-forms/mb_insert_fields.php' ); ?>
</div>
