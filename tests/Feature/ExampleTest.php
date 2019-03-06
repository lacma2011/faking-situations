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
        
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $x = TRUE;
        $this->assertEquals(TRUE, $x);
    }
    
    public function testEqualString(): void
    {
        $x = 'user@example.com';
        $this->assertEquals(
            'user@example.com',
            $x
        );
    }
    
    public function testCrazyObj(): void
    {
        $testObj = new TestMe;
        $testObj->method();
        
        $testObj2 = new TestMeToo;
        $testObj2->method();

    }
}
