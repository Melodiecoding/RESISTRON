function selectColor1(mySelect) {
    const myColor = mySelect.selectedOptions[0].text.split(" ")[0];
    var myDiv = document.getElementById("firstBar", "secondBar", "thirdBar", "lastBar");
    const newClass = myColor + "Bar";
    myDiv.className = "firstColor " || "secondColor " || "thirdColor" || "lastColor "+ newClass;
}