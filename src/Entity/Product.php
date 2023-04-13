<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $group_food = null;

    #[ORM\Column]
    private ?float $kcal100g = null;

    #[ORM\Column]
    private ?float $protein100g = null;

    #[ORM\Column]
    private ?float $carb100g = null;

    #[ORM\Column]
    private ?float $fat100g = null;

    #[ORM\Column]
    private ?float $kcal = null;

    #[ORM\Column]
    private ?float $protein = null;

    #[ORM\Column]
    private ?float $carb = null;

    #[ORM\Column]
    private ?float $fat = null;

    #[ORM\Column]
    private ?float $portion_whole = null;

    #[ORM\Column]
    private ?int $time1 = null;

    #[ORM\Column(length: 255)]
    private ?string $time2 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getGroupFood(): ?string
    {
        return $this->group_food;
    }

    public function setGroupFood(string $group_food): self
    {
        $this->group_food = $group_food;

        return $this;
    }

    public function getKcal100g(): ?float
    {
        return $this->kcal100g;
    }

    public function setKcal100g(float $kcal100g): self
    {
        $this->kcal100g = $kcal100g;

        return $this;
    }

    public function getProtein100g(): ?float
    {
        return $this->protein100g;
    }

    public function setProtein100g(float $protein100g): self
    {
        $this->protein100g = $protein100g;

        return $this;
    }

    public function getCarb100g(): ?float
    {
        return $this->carb100g;
    }

    public function setCarb100g(float $carb100g): self
    {
        $this->carb100g = $carb100g;

        return $this;
    }

    public function getFat100g(): ?float
    {
        return $this->fat100g;
    }

    public function setFat100g(float $fat100g): self
    {
        $this->fat100g = $fat100g;

        return $this;
    }

    public function getKcal(): ?float
    {
        return $this->kcal;
    }

    public function setKcal(float $kcal): self
    {
        $this->kcal = $kcal;

        return $this;
    }

    public function getProtein(): ?float
    {
        return $this->protein;
    }

    public function setProtein(float $protein): self
    {
        $this->protein = $protein;

        return $this;
    }

    public function getCarb(): ?float
    {
        return $this->carb;
    }

    public function setCarb(float $carb): self
    {
        $this->carb = $carb;

        return $this;
    }

    public function getFat(): ?float
    {
        return $this->fat;
    }

    public function setFat(float $fat): self
    {
        $this->fat = $fat;

        return $this;
    }

    public function getPortionWhole(): ?float
    {
        return $this->portion_whole;
    }

    public function setPortionWhole(float $portion_whole): self
    {
        $this->portion_whole = $portion_whole;

        return $this;
    }

    public function getTime1(): ?int
    {
        return $this->time1;
    }

    public function setTime1(int $time1): self
    {
        $this->time1 = $time1;

        return $this;
    }

    public function getTime2(): ?string
    {
        return $this->time2;
    }

    public function setTime2(string $time2): self
    {
        $this->time2 = $time2;

        return $this;
    }
}
