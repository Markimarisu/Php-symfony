<?php

// Défini le chemin de ce fichier
// Obligatoire, doit représenter exactement le chemin du fichier en remplaçant le dossier "src" par "App"
namespace App\Controller;

// Remplace le require
// On indique ici le namespace de la classe qu'on veut utiliser et Symfony + composer font le require automatiquement
use Symfony\Component\Routing\Annotation\Route;

class ArticleController {

    #[Route('/liste-d-articles', name:'list-article')]

    // Création d'une fonction "articleList"
    public function articleList(){
        var_dump("Liste d'articles"); die;
    }

    #[Route('/creer-article', name:'create-article')]

    // Création d'une fonction "createArticle"
    public function createArticle(){
        var_dump('Créer un article'); die;
    }

    #[Route('/supprimer-article', name:'delete-article')]

    // Création d'une fonction "delArticle"
    public function delArticle(){
        var_dump('Supprimer un article'); die;
    }
}