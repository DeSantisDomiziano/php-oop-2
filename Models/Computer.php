<?php

class Computer {
    
    protected $brand;
    protected $monitor;
    protected $keyboard;
    protected $price;
    protected $device;

    public function __construct(string $_brand, string $_monitor, string $_keyboard) {
        $this->brand = $_brand;
        $this->monitor = $_monitor;
        $this->keyboard = $_keyboard;
    }

    public function setType()
    {
        $this->device = 'Computer';
    }

    public function setPrice(float $_price, string $_unit)
    {
        $this->price = $_price . " $_unit";
    }

}
