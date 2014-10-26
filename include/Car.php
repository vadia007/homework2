<?php

abstract class Car implements Transport
{
    private $countWheels = 4;

    function getCountWheels()
    {
        return $this->countWheels;
    }
    abstract function getModel();
}