<!--/*
 * Class row
 * Version information e.g. Rev 1
 *
 * @reference https://www.youtube.com/watch?v=6LVYe-rwHOc
 * @author Richard Feeney, X13742281
 *
 */ 
 
 /*
 * 
 * Version information e.g. Rev 1
 *
 * @reference https://ide.c9.io/richardfeeney/mywebproject15
 * @author Richard Feeney, X13742281
 *
 */ 
 -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title></title>
      
      <style>
      
            p {
               text-align:justify;
            }
         
      </style>
   <body>
      <div class="row">
         <div class="box">
            <div class="col-lg-12">
               <hr>
               <h2 class="intro-text text-center">
                  <strong>Register For Deals And Promotions</strong>
               </h2>
               <hr>
               <p>Here at FlyAway Travel we offer as much assistance to you as possible. We are always working and searching to find and create the best 
                  deals and promotions for our customers. Todays society has customers very busy, so this is why we now offer all customers a chance to sign
                  up and receive offeres and promotions. Customers that sign up will receive weekly emails from a member of staff that will outline what the 
                  offers are for that week.
               </br>
               </br>
                  Please fill in your details if you would like to receive updates about currect offers and promotions.</p>
               <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                  <div class="row">
                       <!--/ *
                         * @reference http://www.w3schools.com/html/html_forms.asp
                         * @author Richard Feeney, X13742281
                         *
                         */ 
                         -->
                        <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                           <input type="text" name="firstName" id="firstName" class="form-control input-sm" placeholder="First Name">
                        </div>
                     </div>
                     <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                           <input type="text" name="lastName" id="lastName" class="form-control input-sm" placeholder="Last Name">
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <input type="Cusemail" name="Cusemail" id="Cusemail" class="form-control input-sm" placeholder="Cusemail Address">
                  </div>
                  <input type="submit" value="Register" class="btn btn-info btn-block">
               </form>
            </div>
         </div>
      </div>
   </body>
  <!-- / *
    * @reference http://www.w3schools.com/html/html_forms.asp
    * @author Richard Feeney, X13742281
    *
    */ 
    -->
   <?php
      
      $conn = mysql_connect('localhost', 'root', '');
      $db   = mysql_select_db('c9');
      
      $firstName = mysql_real_escape_string( $_POST["firstName"] );
      $lastName = mysql_real_escape_string( md5($_POST["lastName"]) );
      $Cusemail = mysql_real_escape_string( md5($_POST["Cusemail"]) );
      
      $sql = "INSERT INTO RegisterNew VALUES('$firstName', '$lastName', '$Cusemail' )" ;
      
      if(mysql_query($sql) ) {
        echo "Inserted Successfully";
      }
      ?>
   </head>
</html>