<!DOCTYPE html>
<html>

<body>
  <?php

  // Set connection variables
  $host     = 'localhost';
  $username = 'admin';
  $database = 'collab';
  $password = 'admin123';

  // Connect to host
  $connection = mysqli_connect($host, $username, $password, $database);
  // Check connection
  if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }


  $sql = "SELECT * FROM User";
  query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["UserID"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $connection->close();



  ?>

</body>
</html> 
