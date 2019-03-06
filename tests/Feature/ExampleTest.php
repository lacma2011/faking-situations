<?php

namespace Tests\Feature;

use Tests\TestCase;

final class ExampleTest extends TestCase
{
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
}
