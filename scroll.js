let rolledOnce = 0; 
let offset2 = 0; 

// Get random number from php via ajax
function fetchRandomNumber() {
    return fetch('getRandNum.php') 
        .then(response => response.json())
        .then(data => data.randomNumber)
        .catch(error => {
            console.error('Error fetching random number:', error);
            return 0; 
        });
}


function moveEm(usrVal) {
    // usrVal is supplied via ajax

    const container = document.querySelector(".rouletteBoxesContainer");
    const boxes = container.children;

    if (rolledOnce) {
        
        setTransitionTime(0); 
        

        for (let index = 0; index < boxes.length; index++) {
            boxes[index].style.transform = `translateX(+${offset2}px)`;
        }

   
        setTransitionTime(2);
    }

    rolledOnce = 1; 


    for (let index = 0; index < boxes.length; index++) {
        boxes[index].style.transform = `translateX(-${usrVal}px)`;
    }
    

    offset2 = usrVal;
}


// Delete animation timing manipulation so that It works smoothly reverted to starting pos
function setTransitionTime(time) {
  
    const boxes = document.querySelectorAll('.box');
    

    boxes.forEach(box => {
        box.style.transition = `transform ${time}s ease`;
    });
}



// Make the button work
document.getElementById('testButton').addEventListener('click', function () {
    fetchRandomNumber().then(randomNumber => {
        moveEm(randomNumber); 
    });
});


// Everything is cool and stuff, but I already have a number generator, and I need to supply that number that gets generated from the odd and even buttons, and then just generate the offset accordingly
// I missed the actual point of what I needed to do lol