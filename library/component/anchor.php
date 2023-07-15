<?php

// output the anchor
function the_anchor() {

    // if it's an anchor
    $label = get_sub_field( 'label' );
    if ( !empty( $label ) ) print '<a name="' . $label . '"></a>';
    
}
