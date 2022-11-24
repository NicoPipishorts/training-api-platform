<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\WineDetailsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WineDetailsRepository::class)]
#[ApiResource]
class WineDetails
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $lang = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $tasting = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $accords = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $info = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLang(): ?string
    {
        return $this->lang;
    }

    public function setLang(string $lang): self
    {
        $this->lang = $lang;

        return $this;
    }

    public function getTasting(): ?string
    {
        return $this->tasting;
    }

    public function setTasting(string $tasting): self
    {
        $this->tasting = $tasting;

        return $this;
    }

    public function getAccords(): ?string
    {
        return $this->accords;
    }

    public function setAccords(string $accords): self
    {
        $this->accords = $accords;

        return $this;
    }

    public function getInfo(): ?int
    {
        return $this->info;
    }

    public function setInfo(int $info): self
    {
        $this->info = $info;

        return $this;
    }
}
