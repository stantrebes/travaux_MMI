<?php
session_start();

include('connexion.php');
$pdo = connexion();

// Récupérer les données du formulaire de connexion
$identifiant = $_POST['identifiant'];
$mdp = $_POST['mdp'];

$sql = "SELECT id_cli, mdp_cli, rol FROM Client WHERE identifiant = :identifiant";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':identifiant', $identifiant);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Stocker toutes les informations importantes en session
    $_SESSION['id_cli'] = $result['id_cli'];
    $_SESSION['rol'] = $result['rol'];
    $_SESSION['identifiant'] = $identifiant;
    
    switch ($result['rol']) {
        case 'client':
            header("Location: client_article.php");
            break;
        case 'admin':
            header("Location: admin_article.php");
            break;
        case 'pro':
            header("Location: pro_article.php");
            break;
        default:
            header("Location: index.php");
    }
    exit();
} else {
    $_SESSION['error'] = "Identifiants incorrects";
    header("Location: login.php");
    exit();
}
