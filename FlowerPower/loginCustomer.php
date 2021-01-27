<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer login page</title>
    <div class="title">
    <h2>User Login</h2>
    </div>
</head>
<body>
    <form class="login" action="loginCustomer.php" method="post">
        <input type="text" name="username" placeholder="Username" require><br>
        <input type="password" name="password" placeholder="Password" require><br>
        <input type="submit" name="submit" value="Log in" ><br>
    </form>
</body>
</html>

<?php

if(isset($_POST["submit"])){
    $user = $_POST['username'];
    $pwd = $_POST['password'];

    echo "Your username is ". $user. "<br>";
    echo "Your password is ". $pwd;
}

?>