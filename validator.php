<?php

class Validator
{
  public function validate ($data)
  {
    errors==array();

    if ($data['email']==""){
        $errors ['email']="El email está vacío";
      }else if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
        $errors ['email']="Esto no es un email valido";
    }

    if ($data['password']==""){
        $errors ['password']="El password está vacío";
    }

    return $errors;
  }
}

 ?>
