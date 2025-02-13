
<?php
// Pour les utilisateurs de MAMP (Mac) : force l'affichage des erreurs PHP
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Initialise Twig
include('twig.php');
$twig = init_twig();

// Importe la fonction de connexion
include('connexion.php');
$pdo = connexion();


// Lancement du moteur Twig avec les données
echo $twig->render('user.twig', [
    'pages' => 'client_article'
]);
?>
