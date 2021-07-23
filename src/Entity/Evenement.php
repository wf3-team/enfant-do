<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EvenementRepository::class)
 */
class Evenement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="evenements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Bebe::class, inversedBy="evenements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $bebe;

    /**
     * @ORM\ManyToOne(targetEntity=Repas::class, inversedBy="evenements")
     * @ORM\JoinColumn(nullable=true)
     */
    private $repas;

    /**
     * @ORM\ManyToOne(targetEntity=Hygiene::class, inversedBy="evenements")
     * @ORM\JoinColumn(nullable=true)
     */
    private $hygiene;

    /**
     * @ORM\Column(type="boolean")
     */
    private $dodo;

    /**
     * @ORM\Column(type="datetime")
     */
    private $heure_debut;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $heure_fin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getBebe(): ?Bebe
    {
        return $this->bebe;
    }

    public function setBebe(?Bebe $bebe): self
    {
        $this->bebe = $bebe;

        return $this;
    }

    public function getRepas(): ?Repas
    {
        return $this->repas;
    }

    public function setRepas(?Repas $repas): self
    {
        $this->repas = $repas;

        return $this;
    }

    public function getHygiene(): ?Hygiene
    {
        return $this->hygiene;
    }

    public function setHygiene(?Hygiene $hygiene): self
    {
        $this->hygiene = $hygiene;

        return $this;
    }

    public function getDodo(): ?bool
    {
        return $this->dodo;
    }

    public function setDodo(bool $dodo): self
    {
        $this->dodo = $dodo;

        return $this;
    }

    public function getHeureDebut(): ?\DateTimeInterface
    {
        return $this->heure_debut;
    }

    public function setHeureDebut(\DateTimeInterface $heure_debut): self
    {
        $this->heure_debut = $heure_debut;

        return $this;
    }

    public function getHeureFin(): ?\DateTimeInterface
    {
        return $this->heure_fin;
    }

    public function setHeureFin(?\DateTimeInterface $heure_fin): self
    {
        $this->heure_fin = $heure_fin;

        return $this;
    }
}
