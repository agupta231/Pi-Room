<?php

/**
 * User: agupta
 * Date: 2/28/16
 */
class log {
    public static $logFile;

    public static function init() {
        log::$logFile = fopen('/var/log/piroom/log' . date("-Y-m-d") . '.txt', "a") or die ("File cannot be opened");
    }
    public static function writeLog($string, $verbose = false) {
        if($verbose) {
            echo $string;
        }
        fwrite(log::$logFile, $string);
    }
    public static function closeLog() {
        fclose(log::$logFile);
    }
}