<?php 
session_start();
include 'inc/header.php';
setcookie('visited', "", time() - 3600);
?>
<hr/>
<h4>Declaring PHP Variables</h4>
<hr/>
<?php 

  $a=5;
  $b=1020;
  $c= $a+$b;
  $d="sazzad";
echo " total value = ".$c." ok fine ".$d;
?>
<hr/>
<h4>Show Output in PHP</h4>
<hr/>
<?php
	echo "PHP is nice";
	echo "<br/>";
	print "PHP is nice";
	echo "<br/>";
	echo "PHP ", "nice";//use multiple prameter, value return kore na
	echo "<br/>";
	//print "PHP ", "nice";//not use multiple prameter
	$a = "sazzad";
	var_dump($a);//data type check
	echo "<br/>";
	$a = print("sazzad");//print value return kore
	var_dump($a);//data type check
?>
<hr/>
1.string
2.integer
3.float
4.Boolean
5.array
6.object
7.null
8.resource
<br/><hr/>
<?php
	$x = "PHP Data Types";//string
	echo $x;
	echo"<br/>";
	$a = 2;
	echo $a;
	echo"<br/>";
	$b = 28.3;//float
	echo $b;
	echo"<br/>";
	$x = true;//Boolean
	var_dump($x);
	echo"<br/>";
	$y = array("sazzad", "sofiq", "sonia");;//array
	var_dump($y);
	echo"<br/>";
	class student{//class
		function department(){//class er vitor function gulake method bole.
			return "IIT";
		}
		function details(){
			echo $this->department();
		}
		
	}
	$st = new student(); //object sara echo print korbe na.
	$st->details();


	$y = null;
	var_dump($y);
	
?>
<hr/>
7.PHP Strings<br/>
<hr/>
<?php
	$x= "PHP Strings";
	echo strlen($x);
	echo"<br/>";
	echo str_word_count($x);
	echo"<br/>";
	echo strrev($x);
	echo"<br/>";
	echo strpos($x, "Strings");
	echo"<br/>";
	echo str_replace("PHP", "java", $x);
?>
<hr/>
8.Constants<br/>
//global bar bar use kora jai, constant bar bar change kora jai na, kintu veriable kora jai.
<hr/>

<?php
	define("VALUE", "I am learing java" );

	function learnPHP(){
		echo VALUE;
	}
	learnPHP();

?>

<hr/>
9.PHP Operators<br/>
<hr/>
1. arithmetic operators
2.assignment operators
3.comparison operators
4.increment/decrement
5.logical operators
6.string operators
7.array operators
<hr/>
1. arithmetic operators
<hr/>
<?php
 $x= 15;
 $y= 2;
 echo $x+$y;  	echo "<br/>";
 echo  $x-$y; 	echo "<br/>";
 echo  $x*$y;	echo "<br/>";
 echo  $x/$y;	echo "<br/>";
 echo  $x%$y;

?>
<hr/>
10.Assignment operators(=)<br/>
<hr/>
<?php
$x= 15;
$x +=20;
$x -=20;
$x /=20;
$x %=20;
echo $x;

?>
<hr/>
11. Comparison Operators
<hr/>
	<?php

		$x=100;
		$y="100";
		var_dump($x == $y);//value check kore
		var_dump($x === $y);//value & data type check kore
		var_dump($x != $y);
		var_dump($x !== $y);
		var_dump($x > $y);
		var_dump($x < $y);
		var_dump($x >= $y);
		var_dump($x <= $y);

	?>

<hr/>
12. Increment/Decrement Operators
<hr/>
	<?php
		$x=100;
		echo ++$x; //pre increment
		echo "<br/>";
		echo --$x; //pre decrement
		echo "<br/>";
		echo $x++; //post increment ag er vule return dibe pore increment hobe
		echo "<br/>";
		echo $x; //pre decrement
		echo "<br/>";
		echo $x--;//post decrementecho "<br/>";
		echo "<br/>";
		echo $x;
	?>

