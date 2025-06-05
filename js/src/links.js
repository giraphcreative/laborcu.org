

jQuery(document).ready(function($) {

	$( 'body a:not(.previous):not(.next):not(.lightbox-iframe)' ).click(function( event ){
		
		// break the normal linking behavior
		event.preventDefault();

		// get the link
		var the_link = $( this );
		var the_link_href = the_link.attr( 'href' );

		//console.log( the_link_href );

		// prompt the user and if they confirm the prompt, proceed to the third party site.
		if ( the_link.hasClass( 'bypass' ) ||
			the_link_href.match( /labor.jpederson.io/i ) || 
			the_link_href.match( /dolfcu.giraph.io/i ) ||
			the_link_href.match( /dolfcu.org/i ) ||
			the_link_href.match( /itsme247.com/i ) ||	
			the_link_href.match( /joinmycu.com/i ) || 
			the_link_href.match( /outlook.office365.com/i ) || 
			the_link_href.charAt(0) === '#' || 
			the_link_href.charAt(0) === '/' ) {
			
			// go to the url in question if it's in the exceptions
			location.href = the_link_href;

		} else {

			// the default copy for the speedbump
			var copy = "You are about to leave Labor Credit Union's website. Labor Credit Union provides links to other web sites for your convenience and informational purposes. Linked sites are not under the control of Labor Credit Union and Labor Credit Union is not responsible for the content of any linked site.";

			if ( the_link_href.match( /newtekone.com/i ) ||
				the_link_href.match( /cumortgage.mycuhomeadvantage.com/i ) ||
				the_link_href.match( /payments.mwamplifi.com/i ) ||
				the_link_href.match( /calendly.com/i ) ||
				the_link_href.match( /app.altruist.com/i ) ||
				the_link_href.match( /cuwgroup.com/i ) ||
				the_link_href.match( /cumortgage.net/i ) ||
				the_link_href.match( /play.google.com/i ) ||
				the_link_href.match( /apps.apple.com/i ) ||
				the_link_href.match( /digitaldefense.com/i ) ||
				the_link_href.match( /coindexter.club/i ) ||
				the_link_href.match( /balancepro.org/i ) ||
				the_link_href.match( /cudlautosmart.com/i ) ||
				the_link_href.match( /familysecurityplan.com/i ) ) {
				
				// this is a business partner link, so it gets different copy.
				copy = "You are about to leave Labor Credit Union's website to be directed to a business partner site. Labor Credit Union is not responsible for the web content, security or privacy policies of business partner sites.";

			}

			// do the confirmation
			if ( confirm( copy ) ) {
				window.open( the_link_href, "_blank" ); 
			}

		}

	});

});

