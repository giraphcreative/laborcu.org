<?php


// output the icons
function the_icons() {

    $icons_intro = get_sub_field( 'icons_intro' );

    // check if the nested repeater field has rows of data
    if( have_rows('icon') ):

        if ( !empty( $icons_intro ) ) print '<div class="icons-intro">' . $icons_intro . '</div>';

        print '<div class="icons">';

        // loop through the rows of data
        while ( have_rows('icon') ) : the_row();

            $image = get_sub_field('image');
            $icon = get_sub_field('icon');
            $title = get_sub_field('title');
            $button_text = get_sub_field( 'button_text' );
            $link = get_sub_field('link');
            $color = get_sub_field('color');
            echo '<div class="icon ' . $color . '">' . 
                ( !empty( $image ) ? '<div class="icon-image"><img src="' . $image . '" /></div>' : '' ) . 
                '<div class="icon-container"><img src="' . $icon . '" /></div><h4>' . $title . '</h4>' . 
                ( !empty( $link ) && !empty( $button_text ) ? '<a href="' . $link . '" class="icon-button">' . $button_text . '</a>' : '' ) . 
                '</div>';

        endwhile;

        print '</div>';

    endif;
    
}

