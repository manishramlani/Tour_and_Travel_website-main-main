<?php
include("session.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tours and Travels Management System </title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link hello -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
 
</head>
<body>
    
<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>T</span>ravel</a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#book">book</a>
        <a href="#packages">Modes</a>
        <a href="#services">services</a>
        <a href="#gallery">gallery</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <?php
        if (isset($_SESSION['login_user'])){
                    
            echo '<span style="  color:#fff;font-size: 2rem; margin:0 .8rem;">' . $_SESSION['name'] . '</span>';
            echo '<a href="logout.php" class="fas fa-sign-out-alt" style="color:#fff;font-size: 2rem; margin:0 .8rem;"></a>';
        }
        else{
        echo '<i class="fas fa-user" id="login-btn"></i>';
        
        }
       ?>
        
    </div>

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->

<!-- login form container  -->

<div class="login-form-container">
    <i class="fas fa-times" id="form-close"></i>
    <form action="login.php" method="post">
        <h3>Login</h3>
        <input type="email" name="email" class="box" placeholder="Enter your email">
        <input type="password" name="password" class="box" placeholder="Enter your password">
        <input type="submit" value="Login now" class="btn">
        <input type="checkbox" id="remember">
        <label for="remember">Remember me</label>
        <p>Forget password? <a href="#">Click here</a></p>
        <p>Don't have an account? </p> <a id="register-btn">Register now</a>
    </form>
    
</div>

<div class="login-form-container" id="registration-form-container">
    <i class="fas fa-times" id="form-closee"></i>
    <form action="register.php" method="post">
        <h3>Register Now</h3>
        <input type="text" name="name" class="box" placeholder="Enter your full name" required>
        <input type="email" name="email" class="box" placeholder="Enter your email" required>
        <input type="password" name="password" class="box" placeholder="Choose a password" required>
        <input type="password" name="confirm_password" class="box" placeholder="Confirm password" required>
        <input type="submit" value="Register" class="btn">
        <p>Already have an account? <a href="#login-form-container" id="loginbox-btn">Log in</a></p>
    </form>
</div>


<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>TOURS AND TRAVELS </h3>
        <p>dicover new places with us, adventure awaits</p>
        <a href="manish.html" class="btn">PLAN A TRIP</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
        <span class="vid-btn" data-src="images/vid-2.mp4"></span>
        <span class="vid-btn" data-src="images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="images/vid-4.mp4"></span>
        <span class="vid-btn" data-src="images/vid-5.mp4"></span>
    </div>

    <div class="video-container">
        <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- home section ends -->

<!-- book section starts  -->

<section class="book" id="book">

    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/book-img.svg" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <h3>where to</h3>
                <input type="text" placeholder="place name">
            </div>
            <div class="inputBox">
                <h3>how many</h3>
                <input type="number" placeholder="number of guests">
            </div>
            <div class="inputBox">
                <h3>arrivals</h3>
                <input type="date">
            </div>
            <div class="inputBox">
                <h3>leaving</h3>
                <input type="date">
            </div>
            <input type="submit" class="btn" value="book now">
        </form>

    </div>

</section>

<!-- book section ends -->

<!-- packages section starts  -->

<section class="services" id="services">

    <h1 class="heading">
        <span>M</span>
        <span>O</span>
        <span>D</span>
        <span>E</span>
        <span>S</span>
    </h1>

<section class="packages" id="packages">
    <a href="trains.html">
    <div class="box">
        <div class="card">
          <div class="imgBx">
              <img src="images/f1.jpg" alt="images">
          </div>
          <div class="details">
              <h2>TRAINS<br><span>IRCTC</span></h2>
          </div>
        </div>
    </a>
      

    <a href="buses.html">
         <div class="card">
           <div class="imgBx">
              <img src="images/f2.jpg" alt="images">
           </div>
           <div class="details">
              <h2>BUSES<br><span>ROADWAYS + IN-CITY</span></h2>
            </div>
         </div>
        </a>
  
         <div class="card">
           <div class="imgBx">
              <img src="images/f3.png" alt="images">
           </div>
           <div class="details">
              <h2> FLIGHTS<br><span>CHEAPEST PRICES</span></h2>
            </div>
        </div>
    </div>
</section>

<!-- packages section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p>We have lots of affordable hotels for you all over the world!! So what are you waiting for, Just Enjoy Your Life WITHOUT SPENDING MUCH.</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <p>You will get all kinds of food and drinks like Mexican, Indian, Chinese, Italian... at very reasonable prices.</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>safty guide</h3>
            <p>Travelling with us has never been safer. We always ensure our customers are secure and practice caution and safeguarding measures when travelling.</p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>around the world</h3>
            <p>When it comes to destinations, the only limit is your imagination as we have expanded our services to being able to fly customers anywhere they want in the world.</p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>fastest travel</h3>
            <p>Long, tedious flights not your thing? No worries! Some of the fastest flights we have can take you to a luxury, serene location in just one hour!</p>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>adventures</h3>
            <p>Life is too short to not take the opportunity of having an adventure when it comes along and we can guarantee you will never regret your decision.</p>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/g-1.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn1">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-2.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn1">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-3.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn1">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-4.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn1">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-5.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn1">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-6.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn1">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-7.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn1">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-8.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn1">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-9.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn1">see more</a>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->


<!-- contact section starts  -->

<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="subject">
            </div>
            <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="send message">
        </form>

    </div>
    
</section>

<!-- contact section ends -->

<!-- brand section  -->
<section class="brand-container">

    <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/1.jpg" alt="" width="100" 
                height="100"></div>
            <div class="swiper-slide"><img src="images/2.png" alt="" width="200" 
                height="100"></div>
            <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
        </div>
    </div>

</section>

<!-- footer section  -->

<section class="footer">

    <div class="header20"><h1>Contact Us</h1></div>
<br>
<br>
<br>
<div class="contact-info" id="con">
    <div class="car">
        <img src="img/email1.png" class="car-icon" alt="" width="80px" height="80px">
      <!-- <em class="car-icon fas fa-envelope"></em> -->
      <p>Email id</p>
      <p>2021pietcamanish027@poornima.org</p>
      <p>2021pietcapuneet038@poornima.org</p>
    </div>

    <div class="car">
        <img src="img/phone.jpg " class="car-icon" alt="" width="80px" height="80px">

      <!-- <em class="car-icon fas fa-phone"></em> -->
      <p>Contact No:</p>
      <p>9509471583</p>
      <p>8824359940</p>
    </div>

    <div class="car">
        <img src="img/location.png" class="car-icon" alt="" width="80px" height="80px">

      <!-- <em class="car-icon fas fa-map-marker-alt"></em> -->
      <p>Address</p>
      <p>PIET, Jaipur</p>
    </div>
  </div>

</section>
















<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>
