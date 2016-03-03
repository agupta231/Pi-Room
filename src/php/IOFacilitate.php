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
    }
    public function parse($text) {
        $partsArray = explode(",", $text);

        switch($partsArray[0]) {
            case "led":
                $this->LED->parse($partsArray);
                break;

            default:
                Log::writeLog("Could not parse data", true);
        }
    }
    public function generateNewClientPacket() {
        if(LED::$status) {
            $state = 1;
        }
        else {
            $state = 0;
        }

        return array("type" => "ClientInitial", "ledR" => LED::$r, "ledG" => LED::$g, "ledB" => LED::$b, "ledStatus" => $state);
    }
}