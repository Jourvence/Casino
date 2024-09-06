function loadBoxes() {
    const rouletteNumbers = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11"];
    var theDiv = document.getElementsByClassName("rouletteBoxesContainer")[0];
    // The the amount of times to print the whole roulette numbers array
    for (let i = 0; i < 20; i++) {
        for (let index = 0; index < rouletteNumbers.length; index++) {
                var content = document.createElement("div");
                content.textContent = rouletteNumbers[index];
                content.className = "box";
                theDiv.appendChild(content);
        }
    }
}    