<hr/>
13. Logical Operators(and, or, xor,&&,||,)
<hr/>
	<?php
	$a = 10;
	$b = 30;
	if($a ==100 and  $b ==30){
		echo "sofiq";
	}else{
		echo "worng";
	}
	echo "<br/>";

	$a = 10;
	$b = 30;
	if($a ==100 or  $b ==30){
		echo "sofiq";
	}else{
		echo "worng";
	}
	echo "<br/>";

	$a = 10;
	$b = 30;
	if($a ==10 xor  $b ==30){
		echo "sofiq";
	}else{
		echo "worng";
	}
	echo "<br/>";

	$a = 10;
	$b = 30;
	if($a ==10 &&  $b ==30){
		echo "sofiq";
	}else{
		echo "worng";
	}
	echo "<br/>";

	$a = 10;
	$b = 30;
	if($a ==10 ||  $b ==20){
		echo "sofiq";
	}else{
		echo "worng";
	}
	echo "<br/>";

	$a = 10;
	$b = 30;
	if($a !==10){
		echo "sofiq";
	}else{
		echo "worng";
	}
	
	?>

<hr/>
14. String Operators
<hr/>
<?php
	$x = "Training with ";
	$y ="live project";
	$z = $x . $y;//concatination operator
	echo $z;
	echo "<br/>";
	$x = "Training with ";
	$y ="live project";
	$x .= $y;//concatination assignment operator
	echo $x;
?>

<hr/>
15. Array Operators
<hr/>
	<?php
		$x= array(
			"a" => "Dhaka",
			"b" => "Gopalganj"
			);

		$y= array(
			"c" => "Khulna",
			"d" => "Comilla"

			);

		var_dump($x + $y);
		var_dump($x == $y);
		var_dump($x === $y);
		var_dump($x != $y);
		var_dump($x <> $y);
		var_dump($x !== $y);
	?>

<hr/>
16. Conditional Statements(if, if else, if elseif)
<hr/>
	<?php
	$x = 4;
		if($x >5){
			echo "sofiq";
		}elseif($x > 10){
			echo "tithy";
		}elseif($x > 8){
			echo "tithy";
		}else{
			echo "Please give a value smaller than 4";
		}
	?>

<hr/>
17. Switch Statements
<hr/>
	<?php
		$coding = "java";

		switch ($coding) {

			case "html":
			echo "I love html";
			break;

			case "jav":
			echo "I love jav";
			break;

			case "php":
			echo "I love php";
			break;

			case "css":
			echo "I love css";
			break;
			
			default:
				echo "I love programming";
			break;
		}

	?>

<hr/>
18. PHP While Loops
<hr/>
	<?php
		$x = 0;
		while ($x<= 10) {
	
			echo "The number is:$x <br/>";
			$x++;
		}
	?>


	<?php
		$x = 15;
		do{
			echo "The number is :$x <br/>";
			$x++;
			} while ($x<= 10) ;
	?>
<hr/>
19. PHP For Loops
<hr/>
	<?php
	
		for ($i=1; $i <= 10 ; $i++) { 
			echo "the number is: $i <br/>";
		}

	?>
<hr/>
20. PHP foreach  Loops
<hr/>
	<?php
	$colors = array("blue","red", "pink");
	foreach ($colors as $color) {
		echo "$color <br/>";
	}
		
	?>
<hr/>
21. PHP Functions
<hr/>
	<?php
		function school($name="My school"){//argument

			echo "$name is top.<br/>";
		}
		school("Dhaka University");//assign argument value
		school();
		school("bl University");//
		school("al University");//
		school("Dha University");//

		function sum($x, $y){
			$z = $x+$y;
			return $z;
		}
		echo "5+10 = ".sum(5, 10);
	?>

<hr/>
22. Arrays
<hr/>
Index array();
<br/>
	<?php
		$x = array(5, 3, 9, 10, 15);
		$length = count($x);

		for ($i=0; $i < $length; $i++) { 
			echo "$x[$i] <br/>";
		}
	?>
	<hr/>
