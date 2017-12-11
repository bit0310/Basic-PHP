<?php

class Emoticon{
	private $post;

	function __construct($object){
		$this->post = $object;

	}

	public function getContent(){
		$post->filter();
		$content = $this->parseEmoticon($post->getContent());
		return $content;
	}

	private function parseEmoticon($content){

		// your coding will be go here
	}
}




?>