<?php
session_start();
require_once 'twig.php';

$twig = init_twig();

$message = '';
$formHidden = false;

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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Simuler l'envoi du message
    $message = "Votre message a bien été envoyé. Nous vous répondrons dans les plus brefs délais.";
    $formHidden = true;
}

echo $twig->render('contact.twig', [
    'message' => $message,
    'formHidden' => $formHidden,
    'pages' => $pages
]);
?>