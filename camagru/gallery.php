<?php
session_start();

include_once("functions/camagru.php");

$camagru = get_all_camagru();
?>
<!DOCTYPE html>
<HTML>
  <header>
    
    <link rel="stylesheet" type="text/css" href="style/gallery.css">
    <meta charset="UTF-8">
    <title>CAMAGRU - gallery</title>
  </header>
  <body>
    <?php include('fragments/header.php') ?>
      <div class="body">
        <?php if(isset($_SESSION['id'])) { ?>
        <div class="main">
    		  <div class="select">
      			<img class="thumbnail" src="img/cadre.png">
      			<input id="cadre.png" type="radio" name="img" value="./img/cadre.png" onclick="onCheckBoxChecked(this)">
      			<img class="thumbnail" src="img/cigarette.png">
      			<input id="cigarette.png" type="radio" name="img" value="./img/cigarette.png" onclick="onCheckBoxChecked(this)">
      			<img class="thumbnail" src="img/hat.png">
      			<input id="hat.png" type="radio" name="img" value="./img/hat.png" onclick="onCheckBoxChecked(this)">
    		  </div>
          <video width="100%" autoplay="true" id="webcam"></video>
          <div id="camera-not-available">CAMERA NOT AVAILABLE</div>
          <img id="hat" style="display:none;" src="img/hat.png">
          <img id="cigarette" style="display:none;" src="img/cigarette.png">
          <img id="cadre" style="display:none;" src="img/cadre.png">
    		  <div class="capture" id="pickImage">
            <img class="camera" src="img/camera.png">
          </div>
          <canvas id="canvas" style="display:none;" width="640" height="480"></canvas>
          <div class="captureFile" id="pickFile">
            <img class="camera" src="img/camera.png">
          </div>
          <input type="file" id="take-picture" style="display:none;" accept="image/*">
        </div>
        <div class="side">
			<div class="title">Previews</div>
      <div id="miniatures">
        <?php
          $gallery = "";
          if ($camagru != null) {
            for ($i = 0; $camagru[$i] ; $i++) {
              $class = "icon";
              if ($camagru[$i]['userid'] === $_SESSION['id']) {
                $class .= " removable";
              }
              $gallery .= "<img class=\"" . $class . "\" src=\"./Cama-gru/" . $camagru[$i]['img'] . "\" data-userid=\"" . $camagru[$i]['userid'] . "\"></img>";
            }
            echo $gallery;
          }
        ?>
      </div>
		</div>
        <?php } else { ?>
          You need to connect to use the gallery
        <?php } ?>
      </div>
    <?php include('fragments/footer.php') ?>
  </body>
  <?php if(isset($_SESSION['id'])) { ?>
  <script type="text/javascript" src="js/webcam.js"></script>
  <script type="text/javascript" src="js/drop.js"></script>
  <script type="text/javascript" src="js/import.js"></script>
  <?php } ?>
</HTML>
