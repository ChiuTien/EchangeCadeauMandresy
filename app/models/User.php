<?php 
    namespace app\models;

    class User {
    //Attributs
        private $id;
        private $nom;
        private $prenom;
        private $motDePasse;
    //Constructeur
        public function __construct() {}
    //Setters
        public function setId($id) {
            $this->id = $id;
        }
        public function setNom($nom) {
            $this->nom = $nom;
        }
        public function setPrenom($prenom) {
            $this->prenom = $prenom;
        }
        public function setMotDePasse($motDePasse) {
            $this->motDePasse = $motDePasse;
        }
    //Getters
        public function getId() {
            return $this->id;
        }
        public function getNom() {
            return $this->nom;
        }
        public function getPrenom() {
            return $this->prenom;
        }
        public function getMotDePasse() {
            return $this->motDePasse;
        }
    };
?>