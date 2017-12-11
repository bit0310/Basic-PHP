<?php

include 'connection/DB.php';



class Model{
	public function gtStudentData(){

		$sql= 'select * from tbl_student';
		$stmt=DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();


	}
}


?>