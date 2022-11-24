<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\WineCaractRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WineCaractRepository::class)]
#[ApiResource]
class WineCaract
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $fruite = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $mineral = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $epice = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $puissance = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $floral = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $boise = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $acidite = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datemodified = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFruite(): ?int
    {
        return $this->fruite;
    }

    public function setFruite(int $fruite): self
    {
        $this->fruite = $fruite;

        return $this;
    }

    public function getMineral(): ?int
    {
        return $this->mineral;
    }

    public function setMineral(int $mineral): self
    {
        $this->mineral = $mineral;

        return $this;
    }

    public function getEpice(): ?int
    {
        return $this->epice;
    }

    public function setEpice(int $epice): self
    {
        $this->epice = $epice;

        return $this;
    }

    public function getPuissance(): ?string
    {
        return $this->puissance;
    }

    public function setPuissance(string $puissance): self
    {
        $this->puissance = $puissance;

        return $this;
    }

    public function getFloral(): array
    {
        return $this->floral;
    }

    public function setFloral(array $floral): self
    {
        $this->floral = $floral;

        return $this;
    }

    public function getBoise(): ?int
    {
        return $this->boise;
    }

    public function setBoise(int $boise): self
    {
        $this->boise = $boise;

        return $this;
    }

    public function getAcidite(): ?int
    {
        return $this->acidite;
    }

    public function setAcidite(int $acidite): self
    {
        $this->acidite = $acidite;

        return $this;
    }

    public function getDatemodified(): ?\DateTimeInterface
    {
        return $this->datemodified;
    }

    public function setDatemodified(\DateTimeInterface $datemodified): self
    {
        $this->datemodified = $datemodified;

        return $this;
    }
}
