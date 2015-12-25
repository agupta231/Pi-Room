<!DOCTYPE html>
<!--
The MIT License

Copyright 2015 github.com/agupta231.

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>PiRoom</title>
    
    <link href="css/index.css" rel="stylesheet" type="text/css"/>
    
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/ledStrip.js"></script>
</head>
<body>
    <div id="container">
        <div id="roomColorControl">
            <span id='sweg'>0</span>
            <table>
                <tr>
                    <td><center>R</center></td>
                    <td><center>G</center></td>
                    <td><center>B</center></td>
                </tr>
                <tr>
                    <td><input id="ledRvalue" name="ledRvalue" class="ledValue" type="number" max="255" min="0"></td>
                    <td><input id="ledGvalue" name="ledGvalue" class="ledValue" type="number" max="255" min="0"></td>
                    <td><input id="ledBvalue" name="ledBvalue" class="ledValue" type="number" max="255" min="0"></td>
                </tr>
                <tr>
                    <td><center><input id="ledRslider" name='ledRslider' type='range' min="0" max="255" step="5" class="ledSlider" oninput="ledSlider(this.value, 'r')"></center></td>
                    <td><center><input id="ledGslider" name='ledGslider' type='range' min="0" max="255" step="5" class="ledSlider" oninput="ledSlider(this.value, 'g')"></center></td>
                    <td><center><input id="ledBslider" name='ledBslider' type='range' min="0" max="255" step="5" class="ledSlider" oninput="ledSlider(this.value, 'b')"></center></td>
                </tr>
            <table>
        </div>
    </div>
</body>
</html>
