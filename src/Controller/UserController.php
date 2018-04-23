<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    /**
     * @Route("/registerUser", name="registerUser")
     */
    public function registerUser(Request $request, EntityManagerInterface $em)
    {
        $registerUserForm = $this->createForm(User::class);
        $registerUserForm->handleRequest($request);
        return $this->render('user/registerUser.html.twig', [
            'registerUserForm' => $registerUserForm->createForm()
        ]);
    }
}
