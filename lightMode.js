light = 1;
function lightMode(){
    if (light){
        light = 0;
        document.body.style.backgroundColor = '#f8f9fa';
    }
    else {
        light = 1;
        document.body.style.backgroundColor = 'rgb(255, 255, 255)';
    }
}

// This is shit