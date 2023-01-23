<?php

use function PHPSTORM_META\type;

require './models.php';
require './functions.php';


$post = $_POST;

$db_email = new Email();

print_arr($post);

foreach($post as $id=>$val) {
    echo $id . $val;
    if (is_int($id) && $val === 'on') {
        $db_email->delete_by_id($id);
    }
}

print_arr($db_email->get_all());
