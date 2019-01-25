<?php
session_start();

include_once '../functions/signup.php';

// retreive values
$mail = $_POST['email'];
$login = $_POST['login'];
$password1 = $_POST['password1'];


$_SESSION['error'] = null;

if(!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
  $_SESSION['error'] = "You need to enter a valid email";
  header("Location: ../signup.php");
  return;
}

if (strlen($login) > 50 || strlen($login) < 3) {
  $_SESSION['error'] = "Username should be beetween 3 and 50 characters";
  header("Location: ../signup.php");
  return;
}

$url = $_SERVER['HTTP_HOST'] . str_replace("/forms/signup.php", "", $_SERVER['REQUEST_URI']);

signup($mail, $login, $password1, $url);

header("Location: ../signup.php");
?>
