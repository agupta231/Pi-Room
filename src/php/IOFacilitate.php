<?php

/**
 * User: agupta
 * Date: 2/25/16
 */

include_once 'IO/LED.php';

class IOFacilitate {
    protected $LED;

    public function __construct() {
        $this->LED = new LED();
        echo "LED instaniated";
    }
    public function parse($text) {
        $partsArray = explode(",", $text);
        echo "parse function started";


        switch($partsArray[0]) {
            case "led":
                echo "LED Edited";
                $this->LED->parse($partsArray);
                break;

            default:
                Log::writeLog("Could not parse data", true);
        }
    }
}