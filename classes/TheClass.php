<?php

namespace App;

use PDO;

class TheClass {

    private $realClass;
    private $db;

    public function __construct( $realClass ) {
        $this->realClass = $realClass;
        
        // the db
        try {
            // TODO: need better pathing
            $this->db = new PDO("sqlite:".__DIR__."/../database/chinook.sqlite");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo "Unable to connect";
            echo $e->getMessage();
            exit;
        }
    }

    public function __call($name, $arguments) {
        echo "\n called method $name" . PHP_EOL;
        var_dump($arguments);
    }
    
    public function addMock() {
        
    }
    
    public function dbMethod($query) {
        echo "run this query: $query\n";

        // $results = $this->db ....

    }
}
