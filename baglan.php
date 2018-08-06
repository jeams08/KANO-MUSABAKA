<?php
$servername ="localhost";
$username ="root";
$password ="12345678";
$dbname = "kayit";


try {
     $db = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $password);

     $db-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch ( PDOException $e )
{
	echo "Bağlatı hatası..".$e->getMessage();
}
?>