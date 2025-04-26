<?php

namespace App\Controller;

use App\Service\RickAndMortyApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CharacterController extends AbstractController{
    
    private RickAndMortyApiService $api;

    public function __construct(RickAndMortyApiService $api)
    {
        $this->api = $api;
    }

    #[Route('/', name: 'app_character')]
    public function index(): Response
    {
        $characters = $this->api->getCharacters();
        return $this->render('character/index.html.twig', [
            'characters' => $characters,
        ]);
    }
}
