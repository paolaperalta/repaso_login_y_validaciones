<?php
require 'loader.php';

if($_POST){
  $errors = $validator->validate($_POST);
  if(count($errors) == 0){
    $userArray = $factory ->create($_POST);

    $db->save($userArray);
    redirect ('login.php');
  }
}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1 class="text-center">Registrarse</h1>
    


    <form action="" method="post" class="col-md-6 offset-md-3">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" name="password">
      </div>
      <div class="form-group">
        <label for="">Confirm Password</label>
        <input type="confirmPassword" class="form-control" name="confirmPassword">
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </body>
</html>
