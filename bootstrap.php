<?php

require_once 'vendor/autoload.php';

// load an object that needs to be faked

$Obj = new StdClass( ['version'=>'lkdslf']);
var_dump($Obj->version = '1lks');


class TestMe {
    public function method() {
        global $Obj;
        $Obj->okay(1, 2, 3);
    }
}

class TestMeToo {
    public function method() {
        global $Obj;
        $Obj->notOkay(['a', 'b', 'c']);
    }
}
