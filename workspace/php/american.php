<!-- *
    * Version information e.g. Rev 1
    *
    *
    * @reference https://ide.c9.io/richardfeeney/mywebproject15
    * @author Richard Feeney, X13742281
    *
    */ 
    -->
<?php
   mysql_connect('localhost', 'root', ''); //Connect to database by root and no pw
   
   mysql_select_db('c9'); //Selects the database in phpmyadmin
   
   $sql = "SELECT * FROM american"; //selects all from stadium db
   
   $records = mysql_query($sql);
   
   ?>
<html>
   <head>
      <title></title>
   </head>
   <body>
      <table width ="400px" border="1" cellpadding="1" cellspacing="1">
         <tr>
            <th>Country</th>
            <th>City</th>
            <th>Date</th>
            <th>Price (pp)</th>
         </tr>
         <?php
            while ($american = mysql_fetch_assoc($records)) { //w3schools, youtube
                
                echo "<tr>";
                
                echo "<td>" . $american['country'] . "</td>";
                /* All the html code sets up a table for the contents of the db */
                echo "<td>" . $american['city'] . "</td>";
                
                echo "<td>" . $american['date'] . "</td>";
                 
                echo "<td>" . $american['price'] . "</td>";
                
                echo "</tr>";
            }
            ?>
      </table>
   </body>
</html>