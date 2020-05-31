<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SATKARYA</title>
    <link href="img/logo.png" rel="icon"/>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js" ></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="dsc.css">
        <script type="text/javascript" src="newjavascript.js"> </script>
    <style>
    
    </style>
</head>
<body>
        
   <?php
    include 'header.php';
    $join=$_SESSION['email'];
                    $nq="SELECT * FROM members WHERE email='$join'";
                    $nqr=mysqli_query($connection,$nq) or die(mysqli_error($connection));
                    $nqrfe=mysqli_fetch_array($nqr);
   ?>  
    <div class="jumbotron">
        
        <center> <h1 style="position: relative; top:35px;">Welcome <?php echo $nqrfe['Name'];?>!</h1></center>
        <button class="btn btn-primary" style="position: relative; right:10;"><a href="settings.php">UPDATE PROFILE</a></button>
    </div>
    <div style="margin-left: 100px; margin-right: 100px; border: 2px solid black;height: 300px; background-color: white; border-radius: 20px;">
        <center><h2><b>About You</b></h2></center>
        <h3><b>Name:</b><?php echo $nqrfe['Name'];?></h3>
        <h3><b>E-mail:</b><?php echo $nqrfe['email'];?></h3>
        <h3><b>School allotted:</b><?php echo $nqrfe['School allotted'];?></h3>
        <h3><b>Total Posts:</b>4</h3>
    </div>
    
    
</body>
</html>