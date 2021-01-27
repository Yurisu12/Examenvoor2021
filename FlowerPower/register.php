<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Sign up page</title>
    </head>
    <body>
        <h1>Sign up</h1>
        <main>
            <form class="signup-form" action="register.php" method="post">
                <input type="text" name="fName" placeholder="First name" required><br>
                <input type="text" name="mName" placeholder="Middle name optional*"><br>
                <input type="text" name="lName" placeholder="Last name" required><br>
                <input type="email" name="email" placeholder="E-mail" required><br>
                <input type="text" name="userName" placeholder="Username" required><br>
                <input type="password" name="pass" placeholder="Password" required><br>
                <input type="password" name="rPass" placeholder="Confirm password" required><br>
                <input type="submit" name="submit" value="Sign up">
            </form>
        </main>
    </body>
</html>

<?php

if(isset($_POST["submit"])){
    if($_POST["pass"] === $_POST["rPass"]){

        $fName = $_POST["fName"];
        $mName = $_POST["mName"];
        $lName = $_POST["lName"];
        $email = $_POST["email"];
        $uName = $_POST["userName"];
        $pass = $_POST["pass"];
        $pass2 = $_POST["rPass"];

        echo "<h2>Thank you for signing up</h2>"."<br>";
        echo "<h4>Account data</h4>";
        echo "Name: ".$fName."<br>";

        if(empty($_POST["mName"])){
            echo "Middle name: Optional*"."<br>";
        }else{
            echo "Middle name: ".$mName."<br>";
        }

        echo "Last name: ".$lName."<br>";
        echo "E-mail: ".$email."<br>";
        echo "Username: ".$email."<br>";
        echo "Password: ".$pass."<br>";

}else{
   echo "Task Failed."." Please confirm password again.";
}
 }

 ?>
 
