<!DOCTYPE html>
<html>
<body>

<?php include 'siteincludes/header.php';?>
  <center>
  <?php include 'siteincludes/bodystart.php';?><center>


Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>

</center>
<?php include 'siteincludes/bodyend.php';?>
</center>
<?php include 'siteincludes/footer.php';?>


</html>