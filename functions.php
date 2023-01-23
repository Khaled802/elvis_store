<?php

function print_arr($arr) {
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}


function is_all_post_fields_filled(array $post): bool {
    foreach($post as $field) {
        if (empty($field)) {
            return false;
        }
    }
    return true;
}


function echo_or_not($val) {
    if (!empty($val)) {
        echo $val;
    }
}