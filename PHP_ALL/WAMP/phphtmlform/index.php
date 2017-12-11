<?php include 'inc/header.php';?>

<hr>
1. Getting values from a Text Box with PHP<br/>
2. Getting values from a Text Box with JavaScript 
<hr/>


<?php

	if (isset($_POST['username'])) {
		$name = $_POST['username'];
		echo " Username is: ".$name;
	}

?>


<form action="" method="POST" name="myform" id="myform" onsubmit="formFunction(); return false;">
	<table>
		<tr>
			<td>Username:  </td>
			<td><input type="text" name="username" required="1"/></td>
		</tr>
		<tr>
			<td> </td>
			<td>
				<input type="submit" value="submit">
				<input type="reset" value="clear">

			</td>
		</tr>
	</table>
</form>

<div id="output"></div>


<hr>
3. Getting values from Radio Button in PHP 
<hr/>



<?php

	if (isset($_POST['gender'])) {
		$gender = $_POST['gender'];
		echo " You are a: ".$gender;
	}

?>


<form action="" method="POST" name="myform1" id="myform1">
	<table>
		<tr>
			<td>Gender :  </td>
			<td>
				<input type="radio" name="gender" value="Male"/>Male
				<input type="radio" name="gender" value="Female"/>Female
				<input type="radio" name="gender" value="Others"/>Others
			</td>
		</tr>
		<tr>
			<td> </td>
			<td>
				<input type="submit" value="submit">
				<input type="reset" value="clear">

			</td>
		</tr>
	</table>
</form>


<hr>
4. Getting values from Radio Button in JavaScript 
<hr/>

<p id="show"></p>

<form action="" method="POST" name="myform2" id="myform" onsubmit="clickHere(); return false;">
	<table>
		<tr>
			<td>Gender :  </td>
			<td>
				<input type="radio" name="gender" value="Male"/>Male
				<input type="radio" name="gender" value="Female"/>Female
				<input type="radio" name="gender" value="Others"/>Others
			</td>
		</tr>
		<tr>
			<td> </td>
			<td>
				<input type="submit" value="submit"/>
				<input type="reset" value="clear"/>

			</td>
		</tr>
	</table>
</form>


<hr>
5. Get Multiple Checkbox Values in PHP 
<hr/>


<?php
	  if(isset($_POST['coder'])){
	    	$coder = $_POST['coder'];
	    	echo "You have selected : ";
	    	foreach ($coder as $lang => $value) {
	    		echo $value.", " ;
	    	}
	  }



?>


<form action="" method="post" name="myform3" id="myform3" return false;>
	<table>
		<tr>
			<td>Language :  </td>
			<td>
				<input type="Checkbox" name="coder[]" value="PHP"/>PHP
				<input type="Checkbox" name="coder[]" value="JAVA"/>JAVA
				<input type="Checkbox" name="coder[]" value="Jquery"/>Jquery
			</td>
		</tr>
		<tr>
			<td> </td>
			<td>
				<input type="submit" value="submit"/>
				<input type="reset" value="clear"/>

			</td>
		</tr>
	</table>
</form>


<hr>
6. Get Multiple Checkbox Values in JavaScript 
<hr/>

<div id="state"></div>

<form action="" method="POST" name="myform4" id="myform" onsubmit="multipleCheck(); return false;">
	<table>
		<tr>
			<td>Language :  </td>
			<td>
				<input type="Checkbox" name="code" value="PHP"/>PHP
				<input type="Checkbox" name="code" value="JAVA"/>JAVA
				<input type="Checkbox" name="code" value="Jquery"/>Jquery
			</td>
		</tr>
		<tr>
			<td> </td>
			<td>
				<input type="submit" value="submit"/>
				<input type="reset" value="clear"/>

			</td>
		</tr>
	</table>
</form>



<hr>
7. Get Selected Option Value in PHP 
<hr/>


<?php

	if(isset($_POST['coder7'])){
		$option= $_POST['coder7'];
		echo "You are selected: ". $option;
	}

?>



<form method="POST" action="" name="myform7" id="myform7">
	
	<table>
		<tr>
			<td>Language : </td>
			<td>
				<select name="coder7">
					<option>Select One</option>
					<option value="HTML">HTML</option>
					<option value="java">CSS</option>
					<option value="JAVAScript">JAVAScript</option>
					<option value="JquPHPery">Jquery</option>
					<option value="PHP">PHP</option>
				</select>

			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="Submit"/>
				<input type="reset" value="Clear"/>
			</td>
		</tr>
		
	</table>
</form>




<hr>
8. Get Selected Option Value in JavaScript
<hr/>


<div id="option"></div>

<form method="POST" action="" name="myform8" id="myform8" onsubmit="selectOption();   return false;">
	
	<table>
		<tr>
			<td>Language : </td>
			<td>
				<select name="coder8">
					<option>Select One</option>
					<option value="HTML">HTML</option>
					<option value="CSS">CSS</option>
					<option value="JAVAScript">JAVAScript</option>
					<option value="Jquery">Jquery</option>
					<option value="PHP">PHP</option>
				</select>

			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="Submit"/>
				<input type="reset" value="Clear"/>
			</td>
		</tr>
		
	</table>
</form>



