<?php
class ArticleRepository extends Repository {
    
    // Méthode pour récupérer tous les articles
    public function getAllArticles() {
        $stmt = $this->db->prepare("SELECT * FROM articles");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Transformer les résultats en objets Article
        $articles = [];
        foreach ($result as $row) {
            $articles[] = new Article($row['id'], $row['titre'], $row['contenu']);
        }

        return $articles;
    }

    // Méthode pour récupérer un article par ID
    public function getArticleById($id) {
        $stmt = $this->db->prepare("SELECT * FROM articles WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return new Article($row['id'], $row['titre'], $row['contenu']);
        }
        return null;
    }
}
