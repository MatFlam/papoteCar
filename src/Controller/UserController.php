<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterUserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserController extends Controller
{
    /**
     * @Route("/registerUser", name="registerUser")
     */
    public function registerUser(Request $request, EntityManagerInterface $em, UserPasswordEncoderInterface $encoder)
    {
        $user = new User();

        $registerUserForm = $this->createForm(RegisterUserType::class, $user);
        $registerUserForm->handleRequest($request);

        $user->setDateCreated(new \DateTime());

        if ($registerUserForm->isSubmitted() && $registerUserForm->isValid()) {
            //hashe le password
            $encoded = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($encoded);
            $user->setRoles(["ROLE_USER"]);

            $file = $registerUserForm->get('profilePicture')->getData();
            var_dump($file);

            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // moves the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('profilesPics_directory'),
                $fileName
            );

            // updates the 'brochure' property to store the PDF file name
            // instead of its contents
            $user->setProfilepicture($fileName);


            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Your account has been successfully created, you must have received a confirmation mail');
        }

        return $this->render('user/registerUser.html.twig', [
            'registerUserForm' => $registerUserForm->createView()
        ]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request, AuthenticationUtils $authenticationUtils)
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        var_dump($lastUsername);

        //on bloque l'accès si deja connecté
        if ($this->getUser()){
            return $this->redirectToRoute("home");
        }
        else {
            $this->addFlash('alert', 'you have trompé your identifiants');
        }

        return $this->render('security/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout() {

    }
}
