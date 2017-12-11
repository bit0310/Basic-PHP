<?php
	class calculator{

		function add($a, $b){
			echo "Summation= ".($a+$b)."<br/>";
		}

		function minus($a, $b){
			echo "Subtraction= ".($a-$b)."<br/>";
		}

		function multi($a, $b){
			echo "Multiplication= ".($a*$b)."<br/>";
		}

		function div($a, $b){
			echo "Division= ".($a/$b);
		}
	}

?>