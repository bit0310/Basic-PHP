<?php 
include 'inc/header.php'; 
include 'function.php'; 
include 'student.php';
?>


<hr/>
1. Class, property, Method and Object
<hr/>

<?php

	class person{
		public $name;
		public $age;



		public function personName(){
			echo "Person Name is: ".$this->name."<br/>";
		}

		public function personAge($value){
			echo "Person Age is: ".$this->age=$value;
		}
	}


	$personOne = new person;
	$personOne->name="sofiq";
	$personOne->personName();
	$personOne->personAge("18");

?>

<hr/>
2. Work with Class, Method and Object
<hr/>

<form action="" method="POST">
	<table>

		<tr>
			<td>Enter First Number:</td>
			<td><input type="Number" name="num1"/></td>
		</tr>
		<tr>
			<td>Enter Second Number:</td>
			<td><input type="Number" name="num2"/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="calculation" value="Calculator" /></td>
		</tr>

	</table>
</form>

<?php

	if(isset($_POST['calculation'])){
		$numberOne = $_POST['num1'];
		$numberTwo = $_POST['num2'];	

			if(empty($numberOne) or empty($numberTwo)){
				echo "<span style='color:red'>Field must not be empty.</span>"."<br/>";
			} else {

			 	$cal = new calculator;
			 	$cal->add($numberOne, $numberTwo);
			 	$cal->minus($numberOne, $numberTwo);
			 	$cal->multi($numberOne, $numberTwo);
			 	$cal->div($numberOne, $numberTwo);

 		}
	}

?>


<hr/>
3. costructor Method
<hr/>

<?php

class person1{

		public $name;
		public $age;

 	public function __construct($n1, $a1){
 		$this->name = $n1;
 		$this->age  = $a1;
 	}

	public function personDetails(){
		echo "Person Name is: {$this->name} and Person Age is: {$this->age}";
		}	
}

		$personOne = new person1("sofiqul", "25");

		$personOne->personDetails();
		
?>



<hr/>
4. Destructor Method
<hr/>

<?php

class person2{

		public $name;
		public $age;
		public $id;

 	public function __construct($n1, $a1){
 		$this->name = $n1;
 		$this->age  = $a1;
 	}

	public function setId($id){
		$this->id = $id;
		}	

		public function __destruct(){
			if (! empty($this->id)) {
			echo "Saving person";	
		}

	}

}

		$personOne = new person2("sofiqul", "25");

		$personOne->setId("12");
		unset($personOne);
		
?>



<hr/>
5. costructor, Destructor Method and constants method and statics properties and methods
<hr/>

<?php
    class user{


    	public $user;
    	public $userId;
    	const NAME = "S.M. Sofiqul Islam";
    	public static $age =30;

   public function __construct($userName, $userId){

   		$this->user = $userName;
   		$this->userId = $userId;

   		echo "User name is: {$this->user} and UserId is: {$this->userId }";
    }	

public static function display(){
	echo "Full name is : ".user::NAME."<br/>";//constrants
	echo "Age is :".self::$age;//static property
}

   public function __destruct(){
    	unset($this->user);
    	unset($this->userId);
    }
}


$ur = new user("sonia", "24");
echo "<br/>";
$ur-> display();
user::display();//static method 
?>


<hr/>
8. inheritance and 9. Preventing from Extending and Overriding(using final keyword)
<hr/>

<?php
   /*final*/ class userData{


    	public $user;
    	public $userId;
    

   public function __construct($user, $userId){

   		$this->user = $user;
   		$this->userId = $userId;

       }	

	public /*final*/ function display(){
		echo "User name is: {$this->user} and UserId is: {$this->userId }";

		}
}

class Admin extends userData{
	public $level;

	public function display(){
		echo "User name is: {$this->user} and UserId is: {$this->userId } and user level is : {$this->level}";

		}

}


$ur = new userData("sonia", "24");
echo "<br/>";
$ur-> display();
echo "<br/>";
$ad = new Admin("admin", "1");
$ad->level = "Administetor";
echo "<br/>";
$ad->display();

?>


<hr/>
10. Access Modifiers (public, private, protected), 11. polymorphism
<hr/>

<?php
	class userName{
		public $user;
    	public $userId;
    	public $age = "25";
    	//private $age = "25";
    	//protected $age = "25";
    

   public function __construct($user, $userId){

   		$this->user = $user;
   		$this->userId = $userId;

       }	

	public function display(){
		echo "User name is: {$this->user} and UserId is: {$this->userId }";
		echo "<br/>";
		echo $this->age. " Inside class";

		}
}

