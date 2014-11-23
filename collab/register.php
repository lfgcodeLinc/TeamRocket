<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->RegisterUser())
   {
        $fgmembersite->RedirectToURL("thank-you.html");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Contact us</title>
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <link rel="STYLESHEET" type="text/css" href="style/pwdwidget.css" />
    <script src="scripts/pwdwidget.js" type="text/javascript"></script>      
</head>
<body>
<?php include 'siteincludes/header.php';?>
  <center>
  <?php include 'siteincludes/bodystart.php';?><center>
<!-- Form Code Start -->
<div id='fg_membersite'>
<form id='register' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Register</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='short_explanation'>* required fields</div>
<input type='text'  class='spmhidip' name='<?php echo $fgmembersite->GetSpamTrapInputName(); ?>' />

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='username' >UserName (Enter your email address)*:</label><br/>
    <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
    <span id='register_username_errorloc' class='error'></span>
</div>
<div class='container' style='height:80px;'>
    <label for='password' >Password*:</label><br/>
    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
    <noscript>
    <input type='password' name='password' id='password' maxlength="50" />
    </noscript>    
    <div id='register_password_errorloc' class='error' style='clear:both'></div>
</div>
<div class='container'>
    <label for='name' >Name*: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $fgmembersite->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='phnumber' >Phone Number*: </label><br/>
    <input type='text' name='phnumber' id='phnumber' value='<?php echo $fgmembersite->SafeDisplay('phnumber') ?>' maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='street' >Street*: </label><br/>
    <input type='text' name='street' id='street' value='<?php echo $fgmembersite->SafeDisplay('street') ?>' maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='city' >City*: </label><br/>
    <input type='text' name='city' id='city' value='<?php echo $fgmembersite->SafeDisplay('city') ?>' maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='memState' >State*: </label><br/>
    <input type='text' name='memState' id='memState' value='<?php echo $fgmembersite->SafeDisplay('memState') ?>' maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='zip' >Zip*: </label><br/>
    <input type='text' name='zip' id='zip' value='<?php echo $fgmembersite->SafeDisplay('zip') ?>' maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='memType' >Type of Member*: </label><br/>
	    <input type='text' name='memType' id='memType' value='<?php echo $fgmembersite->SafeDisplay('memType') ?>' maxlength="50" /><br/>
<!--
	<select>
  <option id='memType' value='<?php echo $fgmembersite->SafeDisplay('memType') ?>' maxlength="50">Student</option>
  <option id='memType' value='<?php echo $fgmembersite->SafeDisplay('memType') ?>' maxlength="50">Entrepreneur</option>
  <option id='memType' value='<?php echo $fgmembersite->SafeDisplay('memType') ?>' maxlength="50">Admin</option>
</select>
-->
    <span id='register_name_errorloc' class='error'></span>
</div>

<div class='container'>
    <label for='sec1' >Security Question 1*: </label><br/>
    <input type='text' name='sec1' id='sec1' value='<?php echo $fgmembersite->SafeDisplay('sec1') ?>' maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='ans1' >Answer 1*: </label><br/>
    <input type='text' name='ans1' id='ans1' value='<?php echo $fgmembersite->SafeDisplay('ans1') ?>' maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='sec2' >Security Question 2*: </label><br/>
    <input type='text' name='sec2' id='sec2' value='<?php echo $fgmembersite->SafeDisplay('sec2') ?>' maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='ans2' >Answer 2*: </label><br/>
    <input type='text' name='ans2' id='ans2' value='<?php echo $fgmembersite->SafeDisplay('ans2') ?>' maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='sec3' >Security Question 3*: </label><br/>
    <input type='text' name='sec3' id='sec3' value='<?php echo $fgmembersite->SafeDisplay('sec3') ?>' maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='ans3' >Answer 3*: </label><br/>
    <input type='text' name='ans3' id='ans3' value='<?php echo $fgmembersite->SafeDisplay('ans3') ?>' maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>

<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>

</fieldset>
</form>

<script type='text/javascript'>

    var pwdwidget = new PasswordWidget('thepwddiv','password');
    pwdwidget.MakePWDWidget();
    
    var frmvalidator  = new Validator("register");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide first name");
	
    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("username","req","Please provide a username");
    
    frmvalidator.addValidation("password","req","Please provide a password");

</script>
<?php include 'siteincludes/bodyend.php';?>
</center>
<!--
Form Code End (see html-form-guide.com for more info.)
-->
<?php include 'siteincludes/footer.php';?>
</body>

</html>