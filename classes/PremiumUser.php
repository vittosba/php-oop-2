<?php
require_once __DIR__ . '/User.php';

class PremiumUser extends User {
    private $level;

    public function __construct($name, $last_name, $age, $level = 1) {
        parent::__construct($name, $last_name, $age);

        $this->level = $level;
    }

    protected function setSale() {
        if($this->age > 65) {
            $this->sale = 20;
        }
        elseif($this->level > 3) {
            $this->sale = 15;
        }
        else {
            $this->sale = 10;
        }
    }
}