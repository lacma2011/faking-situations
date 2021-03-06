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
    
    public function methodSqlQuery() {
        global $Obj;
        $sql = <<<EOT
SELECT
 name,
 milliseconds,
  bytes,
 albumid
FROM
 tracks
    WHERE
 albumid = 1;
EOT;
        $Obj->dbMethod($sql)->getAll();
        
        $Obj->data->loadDb($sql)->first();
    }
    
    public function properties() {
        global $Obj;
        $Obj->myProperty = 'hello';
        echo $Obj->myProperty;
    }
}
