<?php

class BBCodeParser{
	private $post;

	function __construct($object){
		$this->post = $object;

	}

	public function getContent(){
		$post->filter();
		$content = $this->parseBBCode($post->getContent());
		return $content;
	}

	private function parseBBCose($content){

		// your coding will be go here
	}
}




?>