<?php

$today = date('z') + 1;

class Product {
    protected $name;
    protected $expiration_date; // 0 to 365
    protected $price;
    protected $salable;

    //construttore
    public function __construct($name, $expiration_date, $price) {
        $this->name = $name;
        $this->expiration_date = $expiration_date;
        $this->price = $price;
    }

    protected function setSalable() {
        $this->salable = $this->expiration_date < $this->today ? false : true;
    }

    public function getSalable() {
        $this->setSalable();
        return $this->salable;
    }
}