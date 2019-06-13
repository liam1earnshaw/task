<?php
/*
 * Module: Content builder
 */

$acf_id = mbt_acf_id();
if( have_rows('content_builder_modules', $acf_id) ): ?>

    <section class="content-builder">
    <?php while ( have_rows('content_builder_modules', $acf_id) ) : the_row();


        if( get_row_layout() == 'call_to_action' ) {
            get_template_part( 'modules/module', 'call-to-action' );
        }


    endwhile; ?><!-- .content-builder -->
    </section>

<?php endif;
