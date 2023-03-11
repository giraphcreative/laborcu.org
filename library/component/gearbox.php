<?php


function the_gearbox() {
    $content = get_sub_field( 'content' );
    if ( !empty( $content ) ){
        ?>
    <div class="gearbox <?php print $color; ?>">
        <?php print $content ?>
    </div>
        <?php
    }
}

