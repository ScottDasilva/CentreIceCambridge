
<?php
/**
 * Author:  Scott Da Silva
 * ID:      000771150
 
 * 
 * This is solely my work.
 */

require "connect.php";

$command = "SELECT * FROM reviews ORDER BY reviewID DESC";
$statement = $dbh->prepare($command);
$statement->execute();
$results = $statement->fetchAll();


header("Content-Type: application/json");

echo json_encode($results);
 