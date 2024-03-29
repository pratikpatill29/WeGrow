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
  background-color: #ffffff;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 25px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

:root{
    --orange:#130f40;
    --black:#130f40;
    --light-colour:#666;
    --box-shadow:0  .5rem 1rem rgba(0,0,0,.1);
    --border:2rem solid rgba(0,0,0,.1);
    --outline:1rem solid rgba(0,0,0,.1);
    --outline-hover:1.5rem solid var(--black);

}
*{
    font-family: 'Poppins',sans-serif;
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: all .2s linear;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
    scroll-padding-top: 7rem;
}

section{
    padding: 2rem 9%;
}
.header{
    position:fixed;
    top:0; left: 0; right: 0;
    z-index: 1000;
    display:flex;
    align-items: center;
    justify-content: space-between;
    padding: 2rem 9%;
    background: #fff;
    box-shadow: var(--box-shadow);
    
}

.header .logo{
    font-size: 2.5rem;
    font-weight: bolder;
    color: var(--black);
}
.header .logo i{
    color: var(--black);
}
.header .navbar a{
    font-size: 1.5rem;
    margin: 0 1rem;
    color: var(--black);
}
.header .navbar a:hover{
    color: red;
}
.header .icons  div{
    height: 4.5rem;
    width: 4.5rem;
    line-height: 4.5rem;
    border-radius: .5rem;
    background: #eee;
    color: #130f40;
    font-size: 2rem;
    margin-left: .3rem;
    text-align: center;
    cursor: pointer;
}
.header .icons div:hover{
    background: red;
    color: #fff;
}

.header .icons  a{
    height: 4.5rem;
    width: 4.5rem;
    line-height: 4.5rem;
    border-radius: .5rem;
    background: #eee;
    color: #130f40;
    font-size: 2rem;
    margin-left: .3rem;
    text-align: center;
    cursor: pointer;
}
.header .icons a:hover{
    background: red;
    color: #fff;
}
.home{
    display: flex;
    align-items: center;
    min-height: 100vh;

    background-size: cover;
    background-position: center;
}
.home .content{
    max-width: 50rem;
}
.home .content h3{
    font-size: 6rem;
    color: white;

}
.home .content span{
    font-size: 3.5rem;
    color: rgb(20, 220, 20);
    padding:1rem 0;
    line-height: 1.5;
    
}

.home .content p{
    font-size: 1.7rem;
    color: #999;
    padding:1rem 0;
    line-height: 1.5;
    
}
@import url('https://fonts.googleapis.com/css?family=Exo:400,700');

*{
    margin: 0px;
    padding: 0px;
}

body{
    font-family: 'Exo', sans-serif;
}


.context {
    width: 100%;
    position: absolute;
    top:50vh;
    
}

.context h1{
    text-align: center;
    color: #24aa09;
    font-size: 50px;
}
.context h2{
    text-align: center;
    color: #f77a05;
    font-size: 50px;
}

.area{
    background: #7ed463;  
    background: -webkit-linear-gradient(to left, #6fa058, #4e8341);  
    width: 100%;
    height:100vh;
    
   
}

.circles{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.circles li{
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px;
    background: rgba(255, 255, 255, 0.2);
    animation: animate 25s linear infinite;
    bottom: -150px;
    
}

.circles li:nth-child(1){
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
}


.circles li:nth-child(2){
    left: 10%;
    width: 20px;
    height: 20px;
    animation-delay: 2s;
    animation-duration: 12s;
}

.circles li:nth-child(3){
    left: 70%;
    width: 20px;
    height: 20px;
    animation-delay: 4s;
}

.circles li:nth-child(4){
    left: 40%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}

.circles li:nth-child(5){
    left: 65%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
}

.circles li:nth-child(6){
    left: 75%;
    width: 110px;
    height: 110px;
    animation-delay: 3s;
}

.circles li:nth-child(7){
    left: 35%;
    width: 150px;
    height: 150px;
    animation-delay: 7s;
}

.circles li:nth-child(8){
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 15s;
    animation-duration: 45s;
}

.circles li:nth-child(9){
    left: 20%;
    width: 15px;
    height: 15px;
    animation-delay: 2s;
    animation-duration: 35s;
}

.circles li:nth-child(10){
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}



@keyframes animate {

    0%{
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }

    100%{
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
    }

}

</style>
</head>
<body>




<div class="dropdown">
  <span>Information</span>
  <div class="dropdown-content">
  <a href="./cropinfo.php">CROP</a>
  <a href="./machineryinfo.php">MACHINERY</a>
  <a href="./fertilizersinfo.php">FERTILIZERS</a>

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
  <!-- partial:index.partial.html -->
<div class="context">
  <h1>WELCOME</h1>
  <h2>TO HARVESTING SUCCESS</h2>
</div>


<div class="area" >
      <ul class="circles">
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
      </ul>
</div >
<!-- partial -->
<script  src="./script.js"></script>

</body>
