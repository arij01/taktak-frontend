<?php

namespace App\Entity;

use App\Repository\TypeabnRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeabnRepository::class)]
class Typeabn
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idtypeA = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:'champ vide')]
    private ?string $dureeA = null;

    #[ORM\Column]
    #[Assert\NotNull(message:'champ vide')]
    private ?int $prixA = null;

    public function getIdtypeA(): ?int
    {
        return $this->idtypeA;
    }

    public function getDureeA(): ?string
    {
        return $this->dureeA;
    }

    public function setDureeA(string $dureeA): self
    {
        $this->dureeA = $dureeA;

        return $this;
    }

    public function getPrixA(): ?int
    {
        return $this->prixA;
    }

    public function setPrixA(int $prixA): self
    {
        $this->prixA = $prixA;

        return $this;
    }
}
