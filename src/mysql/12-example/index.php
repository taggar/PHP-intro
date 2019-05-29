<?php
/**
 * In dit voorbeeld halen overlopen we alle kolommen van de $user en tonen we deze
 */

$databaseHost = "localhost";
$databaseName = "stackoverflow";
$databaseUser = "stackuser";
$databasePassword = "stackpass";

$pdo = new PDO("mysql:host=" . $databaseHost . ";dbname=" . $databaseName, $databaseUser, $databasePassword);
$pdo->exec("SET CHARACTER SET utf8");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Macoverflow</title>
  </head>
  <body>
    <dl>
      <?php
      $sql = "SELECT * FROM `users` WHERE `id` = 2";
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      $user = $stmt->fetch(PDO::FETCH_ASSOC);
      foreach($user as $col => $value) {
        echo '<dt>' . $col . '</dt>';
        echo '<dd>' . $value . '</dd>';
      }
      ?>
    </dl>
  </body>
</html>
