<?php
    require_once('connection.php');
    session_start();

    if(isset($_SESSION['User']))
    {
        echo "<font size='18' face='Arial'>";
        echo  'Welcome,'  ,$_SESSION['User'];
        echo "</font>";
        echo '<a href="logout.php?logout">Logout</a>';
        $sql = "SELECT id, name,date,time,venue FROM cards";
        $resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
        if(mysqli_num_rows($resultset)>1) {



        while( $record = mysqli_fetch_assoc($resultset) ) { ?>
            <div class="container">
                <div class="card hovercard ">
                    <div class="cardheader">
                    <div class="card-body info">
                    <div class="title">
                    <div class="inro"><?php echo $record['name']; ?></div>
                    </div>
                    </div>

                    <div class="desc"><?php echo 'Date ' ,$record['date']; ?></div>
                    <div class="desc"><?php echo 'Time' ,$record['time']; ?></div>
                    <div class="desc"><?php echo 'Venue:',$record['venue']; ?></div>
                    </div>
                </div>
            </div>




<?php }}} ?>

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
        position: fixed;
        font-family: 'Pacifico', cursive;
        font-size: 20;
        background-color: #ffe6e6;
      
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
   </style>
</head>
<body>

</body>
</html>






    