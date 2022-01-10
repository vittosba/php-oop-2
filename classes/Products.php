<?php

class Product {
    protected $name;
    protected $quantity;
    protected $expiration_date; // 0 to 365
    protected $price;
    protected $salable;

    //construttore
    public function __construct($name, $quantity, $expiration_date, $price) {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->expiration_date = $expiration_date;
        $this->price = $price;
    }

    protected function setSalable() {
        $this->salable = $this->expiration_date < date('z') ? 'not salable' : 'salable';
    }

    public function getSalable() {
        $this->setSalable();
        return $this->salable;
    }
}