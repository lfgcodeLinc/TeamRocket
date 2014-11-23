<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Events at co//ab</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
	  
	  <style>
		table {
			width:100%;
		}
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
		}
		th, td {
			padding: 5px;
			text-align: left;
		}
		table#t01 tr:nth-child(even) {
			background-color: #eee;
		}
		table#t01 tr:nth-child(odd) {
		   background-color:#fff;
		}
		table#t01 th	{
			background-color: black;
			color: white;
		}
	</style>

</head>

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
      if ($connection->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT EventName, EventID, Month, Day, Year, FacilitiesID, UserID, TimeStart, TotalTime FROM events";
      $result = $connection->query($sql);

      if ($result->num_rows > 0) {
          echo "<table>
			<tr>
			  <th>Event Name</th>
              <th>Event ID</th>
              <th>Date</th>
              <th>Beginning Time</th>
              <th>Ending Time</th>
			  <th>FacilitiesID</th>
              <th>UserID</th>
              </tr>";
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "<tr><td>".$row["EventName"]."</td><td>".$row["EventID"]."</td><td>".$row["Month"]."/".$row["Day"]."/".$row["Year"]."</td><td>".$row["TimeStart"]."</td><td>".$row["TotalTime"]."</td><td>".$row["FacilitiesID"]."</td><td>".$row["UserID"]."</td></tr>";
          }
          echo "</table>";
      } else {
          echo "0 results";
      }
      $connection->close();
    ?>
  </body>
</html>