class Admin1 extends userName{
	public $level= "Administetor";

	public function display(){
		echo "User name is: {$this->user} and UserId is: {$this->userId } and user level is : {$this->level}";
		echo "<br/>";
		echo $this->age. " In the sub class";

		}

}

$ur = new userName("sonia", "24");
$ur-> display();
echo "<br/>";
$ad = new Admin1("admin", "1");
echo "<br/>";
$ad->display();



?>


<hr/>
12. Interface (only method thake; kono body thake na)
<hr/>

<?php

	 interface school{
	 	public function mySchool();//kono body thakbe na{}

	 }

	 interface college{
	 	public function myCollege();//kono body thakbe na{}

	 }

	  interface versity{
	 	public function myVersity();//kono body thakbe na{}

	 }




	 class teacher implements school, college, versity{

	 	public function __construct(){
	 		$this->mySchool();
	 		$this->myCollege();
	 		$this->myVersity();
	 	}



	 	public function mySchool(){
	 		echo "I am a school teacher.<br/>";
	 	}

	 	public function myCollege(){
	 		echo "I am a College teacher.<br/>";
	 	}

	 	public function myVersity(){
	 		echo "I am a versity teacher.<br/>";
	 		echo "<br/>";
	 	}

 }


 	 class student implements school, college, versity{

	 	public function __construct(){
	 		$this->mySchool();
	 		$this->myCollege();
	 		$this->myVersity();
	 	}



	 	public function mySchool(){
	 		echo "I am a school student.<br/>";
	 	}

	 	public function myCollege(){
	 		echo "I am a College student.<br/>";
	 	}

	 	public function myVersity(){
	 		echo "I am a versity student.";
	 	}

 }

	$teacher = new teacher(); 
	$student = new student(); 


?>


<hr/>
13. Abstract class(body thake, kono time body thake na)
<hr/>

<?php


	abstract class students{

		public $name;
		public $age;

		public function studentDetais(){
				echo $this->name. " is ". $this->age. " years old";
		}

		abstract public function school();
		
	}


class boy extends students{


	public function describe(){
		return parent::studentDetais(). " And i am a high school student.<br/>";


	}


	public function school(){

		return "hellow";
	}
}





$s = new boy();
$s->name ="sofiq";
$s->age ="25";
echo $s->describe();
echo $s->school();

?>


<hr/>
14. Magic Methods(get, set, call, costructor, Destructor)
<hr/>

<?php

/*
__get(undefine $property)
__set(undefine $property, $value)
__call(undefine $method, $arg_array)
*/

class studentt{

	public $name;

	public function describe(){
		echo "I am a student.<br/>";

	}

	public function __get($pm){
		echo " $pm does not exist <br/>";
	}

	public function __set($pm, $value){
		echo " We set $pm->$value. <br/>";
	}


	public function __call($pm, $value){
		echo "There is no <b>".$pm. '</b> method and Arguments: '.implode(', ', $value);
	}


}

$st= new studentt();
$st->describe();
$st->hasan;//undefine property goes throw get method
$st->age = 15;//undefine property with assign value goes throw set method

$st->notExistMethod('2', '8', '5');


?>


<hr/>
15. Check for Class and Method Existence
<hr/>

<?php



if(class_exists("studenttt")){

	$st= new studenttt();
	if(method_exists($st, 'describe')){
	$st->describe();
}else{
	echo "method not exists.";
}
	}else{
		echo "class not exists.";
	}


?>

<hr/>
16. Autoloading Classes
<hr/>

<?php

spl_autoload_register(function($class_name){
		include "classes/".$class_name. ".php";
});



/*function __autoload($class_name){
	include "classes/".$class_name. ".php";
}*/

$ruby1 = new ruby;
$java1 = new java;
$php1  = new php;

?>



<hr/>
17. PHP Method Chaining
<hr/>

<?php

spl_autoload_register(function($class_name){
		include "classes/".$class_name. ".php";
});

$css = new css;
$css->framework()->cms();


$cal = new calculation;
echo "Result is :".$cal->getValue(3, 5)->getResult();

?>



<hr/>
18. Type Hinting in PHP
<hr/>

<?php


spl_autoload_register(function($class_name){
		include "classes/".$class_name. ".php";
});

$ch = new chain;
$nums = array(

	array('Number One',10,10),
	array('Number Two',20,20),

);
$ch->getValue($nums);

?>


<hr/>
19. PHP Object Iteration
<hr/>

<?php


class Personn{

		public $name = "sazzad";
		public $age = "20";
		public $skill = "blogging";
		

