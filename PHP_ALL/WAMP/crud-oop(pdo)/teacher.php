<?php include "inc/header.php"; ?>
<?php
    spl_autoload_register(function($class){
        include "classes/".$class.".php";
});
     
?>
<hr>
<p style="text-align: center;"><b>CRUD With PDO + Abstract Factory Pattern</b></p>
<hr/>

<section class="p">
<P><b>ENTER TEACHER INFORMATION</b><span style="float:right"><a href="index.php">For Student</a> || <a href="teacher.php">For Teacher</a></span></P>
</section>



<section class="mainleft">

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
        <input type="submit" name="update" value="Add Teacher"/>
       
        </td>
    </tr>
  </table>
</form>

<?php } else { ?>



<form action="" method="post">

 <table>
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
        <input type="submit" name="create" value="Add Teacher"/>
       
        </td>
    </tr>
  </table>
</form>

<?php } ?>

</section>


<section class="subject">
<p><span style="margin-left: 300px"><b>Teacher List Table </b></span></p>
</section>


<section class="mainright">
  <table class="tblone">
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

   <?php echo "<a href='teacher.php?action=update&id=".$value['id']."'> Edit</a>"; ?>
 || <?php echo "<a href='teacher.php?action=delete&id=".$value['id']."' onClick='return confirm(\"Are You Want to Delete Data..\")'> Delete</a>";?>
            </td>

        </tr>

<?php }?> 

  </table>
</section>








<?php include "inc/footer.php"; ?>