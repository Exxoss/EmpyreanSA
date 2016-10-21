/**
 * Created by arthur on 21/10/2016.
 */


var loadFile = function(event) {
    var output = document.getElementById('photo');
    output.src = URL.createObjectURL(event.target.files[0]);
};