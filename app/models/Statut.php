<?php 
    namespace app\models;

    class Statut {
    //Attributs
        private $idStatut;
        private $nomStatut;
    //Constructeur
        public function __construct() {}
    //Setters
        public function setIdStatut($id) {
            $this->idStatut = $id;
        }
        public function setNomStatut($nom) {
            $this->nomStatut = $nom;
        }
    //Getters
        public function getIdStatut() {
            return $this->idStatut;
        }
        public function getNomStatut() {
            return $this->nomStatut;
        }
    };
?>