<!--/*
 * Classname row
 *
 * Version information e.g. Rev 1
 
 * @reference https://www.youtube.com/watch?v=6LVYe-rwHOc
 * @author Richard Feeney, X13742281
 *
 */ 
-->
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Contact - Business Casual - Start Bootstrap Theme</title>
      <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="css/business-casual.css" rel="stylesheet">
      <!-- Fonts -->
      <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
      <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style type="text/css">
         body{
         background-color: #525252;
         }
         .centered-form{
         margin-top: 60px;
         }
         .centered-form .panel{
         background: rgba(255, 255, 255, 0.8);
         box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
         }
      </style>
   </head>
   <body>
      <div class="brand">Fly Away Travels</div>
      <div class="address-bar">| Ballymun Dublin 11 | 01252547887</div>
      <p class ="address-bar" id="date/time"></p>
      <script>
         document.getElementById("date/time").innerHTML = Date();
      </script>
      <!-- Navigation -->
      <nav class="navbar navbar-default" role="navigation">
         <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
               <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                  <li>
                     <a href="index.html">Home</a>
                  </li>
                  <li>
                     <a href="packages.html">Packages</a>
                  </li>
                  <li>
                     <a href="deals.php">Deals</a>
                  </li>
                  <li>
                     <a href="comp.html">Competition</a>
                  </li>
                  <li>
                     <a href="contactPage.php">Contact </a>
                  </li>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </div>
         <!-- /.container -->
      </nav>
      <div class="container">
         <div class="row">
            <div class="box">
               <div class="col-lg-12">
                  <hr>
                  <h2 class="intro-text text-center">Contact
                     <strong>Fly Away Travels</strong>
                  </h2>
                  <hr>
               </div>
               <div class="col-md-8">
                  <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1189.8171725482932!2d-6.266307764815384!3d53.385591676112504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e0eff80519d%3A0x5e2adc236414b7f8!2sBallymun+Rd%2C+Dublin!5e0!3m2!1sen!2sie!4v1456323200725" width="750" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
               </div>
               <div class="col-md-4">
                  <p>Phone:
                     <strong> 01252547887</strong>
                  </p>
                  <p>Email:
                     <strong><a href="mailto:richardfeeney7@gmail.com">flyawaytravels5@gmail.com</a></strong>
                  </p>
                  <p>Address:
                     <strong>Ballymun Dublin 11</strong>
                  </p>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
         <?php include('php/indexReg.php');?>  <!-- Normal Load -->
         <!-- Contact form -->
         <div class="row">
            <div class="box">
               <div class="col-lg-12">
                  <hr>
                  <h2 class="intro-text text-center">
                     <strong>Contact us for more information</strong>
                  </h2>
                  <hr>
                  <p>Here at FlyAway travel we have a dedicated team that are happy and willing to answer any of your holiday questions. You can leave a message
                     and a member of staff will research the question that you asked and will call you back with their findings. 
                     </br>
                     </br>
                     Please leave your name, address and phone number along with a message. One of our experienced team members will call you back within 24 hours. We are happy to help you with anything you might need no matter how big or small.
                  </p>
                  <form role="form" action="php/contact.php" method="post"/>
                     <div class="row">
                        <div class="form-group col-lg-4">
                           <label>Name</label>
                           <input type="text" class="form-control" id="name" name="name" placeholder="Please enter your name">
                        </div>
                        <div class="form-group col-lg-4">
                           <label>Email Address</label>
                           <input type="email" class="form-control" id="email" name="email" placeholder="example@example.??">
                        </div>
                        <div class="form-group col-lg-4">
                           <label>Phone Number</label>
                           <input type="tel" class="form-control" id="number" name="number" placeholder="Please enter your Phone Number">
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-lg-12">
                           <label>Message</label>
                           <textarea class="form-control" rows="6" id="message" name ="message" placeholder="Please enter your message here"></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                           <input type="hidden" name="promo" value="yes">
                           <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- /.container -->
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <p>Fly Away Travels 2016</p>
               </div>
            </div>
         </div>
      </footer>
      <!-- jQuery -->
      <script src="js/jquery.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>