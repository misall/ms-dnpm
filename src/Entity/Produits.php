<?php

namespace App\Entity;

use App\Repository\ProduitsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitsRepository::class)
 */
class Produits
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_generique;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $forme;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dose;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomGenerique(): ?string
    {
        return $this->nom_generique;
    }

    public function setNomGenerique(string $nom_generique): self
    {
        $this->nom_generique = $nom_generique;

        return $this;
    }

    public function getForme(): ?string
    {
        return $this->forme;
    }

    public function setForme(string $forme): self
    {
        $this->forme = $forme;

        return $this;
    }

    public function getDose(): ?string
    {
        return $this->dose;
    }

    public function setDose(string $dose): self
    {
        $this->dose = $dose;

        return $this;
    }
}
