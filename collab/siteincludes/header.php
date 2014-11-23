	<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./siteincludes/main.css">

</head>



	<table id="head">
		<tr><td>
			<center><h1 id="title">co//ab</h1></center>
			<ul>
				<li><a id="head" href="./home.php">Home</a></li>
				<li><a id="head" href="./moreinformation.php">More Information</a></li>
<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    echo "<li id='userInfo'><a id='userInfo' href='./login.php'> Login </a> <br/> <a id='userInfo2' href='./register.php'> Register now</a></li>";
    
}
else{
	echo '<li><a id="head" href="./view-sched-cal.php">My Schedule Calendar</a></li>';
			
	echo "<li id='userInfo'> Hello, " . $fgmembersite->UserFullName() .  "<a id='userInfo' href='./logout.php'> Logout </a> </li>";
}

?>



			</ul>




		</td></tr>
	</table>
	<!--end head-->
	<br/><br/><br/>