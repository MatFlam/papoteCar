<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TravelController extends Controller
{
    /**
     * @Route("/travel", name="travel")
     */
    public function index()
    {
        return $this->render('travel/index.html.twig', [
            'controller_name' => 'TravelController',
        ]);
    }
}
