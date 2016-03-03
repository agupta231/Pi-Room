/* 
 * The MIT License
 *
 * Copyright 2015 github.com/agupta231.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

var ledStatus = false;
var whiteToggle = false;

function ledSlider(val, color) {
    document.getElementById('led' + color + 'value').value = val;
    ws.send("led," + color + "," + val);

    whiteToggle = false;
}

function ledValue(val, color) {
    document.getElementById('led' + color + 'slider').value = val;
    ws.send("led," + color + "," + val);

    whiteToggle = false;
}

function ledToggle(status) {
    if(status) {
        ws.send("led,S,1");
    }
    else {
        ws.send("led,S,0");
    }
}

function WSlider(val) {
    if(!whiteToggle) {
        var r = document.getElementById("ledRvalue").value;
        var g = document.getElementById("ledGvalue").value;
        var b = document.getElementById("ledBvalue").value;

        var wValue = (r + g + b) / 3;

        document.getElementById("ledWValue").value = wValue;
        document.getElementById("ledRvalue").value = wValue;
        document.getElementById("ledGvalue").value = wValue;
        document.getElementById("ledBvalue").value = wValue;

        ws.send("led,W," + wValue);
        whiteToggle = true;
    }
    else {
        document.getElementById("ledWValue").value = val;
        document.getElementById("ledRvalue").value = val;
        document.getElementById("ledGvalue").value = val;
        document.getElementById("ledBvalue").value = val;

        ws.send("led,W," + val);
    }
}
