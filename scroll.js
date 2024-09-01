function moveEm() {
    container = document.querySelector(".rouletteBoxesContainer");
    var boxes = container.children;
    for (let index = 0; index < boxes.length; index++) {
        boxes[index].style.transform = "translateX(400px)";
        
    }
}