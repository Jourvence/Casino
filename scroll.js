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
    

    if (rolledOnce) {
        
        setTransitionTime(0); 
        

        for (let index = 0; index < boxes.length; index++) {
            boxes[index].style.transform = `translateX(+${offset2}px)`;
        }

   
        setTransitionTime(2);
    }

    rolledOnce = 1; 

    usrVal = getOffset(usrVal);


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
            return 3590;
            // good
        case 8:
            return 630;
            // good
        case 9:
            return 290;
            // good
        case 10:
            return 320;
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


// Everything is cool and stuff, but I already have a number generator, and I need to supply that number that gets generated from the odd and even buttons, and then just generate the offset accordingly
// I missed the actual point of what I needed to do lol
// Also keep in mind that you have 20 rand numbers on the odd and even button and only 12 blocks with nums, so either more numbers on the blocks or a smaller range of nums being generated