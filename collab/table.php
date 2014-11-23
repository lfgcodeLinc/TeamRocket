<!DOCTYPE HTML>
<html>
  <body>

    <?php include 'siteincludes/header.php';?><center>
    <?php include 'siteincludes/bodystart.php';?><center>

    <?php
      $host     = "localhost";
      $username = "admin";
      $password = "admin123";
      $database = "collab";

      // Create connection
      $connection = new mysqli($host, $username, $password, $database);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT EventID, Month, Day, Year, FacilitiesID, UserID, TimeStart, TotalTime FROM events";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          echo "<table><tr>
              <th>EventID</th>
              <th>Month</th>
              <th>Day</th>
              <th>Year</th>
              <th>FacilitiesID</th>
              <th>Beginning Time</th>
              <th>Ending Time</th>
              <th>UserID</th>
              </tr>";
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "<tr><td>".$row["EventID"]."</td><td>".$row["Month"]." ".$row["Day"]." ".$row["Year"]."</td><td>".$row["TimeStart"]." ".$row["TotalTime"]."</td><td>".$row["FacilitiesID"]."</td><td>".$row["UserID"]."</td></tr>";
          }
          echo "</table>";
      } else {
          echo "0 results";
      }
      $conn->close();
    ?>
  </body>
</html>
