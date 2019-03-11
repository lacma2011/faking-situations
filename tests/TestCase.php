<?php
declare(strict_types=1);

namespace Tests;

use App\TheClass;
use App\SensorAnts\QueenAnt;
use PHPUnit\Framework\TestCase as BaseTestCase;

// fully qualified class name of class to use for sensing:
//      App\TheClass or
//      App\SensorAnts\QueenAnt;

const SENSOR_CLASS = 'App\\TheClass';

class TestCase extends BaseTestCase
{
    protected $fakeClass;


    protected function setUp() {
        // provided by bootstrap
        global $Obj;
        $full_class_name = SENSOR_CLASS;
        $this->fakeClass = new $full_class_name($Obj);
        $Obj = $this->fakeClass;
    }
}
