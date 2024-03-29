<?php
require_once "config.php"; 
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
 
<head>
    <link rel="stylesheet" href="profile.css">
    <link rel="preconnect"
        href="https://fonts.gstatic.com">
    <link href=
"https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap"
        rel="stylesheet">
</head>
 
<body>
    <div class="container">
        <div class="user-image">
            <img src=
"./profile-user2.jpg"
            alt="this image contains user-image">
        </div>
 
        <div class="content">
            <h3 class="name"><?php echo "Welcome ". $_SESSION['username']?></h3>

 
 
            <div class="links">
                <a class="facebook" href=
"https://www.facebook.com/geeksforgeeks.org/"
                    target="_blank" title="GFG_facebook">
                    <i class="fab fa-facebook"></i>
                </a>
 
                <a class="git" href=
"https://github.com/topics/geeksforgeeks"
                    title="GFG_github" target="_blank">
                    <i class="fab fa-github-square"></i>
                </a>
 
                <a class="linkedin" href=
"https://www.geeksforgeeks.org/tag/linkedin/"
                    title="GFG_linkedin" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
                 
                <a class="insta" href=
"https://www.instagram.com/geeks_for_geeks/?hl=en"
                    target="_blank" title="GFG_instagram">
                    <i class="fab fa-instagram-square"></i>
                </a>
            </div>
 
            <p class="details">
                Profile
            </p>
 
 
            <a class="effect effect-4" href="./logout.php">
                logout
            </a>
        </div>
    </div>
     
    <!-- This is link of adding small images
         which are used in the link section  -->
    <script src="https://kit.fontawesome.com/704ff50790.js"
        crossorigin="anonymous">
    </script>
</body>
 
</html>