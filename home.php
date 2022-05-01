<?php
   session_start();
   if(!isset($_SESSION['detail'])){
       header('location:index.php');
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button{
            padding: 10px 15px;
            background-color: rgb(250, 0,150);
            border: 1px solid black;
        }
        a{
            text-decoration: none;
            color: #fff;
            font-size: 18px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <button><a href="logout.php">logout</a></button>
    <h1>hiiiiii  <?php
    echo $_SESSION['detail']; 
 ?>
       
    </h1>
</body>
</html>