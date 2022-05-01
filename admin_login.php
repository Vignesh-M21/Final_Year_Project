<?php
    session_start();
    include './connect.php';
    if(isset($_POST['login']) && !empty($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "select * from `admin` where adminEmail = '$email' && adminPassword = '$password'";
        $result = mysqli_query($con,$sql);
        $num = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
        $name = $row['adminEmail'];
        if($num == 1){
             $_SESSION['adminmail'] =  $name;
            header('location:adminhome.php');
        }else{
            header('location:index.php');
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./admin.css">
    <title>adminlogin</title>
</head>
<body>
<div id="adminlogin">
        <h4>Admin login</h4>
        <form method="POST">
    <input type="email" placeholder="User Mail" name="email" autocomplete="off">
    <input type="password" placeholder="Password" name="password">
    <input type="submit" value="Login" name="login">
    </form>
    </div>
</body>
</html>