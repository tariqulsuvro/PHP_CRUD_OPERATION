<!-- WE WILL CONNECT THE DATABASE IS THIS FILE -->
<?php
     
     //Connect and provide Database Cerdentials
     $db = mysqli_connect("localhost","root","","ssb280"); 
                         //server name, user name, password, database name

     if ( $db ){
     	//echo "Database connected successfully";
     }
     else {
     	die("MySQLi Connectiopn Failed." . mysqli_error($db));
     }

     

?> 