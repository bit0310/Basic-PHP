<?php

	include_once 'Session.php';
	include 'Database.php';

class User{
	private $db;

	public function __construct(){
		 $this->db =new Database();
	}

	public function userRegistration($data){
		$name     = $data['name'];
		$username = $data['username'];
		$email    = $data['email'];
		$password = $data['password'];
		

		$chk_email = $this->emailCheck($email);


		if ($name== "" OR $username == "" OR $email== "" OR $password== "") {
			$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Field must not be Empty</div>";
			return $msg;
		}

		if (strlen($username) < 4) {
			$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Username must be more than 3 word!</div>";
			return $msg;
			
		}elseif(preg_match('/[^a-zA-Z0-9_-]+/i', $username)) {

			$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Username must only contain  alphanumerical, dashes and underscores!</div>";
			
		}

		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Invalid Email!</div>";
			return $msg;
		}


		if ($chk_email == true) {
			$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Email Already Exist!</div>";
			return $msg;
		}
		$password = md5($data['password']);
		$sql = "insert into tbl_user(name, username, email, password) values(:name, :username, :email, :password)";
			$query = $this->db->pdo->prepare($sql);
			$query->bindValue(':name', $name);
			$query->bindValue(':username', $username);
			$query->bindValue(':email', $email);
			$query->bindValue(':password', $password);
			$result = $query->execute();

			if ($result) {
				$msg = "<div class='alert alert-success'><strong>Success ! </strong>You Have Been Register Successflly.</div>";
				return $msg;
			}else{
				$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Data not insert!</div>";
				return $msg;
			}


	}

	public function emailCheck($email){
			$sql = "select email from tbl_user where email = :email";
			$query = $this->db->pdo->prepare($sql);
			$query->bindValue(':email', $email);
			$query->execute();
			if ($query->rowCount() > 0) {
				return 	true;
			}else{
				return 	false;
			}
	}




  public function getLoginUser($email, $password){
  			$sql = "select * from tbl_user where email = :email AND password =:password LIMIT 1";
			$query = $this->db->pdo->prepare($sql);
			$query->bindparam(':email', $email);
			$query->bindparam(':password', $password);
			$query->execute();
			$result = $query->fetch(PDO::FETCH_OBJ);
			return $result;
  }

  	public function userLogin($data){
  		
		$email    = $data['email'];
		$password = md5($data['password']);

		$chk_email = $this->emailCheck($email);


		if ($email== "" OR $password== "") {
			$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Field must not be Empty</div>";
			return $msg;
		}

		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Invalid Email!</div>";
			return $msg;
		}

		if ($chk_email == false) {
			$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Email not Exist!</div>";
			return $msg;
		}

		$result = $this->getLoginUser($email, $password);

		if ($result) {
			Session::init();
			Session::set("login", true);
			Session::set("id", $result->id);
			Session::set("name", $result->name);
			Session::set("username", $result->username);
			Session::set("loginmsg", "<div class='alert alert-success'><strong>success ! </strong>You are LoggedIn!</div>");
			header("Location: index.php");
		}else{
			$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Data not Found!</div>";
			return $msg;
		}


  	}



  	public function getUserData(){
  		    $sql = "select * from tbl_user ORDER BY id DESC";
			$query = $this->db->pdo->prepare($sql);
			$query->execute();
			$result = $query->fetchAll();
			return $result;
  	}


	public function getUserById($id){
			$sql = "select * from tbl_user where id=:id limit 1";
			$query = $this->db->pdo->prepare($sql);
			$query->bindparam(':id', $id);
			$query->execute();
			$result = $query->fetch(PDO::FETCH_OBJ);
			return $result;
	}







	public function updateUserData($id, $data){
		$name     = $data['name'];
		$username = $data['username'];
		$email    = $data['email'];


		if ($name== "" OR $username == "" OR $email== "") {
			$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Field must not be Empty</div>";
			return $msg;
		}

		if (strlen($username) < 4) {
			$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Username must be more than 3 word!</div>";
			return $msg;
			
		}elseif(preg_match('/[^a-zA-Z0-9_-]+/i', $username)) {

			$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Username must only contain  alphanumerical, dashes and underscores!</div>";
			
		}

		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Invalid Email!</div>";
			return $msg;
		}


		$sql = "update tbl_user set 
					name    =:name,
					username=:username,
					email   =:email
					where id=:id";

			$query = $this->db->pdo->prepare($sql);

			$query->bindValue(':name', $name);
			$query->bindValue(':username', $username);
			$query->bindValue(':email', $email);
			$query->bindValue(':id', $id);
			$result = $query->execute();

			if ($result) {
				$msg = "<div class='alert alert-success'><strong>Success ! </strong>User data update Successflly.</div>";
				return $msg;
			}else{
				$msg = "<div class='alert alert-danger'><strong>Error ! </strong>User Data not update!</div>";
				return $msg;
			}
	}


	private function checkPassword($id, $old_pass){
			$password = md5($old_pass);

			$sql = "select password from tbl_user where id=:id AND password = :password";
			$query = $this->db->pdo->prepare($sql);
			$query->bindValue(':id', $id);
			$query->bindValue(':password', $password);
			$query->execute();
			if ($query->rowCount() > 0) {
				return 	true;
			}else{
				return 	false;
			}

	}

		public function updatePassword($id, $data){
			$old_pass = $data['old_pass'];
			$new_pass = $data['password'];
			$chk_pass = $this->checkPassword($id, $old_pass);

			if ($old_pass == "" OR $new_pass == "") {
				$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Field must not be empty!</div>";
				return $msg;
			}


			if ($chk_pass == false) {
					$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Old password not Exist!</div>";
				return $msg;
			}

			if (strlen($new_pass) < 6) {
				$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Password atlest 6 charecter!</div>";
				return $msg;
			}

			$password = md5($new_pass);

			$sql = "update tbl_user set 
					password = :password
					where id = :id";

			$query = $this->db->pdo->prepare($sql);

			$query->bindValue(':password', $password);
			$query->bindValue(':id', $id);
			$result = $query->execute();

			if ($result) {
				$msg = "<div class='alert alert-success'><strong>Success ! </strong>User password update Successflly.</div>";
				return $msg;
			}else{
				$msg = "<div class='alert alert-danger'><strong>Error ! </strong>User password not update!</div>";
				return $msg;
			}
			
		}

}
?>