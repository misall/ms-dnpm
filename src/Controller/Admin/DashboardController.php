<?php

namespace App\Controller\Admin;

use App\Entity\About;
use App\Entity\Activites;
use App\Entity\Faq;
use App\Entity\Officines;
use App\Entity\Partenaires;
use App\Entity\Produits;
use App\Entity\Services;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('ADMIN DNPM');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Tableau de bord', 'fa fa-home');

        yield MenuItem::section('Gestion du siteweb');
        yield MenuItem::linkToCrud('Apropos', 'fa fa-info', About::class);
        yield MenuItem::linktoDashboard('Ressources', 'fa fa-rocket');
        yield MenuItem::linkToCrud('FAQ', 'fa fa-question', Faq::class);
        yield MenuItem::linkToCrud('Services', 'fa fa-briefcase', Services::class );
        yield MenuItem::linkToCrud('Activites', 'fa fa-check-square-o', Activites::class );
        yield MenuItem::linkToCrud('Partenaires', 'fa fa-handshake', Partenaires::class );

        yield MenuItem::section('Gestion des officines');
        yield MenuItem::linkToCrud('Liste des officines', 'fa fa-medkit', Officines::class);
        yield MenuItem::linkToCrud('Liste des produits', 'fa fa fa-file-text-o', Produits::class);
        yield MenuItem::section('Gestion des grossistes');

        yield MenuItem::section('Gestion des grossistes');

        yield MenuItem::section('Gestion des utilisateurs');
        yield MenuItem::linkToCrud('Utilisateurs', 'fa fa-users', User::class );
        yield MenuItem::linktoRoute('Add new users', 'fa fa-user-plus', 'app_register');

    }
}
