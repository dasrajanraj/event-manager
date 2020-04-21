<!DOCTYPE html>
<html>
<head>
    <title></title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
   <style type="text/css">
       .container{
            border:#e5e5e5;
            max-width: 200px;
            margin-left: 2px;
            margin-top:15px;
            font-family: 'Pacifico', cursive;
            font-size: 20;
            background-color: #ffe6e6;
            line-spacing: 5px;
      
       }
       .inro{
           letter-spacing:2px;
            font-size:25px;
       }
       a{
            position:relative;
            left:900px;
            font-family: Arial;
            font-size: 25;
            margin-top:2px;
       }
       body
       {
            background-image: radial-gradient(circle, #c8d1e0, #b6d3e6, #a0d6e6, #8bd9dd, #82dacb);
       }
       .home{
           postition: fixed;
           top: 1vh;
           right: 1vh;
           width: 50px;
           height: 20px;
           margin:10px 0;
           padding: 10px 5px;
           border: 2px solid black;
           border-radius: 20px;
        text-decoration: none;
       }
       .home:hover{
           background-color: #6593F5;
           font-weight: bolder;
           text-decoration:none:
       }
   </style>
</head>
<body>
    <a class="home" href="./index.php">HOME</a>
<?php
    require_once('connection.php');
    session_start();
    if(!isset($_SESSION['email'])){
        header("Location:log_reg.php");
    }
    if(isset($_SESSION['email']))
    {
        echo "<font size='18' face='Arial'>";
        echo  'Welcome,'  ,$_SESSION['email'];
        echo "</font>";
        echo "<p><a href='logout.php?logout'>Logout</a></p><br>";
        $email = $_SESSION['email'];
        $sql = "SELECT e.eventname, e.eventdate, e.eventvenue FROM reg_event r , events e where r.event_id = e.event_id and r.email ='$email'";
        $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
        if(mysqli_num_rows($resultset)>0) {



        while( $record = mysqli_fetch_assoc($resultset) ) { ?>
            <div class="container">
                <div class="card hovercard ">
                    <div class="cardheader">
                    <div class="card-body info">
                    <div class="title">
                    <div class="inro"><?php echo $record['eventname']; ?></div>
                    </div>
                    </div>

                    <div class="desc"><?php echo 'Date: ' ,$record['eventdate']; ?></div>
                    <div class="desc"><?php echo 'Venue:',$record['eventvenue']; ?></div>
                    </div>
                </div>
            </div>
        </div>
<?php }}} ?>


</body>
</html>






    