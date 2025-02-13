<?php
include('connexion.php');
$pdo = connexion();
// Récupérer les données du formulaire d'inscription
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$identifiant = $_POST['identifiant'];
$adresse = $_POST['adresse'];
$mdp = $_POST['mdp'];
$rol = $_POST['rol'];

// Insérer les données dans la table Client
// Insérer les données dans la table Client
$sql = "INSERT INTO Client (nom_cli, prenom_cli, identifiant, adresse_cli, mdp_cli, rol)
        VALUES (:nom, :prenom, :identifiant, :adresse, :mdp, :rol)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':prenom', $prenom);
$stmt->bindParam(':identifiant', $identifiant);
$stmt->bindParam(':adresse', $adresse);
$stmt->bindParam(':mdp', $mdp);
$stmt->bindParam(':rol', $rol);

            if ($stmt->execute()) {
                if ($rol === 'client'){
                // Rediriger l'utilisateur vers une page de succès ou afficher un message de succès
                header("Location: client_article.php");
                exit();}
                elseif ($rol === 'admin'){
                    header("Location: admin_article.php");
                    exit();}
                    elseif ($rol === 'pro'){
                        header("Location: pro_article.php");
                        exit();}
            } else {
                // Afficher un message d'erreur en cas d'échec de l'insertion
                $error_message = "Erreur lors de l'inscription. Veuillez réessayer.";
            }
        

?>
