<?php
class Repository {
    protected $db;

    public function __construct() {
        // Connexion à la base de données via PDO
        $this->db = new PDO('mysql:host=localhost;dbname=mvc_database', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}