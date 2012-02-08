jQuery(document).ready(function() {
	var davispressimage = null;
	
	jQuery('.davispress-image-cue').click(function() {
		davispressimage = jQuery( this ).prev( 'input' );
		tb_show( '', 'media-upload.php?type=image&TB_iframe=true' );
		return false;
	});
	
	var send_to_editor_old = window.send_to_editor;
	
	window.send_to_editor = function( html ) {
		var davispresssrc;

		if( davispressimage != null ) {
			davispresssrc = jQuery( 'img', html ).attr( 'src' );
			davispressimage.val( davispresssrc );
			tb_remove();
			davispressimage = null;	
		} else {
			send_to_editor_old( html );
		}	
	}
});
