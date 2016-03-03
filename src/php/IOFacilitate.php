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
                $this->LED->parse($partsArray);
                echo "LED Edited";
                break;

            default:
                Log::writeLog("Could not parse data", true);
        }
    }
}