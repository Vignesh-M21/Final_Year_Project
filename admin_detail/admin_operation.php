<?php
    include '/vignesh/xampp/htdocs/Final_Year_Project/connect.php';
    $place = $_GET['city'];
    $sql = "select * from place_detail where placeName = '$place'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <title>placeDetail</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .image_slider{
            width: 100%;
            height: 350px;
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
            height: 350px;
        }
        .swiper .swiper-button-prev,.swiper .swiper-button-next{
            color: rgb(147, 243, 158);
        }
        .swiper .swiper-pagination-bullet-active{
            background: rgb(147, 243, 158);
            color: #fff;
        }
    </style>
</head>
<body>
    <h3>Explore <?php echo $row['placeName']?></h3>
       <!---------- image slide ------------>
       <section class="image_slider">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide"><img src="<?php echo $row['image1']?>"></div>
              <div class="swiper-slide"><img src="<?php echo $row['image2']?>"></div>
              <div class="swiper-slide"><img src="<?php echo $row['image3']?>"></div>
              <div class="swiper-slide"><img src="<?php echo $row['image4']?>"></div>
              <div class="swiper-slide"><img src="<?php echo $row['image5']?>"></div>

            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
          
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
    </section>
    <p><?php echo $row['discription']?></p>
    <button style="position: absolute; bottom:0;padding:10px 20px;">Delete this content</button>
    <button style="position: absolute; bottom:0; right: 0; padding:10px 20px;">update</button>
    <!-- slider script -->
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
