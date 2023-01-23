<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add_form</title>
</head>
<body>
    <?php

    require './functions.php';
    require './models.php';

    
    $disp = true;
    if (count($_POST)) {
        $subject = $_POST['subject'];
        $body = $_POST['body'];

        if(!is_all_post_fields_filled($_POST)) {
            echo '<p style="color:red;">you should fill all fields</p>';
        } else {
            $from = 'elmer@makemeelvis.com';
            
    
            print_arr($_POST);
    
    
    
            $db_email = new Email();
    
            print_arr($db_email->get_all());
            $disp = false;
        }
    } 

    

    ?>

    <?php if($disp): ?>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
        <label for="subject">Subject of email:</label>
        <input type="text" name="subject" id="subject" value="<?php if (isset($subject)) echo $subject; ?>">
        <br>
        <label for="email">Body of the mail:</label>
        <br> 
        <textarea name="body" id="" cols="30" rows="10"><?php if (isset($body)) echo $body; ?></textarea>
        <br>
        <input type="submit" value="Send" name='submit' >
    </form>
    <?php endif ?> 
</body>
</html>