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
          $view = 'admin/detail_cours.twig';
          $data = [
              'category_title' => 'Détail de l\'article de cours',
              'articles' => article_cours::readOne($id),
              'page' => $page,
              'pages' => 'admin_article'
          ];
      } 
      elseif ($action === 'delete') {
          $bloc = article_cours::readOne($id);
          article_cours::delete($id);
          header("Location: admin_article.php?page=article_cours");
          exit;
      }
      elseif ($action === 'create') {
          $bloc = new article_cours();
          if($bloc->chargePOSTcours() && $bloc->create()) {
              header("Location: admin_article.php?page=article_cours");
              exit;
          } else {
              $view = 'admin/form_article_cours.twig';
              $data = [
                  'error' => 'Erreur lors de la création de l\'article',
                  'page' => $page,
                  'pages' => 'admin_article'
              ];
          }
      }
      elseif ($action === 'edit') {
          $view = 'admin/edit_article_cours.twig';
          $data = [
              'article' => article_cours::readOne($id),
              'page' => $page,
              'pages' => 'admin_article'
          ];
      }
      elseif ($action === 'update') {
          $bloc = new article_cours();
          if($bloc->chargePOSTcours() && $bloc->update()) {
              header("Location: admin_article.php?page=article_cours&action=read&id=" . $_POST['id_bloc']);
              exit;
          } else {
              $view = 'admin/edit_article_cours.twig';
              $data = [
                  'error' => 'Erreur lors de la modification de l\'article',
                  'article' => $bloc,
                  'page' => $page,
                  'pages' => 'admin_article'
              ];
          }
      }
      else {
          $view = 'admin/articles_cours.twig';
          $data = [
              'category_title' => 'Articles de Cours',
              'articles' => article_cours::readAll(),
              'page' => $page,
              'pages' => 'admin_article'
          ];
      }
      break;

  case 'form_article_cours':
      $view = 'admin/form_article_cours.twig';
      $data = [
          'page' => 'article_cours',
          'pages' => 'admin_article'
      ];
      break;

  case 'article_mat':
    if ($action === 'read' && $id > 0) {
        // Si on veut lire un article spécifique
        $view = 'admin/detail_mat.twig';
        $data = [
            'category_title' => 'Détail du matériel ',
            'articles' => article_mat::readOne($id),
            'page' => $page,
            'pages' => 'admin_article'
        ];
    } elseif ($action === 'delete'){
        $bloc = article_mat::readOne($id);
        article_mat::delete($id);
        header("Location: admin_article.php");
    }
    elseif ($action === 'create') {
      $bloc = new article_mat();
      if($bloc->chargePOSTmat() && $bloc->create()) {
          header("Location: admin_article.php?page=article_mat");
          exit;
      } else {
          $view = 'admin/form_article_mat.twig';
          $data = [
              'error' => 'Erreur lors de la création de l\'article',
              'page' => $page,
              'pages' => 'admin_article'
          ];
      }
  }
  elseif ($action === 'edit') {
      $view = 'admin/edit_article_mat.twig';
      $data = [
          'article' => article_mat::readOne($id),
          'page' => $page,
          'pages' => 'admin_article'
      ];
  }
  elseif ($action === 'update') {
      $bloc = new article_mat();
      if($bloc->chargePOSTmat() && $bloc->update()) {
          header("Location: admin_article.php?page=article_mat&action=read&id=" . $_POST['id_bloc']);
          exit;
      } else {
          $view = 'admin/edit_article_mat.twig';
          $data = [
              'error' => 'Erreur lors de la modification de l\'article',
              'article' => $bloc,
              'page' => $page,
              'pages' => 'admin_article'
          ];
      }
  }
    else {
      $view = 'admin/articles_mat.twig';
      $data = [
          'category_title' => 'Articles de Matériel',
          'articles' => article_mat::readAll($pdo),
          'page' => $page,
          'pages' => 'admin_article'
      ];
    }
      break;

      case 'form_article_mat':
        $view = 'admin/form_article_mat.twig';
        $data = [
            'page' => 'article_mat',
            'pages' => 'admin_article'
        ];
        break;

  case 'article_tuto':
    if ($action === 'read' && $id > 0) {
        // Si on veut lire un article spécifique
        $view = 'admin/detail_tuto.twig';
        $data = [
            'category_title' => 'Détail de l\'article de cours',
            'articles' => article_tuto::readOne($id),
            'page' => $page,
            'pages' => 'admin_article'
        ];
    } elseif ($action === 'delete'){
        $bloc = article_tuto::readOne($id);
        article_tuto::delete($id);
        header("Location: admin_article.php");
    }

    elseif ($action === 'create') {
      $bloc = new article_tuto();
      if($bloc->chargePOSTtuto() && $bloc->create()) {
          header("Location: admin_article.php?page=article_tuto");
          exit;
      } else {
          $view = 'admin/form_article_tuto.twig';
          $data = [
              'error' => 'Erreur lors de la création de l\'article',
              'page' => $page,
              'pages' => 'admin_article'
          ];
      }
  }
  elseif ($action === 'edit') {
      $view = 'admin/edit_article_tuto.twig';
      $data = [
          'article' => article_tuto::readOne($id),
          'page' => $page,
          'pages' => 'admin_article'
      ];
  }
  elseif ($action === 'update') {
      $bloc = new article_tuto();
      if($bloc->chargePOSTtuto() && $bloc->update()) {
          header("Location: admin_article.php?page=article_tuto&action=read&id=" . $_POST['id_bloc']);
          exit;
      } else {
          $view = 'admin/edit_article_tuto.twig';
          $data = [
              'error' => 'Erreur lors de la modification de l\'article',
              'article' => $bloc,
              'page' => $page,
              'pages' => 'admin_article'
          ];
      }
  }
    else {
      $view = 'admin/articles_tuto.twig';
      $data = [
          'category_title' => 'Tutoriels',
          'articles' => article_tuto::readAll($pdo),
          'page' => $page,
          'pages' => 'admin_article'
      ];
    }
      break;

      case 'form_article_tuto':
        $view = 'admin/form_article_tuto.twig';
        $data = [
            'page' => 'article_cours',
            'pages' => 'admin_article'
        ];
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
        'pages' => 'admin_article'
        ];
        break;
  }


// Render the view
echo $twig->render($view, $data);
?>