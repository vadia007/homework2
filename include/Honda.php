<?php

class Honda extends MotorCycle
{
    private $model;
    public function getModel()
    {
        return $this->model;
    }
    function __construct($model)
    {
        $this->model = $model;
    }
}