		private $Email = "sofiq@gmail.com";
		protected $Password = "12345";

			function iteratorInner(){
				echo "Inside class.<br/>";
				foreach ($this as $key => $value) {
					echo "<pre>";
					echo "$key=> $value";
					echo "</pre>";
					}
				}	

			}


$Per = new Personn;
foreach ($Per as $key => $value) {
 	
 
	echo "<pre>";
	echo "$key=> $value ";
	echo "</pre>";
}

$Per->iteratorInner();

?>




<hr/>
20. Using Traits in PHP
<hr/>

<?php


trait javaa{
		public function javaCoder(){
			return "I love Java <br/>";
		}

}


/*trait phpp{
		public function phpCoder(){
			return "I love PHP <br/>";
		}

}


trait javaaphpp{
	use javaa, phpp;
}*/

class coder1{

	//use javaaphpp ;
	use javaa;

		public function javaCoder(){
			return "I love Java and PHP <br/>";
		}

}


/*class coder2{

	use javaa;
	
}*/

$c1 =  new coder1;
echo $c1->javaCoder();
//echo $c1->phpCoder();

?>


<hr/>
21. __CLASS__ and get_class
<hr/>

<?php

spl_autoload_register(function($class_name){
		include "classes/".$class_name. ".php";
});

class phpChild extends per{

		public function cms(){

		echo "Child class constant and class name-> ".__CLASS__. "<br/>";
		echo "Child class Function and class name-> ".get_class($this). "<br/>";
	}

	public function ourMethod(){
		parent::work();
	}
}



$php = new phpChild();
$php->work();
echo "<hr/>";
$php->cms();
echo "<hr/>";
$php-> ourMethod();

?>



<hr/>
22. Late Static Binding in PHP
<hr/>

<?php

 class frame{

	public static function working(){

		echo static::getClas()."<br/>";
		
	}

	public static function getClas(){

		return __CLASS__;
		
	}

}


class frameChild extends frame{

		public static function getClas(){

		return __CLASS__;
		
	}

}


$st = new frame();
$st->working();
$child = new frameChild();
$child->working();


?>



<hr/>
23. Object Cloning in PHP
<hr/>

<?php

class language{
	private $category;
	private $framework;

	function setCat($a){
		$this->category = $a;
	}


	function getCat(){
		return $this->category;
	}

	function setFrame($b){
		$this->framework = $b;
	}


	function getFrame(){
		return $this->framework;
	}

	public function __clone(){//24. Magic Method __clone
		$lan = new language();
		$lan ->setCat( $this->category);
		$lan->setFrame($this->framework);
		return $lan;
	}

}


$java = new language();
$java->setCat("OOP");
$java->setFrame("spring");

$php = clone $java;
$php->setCat("Structure");
$php->setFrame("CodeIgniter");


echo $java->getCat()."<br/>";
echo $java->getFrame()."<br/>";

echo $php->getCat()."<br/>";
echo $php->getFrame();

?>



<hr/>
25. PHP ArrayObject
<hr/>

<?php


$arr = array("HTML", "CSS", "PHP", "JAVA");
$coding = new ArrayObject($arr);
$coding->append("jquery");

$iterator = $coding->getIterator();

while ($iterator->valid()) {
	echo $iterator->current()."<br/>";
	$iterator->next();
}

?>


<hr/>
26. Standard PHP Library - SPL
<hr/>

<?php

$arr = array("HTML", "CSS", "PHP", "JAVA", "Jquery");
$ai = new ArrayIterator($arr);

$ci = new CachingIterator($ai);


foreach ($ci as $key) {
	echo $key;
	if($ci->hasNext()){
		echo " ,";
	}
}

?>

<hr/>
27. PHP Object Serialization
<hr/>

<?php
class programming{
	public 	$html;
	public 	$css;
	private $php;
	protected $java;

	function __construct(){

		$this->html ="I know html.";
		$this->css  ="I love css.";
		$this->php  ="I love php.";
		$this->java  ="I love java.";
	}

}

$pro = new programming();
$ser = serialize($pro);
/*file_put_contents("programming.text", $ser);
echo $ser;*/

$getcont = file_get_contents("programming.text");
$unser = unserialize($getcont);
echo "<pre>";
print_r($unser);
echo "</pre>";

?>



<hr/>
28. PHP Namespaces
<hr/>

<?php
	


include "namespaces/java.php";
include "namespaces/php.php";
include "namespaces/ruby.php";


new php();
new java();
new ruby();	
echo sofiq\CSS;
echo HTML;
sofiq\coding();

