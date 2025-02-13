<?php
// on inclut le fichier de configuration
include('config.php');
 
function connexion() {
 
  global $config;
 
  $pdo = new PDO('mysql:host=tp2.iha.unistra.fr;dbname=trebes_SAE301;charset=utf8', 'trebes', 'Theroyalof15092004_');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

 
  if ($pdo) {
    return $pdo;
  } else {
    echo '<p>Connexion impossible !</p>';
    exit; 
  }
}

?>