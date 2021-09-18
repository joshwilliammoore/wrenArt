<?php

class Portfolio {

    private $Portfolio_ID;
    private $Name;
    private $Image;

    function __get($portfolio) {
        return $this->$portfolio;
    }

    function __set($portfolio, $value) {
        $this->$portfolio = $value;
    }

}


?>