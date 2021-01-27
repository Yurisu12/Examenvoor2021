<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer login page</title>
    <div class="title">
    <h2>Employee Login</h2>
    </div>
</head>
<body>
    <form class="login" action="loginEmployee.php" method="post">
        <input type="text" name="id" placeholder="6 digit id" maxlength="6" require><br>
        <input type="password" name="password" placeholder="Password" require><br>
        <input type="submit" name="submit" value="Log in" ><br>
    </form>
</body>
</html>

<?php

if(isset($_POST["submit"])){
    $user = $_POST['id'];
    $pwd = $_POST['password'];

    echo "Your employee id is ". $user. "<br>";
    echo "Your password is ". $pwd;
}

?>
