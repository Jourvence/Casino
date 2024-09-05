light = 1;
function lightMode(){
    if (light){
        light = 0;
        document.getElementById('cssTheme').setAttribute('href', 'css/style2.css')
    }
    else {
        light = 1;
        document.getElementById('cssTheme').setAttribute('href', 'css/style1.css')
    }
}

// This is less shit