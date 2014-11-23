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
	<script type="text/javascript">
	
	function on_load() {
		var id = document.getElementById("svg_4");
		alert("TEST" + id);
		id.setAttributeNS(null, 'style', 'fill:black')
	}
	
</script>
</head>
<body onload="on_load();">
  
<div id="toolbar" style="width: 640px; height: 480px; position: absolute; z-index: auto;"></div>
<svg width="640" height="479.99999999999994" 
xmlns="http://www.w3.org/2000/svg" 
xmlns:svg="http://www.w3.org/2000/svg">
 <!-- Created with SVG-edit - http://svg-edit.googlecode.com/ -->
 <g>
  <title>Layer 1</title>
  <rect  onclick="on_load();" stroke="#000000" id="svg_4" height="277.666645" width="101.000007" y="198.666691" x="535.999995" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#ffff00"/>
  <rect  onclick="on_load();" stroke="#000000" id="svg_5" height="190.666668" width="329.000043" y="2.999997" x="306.999966" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#007f00"/>
  <rect  onclick="on_load();" stroke="#000000" id="svg_6" height="122" width="300.999999" y="1" x="1" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#ff7f00"/>
  <rect  onclick="on_load();" stroke="#000000" id="svg_7" height="65.000001" width="70.33333" y="127.333333" x="3" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" stroke="#000000" id="svg_8" height="61.000001" width="71" y="197.333332" x="3.333333" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" stroke="#000000" id="svg_9" height="64.666665" width="73.666668" y="263.000003" x="2.666667" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" stroke="#000000" id="svg_10" height="66.333332" width="74.999997" y="332.666667" x="2.666667" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" stroke="#000000" id="svg_11" height="72.000002" width="74.333332" y="404.000004" x="3.666667" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" id="svg_27" stroke="#000000" height="65.000001" width="70.33333" y="126.999998" x="77.99999" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" id="svg_28" stroke="#000000" height="61.000001" width="71" y="196.999997" x="78.333323" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" id="svg_29" stroke="#000000" height="64.666665" width="73.666668" y="262.666668" x="77.666656" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" id="svg_30" stroke="#000000" height="66.333332" width="74.999997" y="332.333332" x="77.666657" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" id="svg_31" stroke="#000000" height="72.000002" width="74.333332" y="403.666669" x="78.666656" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" id="svg_32" stroke="#000000" height="65.000001" width="70.33333" y="125.66667" x="152.666662" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" id="svg_33" stroke="#000000" height="61.000001" width="71" y="195.666669" x="152.999995" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" id="svg_34" stroke="#000000" height="64.666665" width="73.666668" y="261.33334" x="152.333328" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" id="svg_35" stroke="#000000" height="66.333332" width="74.999997" y="331.000004" x="152.333328" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" stroke="#000000" id="svg_36" height="73.333338" width="74.333332" y="402.333341" x="153.333328" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" stroke="#000000" id="svg_37" height="65.000001" width="74.33333" y="126.333328" x="227.333336" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" stroke="#000000" id="svg_38" height="61.000001" width="72.333337" y="196.333327" x="229.000003" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" id="svg_39" stroke="#000000" height="64.666665" width="73.666668" y="261.999998" x="228.333336" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" id="svg_40" stroke="#000000" height="66.333332" width="74.999997" y="331.666662" x="228.333336" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" id="svg_41" stroke="#000000" height="73.333338" width="74.333332" y="402.999999" x="229.333336" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" id="svg_42" stroke="#000000" height="61.000001" width="72.333337" y="198.666661" x="306.333323" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" id="svg_43" stroke="#000000" height="64.666665" width="73.666668" y="264.333332" x="305.666656" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" id="svg_44" stroke="#000000" height="66.333332" width="74.999997" y="333.999996" x="305.666657" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" id="svg_45" stroke="#000000" height="73.333338" width="74.333332" y="405.333333" x="306.666656" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" id="svg_46" stroke="#000000" height="61.000001" width="72.333337" y="198.666657" x="380.999997" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" id="svg_47" stroke="#000000" height="64.666665" width="73.666668" y="264.333328" x="380.33333" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" id="svg_48" stroke="#000000" height="66.333332" width="74.999997" y="333.999992" x="380.33333" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" id="svg_49" stroke="#000000" height="73.333338" width="74.333332" y="405.333329" x="381.33333" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" stroke="#000000" id="svg_50" height="62.333337" width="72.333337" y="198.666656" x="458.333331" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" id="svg_51" stroke="#000000" height="64.666665" width="73.666668" y="265.666664" x="457.666664" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" id="svg_52" stroke="#000000" height="66.333332" width="74.999997" y="335.333328" x="457.666664" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
  <rect  onclick="on_load();" id="svg_53" stroke="#000000" height="73.333338" width="74.333332" y="406.666665" x="458.666664" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" fill="#0000ff"/>
 </g>
</svg>



<!--
Form Code End (see html-form-guide.com for more info.)
-->
<?php include 'siteincludes/footer.php';?>
</body>
</html>