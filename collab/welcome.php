<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
 if($fgmembersite->Login())
 {
  $fgmembersite->RedirectToURL("login-home.php");
}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
  <title>Login</title>
  <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
  <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <script type='text/javascript' src='scripts/snap.svg.js'></script>
</head>
<body>
  
  var draw = Snap(800, 600);

// create image
var image = draw.image('http://www.svgjs.com/images/shade.jpg', 
                       0, -150, 600, 600);

// create text
var text = draw.text(0,120, 'http://localhost/dir/TeamRocket/Media/collabRoom.svg');

text.attr({
  fontFamily: 'Source Sans Pro',
  fontSize: 120,
  textAnchor: 'left'
});

// clip image with text
image.attr('clip-path', text);

<!--
Form Code End (see html-form-guide.com for more info.)
-->
<?php include 'siteincludes/footer.php';?>
</body>
</html>