Assesative array()<br/>
	<?php
		$ages = array("karim"=>"25", "rahim"=>"20","sofiq"=>"30");//array key

		foreach ($ages as $x => $age) {
			echo "key = ".$x. ", age=". $age;
			echo"<br/>";
		}

	?>
	<hr/>
Multidimentinal Array()<br/>
	<?php
		$cars = array(
			array("BMW", 15, "Nice"),
			array("Volvo", 20, 5),
			array("AUDI", 45, 30),
			array("Ferari", 25, 60)
		);
		   
		   for ($row=0; $row <4; $row++) { 
		   	echo "<p>Row Number $row</p>";
		   	echo"<ul>";
		   		for ($col=0; $col <3 ; $col++) { 
		   			echo "<li>".$cars[$row][$col]."</li>";
		   		}
		   	echo"</ul>";

		   }
	?>

	<?php

		$persons = array(
				array("sofiq", "iphone", 25),
				array("sonia", "samsung", 26),
				array("khalid", "huwai", 20),
				array("alamin", "oneplus3", 24)
		);

		for ($i=0; $i <4 ; $i++) { 
			echo"<p>Person Number is:$i</p>";
		
		echo"<ul>";
			for ($j=0; $j <3; $j++) { 
				echo "<li>".$persons[$i][$j]."</li>";
			}

		echo"</ul>";
	}
	?>

<hr/>
23.Sorting Arrays
<hr/>

	<?php

		$names = array("rakib", "mamun", "sofiq", "azad", "sania");
		//sort($names);
		rsort($names);
		$length=count($names);
		for ($i=0; $i <$length ; $i++) { 
			echo "$names[$i] <br/>";
		}

		$ages =array("sofiq"=>"25", "azad"=>"26","khalid"=>"20");
		//asort($ages);
		ksort($ages);
		foreach ($ages as $name => $value) {
			echo "Name = ".$name." Age= ".$value;
			echo "<br/>";
		}
	?>	

<hr/>
24.variable scope
<hr/>
<p>Local Variable</p>
	<?php
		function test1(){
			$a =5;
			echo "$a";
			echo "<br/>";
		}
		function test2(){
			$b=10;
			echo "$b";
		}
		test1();
		test2();
	?>	
<hr/>
<p>Global Variable</p>
	<?php
		$x=50;

		function test3(){
			global $x;
			$a =5;
			echo $a;
			echo "<br/>";
			echo "Access from function test1 ".$x;
			echo "<br/>";
		}
		function test4(){
			global $x;
			$b=10;
			echo $b;
			echo "<br/>";
			echo "Access from function test2 ".$x;
		}

		test3();
		test4();
	?>

<hr/>
25.Superglobals variable 
<hr/>
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILE
$_ENV
$_COOKIE
$_SESSION
<hr/>
$GLOBALS
<hr/>
	<?php

		$x=5;
		$y=10;
		function sum1(){
			$GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y'];
		}

		sum1();
		echo $z;
	?>	

<hr/>
$_SERVER
<hr/>
	<?php
		echo $_SERVER['PHP_SELF'];//url dhorar jonno use hoi
		echo "<br/>";
		echo $_SERVER['SERVER_NAME'];
		echo "<br/>";
		echo $_SERVER['SCRIPT_NAME'];
		echo "<br/>";
		echo $_SERVER['HTTP_USER_AGENT'];
		echo "<br/>";
		echo $_SERVER['SERVER_ADDR'];
	?>	

<hr/>
26. $_REQUEST and $_POST(same kaj kore)
<hr/>
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
		Username:<input type="text" name="username"/>
		<input type="submit" value="submit"/>
	</form>

	<?php
			
		if ( $_SERVER["REQUEST_METHOD"] == "POST") {
				//$name = $_REQUEST['username'];
				$name = $_POST['username'];
				if (empty($name)) {
					echo "<span style='color:red'> Username field must note be empty!!</span>";
					
				}else{
					echo "<span style='color:green'>you have submitted: ".$name."</span>";
				}
		}
	?>	

<hr/>
27. $_GET
<hr/>

	<a href="text.php?msg=Good&txt=Bye">Sent Data</a>

	<?php



	?>	

