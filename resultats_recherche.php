<?php
include('twig.php');
$twig = init_twig();

include('connexion.php');
$pdo = connexion();

session_start();
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

$query = isset($_GET['query']) ? trim($_GET['query']) : '';

if (!empty($query)) {
    $sql = 'SELECT id_bloc AS id, titre, img, "cours" AS type FROM article_cours WHERE LOWER(titre) LIKE :query
    UNION ALL
    SELECT id_bloc AS id, titre, img, "mat" AS type FROM article_mat WHERE LOWER(titre) LIKE :query
    UNION ALL
    SELECT id_bloc AS id, titre, img, "tuto" AS type FROM article_tuto WHERE LOWER(titre) LIKE :query';

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':query', '%'. strtolower($query). '%', PDO::PARAM_STR);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

echo $twig->render('resultats_recherche.twig', [
    'query' => $query,
    'results' => $results,
    'pages' => $pages // Passer la variable pages au template
]);
?>