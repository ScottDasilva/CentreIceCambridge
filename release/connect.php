
<?php
/**
 * Author:  Scott Da Silva
 * ID:      000771150
 * 
 * 
 * This is solely my work.
 */



try {
    $dbh = new PDO("mysql:host=localhost;dbname=000771150", "000771150", "19910502");
    
} catch (Exception $e) {
    die('ERROR: '.$e->getMessage());
}
