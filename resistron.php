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
        <div class="firstColor"></div>
        <div class ="secondColor"></div>
        <div class ="thirdColor"></div>
        <div class ="lastColor"></div>
    </div>
    <div class="ligne"></div>
</div>

<div class ="chooseColor"> 
<label for="color-select">Select colors:</label>

<select name="firstColor" id="firstColor-select">
    <option value="">--First Color--</option>
    <option value="Black">Black</option>
    <option value="Brown">Brown</option>
    <option value="Red">Red</option>
    <option value="Orange">Orange</option>
    <option value="Yellow">Yellow</option>
    <option value="Green">Green</option>
    <option value="Blue">Blue</option>
    <option value="Purple">Purple</option>
    <option value="Greys">Greys</option>
    <option value="White">White</option>
    <option value="Gold">Gold</option>
    <option value="Silver">Silver</option>
</select>

<select name="secondColor" id="secondColor-select">
    <option value="">--Second Color--</option>
    <option value="Black">Black</option>
    <option value="Brown">Brown</option>
    <option value="Red">Red</option>
    <option value="Orange">Orange</option>
    <option value="Yellow">Yellow</option>
    <option value="Green">Green</option>
    <option value="Blue">Blue</option>
    <option value="Purple">Purple</option>
    <option value="Greys">Greys</option>
    <option value="White">White</option>
    <option value="Gold">Gold</option>
    <option value="Silver">Silver</option>
</select>

<select name="thirdColor" id="thirdColor-select">
    <option value="">--Third Color--</option>
    <option value="Black">Black</option>
    <option value="Brown">Brown</option>
    <option value="Red">Red</option>
    <option value="Orange">Orange</option>
    <option value="Yellow">Yellow</option>
    <option value="Green">Green</option>
    <option value="Blue">Blue</option>
    <option value="Purple">Purple</option>
    <option value="Greys">Greys</option>
    <option value="White">White</option>
    <option value="Gold">Gold</option>
    <option value="Silver">Silver</option>
</select>

<select name="lastColor" id="lastColor-select">
    <option value="">--Fourth Color--</option>
    <option value="Brown">Brown +1%</option>
    <option value="Red">Red +2%</option>
    <option value="Green">Green</option>
    <option value="Blue">Blue</option>
    <option value="Purple">Purple</option>
    <option value="Greys">Greys</option>
    <option value="White">White</option>
    <option value="Gold">Gold</option>
    <option value="Silver">Silver</option>
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