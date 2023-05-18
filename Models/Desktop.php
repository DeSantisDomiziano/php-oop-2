<?php
 require_once __DIR__ . '/Computer.php';

 class Desktop extends Computer {

    protected $brand;
    protected $monitor;
    protected $keyboard;
    protected $price;
    protected $mouse;

    public function __construct(string $_brand, string $_monitor, string $_keyboard, string $_mouse) {
        parent::__construct($_brand, $_monitor, $_keyboard);
        $this->mouse = $_mouse;
    }

    public function setType()
    {
        $this->device = 'Desktop';
    }
 }