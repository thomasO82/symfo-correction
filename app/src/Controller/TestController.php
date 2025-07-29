<?php

// Déclare le namespace (espace de noms) pour organiser la classe dans le dossier App\Controller
namespace App\Controller;

// Importe la classe de base des contrôleurs Symfony avec des méthodes utilitaires (json, render, etc.)
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// Importe la classe Response qui permet de retourner une réponse HTTP
use Symfony\Component\HttpFoundation\Response;

// Importe l'attribut PHP 8 #[Route] pour définir les routes directement au-dessus des méthodes
use Symfony\Component\Routing\Attribute\Route;

// Déclare une classe de contrôleur finale (non-extensible), qui hérite d'AbstractController
final class TestController extends AbstractController
{
    // Déclare une route accessible via l'URL "/test", nommée "app_test"
    #[Route('/test', name: 'app_test')]
    public function index(): Response
    {
        // Retourne une réponse HTTP au format JSON avec le message "Hello word"
        return $this->json(["message" => "Hello word"]);
    }
}
