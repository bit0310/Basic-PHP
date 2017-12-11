<?php
include 'main.php';


class Teacher extends Main{

		protected $table = ' tbl_teacher';
		private $name;
		private $dep;
		private $age;
		private $address;



			  public function setName($name){
			  	 $this->name = $name;
			  }


			 public function setDep($dep){
			  	 $this->dep = $dep;
			  }

			   public function setAge($age){
			  	 $this->age = $age;
			  }

			    public function setAddress($address){
			  	 $this->address = $address;
			  }

		public function insert(){
			$sql= "insert into $this->table(name, dep, age, address) values(:name, :dep, :age, :address)";
			$stmt= DB::prepare($sql);
			$stmt->bindvalue(':name', $this->name);
			$stmt->bindvalue(':dep', $this->dep);
			$stmt->bindvalue(':age', $this->age);
			$stmt->bindvalue(':address', $this->address);
			return $stmt-> execute();
			
		}


		public function update($id){
			$sql= "update $this->table SET name=:name, dep=:dep, age=:age, address=:address where id=:id";
			$stmt= DB::prepare($sql);
			$stmt->bindvalue(':id', $id);
			$stmt->bindvalue(':name', $this->name);
			$stmt->bindvalue(':dep', $this->dep);
			$stmt->bindvalue(':age', $this->age);
			$stmt->bindvalue(':address', $this->address);
			return $stmt-> execute();
			
		}




}

?>