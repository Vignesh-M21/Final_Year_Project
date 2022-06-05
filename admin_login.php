<?php
session_start();
    include './connect.php';
    if(isset($_POST['adminlogin']) && !empty($_POST['adminlogin'])){
        $adminemail = $_POST['adminemail'];
        $adminpassword = $_POST['adminpassword'];
        $adsql = "select * from `admin` where adminEmail = '$adminemail' && adminPassword = '$adminpassword'";
        $adresult = mysqli_query($con,$adsql);
        $adnum = mysqli_num_rows($adresult);
        $adrow = mysqli_fetch_assoc($adresult);
        $adname = $adrow['adminEmail'];
        if($adnum == 1){
             $_SESSION['adminmail'] =  $adname;
            header('location:adminhome.php');
        }else{
            header('location:index.php');
        }
    }
    
?>

<div id="adminlogin">
        <h4>Admin login</h4>
        <form method="POST">
    <input type="email" placeholder="Adimin Mail" name="adminemail" autocomplete="off" required>
    <input type="password" placeholder="Password" name="adminpassword" required>
    <input type="submit" value="Login" name="adminlogin">
    <button style="padding: 5px 10px; background: #333; color:red; border:none; cursor: pointer;" onclick="adminClose()" >Close</button>
    </form>
    </div>
