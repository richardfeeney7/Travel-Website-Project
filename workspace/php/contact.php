<!--
   /*
    * Version information e.g. Rev 1
    *
    * @reference https://www.youtube.com/watch?v=6LVYe-rwHOc
    * @author Richard Feeney, X13742281
    *
    */ 
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

   <head>
   </head>
   <title></title>
   <body>
      <!--
      /*
       * @reference https://www.youtube.com/watch?v=6LVYe-rwHOc
       * @author Richard Feeney, X13742281
       *
       */ 
      -->
      <?php
         $from="richardfeeney7@gmail.com";
         $to="richardfeeney7@gmail.com";
         $subject = "Contact Details";
         
         $name = Trim(stripslashes($_POST['name']));
         $email = Trim(stripslashes($_POST['email']));
         $message = Trim(stripslashes($_POST['message']));
         $number = Trim(stripslashes($_POST['number']));
         
         $body ="";
         $body .="Name : ";
         $body .=$name;
         $body .="\n";
         
         
         $body .="Email : ";
         $body .=$email;
         $body .="\n";
         
         
         $body .="Phone Number : ";
         $body .=$number;
         $body .="\n";
         
         
         $body .="Message : ";
         $body .=$message; 
         $body .="\n";
         
         
         $go = mail($to, $subject, $body, "From:<$from>");
         
         if($go){
             print("Sucessful!");
             header("Location: ../contactPage.php?err=Sucessful!");
         }
          else{   
             print("Unable to send!");
             print("Location: ../contactPage.php?err=Unable to send!");
         }
         ?>
   </body>
</html>