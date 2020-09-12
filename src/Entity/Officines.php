<?php

namespace App\Entity;

use App\Repository\OfficinesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OfficinesRepository::class)
 */
class Officines
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
    private $nom_structure;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $localisation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom_responsable;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_responsable;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomStructure(): ?string
    {
        return $this->nom_structure;
    }

    public function setNomStructure(string $nom_structure): self
    {
        $this->nom_structure = $nom_structure;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getPrenomResponsable(): ?string
    {
        return $this->prenom_responsable;
    }

    public function setPrenomResponsable(string $prenom_responsable): self
    {
        $this->prenom_responsable = $prenom_responsable;

        return $this;
    }

    public function getNomResponsable(): ?string
    {
        return $this->nom_responsable;
    }

    public function setNomResponsable(string $nom_responsable): self
    {
        $this->nom_responsable = $nom_responsable;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
