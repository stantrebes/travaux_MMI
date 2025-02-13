<?php
class Client {
    public $id_cli;
    public $nom_cli;
    public $prenom_cli;
    public $mdp_cli;
    public $adresse_cli;
    public $identifiant;
    public $rol;

    function chargePOSTClient() {
        $this->id_cli = isset($_POST['id_cli']) ? $_POST['id_cli'] : null;
        $this->nom_cli = !empty($_POST['nom']) ? htmlspecialchars($_POST['nom']) : null;
        $this->prenom_cli = !empty($_POST['prenom']) ? htmlspecialchars($_POST['prenom']) : null;
        $this->mdp_cli = !empty($_POST['mdp']) ? htmlspecialchars($_POST['mdp']) : null;
        $this->adresse_cli = !empty($_POST['adresse']) ? htmlspecialchars($_POST['adresse']) : null;
        $this->identifiant = !empty($_POST['identifiant']) ? htmlspecialchars($_POST['identifiant']) : null;

        return $this->validateData();
    }

    private function validateData() {
        return !empty($this->nom_cli) && 
               !empty($this->prenom_cli) && 
               !empty($this->adresse_cli) && 
               !empty($this->identifiant);
    }

    static function readAll() {
        $sql = 'SELECT * FROM Client';
        $pdo = connexion();
        $query = $pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, 'Client');
    }

    static function readOne($id) {
        $sql = 'SELECT * FROM Client WHERE id_cli = :id';
        $pdo = connexion();
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchObject('Client');
    }

    function update() {
        try {
            $sql = 'UPDATE Client SET 
                    nom_cli = :nom,
                    prenom_cli = :prenom,
                    adresse_cli = :adresse,
                    identifiant = :identifiant,
                    mdp_cli =:mdp';
            
            $params = [
                ':nom' => $this->nom_cli,
                ':prenom' => $this->prenom_cli,
                ':adresse' => $this->adresse_cli,
                ':identifiant' => $this->identifiant,
                ':id' => $this->id_cli,
                ':mdp' => $this->mdp_cli
            ];

            $sql .= ' WHERE id_cli = :id';
            
            $pdo = connexion();
            $query = $pdo->prepare($sql);
            
            return $query->execute($params);
        } catch (PDOException $e) {
            error_log("Erreur lors de la mise à jour du client : " . $e->getMessage());
            return false;
        }
    }

    static function delete($id) {
        try {
            $sql = 'DELETE FROM Client WHERE id_cli = :id';
            $pdo = connexion();
            $query = $pdo->prepare($sql);
            $query->bindValue(':id', $id, PDO::PARAM_INT);
            return $query->execute();
        } catch (PDOException $e) {
            error_log("Erreur lors de la suppression du client : " . $e->getMessage());
            return false;
        }
    }
}
?>