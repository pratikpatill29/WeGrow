<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:contactus.php?error');
       }
       else
       {
           $to = "21102180.pranav.patil@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:contactus.php?success");
           }
       }
    }
    else
    {
        header("location:contactus.php");
    }
?>