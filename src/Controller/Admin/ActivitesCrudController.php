<?php

namespace App\Controller\Admin;

use App\Entity\Activites;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ActivitesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Activites::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('id', 'ID')->onlyOnIndex(),
            TextField::new('title', 'Titre de l\'activite'),
            TextField::new('slug', 'Slug'),
            TextField::new('lieu', 'Lieu'),
            DateField::new('startedAt', 'Date debut'),
            DateField::new('endAt', 'Date Fin'),
            TextField::new('image', 'Images'),
            BooleanField::new('status', 'Status'),
            TextEditorField::new('description', 'Description'),
        ];
    }

}
