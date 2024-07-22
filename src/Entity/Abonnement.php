<?php

namespace App\Entity;

use App\Repository\AbonnementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
<<<<<<< HEAD
=======
use Symfony\Component\Validator\Constraints as Assert;


>>>>>>> origin/Abonnement

#[ORM\Entity(repositoryClass: AbonnementRepository::class)]
class Abonnement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $idU = null;

<<<<<<< HEAD
    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank(message:'champ vide')]
    private ?string $moyenTransportA = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateA = null;
=======
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:'champ vide')]
    private ?string $moyTrA = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateA = null;
    
>>>>>>> origin/Abonnement

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateExpA = null;

<<<<<<< HEAD
    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
=======
    
    // #[ORM\Column]
    // #[Assert\NotNull(message:'champ vide')]
    // private ?int $idtypeA = null;

    #[ORM\Column(nullable: true)]
>>>>>>> origin/Abonnement
    #[Assert\Choice(choices: [0, 1])]
    private ?int $etudiantA = null;

    #[ORM\Column(nullable: true)]
    private ?int $redEtA = null;

<<<<<<< HEAD
    #[ORM\ManyToOne(inversedBy: 'abonnements')]
    #[Assert\NotBlank(message:'champ vide')]
    private ?Typeabn $plan = null;
=======
    #[ORM\Column(nullable: true)]
    private ?int $redEvA = null;

    #[ORM\ManyToOne(inversedBy: 'abonnements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Typeabn $Plan = null;

   
>>>>>>> origin/Abonnement

    public function getId(): ?int
    {
        return $this->id;
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

<<<<<<< HEAD
    public function getMoyenTransportA(): ?string
    {
        return $this->moyenTransportA;
    }

    public function setMoyenTransportA(?string $moyenTransportA): self
    {
        $this->moyenTransportA = $moyenTransportA;
=======
    public function getMoyTrA(): ?string
    {
        return $this->moyTrA;
    }

    public function setMoyTrA(string $moyTrA): self
    {
        $this->moyTrA = $moyTrA;
>>>>>>> origin/Abonnement

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

<<<<<<< HEAD
=======
    // public function getIdtypeA(): ?int
    // {
    //     return $this->idtypeA;
    // }

    // public function setIdtypeA(int $idtypeA): self
    // {
    //     $this->idtypeA = $idtypeA;

    //     return $this;
    // }

>>>>>>> origin/Abonnement
    public function getEtudiantA(): ?int
    {
        return $this->etudiantA;
    }

<<<<<<< HEAD
    // public function setEtudiantA(?int $etudiantA): self
    // {
    //     $this->etudiantA = $etudiantA;

    //     return $this;
    // }
=======
>>>>>>> origin/Abonnement
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
<<<<<<< HEAD
=======

>>>>>>> origin/Abonnement
    public function getRedEtA(): ?int
    {
        return $this->redEtA;
    }

    // public function setRedEtA(?int $redEtA): self
    // {
    //     $this->redEtA = $redEtA;

    //     return $this;
    // }
<<<<<<< HEAD
=======
    // function setRedEtA(FormInterface $form, $etudiantA) {
    //     $redEtA = null;
    //     if ($etudiantA == 1) {
    //         $redEtA = 20;
    //     }
    //     else{$redEtA = 0;}
    //     $form->get('redEtA')->setData($redEtA);
    // }
>>>>>>> origin/Abonnement
    public function setRedEtA(?int $redEtA): self
    {
        if ($this->etudiantA == 1) {
            $this->redEtA = 20;
        } else {
            $this->redEtA = 0;
        }
    
        return $this;
    }
<<<<<<< HEAD
    public function getPlan(): ?Typeabn
    {
        return $this->plan;
    }

    public function setPlan(?Typeabn $plan): self
    {
        $this->plan = $plan;

        return $this;
    }
    
=======
    

    public function getRedEvA(): ?int
    {
        return $this->redEvA;
    }

    public function setRedEvA(?int $redEvA): self
    {
        $this->redEvA = $redEvA;

        return $this;
    }

    public function getPlan(): ?Typeabn
    {
        return $this->Plan;
    }

    public function setPlan(?Typeabn $Plan): self
    {
        $this->Plan = $Plan;

        return $this;
    }




>>>>>>> origin/Abonnement
}
