<?php
    include './connect.php';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "insert into `register` (username,email,password) values ('$name','$email','$password')";

        $sql_ceck = "select * from `register` where username = '$name'";
        $checkResult = mysqli_query($con,$sql_ceck);
        $num = mysqli_num_rows($checkResult);
        // $result = mysqli_query($con,$sql);
        if($num == 1){
            echo  'user already exist';
        }
        else{
            $result = mysqli_query($con,$sql);
            if($result){
                header('location:index.php');
            }else{
                die (mysqli_error($con));
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
</head>
<body>
    
    <section class="sign_up_container">
        <center>Sign Up Form</center>
        <div class="sign_up_box">
            <form  method="POST">
                <div class="email">
                    <h4>Username</h4>
                    <input type="text" placeholder="Username" name="name" autocomplete="off" required>
                </div>
                <div class="email">
                    <h4>Email</h4>
                    <input type="email" placeholder="User Mail" name="email" autocomplete="off" required>
                </div>
                <div class="email">
                    <h4>Password</h4>
                    <input id="pass" type="password" placeholder="Password" name="password" required>
                </div>
                <div class="email">
                    <h4>Confirm Password</h4>
                    <input id="pass1" type="password" placeholder="Confirm Password" required>
                </div>
                <input id="signup_btn" type="submit" name="submit" value="Sign Up">
                <p>Go to login page <a href="./index.html">Login</a></p>
            </form>
        </div>
    </section>
</body>
</html>