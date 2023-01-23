<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add_form</title>
</head>
<body>
    <form action="add_email.php" method="post">
        <label for="firstname">First name:</label>
        <input type="text" name="firstname" id="firstname">
        <br>
        <label for="lastname">Last name:</label>
        <input type="text" name="lastname" id="lastname">
        <br> 
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br>
        <input type="submit" value="submit">
    </form>
</body>
</html>