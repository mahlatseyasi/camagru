<?php
session_start();

include_once("../functions/camagru.php");

$uid = $_SESSION['id'];
$src = $_POST['src'];

$val = remove_camagru($uid, $src);

if ($val == 0) {
  echo "OK";
  unlink("../Cama-gru/" . $src);
} else {
  echo "KO";
}

?>
