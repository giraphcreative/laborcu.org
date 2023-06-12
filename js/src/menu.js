

// onload responsive footer and menu stuff
jQuery(document).ready(function($){

	// show/hide menus when they click the toggler
	var header = $( 'header' );
	var menu = header.find( 'nav' );
	var menu_toggle = menu.find( 'button.menu-toggle' );
	var menu_ul = menu.find( '.nav-menu' );

    // toggle menu items on smaller screens
	menu_toggle.click(function(){

		// if the menu is visible, hide it, 
		if ( menu_ul.is( ':visible' ) ) {
			menu_ul.hide();
		} else {
			menu_ul.show();
		}

		// when user clicks a link in the menu, open submenu if it exists.
		menu_ul.find( 'a' ).click(function(){
			var parent_li = $( this ).parent( 'li' );
			var submenu = $( this ).next( 'ul' );
			if ( !submenu.is( ':visible' ) && parent_li.hasClass( 'menu-item-has-children' ) ) {
				event.preventDefault();
				parent_li.addClass( 'open' );
				submenu.show();
			}
		});

	});

	// store the position of the menu from the top of the page
	var nav_top = $( 'header nav' ).offset().top;

    // fixed position nav on larger screens
	$( window ).scroll(function(){

		// if the window is wider than 1024
        if ( $( window ).width() >= 1024 ) {

			// set the width of the menu
			menu.css( 'width', $( '.container' ).width() );

			// if we've scrolled past the header, the menu switches to fixed position
			if ( $( window ).scrollTop() > nav_top ) {
				header.addClass( 'fixed' );

				// if the online banking area wasn't manually opened, close it
				if ( !$( '.online-banking' ).hasClass( 'manual' ) ) {
					$( '.online-banking' ).removeClass( 'open' );
				}

			} else {

				// we aren't past the header, remove the class.
				header.removeClass( 'fixed' );
			}
        }
    });


	// fix menu width when the window is resized.
	$( window ).resize(function(){
		// set the width of the menu
		menu.css( 'width', $( '.container' ).width() );
	});

});

