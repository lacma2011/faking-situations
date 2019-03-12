<?php
declare(strict_types=1);

namespace Tests;

use App\TheClass;
use App\SensorAnts\QueenAnt;
use PHPUnit\Framework\TestCase as BaseTestCase;


//const SENSOR_CLASS = 'App\\TheClass';
const SENSOR_CLASS = 'App\\SensorAnts\\QueenAnt';

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
