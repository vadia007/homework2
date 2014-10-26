<?php

abstract class MotorCycle implements Transport
{
    private $countWheels = 2;
    function getCountWheels()
{
    return $this->countWheels;
}
    abstract function getModel();
}