<?php
    include '/vignesh/xampp/htdocs/Final_Year_Project/connect.php';
    if(isset($_POST['submit']) && !empty($_POST['submit'])){
        $image1 = $_FILES['image1'];
        $imagefilename1 = $image1['name'];
        $imagefiletemp1 = $image1['tmp_name'];
        $filename_separate1 = explode('.',$imagefilename1) ;
        $file_extension1 = strtolower(end($filename_separate1));
        $extension1 = array('jpeg','jpg','png');
        if(in_array($file_extension1,$extension1)){
            $uplode_image1 = "uploads/".$imagefilename1;
            move_uploaded_file($imagefiletemp1,$uplode_image1);
        }
        $image2 = $_FILES['image2'];
        $imagefilename2 = $image2['name'];
        $imagefiletemp2 = $image2['tmp_name'];
        $filename_separate2 = explode('.',$imagefilename2) ;
        $file_extension2 = strtolower(end($filename_separate2));
        $extension2 = array('jpeg','jpg','png');
        if(in_array($file_extension2,$extension2)){
            $uplode_image2 = "uploads/".$imagefilename2;
            move_uploaded_file($imagefiletemp2,$uplode_image2);
        }
        $image3 = $_FILES['image3'];
        $imagefilename3 = $image3['name'];
        $imagefiletemp3 = $image3['tmp_name'];
        $filename_separate3 = explode('.',$imagefilename3) ;
        $file_extension3 = strtolower(end($filename_separate3));
        $extension3 = array('jpeg','jpg','png');
        if(in_array($file_extension3,$extension3)){
            $uplode_image3 = "uploads/".$imagefilename3;
            move_uploaded_file($imagefiletemp3,$uplode_image3);
        }
        $image4 = $_FILES['image4'];
        $imagefilename4 = $image4['name'];
        $imagefiletemp4 = $image4['tmp_name'];
        $filename_separate4 = explode('.',$imagefilename4) ;
        $file_extension4 = strtolower(end($filename_separate4));
        $extension4 = array('jpeg','jpg','png');
        if(in_array($file_extension4,$extension4)){
            $uplode_image4 = "uploads/".$imagefilename4;
            move_uploaded_file($imagefiletemp4,$uplode_image4);
        }
        $image5 = $_FILES['image5'];
        $imagefilename5 = $image5['name'];
        $imagefiletemp5 = $image5['tmp_name'];
        $filename_separate5 = explode('.',$imagefilename5) ;
        $file_extension5 = strtolower(end($filename_separate5));
        $extension5 = array('jpeg','jpg','png');
        if(in_array($file_extension5,$extension5)){
            $uplode_image5 = "uploads/".$imagefilename5;
            move_uploaded_file($imagefiletemp5,$uplode_image5);
        }
        $placeName = $_POST['placeName'];
        $discription = $_POST['discription'];
    
        if(!empty($uplode_image1) && !empty($uplode_image2) && !empty($uplode_image3) && !empty($uplode_image4) && !empty($uplode_image5) && !empty($placeName) && !empty($discription)){
        $sql = "insert into place_detail (image1,image2,image3,image4,image5,placeName,discription) values ('$uplode_image1','$uplode_image2','$uplode_image3','$uplode_image4','$uplode_image5','$placeName','$discription')";
        $result = mysqli_query($con,$sql);
        header('location:place_detail.php');
        }
        else{
            die (mysqli_error($con));
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/admin.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <title>Placedetail</title>
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
        center{
            /* margin-top: 50px; */
            margin-left: 50px;
            font-size: 20px;
            font-weight: 600;
        }
        button{
            margin-right: 50px;
            padding: 5px 20px;
            background-color: black;
            color: tomato;
            border-radius: 5px;
            font-size: 15px;
            font-weight: 500;
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
        #popup{
           width: 100%;
           height: 100vh;
           position: absolute;
           background-color: rgba(0,0,0,0.8);
           display: none;
           align-items: center;
           justify-content: center;
           z-index: 10;

        }
        #popup .popupbox{
            width: 600px;
            height: auto;
            box-shadow: 2px 2px 2px 2px wheat;
            padding: 20px;
        }
        #popup .popupbox .section{
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 20px 0px;
        }
        label{
            color: #fff;
        }
        input{
            display: block;
            color: black;
            background-color: white;
        }
        .section1{
            margin-left: 65px;
            margin-top: 20px ;
        }
        .section1 input{
            width: 200px;
            padding: 10px 5px;
           
        }
        .section1 textarea{
            width: 400px;
        }
        input[type=submit]{
            width: 120px;
            padding: 10px 20px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
        }
     /* slider */
     .image_slider{
    width: 100%;
    height: 200px;
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
    height: 200px;
}
    </style>
</head>

<body>
    <section id="popup">
        <div class="popupbox">
            <form method="POST" enctype="multipart/form-data">
                <div class="section">
                <label >Image1</label>
                <input type="file" name="image1" required>
                </div>
                <div class="section">
                <label >Image2</label>
                <input type="file" name="image2" required>
                </div>
                <div class="section">
                <label >Image3</label>
                <input type="file" name="image3" required>
                </div>
                <div class="section">
                <label >Image4</label>
                <input type="file" name="image4" required>
                </div>
                <div class="section">
                <label >Image5</label>
                <input type="file" name="image5" required>
                </div>
                <div class="section1">
                <input type="text" placeholder="placeName" name="placeName" required>
                </div>
                <div class="section1">
                <textarea name="discription"  cols="30" rows="10" placeholder="discription......" required></textarea>
                </div>
                <div class="section1">
                <input id="Placedeatil-btn" type="submit" value="Add detail" name="submit">
                </div>
            </form>
        </div>
    </section>
    <div class="place">
    <center>Explore place detail</center>
    <button onclick="Adddetail()">Add Place</button>
    </div>
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
                      <div class="swiper-slide"><img src="'.$img1.'"></div>
                      <div class="swiper-slide"><img src="'.$img2.'"></div>
                      <div class="swiper-slide"><img src="'.$img3.'"></div>
                      <div class="swiper-slide"><img src="'.$img4.'"></div>
                      <div class="swiper-slide"><img src="'.$img5.'"></div>
                    </div>
                  </div>
            </section>
                <h4>'.$cityname.'</h4>
                </div>';
            }
        
        ?>
     
    </div>
    <script>
        let Add = document.getElementById("popup");
        function Adddetail(){
            Add.style.display = "flex";
        }
        window.onclick = function(event){
            if(event.target == Add){
                Add.style.display = "none";
            }
        }
    </script>

        <!-------- script ---------->
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