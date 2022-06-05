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
    <link rel="stylesheet" href="./register.css">
    <title>Sign Up</title>
    <style>
        *{
    padding: 0;
    margin: 0;
}

.sign_up_container{
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    /* background: linear-gradient(to bottom,#64faed,#d968d3); */
    background-image: url(./image/solid-navy-blue-concrete-textured-wall.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
 .email{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 10px;
    margin-left: 10px;
}
 h4{
    color: white;
    font-size: 28px;
    font-weight: 500;
    margin-bottom: 20px;

}
.sign_up_box{
   width: 700px;
   height: auto;
   box-shadow: 1px 1px 5px 1px;
   background-color: rgba(255, 255, 255, 0.1);
   padding : 30px;
 
}
#signup_btn{
    color: black!important;
    font-size: 15px;
    font-weight: 600;
    background-color: white!important;
    width: 100px;
    padding: 10px;
}
.sign_up_container input{
    width: 50%;
    color: #fff!important;
    padding: 12px 20px;
    border-radius: 35px;
    margin-bottom: 20px;
    border: none;
    outline: none;
    font-size: 15px;
    font-weight: 400;
    background-color: rgba(255, 255, 255, 0.1)!important;
    /* -webkit-appearance: none; */
}
.sign_up_container input[type="placeholder"]{
    letter-spacing: 1px;
}
.sign_up_container input[type="submit"] {
    width: 100px;
    padding: 10px 30px;
    margin-left: 5px;
    color: black!important;
    background-color: #fff!important;
    font-weight: 600;
    cursor: pointer;
}
.sign_up_container p{
    color: white;
    font-size: 18px;
    font-weight: 500;
    margin-bottom: 5px;
    margin-left: 10px;
}
.sign_up_container p a{
    text-decoration: none;
    margin-left: 10px;
    color: rgb(147, 243, 158);
    font-size: 20px;
    font-weight: 500;
}
center{
    position: absolute;
    top: 10%;
    font-size: 22px;
    color: #fff;
    font-weight: bold;
}
center::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    width: 90px;
    height: 4px;
    border-radius: 5px;
    background: #fff;
}

    </style>
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