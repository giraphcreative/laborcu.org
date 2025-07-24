<?php

$quotes = get_sub_field( 'quote' );

if ( !empty( 'quote' ) ) {
    ?>
<div class="testimonials">
    <h2><?php the_sub_field( 'title' ); ?></h2>
    <div class="testimonials-inner">
        <?php  
        foreach ( $quotes as $key => $quote ) {
            ?>
        <div class="quote<?php print ( $key == 0 ? ' visible' : '' ); ?>">
            <?php print $quote['content'] ?>
            <div class="attribution"><?php print $quote['attribution'] ?></div>
        </div>
            <?php
        }
        ?>
    </div>
</div>
    <?php
}

