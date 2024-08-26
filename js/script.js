'use strict';

/* Menu mobile */ 
var icon_bars = document.getElementById('bars');
var icon_close = document.getElementById('close');
var menu = document.getElementById('mobile');
var close = document.getElementById('btn_close');

icon_bars.addEventListener('click', () => {
    menu.classList.add('show');
});

icon_bars.addEventListener('mouseenter', () => {
    icon_bars.classList.add('fa-flip');
});

icon_bars.addEventListener('mouseleave', () => {
    icon_bars.classList.remove('fa-flip');
});

icon_close.addEventListener('click', () => {
    menu.classList.remove('show');
});

icon_close.addEventListener('mouseenter', () => {
    close.classList.add('fa-flip');
});

icon_close.addEventListener('mouseleave', () => {
    close.classList.remove('fa-flip');
});

//Check Url
var access = $('#contatoLink').attr('access');

actualPage();
function actualPage() {
    var url = location.href.split('/'), curPage = url[url.length-1].split();

    if(access == 'granted') {
        $('#contatoLink').css('color', '#eb2d2d');
        $('#contatoLink2').css('color', '#eb2d2d');
        $('html, body').animate({scrollTop: $('.contact_us').offset().top});
    } else {
        $('a[href=' + curPage[0] + ']').css('color', '#eb2d2d');
            
    };
};

function checkAccess() {
    event.preventDefault();

    $('#contatoLink').attr('access', 'granted');
    access = $('#contatoLink').attr('access');
    actualPage();
};