<?php 
include 'inc/header.php';
?>
<hr/>
PHP Array() Functions - Create Array
	<span style="right";>
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Time".date(" h:i:s A");
		?>	
	</span>
<hr/>
Index array
<hr/>
<?php
	$car = array("volvo","BMW","Ferari");
	$lenght = count($car);
	echo"Lenght is: ". $lenght."<br/>";
	for ($i=0; $i < $lenght; $i++) {
		echo $car[$i]."<br/>" ;
	}
?>

<hr/>
Associative array
<hr/>

<?php

	$persons = array("sofiq" => "20","sazzad" => "30","sofiq"=> "20","sonia" => "40","tithy" => "25");

	foreach ($persons as $name => $value) {
		echo "Name = ".$name.", Age = ".$value;
		echo "<br/>";
	}
?>

<hr/>
Multidimentional array
<hr/>


<?php

	$person = array(

		array("sofiq", "masters", "25"),
		array("khalid", "HSC", "20"),
		array("faria", "Hsc", "18"),
		array("farzana", "class7", "14")		
			);
	for ($row=0; $row <4 ; $row++) { 
		echo "<p> person number.$row</p>";
		echo "<ul>";
			for ($col=0; $col <3 ; $col++) { 
				echo "<li>".$person[$row][$col]."</li>";
			}
		echo "</ul>";
	}	
?>


<hr/>
PHP Array Functions Part-02
<hr/>

<?php
 	$person = array("SOFIQ"=>"20", "sazzad"=>"20", "sonia" =>"10");

 		print("<pre>");
 		//print_r(array_change_key_case($person, CASE_UPPER));
 		print_r(array_change_key_case($person, CASE_LOWER));
 		print("</pre>");
 		echo "<br/>";

 	foreach ($person as $key => $value) {
	 	echo "Name = ".$key.", Age = ".$value;
	 	echo "<br/>";
 		}


?>
	


<hr/>
PHP Array Functions Part-02
<hr/>

<?php
 	$person = array("SOFIQ"=>"20", "sazzad"=>"20", "sonia" =>"10");

 		print("<pre>");
 		//print_r(array_change_key_case($person, CASE_UPPER));
 		print_r(array_change_key_case($person, CASE_LOWER));
 		print("</pre>");
 		echo "<br/>";

 	foreach ($person as $key => $value) {
	 	echo "Name = ".$key.", Age = ".$value;
	 	echo "<br/>";
 		}
?>
	

<hr/>
3. Aarray_column()
<hr/>

<?php
 	
	$name = array(

			array(

				'id'        =>'200',
				'first_name'=>'sofiq',
				'last_name' =>'sazzad'

			),

			array(

				'id'        =>'201',
				'first_name'=>'sonia',
				'last_name' =>'haque'

			),

			array(

				'id'        =>'202',
				'first_name'=>'tithy',
				'last_name' =>'faria'

			)


	);

		$lastname = array_column($name, 'first_name', 'id');
		print("<pre>");
		print_r($lastname);
		print("</pre>");

?>
	
<hr/>
4. array_combine
<hr/>

<?php
 	
	$name = array("sofiq", "sazzad", "sonia");
	$department = array("IIT", "CSE", "CSS");



	$combine = array_combine($name, $department);

		
		print("<pre>");
		print_r($combine);
		print("</pre>");

?>

<hr/>
5. array_count_values
<hr/>

<?php
 	
	$name = array("sofiq", "sazzad", "sonia", "sofiq", "sazzad", "sonia", "sazzad");
	$department = array("IIT", "CSE", "CSS", "IIT", "CSE", "CSS");



	$combine = array_count_values($name);

		
		print("<pre>");
		print_r($combine);
		print("</pre>");
?>


<hr/>
6. array_diff
<hr/>

