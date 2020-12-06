jQuery( document ).ready( function( $ ){
	$( 'body' ).keydown(function( event ){
		if( event.shiftKey === true && event.which === 40 ){
			$( '#wpadminbar' ).slideToggle( 'fast' );
			$( 'html' ).toggleClass( 'spaceClear' );
		}
	});
});