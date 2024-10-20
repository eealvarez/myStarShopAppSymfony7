<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {
        // return new Response('<strong>INFUNISA Starshop</strong>: ¡Tu tienda de accesorios de cómputo!');

        $numeroDeComputadoras = 457;

        $myPC = [
            'marca' => 'Dell',
            'CPU' => '3.2 GHz',
            'RAM' => '16 GB',
            'HDD' => '1 TB',
        ];

        return $this->render('main/index.html.twig', [
            'numeroDeComputadoras' => $numeroDeComputadoras,
            'myPC' => $myPC,
        ]);
    }
}