?>



<hr/>
29. Strategy Design Pattern
<hr/>

<?php
/*
spl_autoload_register(function($class_name){
		include "StrategyDesignPattern/".$class_name. ".php";
});

$user = new User();
$msg = $user->getMsg();


switch ($msg) {

		case 'email':
			$objmsg = new SendEmail();
			break;

		case 'sms':
		$objmsg = new SendSms();
		break;

		case 'fax':
		$objmsg = new SendFax();
		break;
}
$objmsg->notification();
*/
?>




<hr/>
30. Factory Design Pattern
<hr/>

<?php

/*
spl_autoload_register(function($class_name){
		include "FactoryDesignPattern/".$class_name. ".php";
});


$bd = new Database();
$bd->setDriver("mysql");
//$bd->setDriver("sqlite");
$bd->connect("host","user","db","pass");


*/

?>



<hr/>
31. Abstract Factory Design Pattern
<hr/>

<?php

/*
spl_autoload_register(function($class_name){
		include "AbstractFactoryDesignPattern/".$class_name. ".php";
});

*/


?>


<hr/>
32. Singleton Design Pattern
<hr/>

<?php


include "SingletonDesignPattern/Database5.php";




new Database5();
new Database5();
new Database5();
new Database5();
new Database5();



?>


<hr/>
33. Iterator Design Pattern
<hr/>

<?php


/*
spl_autoload_register(function($class_name){
		include "IteratorDesignPattern/".$class_name. ".php";
});

$blogPost = getAllPost();

$posts = new Posts();
foreach ($posts as $post) {
	echo $post->getTitle();
	echo $post->getContent();
	echo $post->getDate();
	echo $post->getAuthor();
	$comments = new Comments($post->getComments());	
	foreach ($comments as $comment) {
		echo $comment->getCommentAuthor();
		echo $comment->getCommentContent();
	}
}

*/

?>


<hr/>
34. Observer Design Pattern
<hr/>

<?php


include "observerDesignPattern/Observable.php";
include "observerDesignPattern/Observer.php";
include "observerDesignPattern/Skype.php";
include "observerDesignPattern/Gtalk.php";




$obj = new Observable();
$sk = new Skype();
$gt= new Gtalk();
$s = new stdClass();
$obj->register($sk);
$obj->register($gt);
$obj->register($s);
$obj->stateChange();



?>




<hr/>
35. Decorator Design Pattern
<hr/>

<?php
/*
spl_autoload_register(function($class_name){
		include "IteratorDesignPattern/".$class_name. ".php";
});

$post 	 = new Post();
$comment = new Comment();
$post->filter();
$comment->filter();


if ($BBcodeEnable == false && EmoticonEnable == false) {

	$postContent = $post->getContent();
	$commentContent = $comment->getContent();

} else if($BBcodeEnable == true && EmoticonEnable == false){

		$bb = new BBCodeParser($post);
		$postContent = $bb->getContent();

		$bb = new BBCodeParser($comment);
		$comContent = $bb->getContent();

	} else if($BBcodeEnable == false && EmoticonEnable == true){

		$em = new Emoticon($post);
		$postContent = $em->getContent();

		$em = new Emoticon($comment);
		$comContent = $em->getContent();

}


*/

?>


<hr/>
36. Facade Design Pattern
<hr/>

<?php
/*
spl_autoload_register(function($class_name){
		include "FacadeDesignPattern/".$class_name. ".php";
});

$fa = new Facade();
$fa->findApartments("mirpur, dhaka", "mapdiv");

*/

?>



<hr/>
37. MySQL-Connect OO Way and 38. MySQLi-Select/Update Data OO Way
<hr/>

<?php

/*
$db = new mysqli("localhost", "root", "", "userdata");

if (mysqli_connect_errno()) {
	echo "failed";
	exit();
} else {
	echo "Connected DB successfully";
}



$sql = "select * From tbl_user";

$result = $db->query($sql);
while ($data = $result->fetch_object() ) {
	echo "<pre>";
	echo $data->skill;
	echo "</pre>";
}


$sql = "update tbl_user SET skill='PHP' where id='1' ";

$result = $db->query($sql);

*/

?>


<hr/>
39. MySQLi-Basic Prepared Statements and 40. (MySQLi- Prepared Statement with Variables)
<hr/>

