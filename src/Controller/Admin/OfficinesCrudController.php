<?php

namespace App\Controller\Admin;

use App\Entity\Officines;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class OfficinesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Officines::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
