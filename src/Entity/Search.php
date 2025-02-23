<?php

namespace App\Entity;

use App\Repository\SearchRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SearchRepository::class)]
class Search
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $region = null;

    #[ORM\Column(length: 50)]
    private ?string $departement = null;

    #[ORM\Column(length: 50)]
    private ?string $city = null;

    #[ORM\Column]
    private ?int $length = null;

    #[ORM\Column(length: 30)]
    private ?string $dishwasher = null;

    #[ORM\Column(length: 30)]
    private ?string $washingmachine = null;

    #[ORM\Column(length: 30)]
    private ?string $airconditioning = null;

    #[ORM\Column(length: 30)]
    private ?string $TV = null;

    #[ORM\Column(length: 30)]
    private ?string $terrace = null;

    #[ORM\Column(length: 30)]
    private ?string $grill = null;

    #[ORM\Column(length: 30)]
    private ?string $privatepool = null;

    #[ORM\Column(length: 30)]
    private ?string $sharedpool = null;

    #[ORM\Column(length: 30)]
    private ?string $tennis = null;

    #[ORM\Column(length: 30)]
    private ?string $tabletennis = null;

    #[ORM\Column(length: 30)]
    private ?string $laundryrental = null;

    #[ORM\Column(length: 30)]
    private ?string $endofstaycleaning = null;

    #[ORM\Column(length: 30)]
    private ?string $webaccess = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): static
    {
        $this->region = $region;

        return $this;
    }

    public function getDepartement(): ?string
    {
        return $this->departement;
    }

    public function setDepartement(string $departement): static
    {
        $this->departement = $departement;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getLength(): ?int
    {
        return $this->length;
    }

    public function setLength(int $length): static
    {
        $this->length = $length;

        return $this;
    }

    public function getDishwasher(): ?string
    {
        return $this->dishwasher;
    }

    public function setDishwasher(string $dishwasher): static
    {
        $this->dishwasher = $dishwasher;

        return $this;
    }

    public function getWashingmachine(): ?string
    {
        return $this->washingmachine;
    }

    public function setWashingmachine(string $washingmachine): static
    {
        $this->washingmachine = $washingmachine;

        return $this;
    }

    public function getAirconditioning(): ?string
    {
        return $this->airconditioning;
    }

    public function setAirconditioning(string $airconditioning): static
    {
        $this->airconditioning = $airconditioning;

        return $this;
    }

    public function getTV(): ?string
    {
        return $this->TV;
    }

    public function setTV(string $TV): static
    {
        $this->TV = $TV;

        return $this;
    }

    public function getTerrace(): ?string
    {
        return $this->terrace;
    }

    public function setTerrace(string $terrace): static
    {
        $this->terrace = $terrace;

        return $this;
    }

    public function getGrill(): ?string
    {
        return $this->grill;
    }

    public function setGrill(string $grill): static
    {
        $this->grill = $grill;

        return $this;
    }

    public function getPrivatepool(): ?string
    {
        return $this->privatepool;
    }

    public function setPrivatepool(string $privatepool): static
    {
        $this->privatepool = $privatepool;

        return $this;
    }

    public function getSharedpool(): ?string
    {
        return $this->sharedpool;
    }

    public function setSharedpool(string $sharedpool): static
    {
        $this->sharedpool = $sharedpool;

        return $this;
    }

    public function getTennis(): ?string
    {
        return $this->tennis;
    }

    public function setTennis(string $tennis): static
    {
        $this->tennis = $tennis;

        return $this;
    }

    public function getTabletennis(): ?string
    {
        return $this->tabletennis;
    }

    public function setTabletennis(string $tabletennis): static
    {
        $this->tabletennis = $tabletennis;

        return $this;
    }

    public function getLaundryrental(): ?string
    {
        return $this->laundryrental;
    }

    public function setLaundryrental(string $laundryrental): static
    {
        $this->laundryrental = $laundryrental;

        return $this;
    }

    public function getEndofstaycleaning(): ?string
    {
        return $this->endofstaycleaning;
    }

    public function setEndofstaycleaning(string $endofstaycleaning): static
    {
        $this->endofstaycleaning = $endofstaycleaning;

        return $this;
    }

    public function getWebaccess(): ?string
    {
        return $this->webaccess;
    }

    public function setWebaccess(string $webaccess): static
    {
        $this->webaccess = $webaccess;

        return $this;
    }
}
