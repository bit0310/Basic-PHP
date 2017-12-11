<?php 

include 'inc/header.php';
include "config.php";
include "DB.php";

 ?>

		
<?php
	$db  = new DB();
	$sql = "select * from tbl_user";
	$readData= $db->select($sql);
?>


<?php
	if (isset($_GET['msg'])) {
		echo "<span style='color:green'>".$_GET['msg']."</span>";
	}


?>


<p><a href="create.php">Create</a></p>
<form>		
  <table class="tblone">
    <tr>
    	<th width="10%">Serial</th>
        <th width="30%">Name</th>
        <th width="30%">Email</th>
        <th width="10%">Skill</th>
        <th width="20%">Action</th>
    </tr>
<?php
		if ($readData) {
			$i=1;
			while ($row = $readData->fetch_assoc()) {
			
?>
        <tr>
        	<td><?php echo $i++; ?></td>
	        <td><?php echo $row['name']; ?></td>
       		<td><?php echo $row['email']; ?></td>
       		<td><?php echo $row['skill']; ?></td>     
	        <td>
	        <a href="update.php?id=<?php echo urlencode($row['id']); ?>">Edit</a></td>
    </tr>

    <?php } ?>

    <?php } else { ?>
    <p>Data is not Found !!</p>
    <?php } ?>
</table>

</form>




		

<?php include 'inc/footer.php'; ?>