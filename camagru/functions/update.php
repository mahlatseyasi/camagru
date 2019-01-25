<?php

function update($id, $username, $password, $settings, $host) {
  include_once '../setup/database.php';
  include_once '../functions/mail.php';

  $mail = strtolower($mail);

  try {
          $dbh = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
          $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $query= $dbh->prepare("SELECT * FROM users WHERE  id=:id");
          $query->execute(array(':id' => $id));
          
          // encrypt password
          $password = hash("whirlpool", $password);

          if ($val = $query->fetch()) {
            $query= $dbh->prepare("UPDATE users SET username = :username, password = :password, settings = :settings WHERE id=:id");
            $query->execute(array(':username' => $username, ':password' => $password, ':settings' => $settings, ':id' => $id));
            $_SESSION['error'] = "update success";
            $query->closeCursor();
            return(0);
          }
          else{
            return (-1);
          }
         
      } catch (PDOException $e) {
          $_SESSION['error'] = "ERROR: ".$e->getMessage();
      }
}

?>
