<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
  public function __construct()
  {
    parent::__construct(1, 10);
  }

  public function addVehicle($car)
  {
    if(get_class($car) == 'Bicycle')
    {
      $this->currentVehicles[] = $car;
    }
  }
}