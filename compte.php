<?php
session_start();

include('connexion.php');
include('client.php');
include('twig.php');
include('article_cours.php');
include('article_tuto.php');
include('article_mat.php');

$twig = init_twig();
$pdo = connexion();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['id_cli'])) {
    header('Location: index.php');
    exit;
}

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

$message = '';
$error = '';

// Récupérer les données du client
$client = Client::readOne($_SESSION['id_cli']);

// Récupérer les articles si l'utilisateur est admin ou pro
$articles_cours = [];
$articles_mat = [];
$articles_tuto = [];

if ($client->rol == 'admin' || $client->rol == 'pro') {
    // Récupérer tous les articles associés à cet utilisateur
    $sql_cours = 'SELECT * FROM article_cours WHERE id_auteur = :id';
    $sql_mat = 'SELECT * FROM article_mat WHERE id_auteur = :id';
    $sql_tuto = 'SELECT * FROM article_tuto WHERE id_auteur = :id';

    $query = $pdo->prepare($sql_cours);
    $query->execute(['id' => $_SESSION['id_cli']]);
    $articles_cours = $query->fetchAll(PDO::FETCH_CLASS, 'article_cours');

    $query = $pdo->prepare($sql_mat);
    $query->execute(['id' => $_SESSION['id_cli']]);
    $articles_mat = $query->fetchAll(PDO::FETCH_CLASS, 'article_mat');

    $query = $pdo->prepare($sql_tuto);
    $query->execute(['id' => $_SESSION['id_cli']]);
    $articles_tuto = $query->fetchAll(PDO::FETCH_CLASS, 'article_tuto');
}

// Traiter les actions
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'update':
            if ($client->update($_POST)) {
                $message = 'Profil mis à jour avec succès';
                $client->readOne($_SESSION['id_cli']); // Recharger les données
            } else {
                $error = 'Erreur lors de la mise à jour';
            }
            break;

        case 'delete':
            if ($client->delete()) {
                session_destroy();
                header('Location: index.php?message=compte_supprime');
                exit;
            } else {
                $error = 'Erreur lors de la suppression du compte';
            }
            break;
    }
}

echo $twig->render('compte.twig', [
    'client' => [
        'id' => $client->id_cli,
        'nom' => $client->nom_cli,
        'prenom' => $client->prenom_cli,
        'adresse' => $client->adresse_cli,
        'identifiant' => $client->identifiant,
        'rol' => $client->rol,
        'mdp' => $client->mdp_cli
    ],
    'message' => $message,
    'error' => $error,
    'pages' => $pages,
    'articles_cours' => $articles_cours,
    'articles_mat' => $articles_mat,
    'articles_tuto' => $articles_tuto
]);
?>