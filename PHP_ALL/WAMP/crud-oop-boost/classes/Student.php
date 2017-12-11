<?php
include "main.php";


class Student extends Main{
	protected $table = 'tbl_student';
	private $name;
	private $dep;
	private $age;


	public function setName($name){
		$this->name = $name;
	}

	public function setDep($dep){
		$this->dep = $dep;
	}

	public function setAge($age){
		$this->age = $age;
	}



	public function insert(){

		$sql="insert into $this->table(name, dep, age) values(:name, :dep, :age)";
		$stmt= DB::prepare($sql);
		$stmt->bindparam(':name', $this->name);
		$stmt->bindparam(':dep', $this->dep);
		$stmt->bindparam(':age', $this->age);
		return $stmt->execute();

	}


	public function update($id){
		 $sql="update  $this->table SET name=:name, dep=:dep, age=:age WHERE id=:id ";
		$stmt= DB::prepare($sql);
		$stmt->bindparam(':name', $this->name);
		$stmt->bindparam(':dep', $this->dep);
		$stmt->bindparam(':age', $this->age);
		$stmt->bindparam(':id', $id);
		return $stmt->execute();
	}

}




?>