<?php

namespace Tests\Feature;

use Tests\TestCase;

// classes being tested here
use TestMe;
use TestMeToo;

final class ExampleTest extends TestCase
{
    
    public function setUp() {
        parent::setUp();
        
        $faker = $this->fakeClass;
    }

    
    public function testSensor(): void
    {
        $testObj = new TestMe;
        $testObj->method();
        
        $testObj2 = new TestMeToo;
        $testObj2->method();
        $testObj2->methodSqlQuery();
        $testObj2->properties();
        
        foreach ($this->fakeClass->getSensors() as $s) {
            var_dump($s->getSensors());
            echo "=================";
        }
    }
}
