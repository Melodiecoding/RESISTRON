<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resistron.css">
    <title>Resistron</title>
</head>
<body>
<header class="header">
<h1>RESISTRON</h1>
<h2>CALCULATE RESISTANCE</h2>
</header>
<div class="firstContainer">
<div class="ligne"></div>
    <div class="resistance">
        <div class="firstRing"></div>
        <div class="secondRing"></div>
        <div class="thirdRing"></div>
        <div class="lastRing"></div>
    </div>
    <div class="ligne"></div>
</div>

<div class ="chooseColor"> 
<label for="color-select">Select colors:</label>

<select name="firstColor" id="firstColor-select">
    <option value="">--First Color--</option>
    <option value="Brown">Brown 1</option>
    <option value="Red">Red 2</option>
    <option value="Orange">Orange 3</option>
    <option value="Yellow">Yellow 4</option>
    <option value="Green">Green 5</option>
    <option value="Blue">Blue 6</option>
    <option value="Purple">Purple 7</option>
    <option value="Greys">Grey 8</option>
    <option value="White">White 9</option>
</select>

<select name="secondColor" id="secondColor-select">
    <option value="">--Second Color--</option>
    <option value="Black">Black 0</option>
    <option value="Brown">Brown 1</option>
    <option value="Red">Red 2</option>
    <option value="Orange">Orange 3</option>
    <option value="Yellow">Yellow 4</option>
    <option value="Green">Green 5</option>
    <option value="Blue">Blue 6</option>
    <option value="Purple">Purple 7</option>
    <option value="Greys">Grey 8</option>
    <option value="White">White 9</option>
</select>

<select name="thirdColor" id="thirdColor-select">
    <option value="">--Third Color--</option>
    <option value="Black">Black x1Ω</option>
    <option value="Brown">Brown x10Ω</option>
    <option value="Red">Red x 100Ω</option>
    <option value="Orange">Orange x1KΩ</option>
    <option value="Yellow">Yellow x10kΩ</option>
    <option value="Green">Green x100kΩ</option>
    <option value="Blue">Blue x1MΩ</option>
    <option value="Purple">Purple x10MΩ</option>
    <option value="Greys">Grey x100MΩ</option>
    <option value="White">White x 1GΩ</option>
    <option value="Gold">Gold x0.1Ω</option>
    <option value="Silver">Silver x0.01Ω</option>
</select>

<select name="lastColor" id="lastColor-select">
    <option value="">--Fourth Color--</option>
    <option value="Brown">Brown +1%</option>
    <option value="Red">Red +2%</option>
    <option value="Green">Green +0.5</option>
    <option value="Blue">Blue +0.25%</option>
    <option value="Purple">Purple +0.10%</option>
    <option value="Greys">Grey +0.05%</option>
    <option value="Gold">Gold +5%</option>
    <option value="Silver">Silver +10%</option>
</select>

<button name="submit" type="submit">Calculate</button>
</div>
<h2>Result</h2>
<?php

$firstSecondColor = ['Black' => 0, 'Brown' => 1, 'Red' => 2, 'Orange' => 3, 'Yellow' => 4, 'Green' => 5, 'Blue' => 6, 'Purple' => 7, 'Grey' => 8, 'White' => 9];

$thirdColor = ['Black' => 1, 'Brown' => 1, 'Red' => 2, 'Orange' => 3, 'Yellow' => 4, 'Green' => 5, 'Blue' => 6, 'Purple' => 7, 'Grey' => 8, 'White' => 9, 'Gold' => 0,'Silver' => 0];


?>
</body>
</html>