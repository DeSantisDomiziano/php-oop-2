<?php
 require_once __DIR__ . '/Computer.php';

 class Laptop extends Computer {

    public $brand;
    public $monitor;
    public $keyboard;
    public $price;
    public $device;
    public $img;
    public $mouse;

    public function __construct(string $_brand, string $_monitor, string $_keyboard, string $_img, string $_mouse, float $_price) {
        parent::__construct($_brand, $_monitor, $_keyboard, $_img, $_price);
        $this->mouse = $_mouse;
    }

    public function setType()
    {
        $this->device = 'Desktop';
    }
 }