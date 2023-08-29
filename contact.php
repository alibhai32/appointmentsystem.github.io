<!DOCTYPE html>
<html lang="en">
   <?php
   $servername="localhost";
   $username="root";
   $password="";
   $dbname="registration";
   $conn=new mysqli($servername,$username,$password,$dbname);

   if($conn->connect_error){
      die("connection failed".$conn->connect_error);
   }else{
      // echo "connected";
   }
  ?>
<head>
    <!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Contact</title>
    <!-- Site Icons -->
<link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- Colors CSS -->
<link rel="stylesheet" href="css/colors.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">
<!-- Modernizer for Portfolio -->
<script src="js/modernizer.js"></script>
<!-- [if lt IE 9] -->
</head>
<body class="clinic_version">
    <div class="header-top wow fadeIn">
    <div style="margin-left: 38%">
        <div class="header-info">
          <a class="navbar-brand"><img src="images/logo.png"></a>
           </div>
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d108926.18067426767!2d72.96740746249996!3d31.44323210000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392269efae37a089%3A0xaf3c8d78fcf078f2!2sAziz%20Fatimah%20Hospital%20(AFH)!5e0!3m2!1sen!2s!4v1657696986163!5m2!1sen!2s"
       width="100%" height="450" style="border:0;"></iframe>
     <footer id="footer" class="footer-area wow fadeIn">
        <div class="container">
           <div class="row">
              <div class="col-md-4">
                 <div class="logo padding">
                    <a href=""><img src="images/logo.png"></a>
                    <p>Locavore pork belly scen ester pine est chill wave microdosing pop uple itarian cliche artisan.</p>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="footer-info padding">
                    <h3>CONTACT US</h3>
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> Millat Chowk NurPur Faisalabad</p>
                    <p><i class="fa fa-paper-plane" aria-hidden="true"></i> noumanali6303@gmail.com</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> (+92) 316 7739886</p>
                 </div>
              </div>
              <div class="col-md-4">
                <div class="footer-info padding">
                   <h3>More About</h3>
                   <p><i class="fa fa-youtube" aria-hidden="true"></i>Nouman Ali youtube Channel</p>
                   <p><i class="fa fa-facebook" aria-hidden="true"></i>Alibahi786</p>
                </div>
             </div>
           </div>
        </div>
     </footer>
     <div class="copyright-area wow fadeIn">
        <div class="container">
           <div class="row">
              <div class="col-md-8">
                 <div class="footer-text">
                    <p>© 2022 Lifecare. All Rights Reserved.</p>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="social">
                    <ul class="social-links">
                       <li><a href=""><i class="fa fa-facebook"></i></a></li>
                       <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                       <li><a href=""><i class="fa fa-youtube"></i></a></li>
                    </ul>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- end copyrights -->

     <!-- all js files -->
     <script src="js/all.js"></script>
     <!-- all plugins -->
     <script src="js/custom.js"></script>
     <!-- map -->
</body>
</html>