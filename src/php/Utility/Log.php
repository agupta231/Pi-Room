<?php

class Log {
    public static $logFile;

    public static function init() {
        Log::$logFile = fopen('/var/log/piroom/log' . date("-Y-m-d") . '.txt', "a") or die ("File cannot be opened");
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