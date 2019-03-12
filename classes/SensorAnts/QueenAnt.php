<?php

namespace App\SensorAnts;

use App\SensorAnts\WorkerAnt;

/**
 * Description of QueenAnt
 *
 * @author jerome
 */
class QueenAnt {
    /*
        Queen ant will delegate any _call's or _get's to a new Worker Ant
        Worker ant will get _calls and _gets and inform queen when it gets a new one
        Queen ant will track worker ants in a log by their Object ID.
        Each Worker ant will remember its history of _call's and _get's
     */
    
    protected $realClass;

    protected $sensors;
    
    public function __construct( $realClass ) {
        $this->realClass = $realClass;
        
    }
    
    public function __call($name, $arguments) {
        
        if ($name === 'getSensors') {
            return $this->getSensors();
        } elseif($name === 'createAnt') {
            return $this->createAnt();
        }
        
        $ant = $this->createAnt();
        return $ant->$name($arguments);
    }
    
    public function __get($name) {
        $ant = $this->createAnt();
        return $ant->$name;
     }

    public function __set($name, $value) {
        $ant = $this->createAnt();
        return $ant->__set($name, $value);
     }
    
    private function createAnt() {
        $ant = new WorkerAnt();
        $this->sensors[] = $ant;
        return $ant;
    }
    
    public function getSensors() {
        return $this->sensors;
    }
}
