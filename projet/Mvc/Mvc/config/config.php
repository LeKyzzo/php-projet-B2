<?php

// Configuration de la base de données
define('DB_HOST', 'localhost');       // Hôte de la base de données
define('DB_NAME', 'mvc_database');    // Nom de la base de données
define('DB_USER', 'root');            // Utilisateur de la base de données
define('DB_PASSWORD', '');            // Mot de passe de la base de données

// Autres configurations globales
define('BASE_URL', 'http://localhost/mon_projet_mvc/public/'); // URL de base de l'application
define('APP_NAME', 'MonApplicationMVC');                       // Nom de l'application

// Paramètres de session
define('SESSION_LIFETIME', 3600);      // Durée de vie de la session en secondes (1 heure)
define('SESSION_NAME', 'my_app_session'); // Nom personnalisé pour la session

// Paramètres d'erreur
error_reporting(E_ALL);  // Affichage de toutes les erreurs (à désactiver en production)
ini_set('display_errors', 1);

// Autres constantes importantes, par exemple les chemins
define('CONTROLLER_PATH', __DIR__ . '/../app/controllers/');
define('VIEW_PATH', __DIR__ . '/../app/views/');
define('MODEL_PATH', __DIR__ . '/../app/models/');
