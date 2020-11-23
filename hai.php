<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Usename e-mail is: <?php
 $email = $_POST['email']; 
 $position = strpos($email, '@');
 $email = substr($email, 0, $position);
 echo $email;
 ?>

</body>
</html>