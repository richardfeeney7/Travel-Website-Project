<?php
    if ( function_exists( 'mail' ) )
    {
        echo 'mail() is available';
    }
    else
    {
        echo 'mail() has been disabled';
    } 
    
   phpinfo();
   
   $headers = 'From: deanbrennan89@hotmail.com';
   mail('deanbrennan89@hotmail.com', 'Test email using PHP', 'This is a test email message', $headers, '-deanbrennan89@hotmail.com');


?>