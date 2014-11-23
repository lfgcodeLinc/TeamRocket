<!DOCTYPE html>


<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" media="only screen and (max-width: 480px), only screen and (max-device-width: 800px)" href="mobile.css" />
	<title>Co//ab Entrepreneurial Workspace</title>
</head>



<body>
	<!--head-->
	<!--

	<table id="head">
		<tr><td>
			<center><h1 id="title">co//ab</h1></center>
			<ul>
				<li><a id="head" href="home.html">Home</a></li>
				<li><a id="head" href="moreinformation.html">More Information</a></li>
				<li><a id="head" href="calendar.html">Calendar</a></li>
			</ul>
		</td></tr>
	</table>-->
	<?php include 'siteincludes/header.php';?>
 
	<!--end head-->
	
  
	<!--body-->
	<?php include 'siteincludes/bodystart.php';?>

	<?php echo "You have registered an event for " . $_GET["month"] . "/" . $_GET["day"] . "/" . $_GET["year"] . " at Desk " . (2+$_GET["num"]) . ". <br/><br/><a href=./availability.php?" . $_GET["month"] . "&day=" . $_GET["day"] . "&year=" . $_GET["year"] . "&num=" . $_GET["num"]."> Click here to view your events</a>";?>


	<?php include 'siteincludes/bodyend.php';?>
	
		<!--end body-->

	<?php include 'siteincludes/footer.php';?>
	
	</body>




	</html>