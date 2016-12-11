<?php

session_start();
if(isset($_SESSION['logged_in']))
{

unset($_SESSION);
session_destroy();
$url='../index.php';
  echo '<script>window.location = "'.$url.'";</script>';
exit();
}
else
{
    $url='../index.php';
  echo '<script>window.location = "'.$url.'";</script>';
  exit();
}



?>