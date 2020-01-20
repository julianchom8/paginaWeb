<?php
//clase conexion 

class Conexion{

//atributs para conectar a mysql
private $db = 'mysql:host=localhost;dbname=arquitectu';
private $user = 'root';
private $pass = '';

//metodo
 public function Conectar(){

 	// prograna PDO
 	$base = new PDO($this->db,$this->user,$this->pass);
 	return $base;
 

 }




}



?>