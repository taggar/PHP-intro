<?php

$pdo = new PDO("mysql:host=localhost;dbname=stackoverflow", "stackuser", "dbuser");

//gebruik een placeholder in je SQL query

$sql = "SELECT * FROM users WHERE `id`=:id";

//prepare je statement
$statement = $pdo->prepare( $sql );

//vervang de placeholder via de 'bindValue' method
$statement->bindValue(":id", 55);

//voer tenslotte je statement uit
$statement->execute();

$results = $statement->fetchAll( PDO::FETCH_ASSOC );
echo '<pre>';
var_dump( $results );
echo '</pre>';
echo ("\n------------------------------------------------------\n");




$sql = "SELECT * FROM `users` WHERE `location` LIKE '%San Francisco%'";

$statement = $pdo->prepare( $sql );

$statement->execute();

$results = $statement->fetchAll( PDO::FETCH_ASSOC );
echo '<pre>';
var_dump( $results );
echo '</pre>';




?>