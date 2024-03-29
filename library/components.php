<?php


// include components
require_multi( 
    'component/header', 'component/icons', 'component/rates', 'component/icon-list', 'component/blockquote', 'component/promotion', 
    'component/separator', 'component/content', 'component/content-two', 'component/people-photos', 'component/people',
    'component/button-columns', 'component/accordions', 'component/post-list', 'component/slides', 'component/gearbox', 'component/spacer', 'component/anchor' );


function the_components() {

    // if we have components for this page
    if( have_rows('components') ):
        
        // loop through the components
        while ( have_rows('components') ) : the_row();

            // layout switch
            if ( get_row_layout() == 'header' ):
                the_header();

            elseif ( get_row_layout() == 'slides' ): 
                the_slides();

            elseif ( get_row_layout() == 'separator' ): 
                the_separator();
                    
            elseif ( get_row_layout() == 'spacer' ): 
                the_spacer();
                
            elseif ( get_row_layout() == 'content' ): 
                the_content_area();

            elseif ( get_row_layout() == 'content-two' ): 
                the_content_two_column();
                
            elseif ( get_row_layout() == 'icons' ): 
                the_icons();
    
            elseif ( get_row_layout() == 'icon_list' ): 
                the_icon_list();

            elseif ( get_row_layout() == 'rates' ): 
                the_rates();
    
            elseif ( get_row_layout() == 'blockquote' ): 
                the_blockquote();

            elseif ( get_row_layout() == 'promotion' ): 
                the_promotion();
        
            elseif ( get_row_layout() == 'gearbox' ): 
                the_gearbox();

            elseif ( get_row_layout() == 'people_photos' ): 
                the_people_photos();

            elseif ( get_row_layout() == 'people' ): 
                the_people();

            elseif ( get_row_layout() == 'button_columns' ): 
                the_button_columns();
                
            elseif ( get_row_layout() == 'accordions' ): 
                the_accordions();
            
            elseif ( get_row_layout() == 'post_list' ): 
                the_post_list();
                                
            elseif ( get_row_layout() == 'anchor' ): 
                the_anchor();
                            
            endif;

        // End loop.
        endwhile;

    endif;

}


