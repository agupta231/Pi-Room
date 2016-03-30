<?php

include_once (dirname(__FILE__) . "/../Utility/Log.php");
include_once (dirname(__FILE__) . "/../Utility/Config.php");

class LED {
    public static $status;
    public static $r;
    public static $g;
    public static $b;

    public function __construct() {
        LED::$status = false;
        LED::$r = 0;
        LED::$g = 0;
        LED::$b = 0;
    }
    public function parse($inputArray) {
        if($inputArray[1] == "R" || $inputArray[1] == "G" || $inputArray[1] == "B" || $inputArray[1] == "W") {
            if(is_int(intval($inputArray[2])) && intval($inputArray[2]) >= 0 && intval($inputArray[2]) <= 255) {
                $this->setLED($inputArray[1], intval($inputArray[2]));
                return true;
            }
            else {
                return false;
            }
        }
        else if($inputArray[1] == "S" && is_int(intval($inputArray[2]))) {
            $this->statusChange(intval($inputArray[2]));
            return true;
        }
        else {
            return false;
        }
    }
    protected function statusChange($newStatus) {
        if($newStatus) {
            LED::$status = true;

                shell_exec("pigs p " . Config::$rPin . " " . LED::$r);
                shell_exec("pigs p " . Config::$gPin . " " . LED::$g);
                shell_exec("pigs p " . Config::$bPin . " " . LED::$b);
        }
        else {
            LED::$status = false;

                shell_exec("pigs p " . Config::$rPin . " 0");
                shell_exec("pigs p " . Config::$gPin . " 0");
                shell_exec("pigs p " . Config::$bPin . " 0");
        }
    }
    protected function setLED($color, $value) {
        switch($color) {
            case "R":
                if(LED::$status) {
                    shell_exec("pigs p " . Config::$rPin . " " . $value);
                }

                LED::$r = $value;
                Log::writeLog("LED Red set to " . $value . "\r\n", true);
                break;

            case "G":
                if(LED::$status) {
                    shell_exec("pigs p " . Config::$gPin . " " . $value);
                }

                LED::$g = $value;
                Log::writeLog("LED Green set to " . $value . "\r\n", true);
                break;

            case "B":
                if(LED::$status) {
                    shell_exec("pigs p " . Config::$bPin . " " . $value);
                }

                LED::$b = $value;
                Log::writeLog("LED Blue set to " . $value . "\r\n", true);
                break;

            case "W":
                if(LED::$status) {
                shell_exec("pigs p " . Config::$rPin . " " . $value);
                shell_exec("pigs p " . Config::$gPin . " " . $value);
                shell_exec("pigs p " . Config::$bPin . " " . $value);
                }

                LED::$r = $value;
                LED::$g = $value;
                LED::$b = $value;

                Log::writeLog('All LEDs set to ' . $value . "\r\n", true);
                break;

            default:
            Log::writeLog("Could not write LED " . $color . " and power " . $value . "\r\n", 1);
        }
    }
}