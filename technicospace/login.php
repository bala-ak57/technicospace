<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>
    <link rel="stylesheet" href="style_login.css">
</head>
<body>
<?php
    require('db.php');
    session_start();
    if(isset($_POST['submit']))
    {
        $Email= stripslashes($_REQUEST['Email']);
        $Email= mysqli_real_escape_string($con, $Email);
        $password= stripslashes($_REQUEST['password']);
        $password= mysqli_real_escape_string($con, $password);
        $query="SELECT * from `users` WHERE Email='$Email' and password='".md5($password)."'";
        echo $query;
        $result=mysqli_query($con,$query) or die(mysqli_error($con));
        $rows=mysqli_num_rows($result);
        if($rows==1)
        {
            $_SESSION['Email']=$Email;
            header("Location:coursepage.php");
        }
        else
        {
            echo "<div class='form'><h3>Username/password is incorrect.</h3><br />Click here to <a href='login.php>Login</a></div>";

        }
    }
    ?>
    <div class="login">
        <h1>Login</h1>
        <form method="post">
            
            <label>Email</label>
            <input type="email" name="Email" required>
            <label>Password</label>
            <input type="password" name="password" required>
            <input type="submit" name="submit" value="Submit">
        </form>
        <p>Not have an account?
             <a href="signup.php">Sign Up here</a></p>
</body>