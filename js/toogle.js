/**
 * Created by arthur on 24/10/2016.
 */

var i = false;

function slideMenu () {

    if (i == false) {
        document.getElementById('menuLink').style.display = 'block';
        i=true;
    }
    else {
        document.getElementById('menuLink').style.display = 'none';
        i=false;
    }
}

$(window).resize(function () {
   if ($(window).width()<=560) {
       document.getElementById('menuLink').style.display = 'none';
       i=false;
   } else {
       document.getElementById('menuLink').style.display = 'inline-block';
   }
});

