<?php
  $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../classes/Project.php');
	$pro = new Project();

	If($_SERVER["REQUEST_METHOD"] == "POST"){
		$content = $_POST['content'];
		$contentid = $_POST['contentid'];
		$autosave = $pro->contenAutoSave($content,$contentid);
	}
?>