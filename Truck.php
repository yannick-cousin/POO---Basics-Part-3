<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
  private int $capacityStorage;
  private int $load = 0;

  public function __construct(string $color, int $nbSeats, int $nbWheels, int $capacityStorage)
  {
    parent::__construct($color, $nbSeats, $nbWheels);
    $this->setCapacityStorage($capacityStorage);
  }

  public function checkLoad(): string
  {
    if($this->getLoad() == 100)
    {
      return "full";
    }
    else
    {
      return "In filling";
    }
  }

  public function getCapacityStorage(): int
  {
    return $this->capacityStorage;
  }

  public function setCapacityStorage($capacityStorage): void
  {
    $this->capacityStorage = $capacityStorage;
  }

  public function getLoad(): int
  {
    return $this->load;
  }

  public function setLoad($load): void
  {
    $this->load = $load;
  }

}