<hr>
9. Get data from a data table in JavaScript 
<hr/>


<table class="tblone">
	
	<tr>
		<td colspan="2" align="center">Output</td>
	</tr>
	<tr>
		<td>Name</td>
		<td><span id="showName"></span></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><span id="showPass"></span></td>
	</tr>
	<tr>
		<td>Gender</td>
		<td><span id="showGender"></span></td>
	</tr>
	<tr>
		<td>Department</td>
		<td><span id="showDep"></span></td>
	</tr>
	<tr>
		<td>Coder</td>
		<td><span id="showCode"></span></td>
	</tr>


</table>



<form method="POST" action="" name="myform9" id="myform9" onsubmit="fullForm();   return false;">
	
	<table>
		<tr>
			<td>Username: </td>
			<td><input type="text" name="name" required="1" placeholder="Enter Your Name" /> </td>
		</tr>
		<tr>
			<td>Password: </td>
			<td><input type="Password" name="Password" required="1" placeholder="Enter Your Password"/> </td>
		</tr>
		<tr>		
			<td>Gender: </td>
			<td>
				<input type="radio" name="gender" value="Male"/>Male 
				<input type="radio" name="gender" value="FeMale"/>FeMale 
			</td>
		</tr>

			<tr>		
			<td>Department: </td>
			<td>
				<input type="Checkbox" name="dep" value="IIT"/>IIT
				<input type="Checkbox" name="dep" value="CSE"/>CSE 
				<input type="Checkbox" name="dep" value="EEE"/>EEE		
			</td>
		</tr>


		<tr>
			<td>Coder : </td>
			<td>
				<select name="coder9" required="1">
					<option>Select One</option>
					<option value="HTML">HTML</option>
					<option value="CSS">CSS</option>
					<option value="JAVAScript">JAVAScript</option>
					<option value="Jquery">Jquery</option>
					<option value="PHP">PHP</option>
					<option value="c++">c++</option>
					<option value="C#">C#</option>
					<option value="JAVA">JAVA</option>
				</select>

			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="Submit"/>
				<input type="reset" value="Clear"/>
			</td>
		</tr>
		
	</table>
</form>





<hr>
10. Get data from a data table in PHP  
<hr/>


<?php

	if(isset($_POST['submit'])){
		$name1 = $_POST['name1'];
		$Password1 = $_POST['Password1'];
		$gender1 = $_POST['gender1'];
		$dep1 = $_POST['dep1'];
		$coder10 = $_POST['coder10'];
?>

<table class="tblone">
	
	<tr>
		<td colspan="2" align="center">Output</td>
	</tr>


	<tr>
		<td>Name</td>
		<td><?php echo $name1; ?></td>
	</tr>


	<tr>
		<td>Password</td>
		<td><?php echo $Password1; ?></td>
	</tr>


	<tr>
		<td>Gender</td>
		
			<?php
			 if ($gender1 == "Male") { ?>
			<td><?php echo "Male"; ?></td>
	
			<?php } elseif ($gender1 == "FeMale") { ?>
				<td><?php echo "FeMale"; ?></td>
		<?php }?>

		
	</tr>

	<tr>
		<td>Department</td>
			<?php  if ($dep1 == "IIT") { ?>
			<td><?php echo "IIT"; ?></td>
	
			<?php } elseif ($dep1 == "CSE") { ?>
				<td><?php echo "CSE"; ?></td>

			<?php }elseif ($dep1 == "EEE") { ?>
				<td><?php echo "EEE"; ?></td>
				<?php } ?>
	</tr>

	<tr>
		<td>Coder</td>
		<td><?php echo $coder10; ?></td>
	</tr>


</table>
<?php } ?>


<form method="POST" action="" name="myform10" id="myform10">
	
	<table>
		<tr>
			<td>Username: </td>
			<td><input type="text" name="name1" required="1" placeholder="Enter Your Name" /> </td>
		</tr>
		<tr>
			<td>Password: </td>
			<td><input type="Password" name="Password1" required="1" placeholder="Enter Your Password"/> </td>
		</tr>
		<tr>		
			<td>Gender: </td>
			<td>
				<input type="radio" name="gender1" value="Male"/>Male 
				<input type="radio" name="gender1" value="FeMale"/>FeMale 
			</td>
		</tr>

			<tr>		
			<td>Department: </td>
			<td>
				<input type="Checkbox" name="dep1" value="IIT"/>IIT
				<input type="Checkbox" name="dep1" value="CSE"/>CSE 
				<input type="Checkbox" name="dep1" value="EEE"/>EEE		
			</td>
		</tr>


		<tr>
			<td>Coder : </td>
			<td>
				<select name= "coder10" >
					<option>Select One</option>
					<option value="HTML">HTML</option>
					<option value="CSS">CSS</option>
					<option value="JAVAScript">JAVAScript</option>
					<option value="Jquery">Jquery</option>
					<option value="PHP">PHP</option>
					<option value="c++">c++</option>
					<option value="C#">C#</option>
					<option value="JAVA">JAVA</option>
				</select>

			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="Submit"/>
				<input type="reset" value="Clear"/>
			</td>
		</tr>
		
	</table>
</form>



<?php include 'inc/footer.php'?>




	
	
