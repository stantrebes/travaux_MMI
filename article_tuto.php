<?php


class article_tuto {
    public $id_bloc;
    public $titre;
    public $img;
    public $detail;
    public $texte;
    public $vendeur;
    public $filtre;
    public $id_auteur;

    function chargePOSTtuto() {
      $this->id_bloc = isset($_POST['id_bloc']) ? $_POST['id_bloc'] : null;
      $this->titre = !empty($_POST['titre']) ? htmlspecialchars($_POST['titre']) : null;
      $this->img = !empty($_POST['img']) ? htmlspecialchars($_POST['img']) : null;
      $this->detail = !empty($_POST['detail']) ? htmlspecialchars($_POST['detail']) : null;
      $this->texte = !empty($_POST['texte']) ? htmlspecialchars($_POST['texte']) : null;
      $this->vendeur = !empty($_POST['vendeur']) ? htmlspecialchars($_POST['vendeur']) : null;
      $this->filtre = !empty($_POST['filtre']) ? htmlspecialchars($_POST['filtre']) : null;
      $this->id_auteur = isset($_POST['id_auteur']) ? $_POST['id_auteur'] : null;

      return $this->validateData();
  }

  private function validateData() {
      return !empty($this->titre) && 
             !empty($this->img) && 
             !empty($this->detail) && 
             !empty($this->texte) && 
             !empty($this->vendeur) && 
             !empty($this->filtre);
  }

  static function readAll() {
      $sql = 'SELECT * FROM article_tuto';
      $pdo = connexion();
      $query = $pdo->prepare($sql);
      $query->execute();
      return $query->fetchAll(PDO::FETCH_CLASS, 'article_tuto');
  }

  static function readOne($id) {
      $sql = 'SELECT * FROM article_tuto WHERE id_bloc = :id';
      $pdo = connexion();
      $query = $pdo->prepare($sql);
      $query->bindValue(':id', $id, PDO::PARAM_INT);
      $query->execute();
      return $query->fetchObject('article_tuto');
  }

  function create() {
      try {
          $sql = 'INSERT INTO article_tuto (titre, img, detail, texte, vendeur, filtre, id_auteur) 
                  VALUES (:titre, :img, :detail, :texte, :vendeur, :filtre, :id_auteur)';
          
          $pdo = connexion();
          $query = $pdo->prepare($sql);
          
          $query->bindValue(':titre', $this->titre, PDO::PARAM_STR);
          $query->bindValue(':img', $this->img, PDO::PARAM_STR);
          $query->bindValue(':detail', $this->detail, PDO::PARAM_STR);
          $query->bindValue(':texte', $this->texte, PDO::PARAM_STR);
          $query->bindValue(':vendeur', $this->vendeur, PDO::PARAM_STR);
          $query->bindValue(':filtre', $this->filtre, PDO::PARAM_STR);
          $query->bindValue(':id_auteur', $this->id_auteur, PDO::PARAM_STR);
          
          return $query->execute();
      } catch (PDOException $e) {
          error_log("Erreur lors de la création du tutoriel : " . $e->getMessage());
          return false;
      }
  }

  function update() {
      try {
          $sql = 'UPDATE article_tuto 
                  SET titre = :titre, 
                      img = :img, 
                      detail = :detail, 
                      texte = :texte, 
                      vendeur = :vendeur, 
                      filtre = :filtre,
                      id_auteur = :id_auteur
                  WHERE id_bloc = :id_bloc';
          
          $pdo = connexion();
          $query = $pdo->prepare($sql);
          
          $query->bindValue(':id_bloc', $this->id_bloc, PDO::PARAM_INT);
          $query->bindValue(':titre', $this->titre, PDO::PARAM_STR);
          $query->bindValue(':img', $this->img, PDO::PARAM_STR);
          $query->bindValue(':detail', $this->detail, PDO::PARAM_STR);
          $query->bindValue(':texte', $this->texte, PDO::PARAM_STR);
          $query->bindValue(':vendeur', $this->vendeur, PDO::PARAM_STR);
          $query->bindValue(':filtre', $this->filtre, PDO::PARAM_STR);
          $query->bindValue(':id_auteur', $this->id_auteur, PDO::PARAM_INT);
          
          return $query->execute();
      } catch (PDOException $e) {
          error_log("Erreur lors de la mise à jour du tutoriel : " . $e->getMessage());
          return false;
      }
  }

  static function delete($id) {
      try {
          $sql = 'DELETE FROM article_tuto WHERE id_bloc = :id';
          $pdo = connexion();
          $query = $pdo->prepare($sql);
          $query->bindValue(':id', $id, PDO::PARAM_INT);
          return $query->execute();
      } catch (PDOException $e) {
          error_log("Erreur lors de la suppression du tutoriel : " . $e->getMessage());
          return false;
      }
  }
}
?>