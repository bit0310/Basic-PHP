<?php
	$fonts = "verdana";//variable declaretion.
	$bgcolor= "#444";
	$fontcolor= "#fff";

?>


<!doctype html>
<html>
<head>
	<title> PHP Array Functions Tutorial</title>
	<style>
body{font-family:<?php echo $fonts;?>}.phpcoding{width:900px;margin: 0 auto; background:<?php echo "#fff" ?>; }
.headeroption, .footeroption{ background:<?php echo $bgcolor; ?>;color:<?php echo $fontcolor; ?>;
text-align:center; padding:20px;}.headeroption h2, .footeroption 
h2{margin:0; font-size: 24px;}
.maincontent{background:<?php echo "#ddd" ?>; min-height:2000px; padding:10px; font-size:18px;}
	p{margin:0}
	input[type="text"]{width:250px;padding:5px;}
	input[type="email"]{width:250px;padding:5px}
	input[type="password"]{width:250px;padding:5px}
	select{font-size:18px; padding:5px;width:250px;}


	.tblone{width:420px;border:2px solid #fff; margin:20px 0;}
	.tblone td{padding: 5px 10px; }
	
	table.tblone tr:nth-child(2n+1){background:#fff;height:30px;}
	table.tblone tr:nth-child(2n){background:#f1f1f1;height:30px;}

	/*#myform{width:400px;border:1px solid #fff; padding:10px;}*/
	.para{weight:815px; background:#fff; border:1px solid #999; margin:10px;min-height:300px;}
	#myform9{width:410px; border: 2px solid #fff;  margin-top:20px;padding:5px;}

	
	</style>
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
</head>
<body>
<div class="phpcoding">
	<section class="headeroption">
		<h2><?php echo "PHP Array Functions"; ?></h2>
	</section>
	
	<section class="maincontent">
		<hr/>
WORKING WITH HTML FORM
	<span style="right";>
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Time".date(" h:i:s A");
		?>	
	</span>
<hr/>
		
		
		
		
		
		