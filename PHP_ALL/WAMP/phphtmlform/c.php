<?php include 'inc/header.php';?>



<hr>
10. Get data from a data table in PHP  
<hr/>


<?php

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$Password = $_POST['Password'];
		$gender = $_POST['gender'];
		$dep = $_POST['dep'];
		$coder10 = $_POST['coder10'];
?>

<table class="tblone">
	
	<tr>
		<td colspan="2" align="center">Output</td>
	</tr>


	<tr>
		<td>Name</td>
		<td><?php echo $name; ?></td>
	</tr>


	<tr>
		<td>Password</td>
		<td><?php echo $Password; ?></td>
	</tr>


	<tr>
		<td>Gender</td>
		
			<?php
			 if ($gender == "Male") { ?>
			<td><?php echo "Male"; ?></td>
	
			<?php } elseif ($gender == "FeMale") { ?>
				<td><?php echo "FeMale"; ?></td>
		<?php }?>

		
	</tr>

	<tr>
		<td>Department</td>
			<?php  if ($dep == "IIT") { ?>
			<td><?php echo "IIT"; ?></td>
	
			<?php } elseif ($dep == "CSE") { ?>
				<td><?php echo "CSE"; ?></td>

			<?php }elseif ($dep == "EEE") { ?>
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
				<select name="coder10">
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