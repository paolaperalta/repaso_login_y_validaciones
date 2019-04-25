<?php

class Database
{
  private $file;


  public function __construct($file)
  {
    $this->file=$file;
  }

  public function save ($userArray)
  {
    $user=json_encode($userArray);
  }


}
