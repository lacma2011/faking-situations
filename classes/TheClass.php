<?php

namespace App;

use PDO;

class TheClass {

    private $realClass;
    private $mocks = [];
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
        echo PHP_EOL;
        if (key_exists($name, $this->mocks)) {
            
        }
    }
    
    public function __get($name) {
        echo "\n getting property $name" . PHP_EOL;
        return $name;
    }

    public function __set($name, $arguments) {
        echo "\n setting property $name" . PHP_EOL;
        var_dump($arguments);
        echo PHP_EOL;
    }

    public function addMock( $mockStructure ) {

        // append $mockStructure to $this->mocks own structure

        
    }
    
    public function dbMethod($query) {
        echo "run this query: $query\n";

        // $results = $this->db ....

    }
}
