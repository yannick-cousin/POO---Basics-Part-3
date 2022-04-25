<?php

 abstract class HighWay
{
  protected array $currentVehicles = [];
  protected int $nbLane;
  protected int $maxSpeed;

  public function __construct(int $nbLane, int $maxSpeed)
  {
    $this->nbLane = $nbLane;
    $this->maxSpeed = $maxSpeed;
  }

  abstract protected function addVehicle($car);

  public function getNbLance(): int
  {
    return $this->nbLane;
  }

  public function getMaxSpeed(): int
  {
    return $this->maxSpeed;
  }

  public function setNbLane($nbLane): void
  {
    $this->nbLane = $nbLane;
  }

  public function setMaxSpeed($maxSpeed): void
  {
    $this->maxSpeed = $maxSpeed;
  }
}