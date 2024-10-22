<?php

namespace App\Controller;

use App\Model\Starship;
use App\Repository\StarshipRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route(path: '/api/starships')]
class StarshipApiController extends AbstractController
{
    #[Route('', methods: ['GET'])]
    public function getCollection(StarshipRepository $repository): Response
    {
        // dd($logger);
        // dd($repository);
        $starships = $repository->findAll();
        return $this->json($starships);
    }

    #[Route('/{id<\d+>}', methods: ['GET'])]
    public function get(int $id, StarshipRepository $repository): Response
    {
        // dd($id);
        $PC = $repository->find($id);

        if (!$PC) {
            throw $this->createNotFoundException('Computadora no encontrada');
        }

        return $this->json($PC);
    }
}
