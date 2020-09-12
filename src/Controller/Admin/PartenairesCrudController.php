<?php

namespace App\Controller\Admin;

use App\Entity\Partenaires;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PartenairesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Partenaires::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('id')->onlyOnIndex(),
            TextField::new('name', 'Nom du partenaire'),
            TextField::new('sigl', 'SIGLE / Initial du partenaire'),
            ImageField::new('logo', 'Logo du partenaire'),
            TextEditorField::new('description', 'Description'),
        ];
    }

}
