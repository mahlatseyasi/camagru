<?php
session_start();

include_once("../functions/camagru.php");
include_once("../functions/like.php");

$id = $_POST['id'];
$nb = $_POST['nb'];

if ($id == null || $id == "" || $nb == null || $nb == "") {
  echo "KO";
  return;
}

$camagru = [];

$camagru= get_camagru2($id, $nb);
for ($i = 0; $i < count($camagru); $i++) {
  $camagru[$i]['dislikes'] = get_nb_dislikes2($camagru[$i]['img']);
  $camagru[$i]['likes'] = get_nb_likes2($camagru[$i]['img']);
  $comments = get_comments2($camagru[$i]['img']);
  if ($comments[0] != null) {
    $camagru[$i]['comments'] = $comments;
  } else {
    $camagru[$i]['comments'] = null;
  }
}
if (count($camagru) <= 0) {
  echo "KO";
  return;
}
print_r(json_encode($camagru));

?>
