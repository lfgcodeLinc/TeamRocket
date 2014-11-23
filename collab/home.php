<!DOCTYPE html>


<html>
<head>

<?PHP
require_once("./include/membersite_config.php");

if($fgmembersite->CheckLogin())
{
    echo "<meta http-equiv='refresh' content='0; url=login-home.php' />";
    
}

?>
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
	Co//ab is a new co-working, entrepreneurial and higher education experiential learning space. Co//ab is a 4,773 square foot collaborative workspace set in an urban environment for entrepreneurs, students, and industry to work together. Co//ab is located at 229 North Greene Street in Downtown Greensboro and is the result of a partnership between the Greensboro Partnership Entrepreneur Connection and Action Greensboro.<br/><br/>
				Co//ab will be a natural destination for early stage entrepreneurs to lease work space and create community. Co//ab serves as a satellite learning higher education meet up space for students and industry to connect, demo projects, swap ideas, and share best practices.<br/><br/>
				Amenities include classroom space, meeting rooms, desks, coffee, and gigabit speed internet. The space will serve as the first North State fiber Internet business in downtown Greensboro. More information about the facilities and staff available at co//ab is available HERE
	<?php include 'siteincludes/bodyend.php';?>
	
		<!--end body-->

	<?php include 'siteincludes/footer.php';?>
	
	</body>




	</html>