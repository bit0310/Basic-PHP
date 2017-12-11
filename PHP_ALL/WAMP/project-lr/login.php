<?php 
 	include "inc/header.php";
 	include 'lib/User.php';

 	Session::checkLogin();
  ?>

<?php 
$user = new User();
	if ($_SERVER['REQUEST_METHOD'] == 'POST'  && isset($_POST['login'])) {
		$usrLogin = $user->userLogin($_POST);
	}
?>
<div class="panel panel-default">

	<div class="panel-heading">
		<h2>User Login</h2>
	</div>

	<div class="panel-body">
		<div style="max-width:500px; margin:0 auto;">

<?php
if (isset($usrLogin)) {
	echo $usrLogin;
}

?>			

			<form action="" method="POST">
				  <div class="form-group">
				    <label for="email">Email address:</label>
				    <input type="email" id="email" name="email" class="form-control" />
				  </div>
				  <div class="form-group">
				    <label for="pwd">Password:</label>
				    <input type="password" name="password" id="password" class="form-control" />
				  </div>
				  <div class="checkbox">
				    <label><input type="checkbox"> Remember me</label>
				  </div>
				  <button type="submit" name="login" class="btn btn-default">Login</button>
			</form> 

		</div>
	</div>	

</div>





<?php 
 include "inc/footer.php";
?>