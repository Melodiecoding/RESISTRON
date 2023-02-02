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
    <script>

        function autoSubmit() {
            const theForm = document.getElementById("theForm").submit();

        }
        function selectColor1(mySelect) {
            const myColor = mySelect.selectedOptions[0].text.split(" ")[0];
            var myDiv = document.getElementById("firstBar");
            const newClass = myColor + "Bar";
            myDiv.className = "firstColor " + newClass;
        }
        function selectColor2(mySelect) {
            const myColor = mySelect.selectedOptions[0].text.split(" ")[0];
            var myDiv = document.getElementById("secondBar");
            const newClass = myColor + "Bar";
            myDiv.className = "secondColor " + newClass;
        }
        function selectColor3(mySelect) {
            const myColor = mySelect.selectedOptions[0].text.split(" ")[0];
            var myDiv = document.getElementById("thirdBar");
            const newClass = myColor + "Bar";
            myDiv.className = "thirdColor " + newClass;
        }
        function selectColor4(mySelect) {
            const myColor = mySelect.selectedOptions[0].text.split(" ")[0];
            var myDiv = document.getElementById("lastBar");
            const newClass = myColor + "Bar";
            myDiv.className = "lastColor " + newClass;
        }
    </script>
    <header class="header">
        <h1>Resistron</h1>
        <h2>CALCULATE RESISTANCE</h2>
    </header>
    <div class="firstContainer">
        <div class="ligne"></div>
        <div class="resistance">
            <div id="firstBar" class="firstColor BlackBar"></div>
            <div id="secondBar" class="secondColor BlackBar"></div>
            <div id="thirdBar" class="thirdColor BlackBar"></div>
            <div id="lastBar" class="lastColor BlackBar"></div>

        </div>
        <div class="ligne"></div>
    </div>

    <div class="chooseColor">
        <form action="resistron.php" method="post" id="theForm" onchange="autoSubmit()">
            <!-- pour un reactivite du select : onchange -->
            <select name="firstColor" id="firstColor-select" onchange="selectColor1(this)">
                <option value="">--Please choose a firstColor--</option>
                <option value="0">Black 0</option>
                <option value="1">Brown 1</option>
                <option value="2">Red 2</option>
                <option value="3">Orange 3</option>
                <option value="4">Yellow 4</option>
                <option value="5">Green 5</option>
                <option value="6">Blue 6</option>
                <option value="7">Purple 7</option>
                <option value="8">Greys 8</option>
                <option value="9">White 9</option>

            </select>

            <select name="secondColor" id="secondColor-select" onchange="selectColor2(this)">
                <option value="">--Please choose a secondColor--</option>
                <option value="0">Black 0</option>
                <option value="1">Brown 1</option>
                <option value="2">Red 2</option>
                <option value="3">Orange 3</option>
                <option value="4">Yellow 4</option>
                <option value="5">Green 5</option>
                <option value="6">Blue 6</option>
                <option value="7">Purple 7</option>
                <option value="8">Greys 8</option>
                <option value="9">White 9</option>

            </select>

            <select name="thirdColor" id="thirdColor-select" onchange="selectColor3(this)">
                <option value="">--Please choose a threeColor--</option>
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

            <select name="lastColor" id="lastColor-select" onchange="selectColor4(this)">
                <option value="">--Please choose a lastColor--</option>
                <option value="1">Brown +1%</option>
                <option value="2">Red +2%</option>
                <option value="0.5">Green +0.5%</option>
                <option value="0.25">Blue +0.25%</option>
                <option value="0.1">Purple +0.1%</option>
                <option value="0.05">Greys +0.05%</option>
                <option value="5">Gold +5%</option>
                <option value="10">Silver +10%</option>
            </select>
        </form>
    </div>
    <h2>Result</h2>

    <?php

    if (isset($_POST['firstColor'])) {
        $receivedValue = $_POST['firstColor'];
        echo "<script>document.getElementById('firstColor-select').value=" . $receivedValue . ";document.getElementById('firstColor-select').onchange();console.log('ok1');</script>";
    }

    if (isset($_POST['secondColor'])) {
        $receivedValue = $_POST['secondColor'];

        echo "<script>document.getElementById('secondColor-select').value=" . $receivedValue . ";document.getElementById('secondColor-select').onchange();console.log('ok1');</script>";
    }

    if (isset($_POST['thirdColor'])) {
        $receivedValue = $_POST['thirdColor'];

        echo "<script>document.getElementById('thirdColor-select').value=" . $receivedValue . ";document.getElementById('thirdColor-select').onchange();console.log('ok1');</script>";
    }

    if (isset($_POST['lastColor'])) {
        $receivedValue = $_POST['lastColor'];

        echo "<script>document.getElementById('lastColor-select').value=" . $receivedValue . ";document.getElementById('lastColor-select').onchange();console.log('ok1');</script>";
    }

    if (isset($_POST['firstColor']) and isset($_POST['secondColor']) and isset($_POST['thirdColor']) and isset($_POST['lastColor'])) {

        $first = $_POST['firstColor'];
        $second = $_POST['secondColor'];
        $third = $_POST['thirdColor'];
        $last = $_POST['lastColor'];

        $value = ($first * 10 + $second) * $third;


        echo $value . " Ohms +" . $last . "%";
    } else {
        echo "<p>Choose your colors</p>";
    }
    ?>
</body>

</html>