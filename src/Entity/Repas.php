<?php

namespace App\Entity;

use App\Repository\RepasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RepasRepository::class)
 */
class Repas
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $biberon;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantite_ml;

    /**
     * @ORM\Column(type="boolean")
     */
    private $puree;

    /**
     * @ORM\Column(type="boolean")
     */
    private $compote;

    /**
     * @ORM\Column(type="boolean")
     */
    private $yaourt;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantite_pot;

    /**
     * @ORM\OneToMany(targetEntity=Evenement::class, mappedBy="repas")
     */
    private $evenements;

    public function __construct()
    {
        $this->evenements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBiberon(): ?bool
    {
        return $this->biberon;
    }

    public function setBiberon(bool $biberon): self
    {
        $this->biberon = $biberon;

        return $this;
    }

    public function getQuantiteMl(): ?int
    {
        return $this->quantite_ml;
    }

    public function setQuantiteMl(?int $quantite_ml): self
    {
        $this->quantite_ml = $quantite_ml;

        return $this;
    }

    public function getPuree(): ?bool
    {
        return $this->puree;
    }

    public function setPuree(bool $puree): self
    {
        $this->puree = $puree;

        return $this;
    }

    public function getCompote(): ?bool
    {
        return $this->compote;
    }

    public function setCompote(bool $compote): self
    {
        $this->compote = $compote;

        return $this;
    }

    public function getYaourt(): ?bool
    {
        return $this->yaourt;
    }

    public function setYaourt(bool $yaourt): self
    {
        $this->yaourt = $yaourt;

        return $this;
    }

    public function getQuantitePot(): ?int
    {
        return $this->quantite_pot;
    }

    public function setQuantitePot(?int $quantite_pot): self
    {
        $this->quantite_pot = $quantite_pot;

        return $this;
    }

    /**
     * @return Collection|Evenement[]
     */
    public function getEvenements(): Collection
    {
        return $this->evenements;
    }

    public function addEvenement(Evenement $evenement): self
    {
        if (!$this->evenements->contains($evenement)) {
            $this->evenements[] = $evenement;
            $evenement->setRepas($this);
        }

        return $this;
    }

    public function removeEvenement(Evenement $evenement): self
    {
        if ($this->evenements->removeElement($evenement)) {
            // set the owning side to null (unless already changed)
            if ($evenement->getRepas() === $this) {
                $evenement->setRepas(null);
            }
        }

        return $this;
    }
}
