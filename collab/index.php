<!DOCTYPE html>
<html>

	<body>

<?php include 'siteincludes/header.php';?>
  <center>
  <?php include 'siteincludes/bodystart.php';?><center>

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

			// Select database (note: connection & database will be selected by default for rest of session)
			$sql = "SELECT Username FROM events";
			$result = $connection->query($sql);
<<<<<<< HEAD
			
			
			
=======

>>>>>>> origin/master
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
		</center>
<?php include 'siteincludes/bodyend.php';?>
</center>
<?php include 'siteincludes/footer.php';?>
	</body>
</html>
