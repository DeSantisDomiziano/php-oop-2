<?php

class Computer {
    
    public $brand;
    public $monitor;
    public $keyboard;
    public $price;
    public $device;
    public $img;

    public function __construct(string $_brand, string $_monitor, string $_keyboard, string $_img, float $_price) {
        $this->brand = $_brand;
        $this->monitor = $_monitor;
        $this->keyboard = $_keyboard;
        $this->img = $_img;
        $this->price = $_price;
    }

    public function setType()
    {
        $this->device = 'Computer';
    }

    public function getType() {
        return $this->device;
    }

}
