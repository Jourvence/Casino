light = 1;
function lightMode(){
    if (light){
        light = 0;
        document.getElementById('cssTheme').setAttribute('href', 'css/style2.css');
        document.getElementById('bulb').setAttribute('src', 'images/bulbEdited.png');
    }
    else {
        light = 1;
        document.getElementById('cssTheme').setAttribute('href', 'css/style1.css');
        document.getElementById('bulb').setAttribute('src', 'images/bulb.png')
    }
}

