
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"> -->
    <title>travel</title>
</head>
<body>
    <!-- adminlogin -->
  
    

    <!-------------login---------------->
    <?php include './login.php'  ?>

    <!---------header------------->
    <section class="header"> 
        <h5><a href="/">Transport</a></h5>
        <ul>
            <li><a class = "nav_style" href="/">Home</a></li>
            <li><a class = "nav_style" href="/">About</a></li>
            <li><a class = "nav_style" href="/">Contact</a></li>
            <li><a class="btn_style" id="adminbutton" href="admin_login.php">Admin login</a></li>
            <li><a href="./register.php" class="btn_style">Sign up</a></li>
            <li><a class="btn_style" onclick="login()">Login</a></li>
        </ul>
    </section>
    <script>
        let adminlogin = document.getElementById("adminlogin");
        let adminbutton = document.getElementById("adminbutton");
        adminbutton.addEventListener('onclick',function(){
            adminlogin.style.display="block";
        })
    </script>
        <!-- admin login -->
    <script>
         let login1 = document.getElementById("login");
         
          function login(){
           login1.style.display="flex";
        }
    
        function onClose(){
            login1.style.display ="none";
        }
        window.onclick = function(event){
            if(event.target == login1){
                login1.style.display = "none";
            }
        }
      
    </script>
    <!---------- image slide ------------>
    <section class="image_slider">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide"><img src="./image/30189.jpg"></div>
              <div class="swiper-slide"><img src="./image/6939307.jpg"></div>
              <div class="swiper-slide"><img src="./image/7027950.jpg"></div>
              <div class="swiper-slide"><img src="./image/7094918.jpg"></div>

            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
          
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
    </section>
   
    <!-- <section class="show_image">

    </section>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse ratione quibusdam dolor, quaerat qui necessitatibus consectetur, aliquid fugit amet, porro pariatur culpa unde nisi iusto debitis neque dolorem repellendus ducimus?</p> -->
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