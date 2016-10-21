/**
 * Created by arthur on 17/10/2016.
 */


function confirmation(idSupr) {
    
    if (confirm("Voulez-vous vraiment supprimer cet Immeuble ?") == true) {
        window.location = "index.php?Controller=Admin&Action=delImmeuble&IdSupr="+ idSupr;
    }
    else {
        window.location = "index.php?Controller=Admin&Action=renderSecureAdmin";
    }
}

