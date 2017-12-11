<?php include "inc/header.php"; ?>
<?php
    spl_autoload_register(function($class){
        include "classes/".$class.".php";
});
     
?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h4>ENTER Teacher INFORMATION <span class="pull-right"><a  class="btn btn-info" href="index.php">For Student</a> </span></h4>

  </div>



<div class="panel-body">

<?php

$user = new Teacher();

    if (isset($_POST['create'])) {
        $name = $_POST['name'];
        $dep = $_POST['dep'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $user->setName($name);
        $user->setDep($dep);
        $user->setAge($age);
        $user->setAddress($address);

        if ($user->insert()) {
            echo "<span class='insert'> Data Inserted Successfully..</span>";
        }
    }


     if (isset($_POST['update'])) {
         $id = $_POST['id'];
        $name = $_POST['name'];
        $dep = $_POST['dep'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $user->setName($name);
        $user->setDep($dep);
        $user->setAge($age);
        $user->setAddress($address);

        if ($user->update($id)) {
            echo "<span class='insert'> Data Updated Successfully..</span>";
        }
    }

?>


<?php

    if (isset($_GET['action']) && $_GET['action']=='delete'){
       $id = (int)$_GET['id'];
       if ($user->delete($id)) {
           echo "<span class='delete'> Data Deleted Successfully..</span>";
       }
     
    }
?>


<?php

    if (isset($_GET['action']) && $_GET['action']=='update'){
       $id = (int)$_GET['id'];
       $result = $user->readById($id);
?>

<div class="panel-body">
<div style="max-width:600px; margin:0 auto;">
<form action="" method="post">

 <table>

<input type="hidden" name="id" value="<?php echo $result['id']; ?>"/>
    <tr>
        <td>Name: </td>
        <td><input type="text" name="name" value="<?php echo $result['name']; ?>" required="1"/></td>    
    </tr>

    <tr>
       <td>Department: </td>
        <td><input type="text" name="dep" value="<?php echo $result['dep']; ?>" required="1"/></td>
    </tr>

    <tr>
      <td>Age: </td>
        <td><input type="text" name="age" value="<?php echo $result['age']; ?>" required="1"/></td>
    </tr>

     <tr>
      <td>Address: </td>
        <td><textarea name="address" value="<?php echo $result['address']; ?>" required="1"/></textarea></td>
    </tr>

    <tr>
      <td></td>
        <td>
        <input class="btn btn-success" type="submit" name="update" value="Submit"/>
       
        </td>
    </tr>
  </table>
</form>

<?php } else { ?>


<div class="panel-body">
  <div style="max-width:600px; margin:0 auto;">
<form action="" method="post">

 <table class="table table-striped">
    <tr>
        <td>Name: </td>
        <td><input type="text" name="name"  required="1"/></td>    
    </tr>

    <tr>
       <td>Department: </td>
        <td><input type="text" name="dep" required="1"/></td>
    </tr>

    <tr>
      <td>Age: </td>
        <td><input type="text" name="age" required="1"/></td>
    </tr>

     <tr>
      <td>Address: </td>
        <td><textarea name="address" required="1"/></textarea></td>
    </tr>
    <tr>
      <td></td>
        <td>
        <input class="btn btn-success" type="submit" name="create" value="Submit"/>
       
        </td>
    </tr>
  </table>
</form>

<?php } ?>

</div>

</div>

<div class="panel panel-default">
 <div class="panel-heading">
 <h4><strong>Teacher Table List</strong></h4>

  </div>


<div class="panel-body">
  <table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Department</th>
        <th>Age</th>
        <th>Address</th>
        <th>Action</th>
    </tr>


<?php  
$i = 0; 
foreach ($user->readAll() as $key => $value) {
    $i++;


?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['dep']; ?></td>
            <td><?php echo $value['age']; ?></td>
            <td><?php echo $value['address']; ?></td>
            <td>

   <?php echo "<a href='teacher.php?action=update&id=".$value['id']."'><button >  Edit </button></a>"; ?>
 || <?php echo "<a href='teacher.php?action=delete&id=".$value['id']."' onClick='return confirm(\"Are You Want to Delete Data..\")'><button >  Delete </button></a>";?>
            </td>

        </tr>

<?php }?> 

  </table>
</div>


</div>





<?php include "inc/footer.php"; ?>