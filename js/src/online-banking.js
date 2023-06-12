

// onload responsive footer and menu stuff
jQuery(document).ready(function($){

    $('.online-banking-button').on( 'click', function( e ){
        e.preventDefault();
        $( '.online-banking' ).addClass( 'manual' );
        $( '.online-banking' ).toggleClass( 'open' );
    });

});

