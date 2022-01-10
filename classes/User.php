<?php

class User {
    protected $name; 
    protected $last_name;
    protected $age;
    protected $sale;

    // construttore
    public function __construct($name, $last_name, $age) {
    $this->name = $name;
    $this->last_name = $last_name;
    $this->age = $age;
    }

    public function getFullName() {
        return $this->name . ' ' . $this->last_name;
    }

    protected function setSale() {
       $this->sale = $this->age > 65 ? 10 : 0;
    }

    public function getSale() {
        $this->setSale();
        return $this->sale;
    }
} 