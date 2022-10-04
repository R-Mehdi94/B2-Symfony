<?php

namespace App\Entity;

use App\Repository\AtelierRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AtelierRepository::class)]
class Atelier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $nombreAtelier = null;

    #[ORM\Column(length: 255)]
    private ?string $theme = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreAtelier(): ?int
    {
        return $this->nombreAtelier;
    }

    public function setNombreAtelier(int $nombreAtelier): self
    {
        $this->nombreAtelier = $nombreAtelier;

        return $this;
    }

    public function getTheme(): ?string
    {
        return $this->theme;
    }

    public function setTheme(string $theme): self
    {
        $this->theme = $theme;

        return $this;
    }
}
