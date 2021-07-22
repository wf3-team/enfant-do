<?php

namespace App\Entity;

use App\Repository\HygieneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HygieneRepository::class)
 */
class Hygiene
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
    private $couche_urine;

    /**
     * @ORM\Column(type="boolean")
     */
    private $couche_selle;

    /**
     * @ORM\Column(type="boolean")
     */
    private $bain;

    /**
     * @ORM\OneToMany(targetEntity=Evenement::class, mappedBy="hygiene")
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

    public function getCoucheUrine(): ?bool
    {
        return $this->couche_urine;
    }

    public function setCoucheUrine(bool $couche_urine): self
    {
        $this->couche_urine = $couche_urine;

        return $this;
    }

    public function getCoucheSelle(): ?bool
    {
        return $this->couche_selle;
    }

    public function setCoucheSelle(bool $couche_selle): self
    {
        $this->couche_selle = $couche_selle;

        return $this;
    }

    public function getBain(): ?bool
    {
        return $this->bain;
    }

    public function setBain(bool $bain): self
    {
        $this->bain = $bain;

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
            $evenement->setHygiene($this);
        }

        return $this;
    }

    public function removeEvenement(Evenement $evenement): self
    {
        if ($this->evenements->removeElement($evenement)) {
            // set the owning side to null (unless already changed)
            if ($evenement->getHygiene() === $this) {
                $evenement->setHygiene(null);
            }
        }

        return $this;
    }
}
