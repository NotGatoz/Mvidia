<?php    
$servername = 'localhost';
$user = 'root';
$pass = '';
$db = 'marktplaats';

$conn = new mysqli($servername,$user, $pass, $db) or die("Connect failed: %s\n". $conn -> error);


?>