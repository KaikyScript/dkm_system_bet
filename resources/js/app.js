require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.collapsible').collapsible();
    });
