<?php 
require_once('connection.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['email']) || empty($_POST['pword']))
       {
            header("location:log_reg.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $pword = mysqli_real_escape_string($conn,$_POST['pword']);
            $pword = md5($pword);
            $query="select * from users where email='".$email."' and pword='".$pword."'";
            $result=mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result))
            {   
                $_SESSION['email']=$_POST['email'];
                header("location:profile.php");
            }
            else
            {
                header("location:log_reg.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    elseif(isset($_POST['register']))
    { 
        if((empty($_POST['name']) || empty($_POST['email']) || empty($_POST['pword'])))
       {
            header("location:log_reg.php?Empty1=Please Fill in the Blanks");
       }
       else{
            $username = mysqli_real_escape_string($conn,$_POST['name']);
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $pword = mysqli_real_escape_string($conn,$_POST['pword']);
            $pword = md5($pword);
            if(mysqli_query($conn, "INSERT INTO users(username,email,pword) VALUES('$username','$email','$pword')")){
                header("location:log_reg.php?Empty1=Registered...Now Login...");
            } else{
                echo "<script>alert('problem try again...')</script>";
            }
        }
    }
    else{
        echo("Nothing to do");
    }

?>