<?php
    require_once('connection.php');
    session_start();
    if(!isset($_SESSION['email'])){
        header("Location:log_reg.php");
    }
    if(isset($_SESSION['email']))
    {
        $event_id = $_GET['event_id'];
        $email = $_SESSION['email'];
        if(mysqli_query($conn, "INSERT INTO reg_event(email,event_id) VALUES('$email','$event_id')")){
            header("location:profile.php");
        }
        else{
            echo "<script>alert('problem try again...')</script>";
        }
    }
?>