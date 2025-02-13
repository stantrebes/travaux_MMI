<?php
session_start();
require_once 'twig.php';

$twig = init_twig();

// Déterminer la page en fonction du type d'utilisateur
$pages = '';
if (isset($_SESSION['rol'])) {
    switch ($_SESSION['rol']) {
        case 'admin':
            $pages = 'admin_article';
            break;
        case 'pro':
            $pages = 'pro_article';
            break;
        default:
            $pages = 'client_article';
    }
} else {
    $pages = 'client_article';
}

echo $twig->render('mention-legale.twig', [
    'pages' => $pages
]);
?>