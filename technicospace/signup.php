<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>
    <link rel="stylesheet" href="style_login.css">
</head>
<body>
  
    <div class="signup">
        <h1>Sign up</h1>
        <h4>It's free and only takes a minute</h4>
        <form method="POST">
            <label>First Name</label>
            <input type="text" name="FirstName" required>
            <label>Last Name</label> 
            <input type="text" name="LastName" required>
            <label>Gender</label>
            <input type="text" name="Gender"required>
            <label>Contact Number</label>
            <input type="tel" name="ContactNumber"required>
            <label>Address</label>
            <input type="text" name="Address"required>
            <label>Email</label>
            <input type="email" name="Email"required>
            <label>Password</label>
            <input type="password" name="password"required>
            <input type="submit"name="sumbit"value="submit">
        </form>
        
        <p>By clicking the Sign Up button, you agree to our<br>
        <a href="">Terms and Condition</a> and <a href="#">Policy Privacy</a>
    </p>
    <p>Already have an account? 
    <a href="login.php">Login here</a></p>
</body>
<?php

// echo $_POST['sumbit']; die;
    require("db.php");
    if(isset($_POST['sumbit'])){
       
        $FirstName= stripslashes($_REQUEST['FirstName']);
        $FirstName= mysqli_real_escape_string($con, $FirstName);
        $LastName= stripslashes($_REQUEST['LastName']);
        $LastName= mysqli_real_escape_string($con, $LastName);
        $Gender= stripslashes($_REQUEST['Gender']);
        $Gender= mysqli_real_escape_string($con, $Gender);
        $ContactNumber= stripslashes($_REQUEST['ContactNumber']);
        $ContactNumber= mysqli_real_escape_string($con, $ContactNumber);
        $Address= stripslashes($_REQUEST['Address']);
        $Address= mysqli_real_escape_string($con, $Address);
        $Email= stripslashes($_REQUEST['Email']);
        $Email= mysqli_real_escape_string($con, $Email);
        $password= stripslashes($_REQUEST['password']);
        $password= mysqli_real_escape_string($con, $password);
        $trn_date=date("Y-m-d H:i:s");
        $query="INSERT into `users`(FirstName,LastName,Gender,ContactNumber,Email,password,trn_date)VALUES('$FirstName','$LastName','$Gender','$ContactNumber','$Email','".md5($password)."', '$trn_date')";
       // echo $query; die();
        $result = mysqli_query($con, $query);
        if($result){
                // echo "<div class='form'><h3>You are Registered Successfully.</h3><br>Click here to<a href='login.php'>Login</a></div>";
        }
        
    }else{

    }
    ?>
</body>
</html>