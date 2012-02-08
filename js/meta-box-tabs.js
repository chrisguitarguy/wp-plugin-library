jQuery(document).ready(function(){
	jQuery( 'ul.davispress-meta-box-nav  li a' ).click(function(){
		jQuery( 'div.davispress-tab' ).hide();	
		
		var id = jQuery( this ).parent( 'li' ).attr( 'id' );

		jQuery( 'ul.davispress-meta-box-nav li a' ).removeClass( 'active' );
		jQuery( this ).addClass( 'active' );
		jQuery( 'div#' + id + '-tab' ).show();
	});
	jQuery( 'ul.davispress-meta-box-nav li:first-child a' ).trigger( 'click' );
});
