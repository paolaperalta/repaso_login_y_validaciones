<?php

function dump ($param)
{
  echo'<pre>';

}

function redirect ($location)
{
  header ('Location:' . $location);
  exit;
}


function check($email)
{
  return isset($_SESSION);
}
