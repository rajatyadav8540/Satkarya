<!DOCTYPE html>

<html>
    <head>
        <title>SATKARYA</title>
        <meta charset="UTF-8">
        <link href="img/logo.png" rel="icon"/>  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js" ></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="dsc.css">
        <style>
            body{
                
             background-color: rgba(0,255,191,.5);
            }
        </style>
    </head>
    <body >
       <?php 
       include 'header.php';
       
       ?>
        <div class="panel panel-primary" style="margin-left:500px; margin-right: 500px;margin-top: 150px;">
            <div class="panel-heading">
                <h1>login</h1>
            </div>
            <div class="panel-body">
                <form action="loginsub.php" method="post">
                    <div>
                        <input type="email" name="username" placeholder="username" class="form-control"><br>
                        <input type="password" name="password" placeholder="password" class="form-control"><br>
                    <button class="btn btn-primary">login</button>
                    </div>
                </form>
                <div class="panel-footer">
                    <p>Don't have account?<a href='signup.php'>Register</a></p>
                </div>
            </div>
         </div>
        <!-- footer -->
                 <div >
            <div id="footer">
					<div id="content">
						<div id="content1">
							<p style="color:white; font-size:25px; margin-top:30px;margin-left:20px;">Important Links</p>
							<nav>
								<ul>
								<li><a href='http://recb.ac.in/' target="_blank">Rajkiya Engineering College</a></li>
								<li><a href="https://aktu.ac.in/" target="_blank">Uttar Pradesh Technical University</a></li>
								</ul>
							</nav>
						</div>
                                         
						<div id="content4">
							<p style="color:white; font-size:25px; margin-top:30px;margin-left:20px;">Google Maps</p>
                                                        <a href="https://www.google.com/maps/place/Rajkiya+Engineering+College+Bijnor/@29.1362073,78.2205127,12.83z/data=!4m12!1m6!3m5!1s0x390b96ff929daa1b:0x6f84c5006226847c!2sRajkiya+Engineering+College+Bijnor!8m2!3d29.1322062!4d78.2465653!3m4!1s0x390b96ff929daa1b:0x6f84c5006226847c!8m2!3d29.1322062!4d78.2465653" target="_blank"><img src="img/map.png" height="130px"/></a>
						</div>
						<div id="content5">
							<p style="color:white; font-size:25px; margin-top:30px;margin-left:20px;">Contact Us</p>
							<p>Rajkiya Engineering College
							Chandpur, Bijnor
							UP-246725
							dscrecbijnor@gmail.com
							</p>
						</div>
					</div>
					<div id="last">
						<div class="social"><a href="https://www.facebook.com/dscrecbijnor/" target="_blank"><img src="img/facebook.ico" height="25px" width="25px"></a></div>
						<div class="social"><a href="https://www.instagram.com/dscrecbijnor/?igshid=b8dp92k5qnhu" target="_blank"><img src="img/insta.png" height="25px" width="25px"></a></div>
						<div class="social"><a href="https://twitter.com/DscRec" target="_blank"><img src="img/twitter.ico" height="25px" width="25px"></a></div>
						<div class="social"><a href="#" target="_blank"><img src="img/message.ico" height="25px" width="25px"></a></div>
						<span style="float:right;margin-top:15px;font-size:15px;font-family:arial;color:lightgrey; margin-right:30px;">&copy; 2019 <u>SATKARYA</u>- All Right Reserved</span>
					</div>
				</div>
			</div>
      
    </body>
</html>
