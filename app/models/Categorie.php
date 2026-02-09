<?php 
    namespace app\models;

    class Categorie {
    //Attributs
        private $idCategorie;
        private $nomCategorie;
    //Constructeur
        public function __construct() {}
    //Setters
        public function setIdCategorie($id) {
            $this->idCategorie = $id;
        }
        public function setNomCategorie($nom) {
            $this->nomCategorie = $nom;
        }
    //Getters
        public function getIdCategorie() {
            return $this->idCategorie;
        }
        public function getNomCategorie() {
            return $this->nomCategorie;
        }
    };
?>