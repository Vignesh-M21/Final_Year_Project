<?php
include './connect.php';
   session_start();
   if(!isset($_SESSION['detail'])){
       header('location:index.php');
   }
   if(isset($_SESSION['var'])){
    echo "correct";
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
    <style>
           *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .place{
            width: 100%;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
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
        .image_slider{
    width: 100%;
    height: 450px;
    /* display: block; */
    /* display: flex;
    align-items: center;
    justify-content: center; */

}
.swiper-slide{
    width: 100%;
    height: fit-content;
}
.swiper-slide img{
    width: 100%;
    height: 450px;
}
.swiper .swiper-button-prev,.swiper .swiper-button-next{
    color: rgb(147, 243, 158);
}
.swiper .swiper-pagination-bullet-active{
    background: rgb(147, 243, 158);
    color: #fff;
}
    .placedetail{
            width: 100%;
            height: 100vh;
            text-align: left;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
        
        }
        .placedetail h4{
            color: #fff;
            font-size: 18px;
            font-weight: 600;
            text-align: center;
            margin-top: 13px;
        }
        .place_container{
            width: 450px;
            height: 250px;
            background-color: black;
            margin: 10px;
        }
    </style>
</head>
<body>
    <button><a href="logout.php">logout</a></button>
    <h1>hiiiiii  <?php
    echo $_SESSION['detail'];
    
    
 ?>
       
    </h1>
    <div class="placedetail">
    <?php  
            $sqli = "select * from place_detail";
            $resulted = mysqli_query($con,$sqli);
            while($row = mysqli_fetch_assoc($resulted)){
                $img1 = $row['image1'];
                $img2 = $row['image2'];
                $img3 = $row['image3'];
                $img4 = $row['image4'];
                $img5 = $row['image5'];
                $cityname = $row['placeName'];

                echo '   <div class="place_container">
                <section class="image_slider">
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                      <!-- Slides -->
                      <div class="swiper-slide"><img src="./admin_detail/'.$img1.'"></div>
                      <div class="swiper-slide"><img src="./admin_detail/'.$img2.'"></div>
                      <div class="swiper-slide"><img src="./admin_detail/'.$img3.'"></div>
                      <div class="swiper-slide"><img src="./admin_detail/'.$img4.'"></div>
                      <div class="swiper-slide"><img src="./admin_detail/'.$img5.'"></div>
                    </div>
                  </div>
            </section>
            <a href="/admin_detail/admin_operation.php?city='.$cityname.'"> <h4>'.$cityname.'</h4></a>
                </div>';
               
            }
        ?>
    </div>
            <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
                // Optional parameters
                autoplay:{
                    delay: 2000,
                    disableOnInteraction: false,
                },
                loop: true,

                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                });
    </script>
</body>
</html>