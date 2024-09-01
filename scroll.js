let currentOffset = 0;

function moveEm(usrVal) {
    container = document.querySelector(".rouletteBoxesContainer");
    var boxes = container.children;
    currentOffset += usrVal;
    for (let index = 0; index < boxes.length; index++) {
        boxes[index].style.transform = `translateX(${currentOffset}px)`;
        
    }
}