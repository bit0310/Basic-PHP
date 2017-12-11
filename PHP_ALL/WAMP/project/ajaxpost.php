<?php include 'inc/header.php';?>

<div>
<hr>AJAX post method<hr>

<script>
$(document).ready(function(){
	$("#myform").submit(function(){
		$.post("content.php", $("#myform").serialize(), function(data){
			$("#state1").html(data);
		});
		return false;
	});
	
});

</script>


<div class="para4">
<div id="state1"></div>
	<form id="myform">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"/></td>
			</tr>
			<tr>
				<td>skill</td>
				<td><input type="text" name="skill"/></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="submit"/></td>
			</tr>
		
		</table>
	</form>

</div>

</div>





<div>
<hr>JQuery with json<hr>

<script>
$(document).ready(function(){
	var personsJSON= {
		"Sofiqul" : {	
		"name":"S.M. Sofiqul",
		"skill":"java, php",
		"company":"IDB",
		"email":"sofiqul@gmail.com"		
		},
		"sazzad" : {
		"name":"sazzad",
		"skill":" php",
		"company":"IDB",
		"email":"sazzad@gmail.com"		
		}
	};
		
		$("#state").html(personsJSON.sazzad.name);
});

</script>


<div class="para4">
<div id="state"></div>



</div>
</div>



<?php include 'inc/footer.php'?>
