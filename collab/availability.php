<?PHP
require_once("./include/membersite_config.php");

//echo "month:" . $_GET["month"] . "day:" . $_GET["day"] . "Year:" . $_GET["year"];

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>
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
  <?php include 'siteincludes/header.php';?>
  <center>
  <?php include 'siteincludes/bodystart.php';?><center>
<div id='fg_membersite_content'>
<h1>Events at Co//ob</h1>
<h2>November 23, 2014</h2> <!--<?PHP echo $fgmembersite->UserFullName(); ?>!-->
<br>

<!DOCTYPE html>
<html>
<body>

<table id="t01">
  <tr>
	<th>Event</th>
    <th>Facility</th>
    <th>Start Time</th>
	<th>End Time</th>	
    <th>Attendies</th>
  </tr>
  <tr>
    <td>Idea Slam</td>
    <td>Large Classroom</td>
	<td>5:00</td>
	<td>6:30</td>
    <td>25</td>
  </tr>
  <tr>
    <td>Pitch Proposal</td>
    <td>Clinic Space</td>
	<td>7:00</td>
	<td>8:00</td>
    <td>15</td>
  </tr>
  <tr>
    <td>Shart Tank Greensboro</td>
    <td>Large Classroom</td>
	<td>8:30</td>
	<td>9:30</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Practice ACT Testing</td>
    <td>Desk 1</td>
	<td>12:30</td>
	<td>4:30</td>
    <td>1</td>
  </tr>
  <tr>
    <td>Practice ACT Testing</td>
    <td>Desk 8</td>
	<td>12:30</td>
	<td>4:30</td>
    <td>1</td>
  </tr>
  <tr>
    <td>Practice ACT Testing</td>
    <td>Desk 17</td>
	<td>12:30</td>
	<td>4:30</td>
    <td>1</td>
  </tr>
  <tr>
    <td>Practice ACT Testing</td>
    <td>Desk 24</td>
	<td>12:30</td>
	<td>4:30</td>
    <td>1</td>
  </tr>
</table>

</body>
</html>


</div>
</center>
<?php include 'siteincludes/bodyend.php';?>
</center>
<!--
Form Code End (see html-form-guide.com for more info.)
-->
<?php include 'siteincludes/footer.php';?>
</body>
</html>
