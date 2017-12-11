<?php

Abstract class per{

	public function work(){

		echo "Base class constant and class name-> ".__CLASS__. "<br/>";//base class return kore
		echo "Base class Function and class name-> ".get_class($this). "<br/>";
		
	}


}

?>