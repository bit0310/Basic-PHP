<?php 

include 'inc/header.php';
include "config.php";
include "DB.php";

 ?>

		
<?php
	$db  = new DB();
	if (isset($_POST['submit'])) {
        $name= mysqli_real_escape_string($db->link,  $_POST['name']);
        $email= mysqli_real_escape_string($db->link, $_POST['email']);
        $skill= mysqli_real_escape_string($db->link, $_POST['skill']);


        if ($name == '' || $email == '' || $skill == '') {
            $error = "Field must not be empty  !!";
        }else{
            $sql= "insert into tbl_user(name, email, skill) value('$name', '$email', '$skill')";
            $insert= $db->insert($sql);
        }
    }
?>


<?php
    if (isset($error)) {
        echo "<span style='color:red'>".$error."</span>";
    }


?>

	<a href="index.php">GO HOME</a>

<form action="create.php" method="post">
 <table class="tblone">
    <tr>
        <td>Name: </td>
        <td><input type="text" name="name" placeholder="Enter Name" /></td>    
    </tr>

    <tr>
       <td>Email:: </td>
        <td><input type="email" name="email" placeholder="Ente Email" /></td>
    </tr>

    <tr>
      <td>Skill: </td>
        <td><input type="text" name="skill" placeholder="Enter Skill" /></td>
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






		

<?php include 'inc/footer.php'; ?>