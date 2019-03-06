<?php

namespace App;

class TheClass {

    private $realClass;

    public function __construct( $realClass ) {
        $this->realClass = $realClass;
    }

    public function __call($name, $arguments) {
        echo "\n called method $name" . PHP_EOL;
        var_dump($arguments);
    }
    
    public function addMock() {
        
    }
}
