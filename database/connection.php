<?php 
$db_user = 'root';
$db_pass = '';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=sunset',$db_user, $db_pass);
} catch (PDOException $e) {
    print "Database error: " . $e->getMessage() . "<br/>";
    die();
}
?>