<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
  public function __construct()
  {
    parent::__construct(4, 130);
  }

  public function addVehicle($car)
  {
    if(get_class($car) == 'Car' || get_class($car) == 'Truck')
    {
      $this->currentVehicles[] = $car;
    }
  }

}