<?php
class Article {
    private $id;
    private $titre;
    private $contenu;

    public function __construct($id, $titre, $contenu) {
        $this->id = $id;
        $this->titre = $titre;
        $this->contenu = $contenu;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function getContenu() {
        return $this->contenu;
    }

    // Setters (si nécessaire)
    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function setContenu($contenu) {
        $this->contenu = $contenu;
    }
}