<?php
/*
$db = new mysqli("localhost", "root", "", "userdata");

if (mysqli_connect_errno()) {
	echo "failed";
	exit();
} else {
	echo "Connected DB successfully<br/>";
}

/*
$sql = "select name, skill from  tbl_user order by id";
$stmt = $db->prepare($sql);
$stmt->execute();
$stmt->bind_result($name, $skill);
while ($stmt->fetch()) {
	echo "$name , $skill <br/>";


	*/
/*
	$sql = "insert into tbl_user(name, email, skill) values(?, ?, ?)";
	$stmt = $db->prepare($sql);
	$stmt->bind_param("sss", $name, $email, $skill);
	$name="faria";
	$email="faria@yahoo.com";
	$skill="Blogger";
	$stmt->execute();
	$stmt->close();
	$db->close();
*/

?>



<hr/>
41. BLOB With Prepared Statements
<hr/>



<?php

$db = new mysqli("localhost", "root", "", "test");

if (mysqli_connect_errno()) {
	echo "failed";
	exit();
} else {
	echo "Connected DB successfully<br/>";
}

/*
	$sql = "insert into images(image) values(?)";
	$stmt = $db->prepare($sql);
	$stmt->bind_param("b", $image);
	$image= file_get_contents("me.jpg");
	$stmt->send_long_data(0, $image);
	$stmt->execute();
*/

$sql = "select image from images where id=?";
$stmt = $db->prepare($sql);
$stmt->bind_param('i', $id);
$id = 10;
$stmt->execute();
$stmt->bind_result($image);
$stmt->fetch();
//header("content-type: jpg");
echo '<img src="data:image/jpg;base64, '.base64_encode($image).' "/>';

?>


<hr/>
42. PDO - PHP Data Objects and 43. Prepared Statements with PDO
<hr/>


<?php
/*
$dsn = "mysql:dbname=userdata; host=localhost;";
$user = "root";
$pass="";

try{

		$pdo= new PDO($dsn, $user, $pass);
	}catch(PDOException $e){
	echo "Connection failed....".$e->getMessage();
}

/*42->
$sql = "select * from tbl_user";
$result = $pdo->query($sql);
foreach ($result as $value) {
	echo $value['skill']."<br/>";
}


 $name  = "farzana";
 $email= "farzana@gmail.com";
 $skill= "7";
 $age  = "14";

/*
$sql = "insert into tbl_user(name, email, skill, age) values(?,?,?,?)";
$stmt = $pdo->prepare($sql);
$arr = array($name, $email, $skill, $age);
$stmt->execute($arr);



$sql = "insert into tbl_user(name, email, skill, age) values(:name, :email, :skill, :age)";
$stmt = $pdo->prepare($sql);
$stmt->bindparam(':name', $name);
$stmt->bindparam(':email', $email);
$stmt->bindparam(':skill', $skill);
$stmt->bindparam(':age', $age);
$stmt->execute();
*/

?>


<hr/>
44. bindValue() and bindParam()
<hr/>


<?php
/*
 $name  = "razu";
 $email= "razu@gmail.com";
 $skill= "Blogger";
 $age  = "28";




$sql = "insert into tbl_user(name, email, skill, age) values(:name, :email, :skill, :age)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':skill', $skill);
$stmt->bindValue(':age', 30);
$stmt->execute();
*/

?>

<hr/>
45. Select Data With PDO-Prepared Statements
<hr/>


<?php

$dsn = "mysql:dbname=userdata; host=localhost;";
$user = "root";
$pass="";

try{

$pdo= new PDO($dsn, $user, $pass);
	}catch(PDOException $e){
	echo "Connection failed....".$e->getMessage();
}


$id = 14;
$sql = "select * from tbl_user where id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();

while ($data= $stmt->fetch()) {
	echo "Name: ".$data['name']."<br/>";
	echo "Skill: ".$data['skill']."<br/>";
	echo "Age: ".$data['age']."<br/>";
}

?>


<hr/>
46. Update, Delete Data With PDO-Prepared Statements
<hr/>


<?php

$dsn = "mysql:dbname=userdata; host=localhost;";
$user = "root";
$pass="";

try{

$pdo= new PDO($dsn, $user, $pass);
	}catch(PDOException $e){
	echo "Connection failed....".$e->getMessage();
}

/*
$id = 15;
$skill = "java, php, physics";

$sql = "update tbl_user SET  skill=? where id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute(array($skill, $id));
*/
/*
$id = 18;


$sql = "delete from tbl_user where id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute(array( $id));
*/

$id = 19;


$sql = "delete from tbl_user where id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();

?>



<hr/>
47. CRUD With PDO-Template and Database Design
<hr/>


<?php







?>

<?php include 'inc/footer.php'?>




	
	
