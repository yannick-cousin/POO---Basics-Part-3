<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
  private string $energy;
  private int $energyLevel;

  public const ALLOWED_ENERGIES = [
    'fuel',
    'electric'
  ];

  public function __construct(string $color, int $nbSeats, string $energy)
  {
    parent::__construct($color, $nbSeats, 4);
    $this->setEnergy($energy);
  }

  public function getEnergy(): string
  {
    return $this->energy;
  }

  public function setEnergy($energy): Car
  {
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
      $this->energy = $energy;
    }
    return $this;
  }

  public function getEnergyLevel(): int
  {
    return $this->energyLevel;
  }

  public function setEnergyLevel($energyLevel): void
  {
    $this->energyLevel = $energyLevel;
  }
}