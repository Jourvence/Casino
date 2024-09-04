let rolledOnce = 0;
let offset2 = 0;



function moveEm(usrVal) {
    container = document.querySelector(".rouletteBoxesContainer");
    var boxes = container.children;


   
    // Temporary thing
    usrVal = Math.floor(Math.random() * 2000) + 500;
    if (rolledOnce){
     
        // Now I need to revert the 
        setTransitionTime(0);
        
        for (let index = 0; index < boxes.length; index++) {
            boxes[index].style.transform = `translateX(+${offset2}px)`;
        }
        setTransitionTime(2);
        console.log("now");
    }

    rolledOnce = 1;

   
    for (let index = 0; index < boxes.length; index++) {
        boxes[index].style.transform = `translateX(-${usrVal}px)`;
        offset2 = usrVal;
    }
   
    
}

// Each roll, go to the starting position and calculate offset from there

function setTransitionTime(time) {
    // Select all elements with the class "box"
    const boxes = document.querySelectorAll('.box');
    
    // Loop through each element and set the transition time
    boxes.forEach(box => {
        box.style.transition = `transform ${time}s ease`;
    });
}