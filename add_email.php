<?php

require './models.php';
require './functions.php';

if(!is_all_post_fields_filled($_POST)) {
    die('you should fill all fields');
}


$dbc = mysqli_connect(
        DATABASE['host'],
        DATABASE['user'],
        DATABASE['password'],
        DATABASE['database'],
        DATABASE['port']
) or die('connection error');


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

$db_email = new Email();
$db_email->insert($firstname, $lastname, $email);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Added successfully</h1>
</body>
</html>
