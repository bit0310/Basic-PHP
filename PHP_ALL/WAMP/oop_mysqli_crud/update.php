<?php 

include 'inc/header.php';
include "config.php";
include "DB.php";

 ?>

		
<?php

    $id= $_GET['id'];
	$db  = new DB();
    $sql = "select * from tbl_user where id=$id";
    $getData= $db->select($sql)->fetch_assoc();



	if (isset($_POST['update'])) {
        $name= mysqli_real_escape_string($db->link,  $_POST['name']);
        $email= mysqli_real_escape_string($db->link, $_POST['email']);
        $skill= mysqli_real_escape_string($db->link, $_POST['skill']);


        if ($name == '' || $email == '' || $skill == '') {
            $error = "Field must not be empty  !!";
        }else{
                $sql= "update tbl_user
                SET 
                name= '$name', 
                email= '$email', 
                skill= '$skill'
                where id=  $id";

            $update= $db->update($sql);
        }
    }
?>



<?php
    if (isset($_POST['delete'])) {
        $sql= "delete from tbl_user where id=$id";
        $deleteData = $db->delete($sql);
}
?>


<?php
    if (isset($error)) {
        echo "<span style='color:red'>".$error."</span>";
    }


?>

		
<a href="index.php"><b>Go HOME</a>

<form action="update.php?id=<?php echo $id; ?>" method="post">
 <table class="tblone">
    <tr>
        <td>Name: </td>
        <td><input type="text" name="name" value="<?php echo $getData['name']; ?>" /></td>    
    </tr>

    <tr>
       <td>Email:</td>
        <td><input type="email" name="email" value="<?php echo $getData['email']; ?>"/></td>
    </tr>

    <tr>
      <td>Skill: </td>
        <td><input type="text" name="skill" value="<?php echo $getData['skill']; ?>"/></td>
    </tr>
    <tr>
      <td></td>
        <td>
        <input type="submit" name="update" value="Update"/>
        <input type="reset" value="Clear"/>
        <input type="submit" name="delete" value="Delete" <?php echo "onClick='return confirm(\"Are you want to delete data..\")'"; ?>/>
        </td>
    </tr>
  </table>
</form>






		

<?php include 'inc/footer.php'; ?>