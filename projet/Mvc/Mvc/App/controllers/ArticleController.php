<?php

class ArticleController extends Controller {
    
    private $articleRepository;

    public function __construct() {
        // On initialise le repository
        $this->articleRepository = new ArticleRepository();
    }

    // Action pour afficher la liste des articles
    public function index() {
        // Récupération des articles via le repository
        $articles = $this->articleRepository->getAllArticles();
        
        // Chargement de la vue avec les données
        $this->view('articles', ['articles' => $articles]);
    }

    // Action pour afficher un article en particulier
    public function show($id) {
        // Récupération de l'article via le repository
        $article = $this->articleRepository->getArticleById($id);
        
        if ($article) {
            // On passe les données à la vue
            $this->view('article', ['article' => $article]);
        } else {
            echo "Article non trouvé";
        }
    }
}
