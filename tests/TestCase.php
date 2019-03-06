<?php
declare(strict_types=1);

namespace Tests;

use App\TheClass;
use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected $fakeClass;


    protected function setUp() {
        // provided by bootstrap
        global $Obj;
        $this->fakeClass = new TheClass($Obj);
        $Obj = $this->fakeClass;
    }
}
