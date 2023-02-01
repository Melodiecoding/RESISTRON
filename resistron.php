<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resistron</title>
</head>
<body>
<header class="header">
<h1>Resistron</h1>
<h2>CALCULATE RESISTANCE</h2>
</header>
<div class="firstContainer">
<div class="ligne"></div>
    <div class="resistance">
        <div class="firstColor"></div>
        <div class ="segondColor"></div>
        <div class ="treeColor"></div>
        <div class ="lastColor"></div>

    </div>
    <div class="ligne"></div>
</div>

<div class ="chooseColor"> 
<label for="color-select">select color:</label>

<select name="firstColor" id="firstColor-select">
    <option value="">--Please choose a firstColor--</option>
    <option value="1">Black 0</option>
    <option value="10">Brown 1</option>
    <option value="100">Red 2</option>
    <option value="1000">Orange 3</option>
    <option value="10000">Yellow 4</option>
    <option value="100000">Green 5</option>
    <option value="1000000">Blue 6</option>
    <option value="10000000">Purple 7</option>
    <option value="100000000">Greys 8</option>
    <option value="1000000000">White 9</option>
    
</select>

<select name="segondColor" id="segondColor-select">
    <option value="">--Please choose a segondColor--</option>
    <option value="1">Black 0</option>
    <option value="10">Brown 1</option>
    <option value="100">Red 2</option>
    <option value="1000">Orange 3</option>
    <option value="10000">Yellow 4</option>
    <option value="100000">Green 5</option>
    <option value="1000000">Blue 6</option>
    <option value="10000000">Purple 7</option>
    <option value="100000000">Greys 8</option>
    <option value="1000000000">White 9</option>
    
</select>

<select name="treeColor" id="treeColor-select">
    <option value="">--Please choose a treeColor--</option>
    <option value="1">Black x1Ω</option>
    <option value="10">Brown x10Ω</option>
    <option value="100">Red x 100Ω</option>
    <option value="1000">Orange x1KΩ</option>
    <option value="10000">Yellow x10kΩ</option>
    <option value="100000">Green x100kΩ</option>
    <option value="1000000">Blue x1MΩ</option>
    <option value="10000000">Purple x10MΩ</option>
    <option value="100000000">Greys x100MΩ</option>
    <option value="1000000000">White x 1GΩ </option>
    <option value="0.1">Gold x0.1Ω</option>
    <option value="0.01">Silver x0.01Ω</option>
</select>

<select name="lastColor" id="lastColor-select">
    <option value="">--Please choose a lastColor--</option>
    <option value="1%">Brown +1%</option>
    <option value="2%">Red +2%</option>
    <option value="0.5%">Green +0.5%</option>
    <option value="0.25%">Blue +0.25%</option>
    <option value="0.10%">Purple +0.10%</option>
    <option value="0.05%">Greys +0.05%</option>
    <option value="5%">Gold +5%</option>
    <option value="10%">Silver +10%</option>
</select>
</div>
<h2>Result</h2>
<?php

$firstColor = [
    "1color" => "",
    "2color" => "",
    "value" => 1,
    "tolérance" => 1,
    

]


?>
</body>
</html>