let rolledOnce = 0; 
let offset2 = 0; 

// // Get random number from php via ajax
// function fetchRandomNumber() {
//     return fetch('getRandNum.php') 
//         .then(response => response.json())
//         .then(data => data.randomNumber)
//         .catch(error => {
//             console.error('Error fetching random number:', error);
//             return 0; 
//         });
// }


function moveEm(usrVal) {
    // usrVal is supplied via ajax

    const container = document.querySelector(".rouletteBoxesContainer");
    const boxes = container.children;
    usrVal = Number(usrVal);
    transitionTime = Math.floor(Math.random(6) + 3);

    if (rolledOnce) {
        
        setTransitionTime(0); 
        

        for (let index = 0; index < boxes.length; index++) {
            boxes[index].style.transform = `translateX(+${offset2}px)`;
        }

   
        setTransitionTime(transitionTime);
    }

    rolledOnce = 1; 

    usrVal = getOffset(usrVal);


    for (let index = 0; index < boxes.length; index++) {
        boxes[index].style.transform = `translateX(-${usrVal}px)`;
    }
    

    offset2 = usrVal;
    return transitionTime;
}


// Delete animation timing manipulation so that It works smoothly reverted to starting pos
function setTransitionTime(time) {
  
    const boxes = document.querySelectorAll('.box');
    

    boxes.forEach(box => {
        box.style.transition = `transform ${time}s ease`;
    });
}


// This returns the offsets so that It lands on the correct field according to the number chosen by the server
function getOffset(val){
    switch (val){
        case 1:
            return 760;
            // good
        case 2:
            return 1920;
            // good
        case 3:
            return 2700;
            // good
        case 4:
            return 500;
            // good
        case 5:
            return 1640;
            // good
        case 6:
            return 1320;
            // good
        case 7:
            return 3205;
            // good
        case 8:
            return 630;
            // good
        case 9:
            return 290;
            // good
        case 10:
            return 2200;
            // good
        case 11:
            return 2980;
            // good

    }
}

// Make the button work
// document.getElementById('testButton').addEventListener('click', function () {
//     fetchRandomNumber().then(randomNumber => {
//         moveEm(randomNumber); 
//     });
// });

