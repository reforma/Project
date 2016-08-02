<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
      <?php
          //Connect to DB
          mysql_connect("ETS.sdf")or die (mysql_error());

          //select the db
          mysql_select_db("ETS.sdf")or die (mysql_error());

          //sql query
          $strSQL = "select * from parts";

          //execute the query (the records are in the variable to the right) 
          $rs = mysql_query($strSQL);

          // loop the recordset $rs
          //Each row will be made into an array 
          while($row = mysql_fetch_array($rs)){
              echo $row['firstName']."<br />";
          
          }
          //close the database connection
          mysql_close();
      ?>  
    </body>
</html>
