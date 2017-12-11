<?php 
include 'inc/header.php'; 
?>


<section class="mainleft">
	<form action="" method="post">
	<table>
		<tr>
			<td>Name: </td>
			<td><input type="text" name="name" placeholder="Enter Name.." required="1"/></td>
		</tr>

		<tr>
			<td>Department: </td>
			<td><input type="text" name="name" placeholder="Enter Department Name.." required="1"/></td>
		</tr>

		<tr>
			<td>Age: </td>
			<td><input type="text" name="name" placeholder="Enter Age.." required="1"/></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="create" value="Submit" /></td>
		</tr>


		</table>
		
	</form>

</section>	



<section class="mainright">
	<table class="tblone">
		<tr>
			<th>NO</th>
			<th>Name</th>
			<th>Department</th>
			<th>Age</th>
			<th>Action</th>
		</tr>
		<tr>
			<td>01</td>
			<td>Sofiqul Islam</td>
			<td>IIT</td>
			<td>26</td>
			<td>
				<a href="">Edit</a> || <a href="">Delete</a>

			</td>
		</tr>

		<tr>
			<td>02</td>
			<td>Sonia Haque</td>
			<td>INFS</td>
			<td>25</td>
			<td>
				<a href="">Edit</a> || <a href="">Delete</a>

			</td>
		</tr>

		<tr>
			<td>03</td>
			<td>Farzana Islam</td>
			<td>CSE</td>
			<td>20</td>
			<td>
				<a href="">Edit</a> || <a href="">Delete</a>

			</td>
		</tr>


	</table>

</section>	






<?php include 'inc/footer.php'?>