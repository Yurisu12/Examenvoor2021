<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact page</title>
    <h2>Contact us</h2>
</head>
<body>
    <form class="contact" action="Contact.php" method="post">
        <input type="text" name="name" placeholder="Name" require><br>
        <input type="email" name="mail" placeholder="Email" require><br>
        <textarea name="message" id="msg" cols="30" rows="10" placeholder="message"></textarea><br>
        <input type="submit" name="submit" value="SEND">
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $msg = $_POST['message'];

    echo "Name: ". $name. "<br>";
    echo "Email: ". $mail. "<br> <br>";
    echo "<h3>Customer message</h3>". "<br>". $msg;
}

?>