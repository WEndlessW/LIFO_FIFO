<?php
include "interface.php";
class FIFO implements I {
    private $arr = [];

    public function __construct() {
        $this->arr = [];
    }

    public function push($var) {
        array_push($this->arr, "$var");
        echo "</br>";
        echo implode(" ",$this->arr);
        return $this->arr;
    }
    
    public function pop() {
        array_shift($this->arr);
        echo "</br>";
        echo implode(" ", $this->arr);
        return $this->arr;
    }
}


?>