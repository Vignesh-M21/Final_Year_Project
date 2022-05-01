<?php
   session_start();
   if(!isset($_SESSION['adminmail'])){
       header('location:index.php');
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./admin.css">
    <title>Document</title>
    <style>
        .admin_home{
            width: 100%;
            display: flex;
            justify-content: space-between;
        }
        h1{
            margin: 10px 20px;
        }
        button{
            padding: 10px 20px;
            background-color: rgb(250, 0,150);
            border: 1px solid black;
            margin: 10px 20px;
            border-radius: 20px;
        }
        a{
            text-decoration: none;
            color: #fff;
            font-size: 18px;
            font-weight: 600;
        }
        .admin_division{
            width: 100%;
            height: 100vh;
            margin-top: 50px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            overflow: hidden;
        }
        .division{
            width: 700px;
            height: 250px;
            margin: 10px;
            background-color: burlywood;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .division a{
            text-overflow: none;
            font-size: 25px;
            font-weight: 500;
            letter-spacing: 2px;
        }

    </style>
</head>
<body>
    <div class="admin_home">
    <h1>Welcome  <?php echo $_SESSION['adminmail'];?></h1>
    <button><a href="logout.php">logout</a></button>
    </div>
    <div class="admin_division">
        <div class="division"><a href="./admin_detail/place_detail.php">click me</a></div>
        <div class="division"><a href="/">click me</a></div>
        <div class="division"><a href="/">click me</a></div>
        <div class="division"><a href="/">click me</a></div>
    </div>
</body>
</html>