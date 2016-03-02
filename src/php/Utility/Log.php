<?php

/**
 * User: agupta
 * Date: 2/28/16
 */
class Log {
    public static $logFile;

    public static function init() {
        Log::$logFile = fopen('/var/Log/piroom/Log' . date("-Y-m-d") . '.txt', "a") or die ("File cannot be opened");
    }
    public static function writeLog($string, $verbose = false) {
        if($verbose) {
            echo $string;
        }
        fwrite(Log::$logFile, $string);
    }
    public static function closeLog() {
        fclose(Log::$logFile);
    }
}