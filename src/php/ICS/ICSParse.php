<?php

class ICSParse {
    public function parse($filePath) {
        $file = fopen($filePath, "r") or die("ICS file could not be opened");

        while($line = fgets($file) !== false) {
            if(strpos($line, "DTSTART:" . date("Ymd")) !== false) {
                        
            }
        }
    }
}