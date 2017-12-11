<?php
	$fonts = "verdana";//variable declaretion.
	$bgcolor= "#444";
	$fontcolor= "#fff";



$errname = $erremail = $errweb = $errgender = "";
$username = $email = $website = $comment = $gender = "";
			
		if ($_SERVER["REQUEST_METHOD"] == "POST") {

			if(empty($_POST["username"])) {
				 $errname = "<span style ='color:red'>Name is required.</span>";
				
			}else{
				$name    = validate($_POST["username"]);
			 	 }



			  if(empty($_POST["email"])) {
				 $erremail  = "<span style ='color:red'>E-mail is required.</span>";
				
			}elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {

				 $erremail  = "<span style ='color:red'>Invalid E-mail Format.</span>";

			}else{
				$email   = validate($_POST["email"]);
				}



			 if(empty($_POST["website"])) {
				 $errweb  = "<span style ='color:red'>Wesite is required.</span>";
				
			}elseif (!filter_var($_POST["website"], FILTER_VALIDATE_URL)) {

				 $errweb  = "<span style ='color:red'>Invalid website Format.</span>";

			}else{
				$website = validate($_POST["website"]);
				}



			 if(empty($_POST["gender"])) {
				 $errgender  = "<span style ='color:red'>Gender is required.</span>";
				
			}else{
				$gender  = validate($_POST["gender"]);
				}

			//$comment = validate($_POST["comment"]);
			
		}
			function validate($data){
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
?>


<!doctype html>
<html>
<head>
	<title> PHP fundamentals</title>
	<style>
body{font-family:<?php echo $fonts;?>}.phpcoding{width:900px;margin: 0 auto; background:<?php echo "#fff" ?>; }
.headeroption, .footeroption{ background:<?php echo $bgcolor; ?>;color:<?php echo $fontcolor; ?>;
text-align:center; padding:20px;}.headeroption h2, .footeroption 
h2{margin:0; font-size: 24px;}
.maincontent{background:<?php echo "#ddd" ?>; min-height:6000px; padding:10px; font-size:18px;}
	p{margin:0}
	input[type="text"]{width:250px;padding:5px}
	input[type="email"]{width:250px;padding:5px}
	select{font-size:18px; padding:2px 5px;width:250px;}
	.tblone{width:100%;border:2px solid #fff; margin:20px 0}
	.tblone{padding:5px 10px; text-align:center;}
	table.tblone tr:nth-child(2n+1){background:#fff;height:30px;}
	table.tblone tr:nth-child(2n+1){background:#f1f1f1;height:30px;}
	#myform{width:400px;border:1px solid #fff; padding:10px;}
	.para{weight:815px; background:#fff; border:1px solid #999; margin:10px;min-height:300px;}

	
	</style>
	<script src="js/jquery.js"></script>
</head>
<body>
<div class="phpcoding">
	<section class="headeroption">
		<h2><?php echo "PHP Fundamental training"; ?></h2>
	</section>
	
	<section class="maincontent">
		
		
		
		
		
		
		