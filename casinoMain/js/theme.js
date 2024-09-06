dark = 1;
function lightMode(){
    if (dark){
        dark = 0;
        document.getElementById('cssTheme').setAttribute('href', 'css/style1.css');
        document.getElementById('moon').setAttribute('src', 'images/MoonDark.png');
        document.getElementById('github').setAttribute('src', 'images/githubDark.png');
    }
    else {
        dark = 1;
        document.getElementById('cssTheme').setAttribute('href', 'css/style2.css');
        document.getElementById('moon').setAttribute('src', 'images/moonLight.png');
        document.getElementById('github').setAttribute('src', 'images/githubLight.png');
    }
}

