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
<label for="color-select">Choose a color resistance:</label>

<select name="firstColor" id="firstColor-select">
    <option value="">--Please choose a firstColor--</option>
    <option value="black">Black</option>
    <option value="brown">Brown</option>
    <option value="red">Red</option>
    <option value="orange">Orange</option>
    <option value="yellow">Yellow</option>
    <option value="green">Green</option>
    <option value="Blue">Blue</option>
    <option value="Purple">Purple</option>
    <option value="Greys">Greys</option>
    <option value="White">White</option>
    <option value="Gold">Gold</option>
    <option value="Silver">Silver</option>
</select>

<select name="segondColor" id="segondColor-select">
    <option value="">--Please choose a segondColor--</option>
    <option value="black">Black</option>
    <option value="brown">Brown</option>
    <option value="red">Red</option>
    <option value="orange">Orange</option>
    <option value="yellow">Yellow</option>
    <option value="green">Green</option>
    <option value="Blue">Blue</option>
    <option value="Purple">Purple</option>
    <option value="Greys">Greys</option>
    <option value="White">White</option>
    <option value="Gold">Gold</option>
    <option value="Silver">Silver</option>
</select>

<select name="treeColor" id="treeColor-select">
    <option value="">--Please choose a treeColor--</option>
    <option value="black">Black</option>
    <option value="brown">Brown</option>
    <option value="red">Red</option>
    <option value="orange">Orange</option>
    <option value="yellow">Yellow</option>
    <option value="green">Green</option>
    <option value="Blue">Blue</option>
    <option value="Purple">Purple</option>
    <option value="Greys">Greys</option>
    <option value="White">White</option>
    <option value="Gold">Gold</option>
    <option value="Silver">Silver</option>
</select>

<select name="lastColor" id="lastColor-select">
    <option value="">--Please choose a lastColor--</option>
    <option value="black">Black</option>
    <option value="brown">Brown</option>
    <option value="red">Red</option>
    <option value="orange">Orange</option>
    <option value="yellow">Yellow</option>
    <option value="green">Green</option>
    <option value="Blue">Blue</option>
    <option value="Purple">Purple</option>
    <option value="Greys">Greys</option>
    <option value="White">White</option>
    <option value="Gold">Gold</option>
    <option value="Silver">Silver</option>
</select>
</div>
<h2>Result</h2>
<?php


?>
</body>
</html>