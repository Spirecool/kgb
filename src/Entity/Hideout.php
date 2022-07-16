<?php

namespace App\Entity;

use App\Repository\HideoutRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HideoutRepository::class)]
class Hideout
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $code_name = null;

    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[ORM\Column(length: 50)]
    private ?string $country = null;

    #[ORM\Column(length: 255)]
    private ?string $hideout_type = null;

    #[ORM\ManyToOne(inversedBy: 'hideouts')]
    private ?Mission $mission = null;

    #[ORM\ManyToOne(inversedBy: 'hideout')]
    private ?Mission $misson_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeName(): ?string
    {
        return $this->code_name;
    }

    public function setCodeName(string $code_name): self
    {
        $this->code_name = $code_name;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getHideoutType(): ?string
    {
        return $this->hideout_type;
    }

    public function setHideoutType(string $hideout_type): self
    {
        $this->hideout_type = $hideout_type;

        return $this;
    }

    public function getMission(): ?Mission
    {
        return $this->mission;
    }

    public function setMission(?Mission $mission): self
    {
        $this->mission = $mission;

        return $this;
    }

    public function getMissonId(): ?Mission
    {
        return $this->misson_id;
    }

    public function setMissonId(?Mission $misson_id): self
    {
        $this->misson_id = $misson_id;

        return $this;
    }
}
