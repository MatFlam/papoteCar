<?php

namespace App\Controller;

use App\Entity\Alert;
use App\Entity\Car;
use App\Entity\Question;
use App\Entity\Travel;
use App\Entity\User;
use App\Form\AlertType;
use App\Form\TravelSearchType;
use App\Form\TravelType;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Tests\Functional\Bundle\CsrfFormLoginBundle\Form\UserLoginType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Flex\Response;

class TravelController extends Controller
{
    /**
     * @Route("/travel_add/{id}", name="travel_add")
     */
    public function travelAdd(EntityManagerInterface $em, $id)
    {
        $user = $this->getUser();



        // verification si l'user est identifier pour cette page
        if ($user) {
            $travel = $this->getDoctrine()->getRepository(Travel::class)->findOneBy(['id' => $id]);
            if ($travel != null) {
                if ($travel->getPassengers()->contains($user)) {
                    $this->addFlash("warning", "Erreur: Vous faite déjà parti du trajet");
                } else {
                    $travel->addPassenger($user);
                    $em->flush();
                    $this->addFlash("success", "Félicitation: Vous faite parti du trajet");
                }
            } else {
                $this->addFlash("warning", "Erreur lors de l'insertion");
            }

            return $this->redirectToRoute("travel-list");
        } else {
            $this->addFlash("error", "Vous devez être identifié pour pouvoir ajouter un trajet");
            return $this->redirectToRoute("home");
        }
    }

    /**
     * @Route("/travel_remove/{id}", name="travel_remove")
     */
    public function travelRemove($id, EntityManagerInterface $em)
    {
        $user = $this->getUser();
        // verification si l'user est identifier pour cette page
        if ($user) {
            $travel = $this->getDoctrine()->getRepository(Travel::class)->findOneBy(['id' => $id]);

            if ($travel != null) {
                if ($travel->getPassengers()->contains($user)) {
                    $travel->removePassenger($user);
                    $em->flush();
                    $this->addFlash("warning", "Vous ne faite désormais plus parti du trajet");
                } else {
                    $this->addFlash("warning", "Erreur: Vous faite déjà parti du trajet");
                }
            }

            return $this->redirectToRoute("travel-list");
        } else {
            $this->addFlash("error", "Vous devez être identifié pour pouvoir ajouter un trajet");
            return $this->redirectToRoute("home");
        }
    }

    /**
     * @Route("/travel-list", name="travel-list")
     */
    public function travelParticipate(Request $request, EntityManagerInterface $em)
    {
        if ($this->getUser()) {
            $user = $this->getUser();
            $travels = $this->getDoctrine()->getRepository(Travel::class)->findAll();

            return $this->render('travel/travel_participate.html.twig', [
                "travels" => $travels,
                "user" => $user
            ]);

        } else {
            $this->addFlash("error", "Vous devez être identifié pour pouvoir ajouter un trajet");
            return $this->redirectToRoute("home");
        }
    }

