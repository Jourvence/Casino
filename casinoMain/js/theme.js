light = 1;
function lightMode(){
    if (light){
        light = 0;
        document.getElementById('cssTheme').setAttribute('href', 'css/style2.css');
        document.getElementById('moon').setAttribute('src', 'images/MoonLight.png');
        document.getElementById('github').setAttribute('src', 'images/githubLight.png');
    }
    else {
        light = 1;
        document.getElementById('cssTheme').setAttribute('href', 'css/style1.css');
        document.getElementById('moon').setAttribute('src', 'images/moonDark.png');
        document.getElementById('github').setAttribute('src', 'images/githubDark.png');
    }
}

