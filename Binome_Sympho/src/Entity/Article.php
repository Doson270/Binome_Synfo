<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $name = null;

    #[ORM\Column(length: 250, nullable: true)]
    private ?string $image = null;

    #[ORM\ManyToOne(inversedBy: 'articles')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Pays $pays = null;

    #[ORM\ManyToOne(inversedBy: 'articles')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Races $races = null;

    #[ORM\ManyToOne(inversedBy: 'articles')]
    private ?Commentaire $commentaire = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getPays(): ?pays
    {
        return $this->pays;
    }

    public function setPays(?pays $pays): static
    {
        $this->pays = $pays;

        return $this;
    }

    public function getRaces(): ?races
    {
        return $this->races;
    }

    public function setRaces(?races $races): static
    {
        $this->races = $races;

        return $this;
    }

    public function getCommentaire(): ?commentaire
    {
        return $this->commentaire;
    }

    public function setCommentaire(?commentaire $commentaire): static
    {
        $this->commentaire = $commentaire;

        return $this;
    }
}
