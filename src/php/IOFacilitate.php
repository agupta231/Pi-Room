<?php

/**
 * User: agupta
 * Date: 2/25/16
 */

require 'IO/LED.php';

class IOFacilitate {
    protected $LED;

    public function __construct() {
        $this->LED = new LED();
    }
    public function parse($text) {
        $partsArray = explode(",", $text);

        switch($partsArray) {
            case "led":
                break;

            default:
                Log::log("Could not parse data", true);
        }
        if($partsArray[0] == "led") {
            $this->LED->parse($partsArray);
        }
    }
}