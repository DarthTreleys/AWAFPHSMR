<?php
session_start();

$host = "localhost";
$usuari = "admin";
$contrasenya = "ubu";
$bbdd = "ProjecteFinal";

try {
  $pdo = new PDO("mysql:host=$host;dbname=$bbdd;charset=utf8", $usuari, $contrasenya);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Error de connexió: " . $e->getMessage());
}
?>