<?php
 	
	$array_one = array(
			"a"=>"red",
			"b"=>"green",
			"c"=>"blue",
			"d"=>"yellow"
	);

		$array_two = array(
			"g"=>"red",
			"e"=>"black",
			"f"=>"purple"
			
	);

			$array_three = array(
			"a"=>"red",
			"b"=>"black",
			"h"=>"yellow"
			
	);
		
		$different = array_diff($array_one, $array_two, $array_three);

		print("<pre>");
		print_r($different);
		print("</pre>");
?>


<hr/>
7. array_diff_assoc
<hr/>

<?php
 	
	$array_one = array(
			"a"=>"red",
			"b"=>"green",
			"c"=>"blue",
			"d"=>"yellow"
	);

		$array_two = array(
			"e"=>"red",
			"f"=>"black",
			"g"=>"purple"
			
	);

		
		$different = array_diff_assoc($array_one, $array_two);

		print("<pre>");
		print_r($different);
		print("</pre>");
?><hr/>
7. array_diff_assoc
<hr/>

<?php
 	
	$array_one = array(
			"a"=>"red",
			"b"=>"green",
			"c"=>"blue",
			"d"=>"yellow"
	);

		$array_two = array(
			"e"=>"red",
			"f"=>"black",
			"g"=>"purple"
			
	);

		
		$different = array_diff_assoc($array_one, $array_two);

		print("<pre>");
		print_r($different);
		print("</pre>");
?>


<hr/>
8. array_diff_key
<hr/>

<?php
 	
	$array_one = array(
			"a"=>"red",
			"b"=>"green",
			"c"=>"blue",
			"d"=>"yellow"
	);

		$array_two = array(
			"a"=>"red",
			"c"=>"blue",
			"d"=>"pink"
			
	);

		
		$different = array_diff_key($array_one, $array_two);

		print("<pre>");
		print_r($different);
		print("</pre>");
?>


<hr/>
9. array_intersect
<hr/>

<?php
 	
	$array_one = array(
			"a"=>"red",
			"b"=>"green",
			"c"=>"blue",
			"d"=>"yellow"
	);

		$array_two = array(
			"e"=>"red",
			"f"=>"black",
			"g"=>"yellow"
			
	);

			$array_three = array(
			"a"=>"red",
			"b"=>"black",
			"g"=>"yellow"
			
	);

		
		$result = array_intersect($array_one, $array_two, $array_three);

		print("<pre>");
		print_r($result);
		print("</pre>");
?>


<hr/>
10. array_intersect_assoc
<hr/>

<?php
 	
	$array_one = array(
			"a"=>"red",
			"b"=>"green",
			"c"=>"blue",
			"d"=>"yellow"
	);

		$array_two = array(
			"a"=>"red",
			"f"=>"black",
			"d"=>"yellow"
			
	);

			$array_three = array(
			"a"=>"red",
			"b"=>"black",
			"d"=>"yellow"
			
	);

		
		$result = array_intersect_assoc($array_one, $array_two, $array_three);

		print("<pre>");
		print_r($result);
		print("</pre>");
?>

<hr/>
11. array_intersect_key
<hr/>

<?php
 	
	$array_one = array(
			"a"=>"red",
			"b"=>"green",
			"c"=>"blue",
			"d"=>"yellow"
	);

		$array_two = array(
			"a"=>"red",
			"b"=>"black",
			"g"=>"yellow"
			
	);

			$array_three = array(
			"a"=>"red",
			"b"=>"black",
			"q"=>"yellow"
			
	);

		
		$result = array_intersect_key($array_one, $array_two, $array_three);

		print("<pre>");
		print_r($result);
		print("</pre>");
?>


<hr/>
12. array_key_exists
<hr/>

<?php
 	
	$arr = array(
			"name"=>"rahim",
			"age"=>"35"
				
	);

		if (array_key_exists("name",$arr)) {
			echo "Key already exists";
		}else{
			echo "Key does not  exists";

		}

	
?>

<hr/>
13. array_keys
<hr/>