    /**
     * @Route("/travel", name="travel_home")
     */
    public function travelHome(Request $request, AuthenticationUtils $authenticationUtils, EntityManagerInterface $em, \Swift_Mailer $mailer)
    {
        if ($this->getUser()) {
            // we get the actual user information

            $user = $this->getUser();
            $car = $this->getDoctrine()->getRepository(Car::class)->find(1);

            // creation of the formular type
            $travel = new Travel();
            // modifier le schema et rajouter dans la table car une cle etrangère vers la table user
            // afin qu'ici soit hydraté setcarid avec le car correspondant à l'user
            $travel->setCar($car);
            $travel->setDatecreated(new \DateTime());
            $travel->setUser($user);

            $travelForm = $this->createForm(TravelType::class, $travel);
            $travelForm->handleRequest($request);

            // add to the foreign key travel the user key [inner join...]

            if ($travelForm->isSubmitted() &&
                $travelForm->isValid() &&
                $this->getUser()
            ) {
                $em->persist($travelForm->getData());
                $em->flush();

                $salut = $travelForm->getData();
                $alertRepo = $this->getDoctrine()->getRepository(Alert::class);
                $alerts = $alertRepo->findAlerts($travelForm->getData()->getStartcity() , $travelForm->getData()->getEndCity(), $travelForm->getData()->getStartHour());
                for ($i = 0; $i < count($alerts) ; $i++) {

                    var_dump($alerts[$i]->getUser()->getEmail());

                    $message = (new \Swift_Message('Votre demande d\'alerte'))
                        ->setFrom('dave.lopper0@gmail.com')
                        ->setTo($user->getEmail());

                    $data['image_src'] = $message->embed(\Swift_Image::fromPath('/var/www/html/papoteCar/public/pictures/default/logo.png'));

                    $message->setBody(
                        $this->renderView(
                        // templates/emails/registration.html.twig
                            'alert/emailAlert.html.twig',
                            array('name' => $user->getUsername(),
                                'image' => $data['image_src'],
                            )
                        ),
                        'text/html'
                    )/*
                 * If you also want to include a plaintext version of the message
                ->addPart(
                    $this->renderView(
                        'emails/registration.txt.twig',
                        array('name' => $name)
                    ),
                    'text/plain'
                )
                */
                    ;


                    $mailer->send($message);
                }


                $this->addFlash("success", "Votre trajet a été ajouté");
                // modifier ici pour mettre redirect vers user pannel
                /*return $this->redirectToRoute('travel_home');*/
            }

            return $this->render('travel/index.html.twig', [
                "user" => $user, // renvoie toute les infos de l'user au cas ou
                "travel" => $travel, // affiche les infos travel au cas ou si le mec ait déjà des trajets
                "travelForm" => $travelForm->createView(),
            ]);

        } else {
            $this->addFlash("error", "Vous devez être identifié pour pouvoir ajouter un trajet");
            return $this->redirectToRoute("home");
        }
    }

    /**
     * @Route("travelSearch/{villeDepart}/{villeArrivee}/{page}",
     *     name="travel_search",
     *     defaults={"page":"1"},
     *     requirements={"page":"[0-9]+"})
     */
    public function travelSearch(EntityManagerInterface $em, Request $request, $villeDepart, $villeArrivee, $page)
    {
        $travelRepo = $this->getDoctrine()->getRepository(Travel::class);

        // a changer et a mettre dans les paramètres de la fonction
        //donnée par défaut du formulaire de recherche

        $searchData = [
            "startcity" => $villeDepart,
            "endcity" => $villeArrivee
        ];

        $searchTravelForm = $this->createForm(TravelSearchType::class, $searchData);
        $searchTravelForm->handleRequest($request);

        //si le form est soumis, on récupère les données
        if ($searchTravelForm->isSubmitted()) {
            $searchData = $searchTravelForm->getData();
        }

        $travels = $travelRepo->findPaginated($page, $searchData["startcity"], $searchData["endcity"]);

        return $this->render("travel/search.twig", [
            "form" => $searchTravelForm->createView(),
            "travels" => $travels,
            "nextPage" => $page + 1,
            "prevPage" => $page - 1,
            "totalResults" => count($travels),
            "lastPage" => ceil(count($travels) / 50),
        ]);
    }

    /**
     * @Route("/alertTravelRegister", name="alertTravelRegister")
     */
    public function alertTravelRegister(Request $request, EntityManagerInterface $em, \Swift_Mailer $mailer)
    {
        $alert = new Alert();
        $alertForm = $this->createForm(AlertType::class, $alert);
        $alertForm->handleRequest($request);


        //check if form is valid
        if ($alertForm->isSubmitted() && $alertForm->isValid()) {
            $user = $this->getUser();
            $alert->setUser($user);
            $em->persist($alert);
            $em->flush();

            $this->addFlash('success', 'azy bravo ton alerte est enregistrée');
            return $this->redirectToRoute('home');


        } else {

            $this->addFlash('danger', 'File must be .pnj or .jpeg');
            return $this->render('alert/alertTravel.html.twig', [
                "alertForm" => $alertForm->createView(),
            ]);
        }


    }
}