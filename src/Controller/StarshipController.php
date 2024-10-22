<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipController extends AbstractController
{

    #[Route('/starships/{id<\d+>}', name: 'app_starship_show')]
    public function show(int $id, StarshipRepository $repository): Response
    {
        // dd($id);
        $PC = $repository->find($id);

        if (!$PC) {
            throw $this->createNotFoundException('Computadora no encontrada');
        }

        return $this->render('pc/show.html.twig', [
            'PC' => $PC,
        ]);
    }
}
