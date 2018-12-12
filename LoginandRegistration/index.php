<?php
include "class.php";
if($obj->loggedin()!=""){
    $obj->url("home.php");
}
?>

<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login and Registration using OOP</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<center><h1>Login and Registration using <u>OOP</u></h1></center>
<div id="login_container">
    <br>
    <center>
        <form method="get" action="login_submit.php">
        <h2>Login Form</h2>
            <?php
            if(isset($_GET['err'])){
                echo "<p>Your email or password may be wrong</p>";
            }

            ?>
        <br>
        <br>
        <input type="email" name="e" placeholder="Enter Your Email" required><br><br>
        <input type="password" name="p"  placeholder="Enter Your Password" required><br><br>
        <input type="submit" name="login" value="Submit">
        </form>
    </center>
    <br>
</div>

<div id="register_container">
    <br>
    <br>
    <center>
        <form method="get" enctype="multipart/form-data" action="regis_submit.php">
        <h2>Registration Form</h2>
            <?php if(isset($_GET['msg'])){
                echo "<p>Your registration is successfully done</p>";
            } ?>
            <br>
            <br>
        <input type="text" name="n" placeholder="Enter Your Name" required><br><br>
        <input type="email" name="e" placeholder="Enter Your Email" required><br><br>
        <input type="number" name="nm" placeholder="Enter Your mobile number" required><br><br>
        <input type="password" name="p"  placeholder="Enter Your Password" required><br><br>
        Upload your image&emsp;<input type="file" name="img"><br><br>
        <input type="submit" name="submit" value="Submit">
        </form>
    </center>
    <br>
    <br>
</div>
</body>
</html>