<?php
 	
	$car = array(

			"volvo"=>"xc90",
			"bmw"=>"xc0",
			"toyota"=>"c90",
			"honda"=>"x90"

	);

		$result = array_keys($car, "c90");

		print("<pre>");
		print_r($result);
		print("</pre>");
?>



<hr/>
14. array_map
<hr/>

<?php
 	
	function myfunction($value){
		$v= strtoupper($value);
		return $v;

	}
	$arr = array(

		  "animal"=>"cow",
			"type"=>"mamal"
			

		);

	$result = array_map("myfunction", $arr);

		

		print("<pre>");
		print_r($result);
		print("</pre>");
?>


<hr/>
15. array_merge
<hr/>

<?php
 	

	$arr1 = array(

		  "animal"=>"cow",
			"type"=>"mamal"
			
		);

	$arr2 = array(

		  "color"=>"brown",
			"type"=>"100000"
			
		);

	$result = array_merge($arr1, $arr2);

		

		print("<pre>");
		print_r($result);
		print("</pre>");
?>

<hr/>
16. array_multisort
<hr/>

<?php
 	

	$arr1 = array("animal", "cow" );
	$arr2 = array("Lion", "cat");
		

	

	 array_multisort($arr1,SORT_ASC, $arr2,SORT_DESC);

		

		print("<pre>");
		print_r($arr1);
		print("</pre>");

		print("<pre>");
		print_r($arr2);
		print("</pre>");
?>


<hr/>
17. array_pad
<hr/>

<?php
 	

	$arr = array("red","green");

		$result =array_pad($arr, 5, "blue");

		print("<pre>");
		print_r($result);
		print("</pre>");

?>


<hr/>
18. array_pop & array_push
<hr/>

<?php
 	

	$arr = array("red","green", "blue");

		//array_pop($arr);
	array_push($arr, "yellow", "black");

		print("<pre>");
		print_r($arr);
		print("</pre>");

?>

<hr/>
19. array_product
<hr/>

<?php
 	

	$arr = array(2, 4, 2, 25);
	echo (array_product($arr));

	
?>


<hr/>
20. array_replace
<hr/>

<?php
 	

	$color_one = array("a"=>"red","b"=>"green");
	$color_two = array("a"=>"blue","yellow");
	$result	   = array_replace($color_one, $color_two);
	
		print("<pre>");
		print_r($result);
		print("</pre>");
?>

<hr/>
21. array_reverse
<hr/>

<?php
 	

	$color_one = array("red","green","blue","yellow");
	
	$result = array_reverse($color_one);
	
		print("<pre>");
		print_r($result);
		print("</pre>");
?>

<hr/>
22. array_search
<hr/>

<?php
 	

	$color_one = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
	if (isset($_POST['text'])) {
		global $txt;
		$txt = $_POST['text'];
		$result = array_search($txt, $color_one);
		echo "your have searched by-> $txt and your key is-> $result";
	}
	
	
	/*
		print("<pre>");
		print_r($result);
		print("</pre>");*/
?>

<form method="POST" action="index.php">
	
<input type="text" name="text" value="<?php global $txt; echo $txt; ?>" />
<input type="submit" value="submit"/>

</form>


<hr/>
23. array_shift
<hr/>

<?php
 	

	$color_one = array(
				"a"=>"red",
				"b"=>"green",
				"c"=>"blue",
				"d"=>"yellow"
			);
	
	array_shift($color_one);

	print("<pre>");
	print_r($color_one);
	print("</pre>");
	
	
	
?>

<hr/>
24. array_slice
<hr/>

<?php
 	

	$color_one = array("red","green","blue","yellow","skyblue");
	
	$result = array_slice($color_one,1,3);

	print("<pre>");
	print_r($result);
	print("</pre>");
	
	
	
?>

<hr/>
25. array_sum
<hr/>

