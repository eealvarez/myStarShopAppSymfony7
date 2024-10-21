<?php

namespace App\Model;

class Starship
{
    public function __construct(
        private int $id,
        private string $marca,
        private string $CPU,
        private string $RAM,
        private string $HDD,
    ) {}

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Get the value of CPU
     */
    public function getCPU()
    {
        return $this->CPU;
    }

    /**
     * Get the value of RAM
     */
    public function getRAM()
    {
        return $this->RAM;
    }

    /**
     * Get the value of HDD
     */
    public function getHDD()
    {
        return $this->HDD;
    }
}
