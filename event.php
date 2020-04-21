<!DOCTYPE html>
<html>
<head>
    <title>Events</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
   <style type="text/css">
       .container{
           margin: 20px;
           padding: 0 0px;
       }
       .one-edge-shadow {
             box-shadow: 0 8px 6px -6px black;
        }
       body
       {
           padding: 0 10vh;
            background-image: radial-gradient(circle, #c8d1e0, #b6d3e6, #a0d6e6, #8bd9dd, #82dacb);
       }
       .descpription{
           margin: 15px 10px;
           padding: 20px 10px;
           border: 1px solid green;
       }
       .btn-info{
           position:absolute;
           right: 10vh;
           bottom: 5px; 
           color:white;
           text-decoration:none;
       }
       a:visited {
        text-decoration: none;
        }
        .title{
            font-size:30px;
            letter-spacing: 2px;
            font-weight:bolder;
        }
        .isDisabled {
            color: currentColor;
            cursor: not-allowed;
            opacity: 0.5;
            text-decoration: none;
            pointer-events: none;
        }
        .home{
           postition: fixed;
           top: 5vh;
           right: 5vh;
           width: 50px;
           height: 20px;
           margin:10px 0;
           padding: 10px 5px;
           border: 2px solid black;
           border-radius: 20px;
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
    
    if(isset($_SESSION['email']))
    {
        echo "<font size='18' face='Arial'>";
        echo  'Event Catagories';
        echo "</font>";
        $sql = "SELECT event_id, eventname,eventdesc, eventdate,eventvenue FROM events";
        $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
        if(mysqli_num_rows($resultset)>0) {



        while( $record = mysqli_fetch_assoc($resultset) ) { ?>
            <div class="container one-edge-shadow">
                <div class="card hovercard ">
                    <div class="cardheader">
                        <div class="card-body info">
                        <div class="title">
                            <div class="inro"><?php echo $record['eventname']; ?></div>
                        </div>
                    <div class="descpription"><?php echo $record['eventdesc']; ?></div>
                    <div class="desc"><?php echo 'Date: ' ,$record['eventdate']; ?></div>
                    <div class="desc"><?php echo 'Venue:',$record['eventvenue']; ?></div><br>
                    <?php
                        $eventid =$record['event_id'];
                         $email = $_SESSION['email'];
                        $sql1 = "SELECT r.event_id FROM reg_event r , events e where r.event_id = '$eventid 'and r.email ='$email'";
                         $resultset1 = mysqli_query($conn, $sql1) or die("database error:". mysqli_error($conn));
                         if(mysqli_num_rows($resultset1)>0) { ?>
                            <div> <a class='btn btn-info isDisabled' href="./event.php">Participated</a></div>
                         <?php }else{ ?>     
                              <div> <a class='btn btn-info' href="participate.php?event_id=<?php echo $record['event_id']?>">Participate</a></div>    
                         <?php } ?>
                </div>
            </div>
        </div>
        </div>
<?php }}} ?>


</body>
</html>
