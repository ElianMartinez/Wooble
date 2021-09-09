<?php 
error_reporting(E_ERROR);
// Desactivar toda notificación de e

$server ='localhost';
$username = 'root';
$password = '';
$database = 'socios';

try {
	$conn = new PDO("mysql:host=$server;dbname=$database;",$username,$password);
	
} catch (PDOException $e) { 
	die('Connection fail: '.$e->GetMessage());
}
 ?> 