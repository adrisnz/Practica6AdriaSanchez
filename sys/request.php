<?php 

class Request{

static private $query=array();

static function retrieve()
	{

$array_query=explode('/', $_SERVER['REQUEST_URI']);
array_shift($array_query);
array_pop($array_query);
var_dump($array_query);	}

}	

/*
static function getCont(){


}

	static function getAct(){

	}

	static function getParams(){

	}
	

*/
 ?>