<?php 

    if(isset($_POST['btn-send']))
    {
       $Name = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($Name) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:assets\vendor\php-email-form\index.php?error');
       }
       else
       {
           $to = "bhansali.1@iitj.ac.in";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:assets\vendor\php-email-form\index.php?success");
           }
       }
    }
    else
    {
        header("location:assets\vendor\php-email-form\index.php");
    }
?>