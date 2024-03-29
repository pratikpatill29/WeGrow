<?php
require_once "config.php";

$username = $password = $email =  $confirm_password = $Location = "";
$username_err = $password_err = $email_err = $confirm_password_err = $Location_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

// Check if username is empty
if(empty(trim($_POST["username"]))){
    $username_err = "Username cannot be blank";
}
else{
    $sql = "SELECT id FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt)
    {
        mysqli_stmt_bind_param($stmt, "s", $param_username);

        // Set the value of param username
        $param_username = trim($_POST['username']);

        // Try to execute this statement
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt) == 1)
            {
                $username_err = "This username is already taken,the id is already taken"; 
            }
            else{
                $username = trim($_POST['username']);
            }
        }
        else{
            echo "Something went wrong";
        }
    }
}

mysqli_stmt_close($stmt);


if(empty(trim($_POST['email']))){
  $email_err = "Please enter your email";
  }

  else{
    $email = trim($_POST['email']);
  } 


// Check for password
if(empty(trim($_POST['password']))){
$password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
$password_err = "Password cannot be less than 5 characters";
}
else{
$password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
$password_err = "Passwords should match";
}

if(empty(trim($_POST['Location']))){
  $Location_err = "Please enter your Location";
  }

  else{
    $Location = trim($_POST['Location']);
  } 

// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err)  )
{
$sql = "INSERT INTO users (username, email, password,Location) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);
if ($stmt)
{
    mysqli_stmt_bind_param($stmt, "ssss", $param_username, $param_email, $param_password, $param_Location);

    // Set these parameters
    $param_username = $username;
    $param_email = $email;
    $param_password = password_hash($password, PASSWORD_DEFAULT);
    $param_Location = $Location;
    
    // Try to execute the query
    if (mysqli_stmt_execute($stmt))
    {
        header("location: login.php");
    }
    else{
        echo "Something went wrong... cannot redirect!";
    }
}
mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>

<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title> Registration or Sign Up form in HTML CSS | CodingLab </title>-->
    <link rel="stylesheet" href="registration.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="" method="post"> 
      <div class="input-box">
        <input type="text" placeholder="Enter your username" name="username" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your email" name= "email" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" name="password" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" name="confirm_password" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Location" name="Location" required>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>
