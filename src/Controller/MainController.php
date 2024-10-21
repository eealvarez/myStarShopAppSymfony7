<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function index(StarshipRepository $starshipRepository): Response
    {
        // return new Response('<strong>INFUNISA Starshop</strong>: ¡Tu tienda de accesorios de cómputo!');

        $ships = $starshipRepository->findAll();
        // $numeroDeComputadoras = 457;
        // $numeroDeComputadoras = count($ships);

        $myPC = $ships[array_rand($ships)];
        // dd($myPC);

        // $myPC = [
        //     'marca' => 'Dell',
        //     'CPU' => '3.2 GHz',
        //     'RAM' => '16 GB',
        //     'HDD' => '1 TB',
        // ];

        return $this->render('main/index.html.twig', [
            // 'numeroDeComputadoras' => $numeroDeComputadoras,
            'PCs' => $ships,
            'myPC' => $myPC,
        ]);
    }
}
