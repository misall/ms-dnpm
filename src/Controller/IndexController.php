<?php

namespace App\Controller;

use App\Repository\AboutRepository;
use App\Repository\ActivitesRepository;
use App\Repository\FaqRepository;
use App\Repository\ServicesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index_home")
     */
    public function index
        (
            AboutRepository $aboutRepository,
            ServicesRepository $servicesRepository,
            ActivitesRepository $activitesRepository,
            FaqRepository $faqRepository
        )
    {
        return $this->render('index/index.html.twig', [
            'current_menu' => 'home',
            'about' => $aboutRepository->findOneBy(['title' => 'Presentation']),
            'services' => $servicesRepository->findAll(),
            'first_service' => $servicesRepository->findOneBy(['id' => [4]]),
            'second_service' => $servicesRepository->findOneBy(['id' => [9]]),
            'third_service' => $servicesRepository->findOneBy(['id' => [8]]),
            'fifth_service' => $servicesRepository->findOneBy(['id' => [7]]),
            'activites' => $activitesRepository->findAll(),
            'faq' => $faqRepository->findAll()

        ]);
    }

    /**
     * @return Response
     * @Route("/apropos", name="index_apropos")
     */
    public function about(AboutRepository $aboutRepository): Response
    {
        return $this->render('index/about.html.twig', [
            'current_menu' => 'about',
            'presentation' => $aboutRepository->findOneBy(['title' => 'Presentation']),
            'mission' => $aboutRepository->findOneBy(['title' => 'Mission de la Direction']),
            'mot_du_directeur' => $aboutRepository->findOneBy(['title' => 'Mot du Directeur']),
            'historique' => $aboutRepository->findOneBy(['id' => '4']),
            'organigramme' => $aboutRepository->findOneBy(['id' => '5'])
        ]);
    }

    /**
     * @return Response
     * @Route("/services", name="index_services")
     */
    public function services(ServicesRepository $servicesRepository): Response
    {
        return $this->render('index/services.html.twig', [
            'current_menu' => 'services',
            'services' => $servicesRepository->findAll()
        ]);
    }

    /**
     * @return Response
     * @Route("/activites", name="index_activites")
     */
    public function activites(ActivitesRepository $activitesRepository): Response
    {
        return $this->render('index/activites.html.twig', [
            'current_menu' => 'activites',
            'activites' => $activitesRepository->findBy(['status' => 'false'])
        ]);
    }

    /**
     * @return Response
     * @Route("/realisations", name="index_realisations")
     */
    public function realisations(ActivitesRepository $activitesRepository): Response
    {
        return $this->render('index/realisations.html.twig', [
            'current_menu' => 'realisations',
            'realisations' => $activitesRepository->findBy(['status' => 'true'])
        ]);
    }

    /**
     * @return Response
     * @Route("/contact", name="index_contact")
     */
    public function contact(): Response
    {
        return $this->render('index/contact.html.twig', [
            'current_menu' => 'contact'
        ]);
    }
}