<hr/>
28Form Validation, 29.Form Require 30.Email Validation
<hr/>
		<p>hack hoi na:htmlspecialchars</p>
		<hr/>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<table>
				<p style="color: red;">Required Field(*)</p>
			<tr>
				<td> Username </td>
				<td> <input type="text" name="username"/>*<?php echo $errname; ?></td>

			</tr>

			<tr>
				<td> E-mail </td>
				<td> <input type="email" name="email"/>*<?php echo $erremail; ?></td>

			</tr>
			<tr>
				<td>Website </td>
				<td> <input type="text" name="website"/>*<?php echo $errweb; ?></td>
			</tr>
			<tr>
				<td>Comment </td>
				<td> <textarea name="comment" rows="5" cols="50"></textarea></td>
			</tr>
			<tr>
				<td>Gender </td>
				<td>
					<input type="radio" name="gender" value="female"/>Female
					<input type="radio" name="gender" value="male"/>Male
					*<?php echo $errgender; ?>
				</td>
			</tr>

			<tr>
				<td> </td>
				<td><input type="submit" name="submit" value="submit"/></td>
			</tr>
			
			
		</table>
	</form>

	<?php
		echo "Name    : ".$name."<br/>";
			echo "E-mail  : ".$email."<br/>";
			echo "Website : ".$website."<br/>";
			echo "Comment : ".$comment."<br/>";
			echo "Gender  : ".$gender;

	?>


<hr/>
31.PHP Date and Time
<span style="float:right;">
<?php	
	date_default_timezone_set('Asia/Dhaka');
	echo " Time ".date("h:i:sa");
?>	
</span>

<hr/>

<?php
	echo "Today is ".date("d-m-y")."<br/>";
	echo "Today is ".date("l")."<br/>";
	echo "Default Time is ".date("h:i:sa")."<br/>";
	
	date_default_timezone_set('Asia/Dhaka');
	echo " Time ".date("h:i:sa");
	
?>


<hr/>
32.Include(page load hoi kinku error dekhai) and Require(fatal error genetare kore ar page ar load hoi na)
<hr/>

<hr/>
33.File Handling
<hr/>

<?php
	echo readfile("text.txt");
	
?>

<hr/>
34.File Open/Read/Close
<hr/>

<?php

	$ourfile = fopen("text.txt", "r") or die("File not found");
	//echo fgets($ourfile, filesize("text.txt"));
	//echo fgetc($ourfile);
	//echo fread($ourfile, filesize("text.txt"));
	while(!feof($ourfile)){
		//echo fgetc($ourfile)."<br/>";
		echo fgets($ourfile)."<br/>";
	}
	fclose($ourfile);
?>

<hr/>
35.File Create & Write
<hr/>

<?php
		$createfile = fopen("new.txt", "w") or die("File not found");
		$one = "s.m. sofiqul islam\n";
		fwrite($createfile, $one);
		$two = "sms\n";
		fwrite($createfile, $two);
		fclose($createfile);
?>

<hr/>
36.File/Image Upload
<hr/>

<?php
		if (isset($_FILES['image'])) {
			$filename = $_FILES['image']['name'];
			$filetmp  = $_FILES['image']['tmp_name'];
			move_uploaded_file($filetmp, "image/".$filename);
			echo "image uploaded successfully";

		}
?>
<form action="" method="POST" enctype="multipart/form-data">
	
<input type="file" name="image"/>
<input type="submit" value="submit"/>

</form>

<hr/>
37.Sessions
<hr/>

	<?php
		$_SESSION ['user'] = "sofiq";
		$_SESSION ['password'] = "123";

		echo "Username is : ".$_SESSION ['user']."<br/>";
		//session_unset();
		echo "Password is : ".$_SESSION ['password'];
		session_destroy();


	?>

<hr/>
38.Cookie
<hr/>

	<?php
		//setcookie(name, value, expire, path, domain, secure, httponly);
	/*if (!isset($_COOKIE['visited'])) {
		setcookie("visited", "1", time()+86400, "/") or die("Could not set Cookie!");
		echo "This is your first visit in this website.";
		}else{
			echo "You are our old visitor.";
			echo "<br/>";
		}*/
		echo "Cookies deleted";
	?>


