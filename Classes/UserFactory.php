<?php

class UserFactory
{
  public function create($data)
  {
    $response = [
      'email'=> $data ['email'],
      'password'=> password_hash($data['password'], PASSWORD_DEFAULT)
    ];

    return $response;
  }
}
