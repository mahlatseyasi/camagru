<?php
session_start();

include_once("functions/camagru.php");
include_once("functions/like.php");

$imagePerPages = 5;

$camagru = get_camagru(0, $imagePerPages);
$more = false;
$lastCamagruId = 0;
if ($camagru != "" && array_key_exists("more", $camagru)) {
  $more = true;
  $lastCamagruId = $camagru[count($camagru) - 2]['id'];
}
?>
<!DOCTYPE html>
<HTML>
  <header>
    <link rel="stylesheet" type="text/css" href="style/views.css">
    <link rel="stylesheet" type="text/css" href="style/modal.css">
    <meta charset="UTF-8">
    <title>CAMAGRU</title>
  </header>
  <body>
    <?php include('fragments/header.php') ?>
    <div id="views">
      <?php
        $gallery = "";
        if ($camagru != null && $camagru['error'] == null) {
          for ($i = 0; $camagru[$i] && $i < $imagePerPages; $i++) {
            $class = "icon";
            if ($camagru[$i]['userid'] === $_SESSION['id']) {
              $class .= " removable";
            }
            $comments = get_comments($camagru[$i]['img']);
            $j = 0;
            $commentsHTML = "";
            while ($comments[$j] != null) {
              $commentsHTML .= "<span class=\"comment\">" . htmlspecialchars($comments[$j]['username']) .": " . htmlspecialchars($comments[$j]['comment']) . "</span>";
              $j++;
            }
            $gallery .= "
            <div class=\"img\" data-img=\"" . $camagru[$i]['img'] . "\">
              <img class=\"" . $class . "\" src=\"Cama-gru/" . $camagru[$i]['img'] . "\"></img>
              <div id=\"buttons-like\">
                <img class=\"button-like\" src=\"img/up.png\" data-image=\"". $camagru[$i]['img'] ."\"></img>
                <span class=\"nb-like\" data-src=\"". $camagru[$i]['img'] ."\">" . get_nb_likes($camagru[$i]['img']) . "</span>
                <img class=\"button-dislike\" src=\"img/down.png\" data-image=\"". $camagru[$i]['img'] ."\"></img>
                <span class=\"nb-dislike\" data-src=\"". $camagru[$i]['img'] ."\">" . get_nb_dislikes($camagru[$i]['img']) . "</span>
              </div>"
              . $commentsHTML .
            "</div>";
          }
          echo $gallery;
        }
       ?>
     </div>
     <div id="modal">
      <div class="modal-content">
        <div class="modal-header">
          <span class="close">×</span>
        </div>
        <div class="modal-body">
          <img id="img-modal">
        </div>
        <div class="modal-footer">
          <textarea <?php if (!$_SESSION['id']) echo "disabled" ?> id="comment" placeholder="Comment..." rows="5" cols="50" maxlength="255"></textarea>
          <div <?php if (!$_SESSION['id']) echo "disabled=\"true\"" ?> id="send-comment" class="button-send <?php if (!$_SESSION['id']) echo "disabled" ?>">Send</div>
        </div>
      </div>
    </div>
    <?php if ($more == true) { ?>
    <div id="load-more" onclick="loadMore(<?php echo($lastCamagruId) ?>, <?php echo($imagePerPages) ?>)">... LOAD MORE</div>
    <?php } ?>
    <?php include('fragments/footer.php') ?>
  </body>
  <script type="text/javascript" src="js/modal.js"></script>
  <script type="text/javascript" src="js/like.js"></script>
  <script type="text/javascript" src="js/loadMore.js"></script>
</HTML>
