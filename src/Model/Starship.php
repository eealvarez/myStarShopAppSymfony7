<?php

namespace App\Model;

class Starship
{
    public function __construct(
        private int $id,
        private string $marca,
        private string $CPU,
        private string $RAM,
        private StarshipStatusEnum $HDD,
    ) {}

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of marca
     */
    public function getMarca(): string
    {
        return $this->marca;
    }

    /**
     * Get the value of CPU
     */
    public function getCPU(): string
    {
        return $this->CPU;
    }

    /**
     * Get the value of RAM
     */
    public function getRAM(): string
    {
        return $this->RAM;
    }

    /**
     * Get the value of HDD
     */
    public function getHDD(): StarshipStatusEnum
    {
        return $this->HDD;
    }
}
