<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CrepeController extends AbstractController
{
    /**
     * @Route("/crepe", name="crepe")
     */
    public function index(): Response
    {


        $crepe1 = [
            "id" => 1,
            "name" => "mariette",
            "type" => "sucre",
            "price" => 8,
            "description" => "La spécialité de Bourg-en-Bourg",
            "createdAt" => "09/07/2020"
        ];

        $crepe2 = [
            "id" => 2,
            "name" => "jacki",
            "type" => "sale",
            "price" => 4,
            "description" => "La spécialité de Lyonne",
            "createdAt" => "08/12/2001"
        ];

        $crepe3 = [
            "id" => 3,
            "name" => "franx",
            "type" => "sale",
            "price" => 5,
            "description" => "La spécialité de Cilus",
            "createdAt" => "12/03/2017"
        ];

        $crepe4 = [
            "id" => 4,
            "name" => "france",
            "type" => "sucre",
            "price" => 6,
            "description" => "La spécialité de fransium",
            "createdAt" => "12/09/2010"
        ];

        $crepes = [
            $crepe1,
            $crepe2,
            $crepe3,
            $crepe4,
        ];

        return $this->render('crepe/index.html.twig', [
            'controller_name' => 'CrepeController',
            'tabCrepes' => $crepes
        ]);
    }
}
