<?php


session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="U-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./Main.css"/>
        <script src="https://kit.fontawesome.com/ff42708c8d.js" crossorigin="anonymous"></script>
        <title>
            HARVESTING SUCCESS
        </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
       
    </head>
       <header class="header">
        <a href="#" class="logo"> <i class="fa-sharp fa-solid fa-tree-city"></i> HARVESTING SUCCESS</a>
        <nav class="navbar">
        <!DOCTYPE html>
<html>
<head>
<style>
.dropdown {
  position: relative;
  display: inline-block;
  font-size: 1.5rem;
  margin: 0 1rem;
  color: var(--black);
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 25px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>




<div class="dropdown">
  <span>Information</span>
  <div class="dropdown-content">
  <a href="#">info1</a>
  <a href="#">info2</a>
  <a href="#">info3</a>
  <a href="#">info4</a>
  </div>
</div>

</body>
</html>



            <a href="./review.php">Review</a>
            <a href="./contactus.php">contact us</a>
            <a href="./weather.php">Weather reports</a>
            
        </nav>
        <div class="icons">
            <a href="./profile.php" class="fas fa-user" id="login-btn"></a>
        </div>

</header>
<body>
<section class="home" id="home">
            <div class="content">
                <h3>Enjoy Exclusive</h3>
                <span>Welcome to the world of farming</span>
                <p>We're constantly bringing new properties market so keep visiting our website that you don’t miss out on the next opportunity.

                </p>

            </div>
            
        </section>
</body>
