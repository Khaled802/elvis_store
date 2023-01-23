<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove_mail</title>
</head>
<body>
<?php
    require './models.php';
    

    $email = new Email();
    $all_emails_info = $email->get_all();

?>
<form action="remove_email.php" method="post">
        <?php
            foreach ($all_emails_info as $email_info) {
                [$id, $first_name, $last_name, $email] = array_values($email_info);
                echo "<input type='checkbox' name='{$id}' id='{$id}'>";
                $full_name = $first_name . ' ' . $last_name;
                echo "<label>full name: {$full_name} |</label>";
                echo "<label>email: {$email}</label>";
                echo "<br>";
            }
        ?>
        
        <input type="submit" value="remove">
    </form>
</body>
</html>