<?php

namespace App\Controller;

use App\Repository\CrepeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Crepe;

class CrepeController extends AbstractController
{
    /**
     * @Route("/crepe", name="crepeIndex")
     */
    public function index(CrepeRepository $repo): Response
    {
        $crepes = $repo->findAll();

        return $this->render('crepe/index.html.twig', [
            'controller_name' => 'CrepeController',
            'tabCrepes' => $crepes
        ]);
    }

    /**
     * @Route("/crepe/{name}", name="crepeShow")
     */
    public function show(Crepe $crepe, $name): Response
    {

        return $this->render('crepe/show.html.twig', [
            'uneCrepe' => $crepe
        ]);
    }

}
