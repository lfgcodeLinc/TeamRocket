<!DOCTYPE html>
<html>
    
	<body>
	<?php include 'siteincludes/header.php';?>
  <center>
  <?php include 'siteincludes/bodystart.php';?><center>
		<form action="welcome.php" id="welcome" method="post">
		<table border="0">
		<tbody>
		
		<tr>
		<td><label for="email">Email Address*:</label> </td>
		<td><input id="email" maxlength="45" name="email" type="text" /></td>
		</tr>

		<tr>
		<td><label for="firstname">First Name*: </label> </td>
		<td><input id="firstname" maxlength="45" name="firstname" type="text" /> </td>
		</tr>

		<tr>
		<td><label for="lastname">Last Name*: </label> </td>
		<td><input id="lastname" maxlength="45" name="lastname" type="text" /> </td>
		</tr>

		<tr>
		<td><label for="password">Password*:</label></td>
		<td><input id="password" maxlength="45" name="password" type="password" /></td>
		</tr>
		
		<tr>
		<td><label for="street">Street Address*:</label> </td>
		<td><input id="street" maxlength="45" name="street" type="text" /> </td>
		</tr>

		<tr>
		<td align="right"><input name="Submit" type="submit" value="Submit" /></td>
		</tr>

		</tbody></table>
		</form>
				</center>
<?php include 'siteincludes/bodyend.php';?>
</center>
<?php include 'siteincludes/footer.php';?>
	</body>
</html>