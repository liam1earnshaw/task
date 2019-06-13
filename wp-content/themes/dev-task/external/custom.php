<?php
/**
 * Return the relevant id for ACF
 */
function mbt_acf_id() {
    if(is_tax()) {
        $term = get_queried_object();
        return $term->taxonomy . '_' . $term->term_id;
    } else {
        return get_the_id();
    }
}