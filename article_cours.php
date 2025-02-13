<?php
class article_cours {
    public $id_bloc;
    public $titre;
    public $img;
    public $detail;
    public $dates;
    public $duree;
    public $prix;
    public $vendeur;
    public $filtre;
    public $id_auteur;

    function chargePOSTcours() {
        $this->id_bloc = isset($_POST['id_bloc']) ? $_POST['id_bloc'] : null;
        $this->titre = !empty($_POST['titre']) ? htmlspecialchars($_POST['titre']) : null;
        $this->img = !empty($_POST['img']) ? htmlspecialchars($_POST['img']) : null;
        $this->detail = !empty($_POST['detail']) ? htmlspecialchars($_POST['detail']) : null;
        $this->dates = !empty($_POST['dates']) ? $_POST['dates'] : null;
        $this->duree = !empty($_POST['duree']) ? htmlspecialchars($_POST['duree']) : null;
        $this->prix = !empty($_POST['prix']) ? htmlspecialchars($_POST['prix']) : null;
        $this->vendeur = !empty($_POST['vendeur']) ? htmlspecialchars($_POST['vendeur']) : null;
        $this->filtre = !empty($_POST['filtre']) ? htmlspecialchars($_POST['filtre']) : null;
        $this->id_auteur = isset($_POST['id_auteur']) ? $_POST['id_auteur'] : null;

        return $this->validateData();
    }

    private function validateData() {
        return !empty($this->titre) && 
               !empty($this->img) && 
               !empty($this->detail) && 
               !empty($this->dates) && 
               !empty($this->duree) && 
               !empty($this->prix) && 
               !empty($this->vendeur) && 
               !empty($this->filtre);
    }

    static function readAll() {
        $sql = 'SELECT * FROM article_cours';
        $pdo = connexion();
        $query = $pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, 'article_cours');
    }

    static function readOne($id) {
        $sql = 'SELECT * FROM article_cours WHERE id_bloc = :id';
        $pdo = connexion();
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchObject('article_cours');
    }

    function create() {
        try {
            $sql = 'INSERT INTO article_cours (titre, img, detail, dates, duree, prix, vendeur, filtre, id_auteur) 
                    VALUES (:titre, :img, :detail, :dates, :duree, :prix, :vendeur, :filtre, :id_auteur)';
            
            $pdo = connexion();
            $query = $pdo->prepare($sql);
            
            $query->bindValue(':titre', $this->titre, PDO::PARAM_STR);
            $query->bindValue(':img', $this->img, PDO::PARAM_STR);
            $query->bindValue(':detail', $this->detail, PDO::PARAM_STR);
            $query->bindValue(':dates', $this->dates, PDO::PARAM_STR);
            $query->bindValue(':duree', $this->duree, PDO::PARAM_STR);
            $query->bindValue(':prix', $this->prix, PDO::PARAM_STR);
            $query->bindValue(':vendeur', $this->vendeur, PDO::PARAM_STR);
            $query->bindValue(':filtre', $this->filtre, PDO::PARAM_STR);
            $query->bindValue(':id_auteur', $this->id_auteur, PDO::PARAM_INT); // Assurez-vous que l'id_auteur est lié ici
    
            return $query->execute(); // Exécutez la requête
        } catch (PDOException $e) {
            // Gérer l'erreur
            echo "Erreur : " . $e->getMessage();
            return false;
        }
    }

    function update() {
        try {
            $sql = 'UPDATE article_cours 
        SET titre = :titre, 
            img = :img, 
            detail = :detail, 
            dates = :dates, 
            duree = :duree, 
            prix = :prix, 
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
            $query->bindValue(':dates', $this->dates, PDO::PARAM_STR);
            $query->bindValue(':duree', $this->duree, PDO::PARAM_STR);
            $query->bindValue(':prix', $this->prix, PDO::PARAM_STR);
            $query->bindValue(':vendeur', $this->vendeur, PDO::PARAM_STR);
            $query->bindValue(':filtre', $this->filtre, PDO::PARAM_STR);
            $query->bindValue(':id_auteur', $this->id_auteur, PDO::PARAM_INT);
            
            return $query->execute();
        } catch (PDOException $e) {
            error_log("Erreur lors de la mise à jour de l'article : " . $e->getMessage());
            return false;
        }
    }

    static function delete($id) {
        try {
            $sql = 'DELETE FROM article_cours WHERE id_bloc = :id';
            $pdo = connexion();
            $query = $pdo->prepare($sql);
            $query->bindValue(':id', $id, PDO::PARAM_INT);
            return $query->execute();
        } catch (PDOException $e) {
            error_log("Erreur lors de la suppression de l'article : " . $e->getMessage());
            return false;
        }
    }
}
?>