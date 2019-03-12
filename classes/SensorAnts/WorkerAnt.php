<?php

namespace App\SensorAnts;

/**
 * Description of WorkerAnt
 *
 * @author jerome
 */
class WorkerAnt {
    
    private $calls_made = [];

    public function __call($name, $arguments) {
        
        if ($name === 'getCalls') {
            return $this->getCalls();
        }
        
        $this->calls_made[] = [
            'type' => 'method',
            'name' => $name,
            'args' => $arguments,
        ];
        return $this;
    }
    
    public function __get($name) {
        $this->calls_made[] = [
            'type' => 'property:get',
            'name' => $name,
        ];
        return $this;
     }
    
     public function __set($name, $value) {
        $this->calls_made[] = [
            'type' => 'property:set',
            'name' => $name,
            'value' => $value,
        ];
        return $this;
     }

     public function __toString() {
        $this->calls_made[] = [
            'type' => 'toString',
        ];
        return "MOCKSTRING";
     }

     public function getCalls() {
         return $this->calls_made;
     }
}
