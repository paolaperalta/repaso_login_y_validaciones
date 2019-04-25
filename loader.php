<?php


require 'validator.php';
require 'Classes/UserFactory.php';
require 'Classes/Database.php';
require 'helpers.php';

$validator = new validator();

$factory = new UserFactory();

$db = new Database('users.json');

//var_dump ($db);
//exit;

//tengo un objeto que en un momento dado escupe un array (el array de errores)
//if ($_POST){
//  $errores = $validator->validate($_POST);
  //if (count ($errors)==0){ //si no hay errores, podés seguir
//}
//}
