<?php

/**
 * User: agupta
 * Date: 2/25/16
 */
class LED {
    public static $status;
    public static $r;
    public static $g;
    public static $b;

    public function __construct() {
        LED::$status = false;
    }
    protected function white($value) {
        LED::$r = $value;
        LED::$g = $value;
        LED::$b = $value;
    }
}