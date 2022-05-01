<?php
    session_start();
    include './connect.php';
    if(isset($_POST['login']) && !empty($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "select * from `register` where email = '$email' && password = '$password'";
        $result = mysqli_query($con,$sql);
        $num = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
        $name = $row['username'];
        if($num == 1){
             $_SESSION["detail"] = $name ;
            header('location:home.php');
        }else{
            header('location:index.php');
        }
    }

?>
<section id="login">
        <i class="fa fa-times" onclick="onClose()"></i>
        <div class="login_box" id="login_box">
            <form method="POST">
                <div class="email">
                <h4>Email</h4>
                <input type="email" placeholder="User Mail" name="email" autocomplete="off">
                </div>
                <div class="email">
                <h4>Password</h4>
                <input type="password" placeholder="Password" name="password">
                </div>
                <input type="submit" value="Login" name="login">
            </form>
            <p>Forget password <a href="/">click here</a></p>
            <p>Don't have an account <a href="./register.php">Sign up</a></p>
        </div>
</section>