<?php
 	

	$num = array(5,5,10,30);
	
	$result = array_sum($num);

	print("<pre>");
	print_r($result);
	print("</pre>");
		
?>

<hr/>
26. array_unique
<hr/>

<?php
 	

	$num = array(5,5,10,30,20,30,20);
	
	$result = array_unique($num);

	print("<pre>");
	print_r($result);
	print("</pre>");
		
?>


<hr/>
27. array_unshift
<hr/>

<?php
 	

	$color = array(
				"0"=>"red",
				"1"=>"green",
				"2"=>"blue",
				"3"=>"yellow"
			);
	
	print("<pre>");
	print_r($color);
	print("</pre>");

	array_unshift($color, "black");

	print("<pre>");
	print_r($color);
	print("</pre>");
		
?>

<hr/>
28. array_values
<hr/>

<?php
 	

	$color = array(
				"a"=>"red",
				"b"=>"green",
				"c"=>"blue",
				"d"=>"yellow"
			);
	$result =array_values($color);


	print("<pre>");
	print_r($result);
	print("</pre>");
		
?>

<hr/>
29. array_walk
<hr/>

<?php
 	
	function myfunction1($dep, $name){
		echo "$name comes from $dep department<br/>";
	}


	$name = array(
		"Sofiq"=>"IIT",
		"sazzad"=>"math",
		"sonia"=>"cse"

	);
	
array_walk($name, "myfunction1");

	
		
?>


<hr/>
30. arsort & asort
<hr/>

<?php
 	
	function myfunction2($dep, $name){
		echo "$name comes from $dep department<br/>";
	}


	$num = array(
		"Sofiq"=>"25",
		"sazzad"=>"24",
		"sonia"=>"23"

	);
	
	//arsort($num);
	asort($num);


	foreach ($num as $name => $age) {
		echo "Name: ".$name.", Age: ".$age."<br>";
	}
		
?>

<hr/>
31. compact
<hr/>

<?php
 	
	$name      = "sofiq";
	$department= "IIT";
	$coder     ="Java";


		$result = compact("name","department","coder");

	print("<pre>");
	print_r($result);
	print("</pre>");
?>

<hr/>
32. current
<hr/>

<?php
 	
	$name = array("sofiq","sazzad","sonia","tithy");
	 
	print("<pre>");
	print_r($name);
	print("</pre>");

	echo current($name)."<br/>";
	echo next($name)."<br/>";
	echo current($name)."<br/>";
	echo prev($name)."<br/>";
	echo end($name)."<br/>";

?>

<hr/>
33. in_array
<hr/>

<?php
 	$coder= array("akbar","kader","faria","farzana");
 		if(isset($_POST['username'])){
 			$txt = $_POST['username'];

 			if(in_array($txt, $coder)){
 				echo "$txt Exist!!";
 			}else{
 				echo "$txt Not Exist!!";
 			}
 		}

?>

<form method="POST" action="">
	
<input type="text" name="username"/>
<input type="submit" value="submit"/>

</form>


<hr/>
34. key,krsort,ksort
<hr/>

<?php
 	$coder= array("akbar"=>"30",
 		"kader"=>"35",
 		"faria"=>"32",
 		"farzana"=>"38"
 	);
 		//echo "The current position key is: ".key($coder)."<br/>";
 		krsort($coder);

 		foreach ($coder as $key => $value) {
 			echo "Name:".$key.", Age: ".$value."<br/>";

 		}echo "<br/>";

 		ksort($coder);

 		foreach ($coder as $key => $value) {
 			echo "Name:".$key.", Age: ".$value."<br/>";
 		}
?>


<hr/>
35. shuffle
<hr/>

<?php
 	$color= array("red","green","white","blue","yellow");

 	print("<pre>");
 	print_r($color);
 	print("</pre>");

 	
 	shuffle($color);

 	print("<pre>");
 	print_r($color);
 	print("</pre>");
?>

<?php include 'inc/footer.php'?>




	
	