<hr/>
39. Filters
<hr/>


 <table>
	<tr>
		<td>Filter Name</td>
		<td>Filter Id</td>
	</tr>
	<?php
			foreach (filter_list() as $id => $filter) {
				echo '<tr><td>'. $filter . '</td><td>' . filter_id($filter). 
				 '</td></tr>';
			}	
	?>

</table>

<hr/>

<?php
	$str = "<h2>I am learning PHP.</h2>";
	$newstr = filter_var($str, FILTER_SANITIZE_STRING);
	echo $newstr;
	echo "<br/>";

	$int = 50;
	if (filter_var($int, FILTER_VALIDATE_INT)) {
		echo "It is integer value ";
	}else{

		echo "It is not integer value ";
	}
	echo "<br/>";

	$ip = "127.0.0.1";
	if (filter_var($ip, FILTER_VALIDATE_IP)) {
		echo "$ip is valid IP Address ";
	}else{
 
		echo "$ip is not valid IP Address ";
	}
	echo "<br/>";

	$mail = "sazzad@gmail.com";
	if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
		echo "$mail is valid Email Address ";
	}else{
 
		echo "$mail is not valid Email Address ";
	}
	echo "<br/>";

	$url = "http://www.example.com";
	if (filter_var($url, FILTER_VALIDATE_URL)) {
		echo "$url is valid website Address ";
	}else{
 
		echo "$url is not valid website Address ";
	}


?>

<hr/>
40. Filters Advanced
<hr/>

<?php
	$intnum = 100;
	$min = 1;
	$max = 200;

		if (filter_var($intnum, FILTER_VALIDATE_INT, array("options" => array(
			"min_range" => $min, "max_range" => $max)))) {

		echo "It is valid";
		
	}else{

		echo "It is not valid";
	}

	echo "<br/>";

	$url = "http://www.example.com/index.html?q=123";
	if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)) {
		echo "tHIS URL IS VALID";
	}else{
 
		echo "It has not query string ";
	}

?>


<hr/>
41. Error Reporting
<hr/>

<?php

	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
	$x = 45;
	if ($x == 45) {
		echo " the price is $x";
	}else{
		echo " the price is not 45";
	}

?>

<hr/>
42. PHP Exception
<hr/>

<?php
	function numCheck($num){
		if($num != 5){
			throw new Exception("value is not 5");
			
		}
		return true;
	}
	try{
		numCheck(5);
		echo "yes you have done";
	}
	catch(Exception $e)	{
		echo "Error: ".$e->getMessage();
	}

?>

<hr/>
43. Explode & Implode Function
<hr/>

<?php
	
	$mystr = "We are learning PHP";
	$str = (explode(" ", $mystr));// string ke array hisabe return kore
	echo "$str[0]";
	echo "<br/>";
	
	$mystr1 = array("WE","ARE","LEARNING","PHP");	
	echo implode(", ", $mystr1);//array ke string hisabe return kore

?>

<hr/>
44. Case Change and 45.Strip whiltespace/Characters
<hr/>

<?php
	if (isset($_POST['text'])) {
		global $txt;
		$txt = $_POST['text'];
		//echo strtoupper($txt);
		//echo strtolower($txt);
		//echo ucfirst($txt);
		//echo ucwords($txt);
		//echo trim($txt, " .");
		//echo ltrim($txt, " .");
		echo rtrim($txt, " .");
	}
	

?>

<form action="" method="post">
	<table>	
		<tr>
			<td><input type="text" name="text" value="<?php global $txt; echo $txt; ?>"></td>
		</tr>
		<tr>
			<td><input type="submit" value="submit"></td>
		</tr>
	</table>
	
</form>

<hr/>
46. (require/require_once)
<hr/>

<?php
	require "new.php";
	//require "new.php";
	require_once "new.php";//akber execute hoi


?>



<?php include 'inc/footer.php'?>




	
	
