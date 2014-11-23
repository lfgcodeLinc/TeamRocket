<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="main.css" >
  </head>

<body>

<?php
  // Set connection variables
  $host     = 'localhost';
  $username = 'admin';
  $database = 'collab';
  $password = 'admin123';

  // Connect to host
   $connection = mysql_connect($host, $username, $password)
           or die ("Error: could not connect to host ". $host. " " .mysql_error());

   // Select database (note: connection & database will be selected by default for rest of session)
   $db = mysql_select_db($database, $connection)
         or die ("Error: could not select database " . $database . " " . mysql_error());

?>

</body>

</html>
