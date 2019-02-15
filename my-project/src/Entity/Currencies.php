<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CurrenciesRepository")
 */
class Currencies
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name_usd;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name_eur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $added_date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameUsd(): ?string
    {
        return $this->name_usd;
    }

    public function setNameUsd(string $name_usd): self
    {
        $this->name_usd = $name_usd;

        return $this;
    }

    public function getNameEur(): ?string
    {
        return $this->name_eur;
    }

    public function setNameEur(string $name_eur): self
    {
        $this->name_eur = $name_eur;

        return $this;
    }

    public function getAddedDate(): ?string
    {
        return $this->added_date;
    }

    public function setAddedDate(string $added_date): self
    {
        $this->added_date = $added_date;

        return $this;
    }
}
