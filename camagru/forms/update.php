<?php
session_start();

include_once '../functions/update.php';

// retreive values
$login = $_POST['login'];
$password1 = $_POST['password1'];
$id = $_SESSION['id'];
$settings = $_SESSION['settings'];

$_SESSION['error'] = null;

if (strlen($login) > 50 || strlen($login) < 3) {
  $_SESSION['error'] = "Username should be beetween 3 and 50 characters";
  header("Location: ../update.php");
  return;
}

$url = $_SERVER['HTTP_HOST'] . str_replace("/forms/update.php", "", $_SERVER['REQUEST_URI']);

$_SESSION['update_success'] = null;
if(update($id, $login, $password1, $settings, $url) == -1)
  header("Location: ../update.php");
else {
  header("Location: ../update.php");
}

?>
