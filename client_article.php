<?php

include('connexion.php');
include('article_cours.php');
include('article_tuto.php');
include('article_mat.php');
include('twig.php');

$pdo = connexion();
$twig = init_twig();

if (isset($_GET['page'])) $page = $_GET['page']; else $page = '';
if (isset($_GET['action'])) $action = $_GET['action']; else $action = 'read';
if (isset($_GET['id'])) $id = intval($_GET['id']); else $id = 0;

$view = 'base.twig';
$data = [];

switch ($page) {
    case 'article_cours':
        if ($action === 'read' && $id > 0) {
            // Si on veut lire un article spécifique
            $view = 'client/detail_cours.twig';
            $data = [
                'category_title' => 'Détail de l\'article de cours',
                'articles' => article_cours::readOne($id),
                'page' => $page,
                'pages' => 'client_article'
            ];
        } else {
            // Afficher tous les articles de cours
            $view = 'client/articles_cours.twig';
            $data = [
                'category_title' => 'Articles de Cours',
                'articles' => article_cours::readAll($pdo),
                'page' => $page,
                'pages' => 'client_article'
            ];
        }
        break;

  case 'article_mat':
    if ($action === 'read' && $id > 0) {
        // Si on veut lire un article spécifique
        $view = 'client/detail_mat.twig';
        $data = [
            'category_title' => 'Détail du matériel ',
            'articles' => article_mat::readOne($id),
            'page' => $page,
            'pages' => 'client_article'
        ];
    } else {
      $view = 'client/articles_mat.twig';
      $data = [
          'category_title' => 'Articles de Matériel',
          'articles' => article_mat::readAll($pdo),
          'page' => $page,
          'pages' => 'client_article'
      ];
    }
      break;

  case 'article_tuto':
    if ($action === 'read' && $id > 0) {
        // Si on veut lire un article spécifique
        $view = 'client/detail_tuto.twig';
        $data = [
            'category_title' => 'Détail de l\'article de cours',
            'articles' => article_tuto::readOne($id),
            'page' => $page,
            'pages' => 'client_article'
        ];
    } else {
      $view = 'client/articles_tuto.twig';
      $data = [
          'category_title' => 'Tutoriels',
          'articles' => article_tuto::readAll($pdo),
          'page' => $page,
          'pages' => 'client_article'
      ];
    }
      break;

  default:
      // La page d'accueil avec les catégories
      $view = 'base.twig';
      $data = [ 'category_title' => 'Tous les Articles',
      'articles' => [ 
      'cours' => article_cours::readAll($pdo),
      'materiaux' => article_mat::readAll($pdo),
      'tutoriels' => article_tuto::readAll($pdo)
      ],
      'pages' => 'client_article'
      ];
      break;
}


// Render the view
echo $twig->render($view, $data);
?>