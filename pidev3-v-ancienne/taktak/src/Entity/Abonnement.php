<?php

namespace App\Entity;

use App\Repository\AbonnementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



#[ORM\Entity(repositoryClass: AbonnementRepository::class)]
class Abonnement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idA = null;

    #[ORM\Column(nullable: true)]
    private ?int $idU = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:'champ vide')]
    private ?string $moyTrA = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateA = null;
    

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateExpA = null;

    #[ORM\Column]
    #[Assert\NotNull(message:'champ vide')]
    private ?int $idtypeA = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Choice(choices: [0, 1])]
    private ?int $etudiantA = null;

    #[ORM\Column(nullable: true)]
    private ?int $redEtA = null;

    #[ORM\Column(nullable: true)]
    private ?int $redEvA = null;

    public function getIdA(): ?int
    {
        return $this->idA;
    }

    public function getIdU(): ?int
    {
        return $this->idU;
    }

    public function setIdU(?int $idU): self
    {
        $this->idU = $idU;

        return $this;
    }

    public function getMoyTrA(): ?string
    {
        return $this->moyTrA;
    }

    public function setMoyTrA(string $moyTrA): self
    {
        $this->moyTrA = $moyTrA;

        return $this;
    }

    public function getDateA(): ?\DateTimeInterface
    {
        return $this->dateA;
    }

    public function setDateA(\DateTimeInterface $dateA): self
    {
        $this->dateA = $dateA;
        //$this->dateA = new \DateTime();

        return $this;
    }

    public function getDateExpA(): ?\DateTimeInterface
    {
        return $this->dateExpA;
    }

    public function setDateExpA(?\DateTimeInterface $dateExpA): self
    {
        $this->dateExpA = $dateExpA;

        return $this;
    }

    public function getIdtypeA(): ?int
    {
        return $this->idtypeA;
    }

    public function setIdtypeA(int $idtypeA): self
    {
        $this->idtypeA = $idtypeA;

        return $this;
    }

    public function getEtudiantA(): ?int
    {
        return $this->etudiantA;
    }

    public function setEtudiantA(?int $etudiantA): self
    {
        $this->etudiantA = $etudiantA;
        if ($this->etudiantA !== null) {
            $this->setRedEtA(20);
        } else {
            $this->setRedEtA(null);
        }
        return $this;
    }

    public function getRedEtA(): ?int
    {
        return $this->redEtA;
    }

    // public function setRedEtA(?int $redEtA): self
    // {
    //     $this->redEtA = $redEtA;

    //     return $this;
    // }
    // function setRedEtA(FormInterface $form, $etudiantA) {
    //     $redEtA = null;
    //     if ($etudiantA == 1) {
    //         $redEtA = 20;
    //     }
    //     else{$redEtA = 0;}
    //     $form->get('redEtA')->setData($redEtA);
    // }
    public function setRedEtA(?int $redEtA): self
    {
        if ($this->etudiantA == 1) {
            $this->redEtA = 20;
        } else {
            $this->redEtA = 0;
        }
    
        return $this;
    }
    

    public function getRedEvA(): ?int
    {
        return $this->redEvA;
    }

    public function setRedEvA(?int $redEvA): self
    {
        $this->redEvA = $redEvA;

        return $this;
    }


}
